<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportCityRequest;
use Fintech\MetaData\Http\Requests\IndexCityRequest;
use Fintech\MetaData\Http\Requests\StoreCityRequest;
use Fintech\MetaData\Http\Requests\UpdateCityRequest;
use Fintech\MetaData\Http\Resources\CityCollection;
use Fintech\MetaData\Http\Resources\CityResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class CityController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to city
 *
 * @lrd:end
 */
class CityController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the city resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexCityRequest $request): CityCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $cityPaginate = MetaData::city()->list($inputs);

            return new CityCollection($cityPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new city resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreCityRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $city = MetaData::city()->create($inputs);

            if (!$city) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.city_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'City']),
                'id' => $city->getKey(),
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @LRDparam trashed boolean|nullable
     *
     * @lrd:start
     * Return a specified city resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): CityResource|JsonResponse
    {
        try {

            $city = MetaData::city()->find($id);

            if (!$city) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.city_model'), $id);
            }

            return new CityResource($city);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified city resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateCityRequest $request, string|int $id): JsonResponse
    {
        try {

            $city = MetaData::city()->find($id);

            if (!$city) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.city_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::city()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.city_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'City']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified city resource using id.
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

            $city = MetaData::city()->find($id);

            if (!$city) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.city_model'), $id);
            }

            if (!MetaData::city()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.city_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'City']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified city resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $city = MetaData::city()->find($id, true);

            if (!$city) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.city_model'), $id);
            }

            if (!MetaData::city()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.city_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'City']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the city resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexCityRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $cityPaginate = MetaData::city()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'City']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the city resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return CityCollection|JsonResponse
     */
    public function import(ImportCityRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $cityPaginate = MetaData::city()->list($inputs);

            return new CityCollection($cityPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @LRDparam country_id required|integer|min:1
     * @LRDparam state_id required|integer|min:1
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function dropdown(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $label = 'name';

            $attribute = 'id';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::city()->list($filters)->map(function ($entry) use ($label, $attribute) {
                return [
                    'attribute' => $entry->{$attribute} ?? 'id',
                    'label' => $entry->{$label} ?? 'name',
                ];
            })->toArray();

            return new DropDownCollection($entries);

        } catch (Exception $exception) {
            return $this->failed($exception->getMessage());
        }
    }
}
