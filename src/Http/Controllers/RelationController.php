<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Resources\RelationResource;
use Fintech\MetaData\Http\Resources\RelationCollection;
use Fintech\MetaData\Http\Requests\ImportRelationRequest;
use Fintech\MetaData\Http\Requests\StoreRelationRequest;
use Fintech\MetaData\Http\Requests\UpdateRelationRequest;
use Fintech\MetaData\Http\Requests\IndexRelationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class RelationController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to relation
 * @lrd:end
 *
 */

class RelationController extends Controller
{
    use ApiResponseTrait;

    /**
     * RelationController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @lrd:start
     * Return a listing of the relation resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexRelationRequest $request
     * @return RelationCollection|JsonResponse
     */
    public function index(IndexRelationRequest $request): RelationCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $relationPaginate = \MetaData::relation()->list($inputs);

            return new RelationCollection($relationPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new relation resource in storage.
     * @lrd:end
     *
     * @param StoreRelationRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreRelationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $relation = \MetaData::relation()->create($inputs);

            if (!$relation) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('metadata::messages.resource.created', ['model' => 'Relation']),
                'id' => $relation->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified relation resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return RelationResource|JsonResponse
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): RelationResource|JsonResponse
    {
        try {

            $relation = \MetaData::relation()->read($id);

            if (!$relation) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Relation', 'id' => strval($id)]));
            }

            return new RelationResource($relation);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified relation resource using id.
     * @lrd:end
     *
     * @param UpdateRelationRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateRelationRequest $request, string|int $id): JsonResponse
    {
        try {

            $relation = \MetaData::relation()->read($id);

            if (!$relation) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Relation', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (!\MetaData::relation()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('metadata::messages.resource.updated', ['model' => 'Relation']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified relation resource using id.
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

            $relation = \MetaData::relation()->read($id);

            if (!$relation) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Relation', 'id' => strval($id)]));
            }

            if (!\MetaData::relation()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('metadata::messages.resource.deleted', ['model' => 'Relation']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified relation resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $relation = \MetaData::relation()->read($id, true);

            if (!$relation) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'Relation', 'id' => strval($id)]));
            }

            if (!\MetaData::relation()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('metadata::messages.resource.restored', ['model' => 'Relation']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the relation resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexRelationRequest $request
     * @return JsonResponse
     */
    public function export(IndexRelationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $relationPaginate = \MetaData::relation()->export($inputs);

            return $this->exported(__('metadata::messages.resource.exported', ['model' => 'Relation']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the relation resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportRelationRequest $request
     * @return RelationCollection|JsonResponse
     */
    public function import(ImportRelationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $relationPaginate = \MetaData::relation()->list($inputs);

            return new RelationCollection($relationPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
