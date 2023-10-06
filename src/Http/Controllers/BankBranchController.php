<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
     * @lrd:start
     * Return a listing of the bankBranch resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexBankBranchRequest $request): BankBranchCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranchPaginate = MetaData::bankBranch()->list($inputs);

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
     */
    public function store(StoreBankBranchRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranch = MetaData::bankBranch()->create($inputs);

            if (! $bankBranch) {
                throw (new StoreOperationException)->setModel(config('fintech.metadata.bank_branch_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Bank Branch']),
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
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): BankBranchResource|JsonResponse
    {
        try {

            $bankBranch = MetaData::bankBranch()->find($id);

            if (! $bankBranch) {
                throw (new ModelNotFoundException)->setModel(config('fintech.metadata.bank_branch_model'), $id);
            }

            return new BankBranchResource($bankBranch);

        } catch (ModelNotFoundException $exception) {

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
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBankBranchRequest $request, string|int $id): JsonResponse
    {
        try {

            $bankBranch = MetaData::bankBranch()->find($id);

            if (! $bankBranch) {
                throw (new ModelNotFoundException)->setModel(config('fintech.metadata.bank_branch_model'), $id);
            }

            $inputs = $request->validated();

            if (! MetaData::bankBranch()->update($id, $inputs)) {

                throw (new UpdateOperationException)->setModel(config('fintech.metadata.bank_branch_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Bank Branch']));

        } catch (ModelNotFoundException $exception) {

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
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $bankBranch = MetaData::bankBranch()->find($id);

            if (! $bankBranch) {
                throw (new ModelNotFoundException)->setModel(config('fintech.metadata.bank_branch_model'), $id);
            }

            if (! MetaData::bankBranch()->destroy($id)) {

                throw (new DeleteOperationException)->setModel(config('fintech.metadata.bank_branch_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Bank Branch']));

        } catch (ModelNotFoundException $exception) {

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

            $bankBranch = MetaData::bankBranch()->find($id, true);

            if (! $bankBranch) {
                throw (new ModelNotFoundException)->setModel(config('fintech.metadata.bank_branch_model'), $id);
            }

            if (! MetaData::bankBranch()->restore($id)) {

                throw (new RestoreOperationException)->setModel(config('fintech.metadata.bank_branch_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Bank Branch']));

        } catch (ModelNotFoundException $exception) {

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

            $bankBranchPaginate = MetaData::bankBranch()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Bank Branch']));

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

            $bankBranchPaginate = MetaData::bankBranch()->list($inputs);

            return new BankBranchCollection($bankBranchPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
