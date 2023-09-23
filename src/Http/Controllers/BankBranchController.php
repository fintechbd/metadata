<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Requests\ImportBankBranchRequest;
use Fintech\MetaData\Http\Requests\IndexBankBranchRequest;
use Fintech\MetaData\Http\Requests\StoreBankBranchRequest;
use Fintech\MetaData\Http\Requests\UpdateBankBranchRequest;
use Fintech\MetaData\Http\Resources\BankBranchCollection;
use Fintech\MetaData\Http\Resources\BankBranchResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BankBranchController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to bankBranch
 *
 * @lrd:end
 */
class BankBranchController extends Controller
{
    use ApiResponseTrait;

    /**
     * BankBranchController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @lrd:start
     * Return a listing of the bankBranch resource as collection.
     *
     * ** ```paginate=false``` returns all resource as list not pagination **
     *
     * @lrd:end
     */
    public function index(IndexBankBranchRequest $request): BankBranchCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranchPaginate = \MetaData::bankBranch()->list($inputs);

            return new BankBranchCollection($bankBranchPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new bankBranch resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreBankBranchRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranch = \MetaData::bankBranch()->create($inputs);

            if (! $bankBranch) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('metadata::messages.resource.created', ['model' => 'BankBranch']),
                'id' => $bankBranch->id,
            ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified bankBranch resource found by id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): BankBranchResource|JsonResponse
    {
        try {

            $bankBranch = \MetaData::bankBranch()->read($id);

            if (! $bankBranch) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'BankBranch', 'id' => strval($id)]));
            }

            return new BankBranchResource($bankBranch);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified bankBranch resource using id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBankBranchRequest $request, string|int $id): JsonResponse
    {
        try {

            $bankBranch = \MetaData::bankBranch()->read($id);

            if (! $bankBranch) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'BankBranch', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (! \MetaData::bankBranch()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('metadata::messages.resource.updated', ['model' => 'BankBranch']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified bankBranch resource using id.
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

            $bankBranch = \MetaData::bankBranch()->read($id);

            if (! $bankBranch) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'BankBranch', 'id' => strval($id)]));
            }

            if (! \MetaData::bankBranch()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('metadata::messages.resource.deleted', ['model' => 'BankBranch']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified bankBranch resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $bankBranch = \MetaData::bankBranch()->read($id, true);

            if (! $bankBranch) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'BankBranch', 'id' => strval($id)]));
            }

            if (! \MetaData::bankBranch()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('metadata::messages.resource.restored', ['model' => 'BankBranch']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the bankBranch resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexBankBranchRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranchPaginate = \MetaData::bankBranch()->export($inputs);

            return $this->exported(__('metadata::messages.resource.exported', ['model' => 'BankBranch']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the bankBranch resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return BankBranchCollection|JsonResponse
     */
    public function import(ImportBankBranchRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranchPaginate = \MetaData::bankBranch()->list($inputs);

            return new BankBranchCollection($bankBranchPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
