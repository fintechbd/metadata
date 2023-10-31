<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportRelationRequest;
use Fintech\MetaData\Http\Requests\IndexRelationRequest;
use Fintech\MetaData\Http\Requests\StoreRelationRequest;
use Fintech\MetaData\Http\Requests\UpdateRelationRequest;
use Fintech\MetaData\Http\Resources\RelationCollection;
use Fintech\MetaData\Http\Resources\RelationResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class RelationController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to relation
 *
 * @lrd:end
 */
class RelationController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the relation resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexRelationRequest $request): RelationCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $relationPaginate = MetaData::relation()->list($inputs);

            return new RelationCollection($relationPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new relation resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreRelationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $relation = MetaData::relation()->create($inputs);

            if (!$relation) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.relation_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Relation']),
                'id' => $relation->getKey(),
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @LRDparam trashed boolean|nullable
     *
     * @lrd:start
     * Return a specified relation resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): RelationResource|JsonResponse
    {
        try {

            $relation = MetaData::relation()->find($id);

            if (!$relation) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.relation_model'), $id);
            }

            return new RelationResource($relation);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified relation resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateRelationRequest $request, string|int $id): JsonResponse
    {
        try {

            $relation = MetaData::relation()->find($id);

            if (!$relation) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.relation_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::relation()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.relation_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Relation']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified relation resource using id.
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

            $relation = MetaData::relation()->find($id);

            if (!$relation) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.relation_model'), $id);
            }

            if (!MetaData::relation()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.relation_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Relation']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified relation resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $relation = MetaData::relation()->find($id, true);

            if (!$relation) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.relation_model'), $id);
            }

            if (!MetaData::relation()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.relation_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Relation']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the relation resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexRelationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $relationPaginate = MetaData::relation()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Relation']));

        } catch (Exception $exception) {

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
     * @return RelationCollection|JsonResponse
     */
    public function import(ImportRelationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $relationPaginate = MetaData::relation()->list($inputs);

            return new RelationCollection($relationPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
