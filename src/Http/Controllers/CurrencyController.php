<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\IndexCurrencyRequest;
use Fintech\MetaData\Http\Requests\UpdateCurrencyRequest;
use Fintech\MetaData\Http\Resources\CurrencyCollection;
use Fintech\MetaData\Http\Resources\CurrencyResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class CurrencyController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to Currency
 * @lrd:end
 *
 */
class CurrencyController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the *Currency* resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexCurrencyRequest $request
     * @return CurrencyCollection|JsonResponse
     */
    public function index(IndexCurrencyRequest $request): CurrencyCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $currencyPaginate = MetaData::currency()->list($inputs);

            return new CurrencyCollection($currencyPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified *Currency* resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return CurrencyResource|JsonResponse
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): CurrencyResource|JsonResponse
    {
        try {

            $currency = MetaData::currency()->find($id);

            if (!$currency) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.currency_model'), $id);
            }

            return new CurrencyResource($currency);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified country as multi currency enabled or not.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function toggle(string|int $id): JsonResponse
    {
        try {

            $currency = MetaData::currency()->find($id);

            if (!$currency) {
                throw (new ModelNotFoundException())->setModel('Currency', $id);
            }

            if (empty($currency->currency) || empty($currency->currency_name) || empty($currency->currency_symbol)) {
                throw new Exception(__('metadata::messages.country.currency.field_missing'));
            }

            $inputs['enabled'] = !($currency->country_data['multi_currency_enabled'] ?? false);

            if (!MetaData::currency()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel('Currency', $id);
            }

            return $this->updated(__('metadata::messages.country.status_changed', ['field' => 'Currency']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified *Currency* resource using id.
     * @lrd:end
     *
     * @param UpdateCurrencyRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     */
    public function update(UpdateCurrencyRequest $request, string|int $id): JsonResponse
    {
        try {

            $currency = MetaData::currency()->find($id);

            if (!$currency) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.currency_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::currency()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.currency_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Currency']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function dropdown(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $filters['enabled'] = true;

            $label = 'currency_name';

            $attribute = 'currency';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::currency()->list($filters)->map(function ($entry) use ($label, $attribute) {

                return [
                    'attribute' => $entry->{$attribute} ?? 'USD',
                    'label' => $entry->{$label} ?? 'US Dollar',
                    'logo_svg' => $entry->getFirstMediaUrl('logo_svg'),
                    'logo_png' => $entry->getFirstMediaUrl('logo_png'),
                ];
            })->toArray();

            return new DropDownCollection($entries);

        } catch (Exception $exception) {
            return $this->failed($exception->getMessage());
        }
    }

}
