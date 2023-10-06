<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportCountryRequest;
use Fintech\MetaData\Http\Requests\IndexCountryRequest;
use Fintech\MetaData\Http\Requests\StoreCountryRequest;
use Fintech\MetaData\Http\Requests\UpdateCountryRequest;
use Fintech\MetaData\Http\Resources\CountryCollection;
use Fintech\MetaData\Http\Resources\CountryResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class CountryController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to country
 *
 * @lrd:end
 */
class CountryController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the country resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexCountryRequest $request): CountryCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = MetaData::country()->list($inputs);

            return new CountryCollection($countryPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new country resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $country = MetaData::country()->create($inputs);

            if (!$country) {
                throw (new StoreOperationException)->setModel(config('fintech.metadata.country_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Country']),
                'id' => $country->id,
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified country resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): CountryResource|JsonResponse
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException)->setModel(config('fintech.metadata.country_model'), $id);
            }

            return new CountryResource($country);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified country resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateCountryRequest $request, string|int $id): JsonResponse
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException)->setModel(config('fintech.metadata.country_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::country()->update($id, $inputs)) {

                throw (new UpdateOperationException)->setModel(config('fintech.metadata.country_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Country']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified country resource using id.
     *
     * @lrd:end
     *
     * @return JsonResponse
     *
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $country = MetaData::country()->find($id);

            if (!$country) {
                throw (new ModelNotFoundException)->setModel(config('fintech.metadata.country_model'), $id);
            }

            if (!MetaData::country()->destroy($id)) {

                throw (new DeleteOperationException)->setModel(config('fintech.metadata.country_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Country']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified country resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $country = MetaData::country()->find($id, true);

            if (!$country) {
                throw (new ModelNotFoundException)->setModel(config('fintech.metadata.country_model'), $id);
            }

            if (!MetaData::country()->restore($id)) {

                throw (new RestoreOperationException)->setModel(config('fintech.metadata.country_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Country']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the country resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = MetaData::country()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Country']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the country resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return CountryCollection|JsonResponse
     */
    public function import(ImportCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = MetaData::country()->list($inputs);

            return new CountryCollection($countryPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
