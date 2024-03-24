<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\MetaData\Http\Requests\ImportIdDocTypeRequest;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\IndexIdDocTypeRequest;
use Fintech\MetaData\Http\Requests\StoreIdDocTypeRequest;
use Fintech\MetaData\Http\Requests\UpdateIdDocTypeRequest;
use Fintech\MetaData\Http\Resources\IdDocTypeCollection;
use Fintech\MetaData\Http\Resources\IdDocTypeResource;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\Core\Traits\ApiResponseTrait;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class IdDocTypeController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to IdDocType
 * @lrd:end
 *
 */
class IdDocTypeController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the *IdDocType* resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexIdDocTypeRequest $request
     * @return IdDocTypeCollection|JsonResponse
     */
    public function index(IndexIdDocTypeRequest $request): IdDocTypeCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $idDocTypePaginate = MetaData::idDocType()->list($inputs);

            return new IdDocTypeCollection($idDocTypePaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new *IdDocType* resource in storage.
     * @lrd:end
     *
     * @param StoreIdDocTypeRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreIdDocTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $idDocType = MetaData::idDocType()->create($inputs);

            if (!$idDocType) {
                throw (new StoreOperationException())->setModel(config('fintech.auth.id_doc_type_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Id Doc Type']),
                'id' => $idDocType->getKey()
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified *IdDocType* resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return IdDocTypeResource|JsonResponse
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): IdDocTypeResource|JsonResponse
    {
        try {

            $idDocType = MetaData::idDocType()->find($id);

            if (!$idDocType) {
                throw (new ModelNotFoundException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            return new IdDocTypeResource($idDocType);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified *IdDocType* resource using id.
     * @lrd:end
     *
     * @param UpdateIdDocTypeRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateIdDocTypeRequest $request, string|int $id): JsonResponse
    {
        try {

            $idDocType = MetaData::idDocType()->find($id);

            if (!$idDocType) {
                throw (new ModelNotFoundException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::idDocType()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Id Doc Type']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified *IdDocType* resource using id.
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id): JsonResponse
    {
        try {

            $idDocType = MetaData::idDocType()->find($id);

            if (!$idDocType) {
                throw (new ModelNotFoundException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            if (!MetaData::idDocType()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Id Doc Type']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified *IdDocType* resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id): JsonResponse
    {
        try {

            $idDocType = MetaData::idDocType()->find($id, true);

            if (!$idDocType) {
                throw (new ModelNotFoundException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            if (!MetaData::idDocType()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.auth.id_doc_type_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Id Doc Type']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *IdDocType* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexIdDocTypeRequest $request
     * @return JsonResponse
     */
    public function export(IndexIdDocTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $idDocTypePaginate = MetaData::idDocType()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Id Doc Type']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *IdDocType* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportIdDocTypeRequest $request
     * @return IdDocTypeCollection|JsonResponse
     */
    public function import(ImportIdDocTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $idDocTypePaginate = MetaData::idDocType()->list($inputs);

            return new IdDocTypeCollection($idDocTypePaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function dropdown(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            //TODO adjust right country id on database for id doc type
            if (isset($filters['country_id'])) {
                unset($filters['country_id']);
            }

            $label = 'name';

            $attribute = 'code';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::idDocType()->list($filters)->map(function ($entry) use ($label, $attribute) {
                return [
                    'label' => $entry->{$label} ?? 'name',
                    'attribute' => $entry->{$attribute} ?? 'id',
                    'sides' => $entry->sides ?? 1,
                    'id' => $entry->getKey() ?? null
                ];
            });

            return new DropDownCollection($entries);

        } catch (Exception $exception) {
            return $this->failed($exception->getMessage());
        }
    }
}
