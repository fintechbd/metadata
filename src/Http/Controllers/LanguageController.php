<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Resources\LanguageResource;
use Fintech\MetaData\Http\Resources\LanguageCollection;
use Fintech\MetaData\Http\Requests\ImportLanguageRequest;
use Fintech\MetaData\Http\Requests\StoreLanguageRequest;
use Fintech\MetaData\Http\Requests\UpdateLanguageRequest;
use Fintech\MetaData\Http\Requests\IndexLanguageRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class LanguageController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to Language
 * @lrd:end
 *
 */

class LanguageController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the *Language* resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexLanguageRequest $request
     * @return LanguageCollection|JsonResponse
     */
    public function index(IndexLanguageRequest $request): LanguageCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $languagePaginate = MetaData::language()->list($inputs);

            return new LanguageCollection($languagePaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new *Language* resource in storage.
     * @lrd:end
     *
     * @param StoreLanguageRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreLanguageRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $language = MetaData::language()->create($inputs);

            if (!$language) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.language_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Language']),
                'id' => $language->id
             ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified *Language* resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return LanguageResource|JsonResponse
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): LanguageResource|JsonResponse
    {
        try {

            $language = MetaData::language()->find($id);

            if (!$language) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.language_model'), $id);
            }

            return new LanguageResource($language);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified *Language* resource using id.
     * @lrd:end
     *
     * @param UpdateLanguageRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateLanguageRequest $request, string|int $id): JsonResponse
    {
        try {

            $language = MetaData::language()->find($id);

            if (!$language) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.language_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::language()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.language_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Language']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified *Language* resource using id.
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $language = MetaData::language()->find($id);

            if (!$language) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.language_model'), $id);
            }

            if (!MetaData::language()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.language_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Language']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified *Language* resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $language = MetaData::language()->find($id, true);

            if (!$language) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.language_model'), $id);
            }

            if (!MetaData::language()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.language_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Language']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *Language* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexLanguageRequest $request
     * @return JsonResponse
     */
    public function export(IndexLanguageRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $languagePaginate = MetaData::language()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Language']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *Language* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportLanguageRequest $request
     * @return LanguageCollection|JsonResponse
     */
    public function import(ImportLanguageRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $languagePaginate = MetaData::language()->list($inputs);

            return new LanguageCollection($languagePaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
