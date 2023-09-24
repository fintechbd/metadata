<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Requests\ImportBankRequest;
use Fintech\MetaData\Http\Requests\IndexBankRequest;
use Fintech\MetaData\Http\Requests\StoreBankRequest;
use Fintech\MetaData\Http\Requests\UpdateBankRequest;
use Fintech\MetaData\Http\Resources\BankCollection;
use Fintech\MetaData\Http\Resources\BankResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BankController
 * @package Fintech\MetaData\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to bank
 * @lrd:end
 *
 */

class BankController extends Controller
{
    use ApiResponseTrait;

    /**
     * BankController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @lrd:start
     * Return a listing of the bank resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexBankRequest $request
     * @return BankCollection|JsonResponse
     */
    public function index(IndexBankRequest $request): BankCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankPaginate = \MetaData::bank()->list($inputs);

            return new BankCollection($bankPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new bank resource in storage.
     * @lrd:end
     *
     * @param StoreBankRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreBankRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bank = \MetaData::bank()->create($inputs);

            if (!$bank) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Bank']),
                'id' => $bank->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified bank resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return BankResource|JsonResponse
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): BankResource|JsonResponse
    {
        try {

            $bank = \MetaData::bank()->read($id);

            if (!$bank) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'Bank', 'id' => strval($id)]));
            }

            return new BankResource($bank);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified bank resource using id.
     * @lrd:end
     *
     * @param UpdateBankRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBankRequest $request, string|int $id): JsonResponse
    {
        try {

            $bank = \MetaData::bank()->read($id);

            if (!$bank) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'Bank', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (!\MetaData::bank()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Bank']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified bank resource using id.
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

            $bank = \MetaData::bank()->read($id);

            if (!$bank) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'Bank', 'id' => strval($id)]));
            }

            if (!\MetaData::bank()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Bank']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified bank resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $bank = \MetaData::bank()->read($id, true);

            if (!$bank) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'Bank', 'id' => strval($id)]));
            }

            if (!\MetaData::bank()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Bank']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the bank resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexBankRequest $request
     * @return JsonResponse
     */
    public function export(IndexBankRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankPaginate = \MetaData::bank()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Bank']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the bank resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportBankRequest $request
     * @return BankCollection|JsonResponse
     */
    public function import(ImportBankRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankPaginate = \MetaData::bank()->list($inputs);

            return new BankCollection($bankPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
