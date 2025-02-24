<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportCatalogRequest;
use Fintech\MetaData\Http\Requests\IndexCatalogRequest;
use Fintech\MetaData\Http\Requests\StoreCatalogRequest;
use Fintech\MetaData\Http\Requests\UpdateCatalogRequest;
use Fintech\MetaData\Http\Resources\CatalogCollection;
use Fintech\MetaData\Http\Resources\CatalogResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class CatalogController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to Catalog
 *
 * @lrd:end
 */
class CatalogController extends Controller
{
    /**
     * @lrd:start
     * Return a listing of the *Catalog* resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexCatalogRequest $request): CatalogCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $catalogPaginate = MetaData::catalog()->list($inputs);

            return new CatalogCollection($catalogPaginate);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Create a new *Catalog* resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreCatalogRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $catalog = MetaData::catalog()->create($inputs);

            if (! $catalog) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.catalog_model'));
            }

            return response()->created([
                'message' => __('core::messages.resource.created', ['model' => 'Catalog']),
                'id' => $catalog->id,
            ]);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Return a specified *Catalog* resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): CatalogResource|JsonResponse
    {
        try {

            $catalog = MetaData::catalog()->find($id);

            if (! $catalog) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.catalog_model'), $id);
            }

            return new CatalogResource($catalog);

        }  catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Update a specified *Catalog* resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateCatalogRequest $request, string|int $id): JsonResponse
    {
        try {

            $catalog = MetaData::catalog()->find($id);

            if (! $catalog) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.catalog_model'), $id);
            }

            $inputs = $request->validated();

            if (! MetaData::catalog()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.catalog_model'), $id);
            }

            return response()->updated(__('core::messages.resource.updated', ['model' => 'Catalog']));

        }  catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified *Catalog* resource using id.
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

            $catalog = MetaData::catalog()->find($id);

            if (! $catalog) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.catalog_model'), $id);
            }

            if (! MetaData::catalog()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.catalog_model'), $id);
            }

            return response()->deleted(__('core::messages.resource.deleted', ['model' => 'Catalog']));

        }  catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Restore the specified *Catalog* resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $catalog = MetaData::catalog()->find($id, true);

            if (! $catalog) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.catalog_model'), $id);
            }

            if (! MetaData::catalog()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.catalog_model'), $id);
            }

            return response()->restored(__('core::messages.resource.restored', ['model' => 'Catalog']));

        }  catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *Catalog* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexCatalogRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $catalogPaginate = MetaData::catalog()->export($inputs);

            return response()->exported(__('core::messages.resource.exported', ['model' => 'Catalog']));

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *Catalog* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return CatalogCollection|JsonResponse
     */
    public function import(ImportCatalogRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $catalogPaginate = MetaData::catalog()->list($inputs);

            return new CatalogCollection($catalogPaginate);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }
}
