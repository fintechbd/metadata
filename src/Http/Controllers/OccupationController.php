<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Resources\OccupationResource;
use Fintech\MetaData\Http\Resources\OccupationCollection;
use Fintech\MetaData\Http\Requests\ImportOccupationRequest;
use Fintech\MetaData\Http\Requests\StoreOccupationRequest;
use Fintech\MetaData\Http\Requests\UpdateOccupationRequest;
use Fintech\MetaData\Http\Requests\IndexOccupationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class OccupationController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to occupation
 * @lrd:end
 *
 */

class OccupationController extends Controller
{
    use ApiResponseTrait;

    /**
     * OccupationController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @lrd:start
     * Return a listing of the occupation resource as collection.
     *
     * ** ```paginate=false``` returns all resource as list not pagination **
     * @lrd:end
     *
     * @param IndexOccupationRequest $request
     * @return OccupationCollection|JsonResponse
     */
    public function index(IndexOccupationRequest $request): OccupationCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $occupationPaginate = \MetaData::occupation()->list($inputs);

            return new OccupationCollection($occupationPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new occupation resource in storage.
     * @lrd:end
     *
     * @param StoreOccupationRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreOccupationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $occupation = \MetaData::occupation()->create($inputs);

            if (!$occupation) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('metadata::messages.resource.created', ['model' => 'Occupation']),
                'id' => $occupation->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified occupation resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return OccupationResource|JsonResponse
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): OccupationResource|JsonResponse
    {
        try {

            $occupation = \MetaData::occupation()->read($id);

            if (!$occupation) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Occupation', 'id' => strval($id)]));
            }

            return new OccupationResource($occupation);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified occupation resource using id.
     * @lrd:end
     *
     * @param UpdateOccupationRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateOccupationRequest $request, string|int $id): JsonResponse
    {
        try {

            $occupation = \MetaData::occupation()->read($id);

            if (!$occupation) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Occupation', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (!\MetaData::occupation()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('metadata::messages.resource.updated', ['model' => 'Occupation']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified occupation resource using id.
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

            $occupation = \MetaData::occupation()->read($id);

            if (!$occupation) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Occupation', 'id' => strval($id)]));
            }

            if (!\MetaData::occupation()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('metadata::messages.resource.deleted', ['model' => 'Occupation']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified occupation resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $occupation = \MetaData::occupation()->read($id, true);

            if (!$occupation) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Occupation', 'id' => strval($id)]));
            }

            if (!\MetaData::occupation()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('metadata::messages.resource.restored', ['model' => 'Occupation']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the occupation resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexOccupationRequest $request
     * @return JsonResponse
     */
    public function export(IndexOccupationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $occupationPaginate = \MetaData::occupation()->export($inputs);

            return $this->exported(__('metadata::messages.resource.exported', ['model' => 'Occupation']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the occupation resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportOccupationRequest $request
     * @return OccupationCollection|JsonResponse
     */
    public function import(ImportOccupationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $occupationPaginate = \MetaData::occupation()->list($inputs);

            return new OccupationCollection($occupationPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
