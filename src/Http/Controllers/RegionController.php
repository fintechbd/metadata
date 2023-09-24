<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Requests\ImportRegionRequest;
use Fintech\MetaData\Http\Requests\IndexRegionRequest;
use Fintech\MetaData\Http\Requests\StoreRegionRequest;
use Fintech\MetaData\Http\Requests\UpdateRegionRequest;
use Fintech\MetaData\Http\Resources\RegionCollection;
use Fintech\MetaData\Http\Resources\RegionResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class RegionController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to region
 *
 * @lrd:end
 */
class RegionController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the region resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexRegionRequest $request): RegionCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $regionPaginate = \MetaData::region()->list($inputs);

            return new RegionCollection($regionPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new region resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreRegionRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $region = \MetaData::region()->create($inputs);

            if (! $region) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Region']),
                'id' => $region->id,
            ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified region resource found by id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): RegionResource|JsonResponse
    {
        try {

            $region = \MetaData::region()->read($id);

            if (! $region) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'Region', 'id' => strval($id)]));
            }

            return new RegionResource($region);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified region resource using id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateRegionRequest $request, string|int $id): JsonResponse
    {
        try {

            $region = \MetaData::region()->read($id);

            if (! $region) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'Region', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (! \MetaData::region()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Region']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified region resource using id.
     *
     * @lrd:end
     *
     * @return JsonResponse
     *
     * @throws ResourceNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $region = \MetaData::region()->read($id);

            if (! $region) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'Region', 'id' => strval($id)]));
            }

            if (! \MetaData::region()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Region']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified region resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $region = \MetaData::region()->read($id, true);

            if (! $region) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'Region', 'id' => strval($id)]));
            }

            if (! \MetaData::region()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Region']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the region resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexRegionRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $regionPaginate = \MetaData::region()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Region']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the region resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return RegionCollection|JsonResponse
     */
    public function import(ImportRegionRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $regionPaginate = \MetaData::region()->list($inputs);

            return new RegionCollection($regionPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
