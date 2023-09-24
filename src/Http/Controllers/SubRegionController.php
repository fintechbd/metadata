<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportSubRegionRequest;
use Fintech\MetaData\Http\Requests\IndexSubRegionRequest;
use Fintech\MetaData\Http\Requests\StoreSubRegionRequest;
use Fintech\MetaData\Http\Requests\UpdateSubRegionRequest;
use Fintech\MetaData\Http\Resources\SubRegionCollection;
use Fintech\MetaData\Http\Resources\SubRegionResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class SubRegionController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to subRegion
 * @lrd:end
 *
 */

class SubRegionController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the subRegion resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexSubRegionRequest $request
     * @return SubRegionCollection|JsonResponse
     */
    public function index(IndexSubRegionRequest $request): SubRegionCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $subRegionPaginate = MetaData::subregion()->list($inputs);

            return new SubRegionCollection($subRegionPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new subRegion resource in storage.
     * @lrd:end
     *
     * @param StoreSubRegionRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreSubRegionRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $subRegion = \MetaData::subregion()->create($inputs);

            if (!$subRegion) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'SubRegion']),
                'id' => $subRegion->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified subRegion resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return SubRegionResource|JsonResponse
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): SubRegionResource|JsonResponse
    {
        try {

            $subRegion = \MetaData::subregion()->read($id);

            if (!$subRegion) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'SubRegion', 'id' => strval($id)]));
            }

            return new SubRegionResource($subRegion);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified subRegion resource using id.
     * @lrd:end
     *
     * @param UpdateSubRegionRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateSubRegionRequest $request, string|int $id): JsonResponse
    {
        try {

            $subRegion = \MetaData::subregion()->read($id);

            if (!$subRegion) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'SubRegion', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (!\MetaData::subregion()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'SubRegion']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified subRegion resource using id.
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

            $subRegion = \MetaData::subregion()->read($id);

            if (!$subRegion) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'SubRegion', 'id' => strval($id)]));
            }

            if (!\MetaData::subregion()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'SubRegion']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified subRegion resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $subRegion = \MetaData::subregion()->read($id, true);

            if (!$subRegion) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'SubRegion', 'id' => strval($id)]));
            }

            if (!\MetaData::subregion()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'SubRegion']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the subRegion resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexSubRegionRequest $request
     * @return JsonResponse
     */
    public function export(IndexSubRegionRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $subRegionPaginate = \MetaData::subregion()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'SubRegion']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the subRegion resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportSubRegionRequest $request
     * @return SubRegionCollection|JsonResponse
     */
    public function import(ImportSubRegionRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $subRegionPaginate = \MetaData::subregion()->list($inputs);

            return new SubRegionCollection($subRegionPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
