<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Resources\CountryResource;
use Fintech\MetaData\Http\Resources\CountryCollection;
use Fintech\MetaData\Http\Requests\ImportCountryRequest;
use Fintech\MetaData\Http\Requests\StoreCountryRequest;
use Fintech\MetaData\Http\Requests\UpdateCountryRequest;
use Fintech\MetaData\Http\Requests\IndexCountryRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class CountryController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to country
 * @lrd:end
 *
 */

class CountryController extends Controller
{
    use ApiResponseTrait;

    /**
     * CountryController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @lrd:start
     * Return a listing of the country resource as collection.
     *
     * ** ```paginate=false``` returns all resource as list not pagination **
     * @lrd:end
     *
     * @param IndexCountryRequest $request
     * @return CountryCollection|JsonResponse
     */
    public function index(IndexCountryRequest $request): CountryCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = \MetaData::country()->list($inputs);

            return new CountryCollection($countryPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new country resource in storage.
     * @lrd:end
     *
     * @param StoreCountryRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $country = \MetaData::country()->create($inputs);

            if (!$country) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('metadata::messages.resource.created', ['model' => 'Country']),
                'id' => $country->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified country resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return CountryResource|JsonResponse
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): CountryResource|JsonResponse
    {
        try {

            $country = \MetaData::country()->read($id);

            if (!$country) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Country', 'id' => strval($id)]));
            }

            return new CountryResource($country);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified country resource using id.
     * @lrd:end
     *
     * @param UpdateCountryRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateCountryRequest $request, string|int $id): JsonResponse
    {
        try {

            $country = \MetaData::country()->read($id);

            if (!$country) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Country', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (!\MetaData::country()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('metadata::messages.resource.updated', ['model' => 'Country']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified country resource using id.
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

            $country = \MetaData::country()->read($id);

            if (!$country) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Country', 'id' => strval($id)]));
            }

            if (!\MetaData::country()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('metadata::messages.resource.deleted', ['model' => 'Country']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified country resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $country = \MetaData::country()->read($id, true);

            if (!$country) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Country', 'id' => strval($id)]));
            }

            if (!\MetaData::country()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('metadata::messages.resource.restored', ['model' => 'Country']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

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
     * @param IndexCountryRequest $request
     * @return JsonResponse
     */
    public function export(IndexCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = \MetaData::country()->export($inputs);

            return $this->exported(__('metadata::messages.resource.exported', ['model' => 'Country']));

        } catch (\Exception $exception) {

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
     * @param ImportCountryRequest $request
     * @return CountryCollection|JsonResponse
     */
    public function import(ImportCountryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $countryPaginate = \MetaData::country()->list($inputs);

            return new CountryCollection($countryPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
