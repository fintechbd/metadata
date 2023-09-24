<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Requests\ImportCityRequest;
use Fintech\MetaData\Http\Requests\IndexCityRequest;
use Fintech\MetaData\Http\Requests\StoreCityRequest;
use Fintech\MetaData\Http\Requests\UpdateCityRequest;
use Fintech\MetaData\Http\Resources\CityCollection;
use Fintech\MetaData\Http\Resources\CityResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class CityController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to city
 * @lrd:end
 *
 */

class CityController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the city resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexCityRequest $request
     * @return CityCollection|JsonResponse
     */
    public function index(IndexCityRequest $request): CityCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $cityPaginate = \MetaData::city()->list($inputs);

            return new CityCollection($cityPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new city resource in storage.
     * @lrd:end
     *
     * @param StoreCityRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreCityRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $city = \MetaData::city()->create($inputs);

            if (!$city) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'City']),
                'id' => $city->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified city resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return CityResource|JsonResponse
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): CityResource|JsonResponse
    {
        try {

            $city = \MetaData::city()->read($id);

            if (!$city) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'City', 'id' => strval($id)]));
            }

            return new CityResource($city);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified city resource using id.
     * @lrd:end
     *
     * @param UpdateCityRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateCityRequest $request, string|int $id): JsonResponse
    {
        try {

            $city = \MetaData::city()->read($id);

            if (!$city) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'City', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (!\MetaData::city()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'City']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified city resource using id.
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     * @throws ResourceNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $city = \MetaData::city()->read($id);

            if (!$city) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'City', 'id' => strval($id)]));
            }

            if (!\MetaData::city()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'City']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified city resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $city = \MetaData::city()->read($id, true);

            if (!$city) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'City', 'id' => strval($id)]));
            }

            if (!\MetaData::city()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'City']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

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
     * @param IndexCityRequest $request
     * @return JsonResponse
     */
    public function export(IndexCityRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $cityPaginate = \MetaData::city()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'City']));

        } catch (\Exception $exception) {

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
     * @param ImportCityRequest $request
     * @return CityCollection|JsonResponse
     */
    public function import(ImportCityRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $cityPaginate = \MetaData::city()->list($inputs);

            return new CityCollection($cityPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
