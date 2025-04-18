<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportIdDocTypeRequest;
use Fintech\MetaData\Http\Requests\IndexIdDocTypeRequest;
use Fintech\MetaData\Http\Requests\StoreIdDocTypeRequest;
use Fintech\MetaData\Http\Requests\UpdateIdDocTypeRequest;
use Fintech\MetaData\Http\Resources\IdDocTypeCollection;
use Fintech\MetaData\Http\Resources\IdDocTypeResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class IdDocTypeController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to IdDocType
 *
 * @lrd:end
 */
class IdDocTypeController extends Controller
{
    /**
     * @lrd:start
     * Return a listing of the *IdDocType* resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexIdDocTypeRequest $request): IdDocTypeCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $idDocTypePaginate = MetaData::idDocType()->list($inputs);

            return new IdDocTypeCollection($idDocTypePaginate);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Create a new *IdDocType* resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreIdDocTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $idDocType = MetaData::idDocType()->create($inputs);

            if (! $idDocType) {
                throw (new StoreOperationException())->setModel(config('fintech.auth.id_doc_type_model'));
            }

            return response()->created([
                'message' => __('core::messages.resource.created', ['model' => 'Id Doc Type']),
                'id' => $idDocType->getKey(),
            ]);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Return a specified *IdDocType* resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): IdDocTypeResource|JsonResponse
    {
        try {

            $idDocType = MetaData::idDocType()->find($id);

            if (! $idDocType) {
                throw (new ModelNotFoundException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            return new IdDocTypeResource($idDocType);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Update a specified *IdDocType* resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateIdDocTypeRequest $request, string|int $id): JsonResponse
    {
        try {

            $idDocType = MetaData::idDocType()->find($id);

            if (! $idDocType) {
                throw (new ModelNotFoundException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            $inputs = $request->validated();

            if (! MetaData::idDocType()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            return response()->updated(__('core::messages.resource.updated', ['model' => 'Id Doc Type']));

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified *IdDocType* resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id): JsonResponse
    {
        try {

            $idDocType = MetaData::idDocType()->find($id);

            if (! $idDocType) {
                throw (new ModelNotFoundException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            if (! MetaData::idDocType()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            return response()->deleted(__('core::messages.resource.deleted', ['model' => 'Id Doc Type']));

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Restore the specified *IdDocType* resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     */
    public function restore(string|int $id): JsonResponse
    {
        try {

            $idDocType = MetaData::idDocType()->find($id, true);

            if (! $idDocType) {
                throw (new ModelNotFoundException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            if (! MetaData::idDocType()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            return response()->restored(__('core::messages.resource.restored', ['model' => 'Id Doc Type']));

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *IdDocType* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexIdDocTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $idDocTypePaginate = MetaData::idDocType()->export($inputs);

            return response()->exported(__('core::messages.resource.exported', ['model' => 'Id Doc Type']));

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *IdDocType* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return IdDocTypeCollection|JsonResponse
     */
    public function import(ImportIdDocTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $idDocTypePaginate = MetaData::idDocType()->list($inputs);

            return new IdDocTypeCollection($idDocTypePaginate);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }
}
