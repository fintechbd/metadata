<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportFundSourceRequest;
use Fintech\MetaData\Http\Requests\IndexFundSourceRequest;
use Fintech\MetaData\Http\Requests\StoreFundSourceRequest;
use Fintech\MetaData\Http\Requests\UpdateFundSourceRequest;
use Fintech\MetaData\Http\Resources\FundSourceCollection;
use Fintech\MetaData\Http\Resources\FundSourceResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class FundSourceController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to fundSource
 *
 * @lrd:end
 */
class FundSourceController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the fundSource resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexFundSourceRequest $request): FundSourceCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $fundSourcePaginate = MetaData::fundSource()->list($inputs);

            return new FundSourceCollection($fundSourcePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new fundSource resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreFundSourceRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $fundSource = MetaData::fundSource()->create($inputs);

            if (!$fundSource) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.fund_source_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Source of Fund']),
                'id' => $fundSource->getKey(),
            ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @LRDparam trashed boolean|nullable
     *
     * @lrd:start
     * Return a specified fundSource resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): FundSourceResource|JsonResponse
    {
        try {

            $fundSource = MetaData::fundSource()->find($id);

            if (!$fundSource) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.fund_source_model'), $id);
            }

            return new FundSourceResource($fundSource);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified fundSource resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateFundSourceRequest $request, string|int $id): JsonResponse
    {
        try {

            $fundSource = MetaData::fundSource()->find($id);

            if (!$fundSource) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.fund_source_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::fundSource()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.fund_source_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Source of Fund']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified fundSource resource using id.
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

            $fundSource = MetaData::fundSource()->find($id);

            if (!$fundSource) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.fund_source_model'), $id);
            }

            if (!MetaData::fundSource()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.fund_source_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Source of Fund']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified fundSource resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $fundSource = MetaData::fundSource()->find($id, true);

            if (!$fundSource) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.fund_source_model'), $id);
            }

            if (!MetaData::fundSource()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.fund_source_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Source of Fund']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the fundSource resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexFundSourceRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $fundSourcePaginate = MetaData::fundSource()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Source of Fund']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the fundSource resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return FundSourceCollection|JsonResponse
     */
    public function import(ImportFundSourceRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $fundSourcePaginate = MetaData::fundSource()->list($inputs);

            return new FundSourceCollection($fundSourcePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
