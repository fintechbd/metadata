<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Requests\ImportFundSourceRequest;
use Fintech\MetaData\Http\Requests\IndexFundSourceRequest;
use Fintech\MetaData\Http\Requests\StoreFundSourceRequest;
use Fintech\MetaData\Http\Requests\UpdateFundSourceRequest;
use Fintech\MetaData\Http\Resources\FundSourceCollection;
use Fintech\MetaData\Http\Resources\FundSourceResource;
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
     * FundSourceController constructor.
     */
    public function __construct()
    {

    }

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

            $fundSourcePaginate = \MetaData::fundSource()->list($inputs);

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

            $fundSource = \MetaData::fundSource()->create($inputs);

            if (! $fundSource) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('metadata::messages.resource.created', ['model' => 'FundSource']),
                'id' => $fundSource->id,
            ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified fundSource resource found by id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): FundSourceResource|JsonResponse
    {
        try {

            $fundSource = \MetaData::fundSource()->read($id);

            if (! $fundSource) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'FundSource', 'id' => strval($id)]));
            }

            return new FundSourceResource($fundSource);

        } catch (ResourceNotFoundException $exception) {

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
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateFundSourceRequest $request, string|int $id): JsonResponse
    {
        try {

            $fundSource = \MetaData::fundSource()->read($id);

            if (! $fundSource) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'FundSource', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (! \MetaData::fundSource()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('metadata::messages.resource.updated', ['model' => 'FundSource']));

        } catch (ResourceNotFoundException $exception) {

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
     * @throws ResourceNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $fundSource = \MetaData::fundSource()->read($id);

            if (! $fundSource) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'FundSource', 'id' => strval($id)]));
            }

            if (! \MetaData::fundSource()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('metadata::messages.resource.deleted', ['model' => 'FundSource']));

        } catch (ResourceNotFoundException $exception) {

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

            $fundSource = \MetaData::fundSource()->read($id, true);

            if (! $fundSource) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'FundSource', 'id' => strval($id)]));
            }

            if (! \MetaData::fundSource()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('metadata::messages.resource.restored', ['model' => 'FundSource']));

        } catch (ResourceNotFoundException $exception) {

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

            $fundSourcePaginate = \MetaData::fundSource()->export($inputs);

            return $this->exported(__('metadata::messages.resource.exported', ['model' => 'FundSource']));

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

            $fundSourcePaginate = \MetaData::fundSource()->list($inputs);

            return new FundSourceCollection($fundSourcePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
