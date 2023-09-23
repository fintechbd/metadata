<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Requests\ImportRemittancePurposeRequest;
use Fintech\MetaData\Http\Requests\IndexRemittancePurposeRequest;
use Fintech\MetaData\Http\Requests\StoreRemittancePurposeRequest;
use Fintech\MetaData\Http\Requests\UpdateRemittancePurposeRequest;
use Fintech\MetaData\Http\Resources\RemittancePurposeCollection;
use Fintech\MetaData\Http\Resources\RemittancePurposeResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class RemittancePurposeController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to remittancePurpose
 *
 * @lrd:end
 */
class RemittancePurposeController extends Controller
{
    use ApiResponseTrait;

    /**
     * RemittancePurposeController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @lrd:start
     * Return a listing of the remittancePurpose resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexRemittancePurposeRequest $request): RemittancePurposeCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $remittancePurposePaginate = \MetaData::remittancePurpose()->list($inputs);

            return new RemittancePurposeCollection($remittancePurposePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new remittancePurpose resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreRemittancePurposeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $remittancePurpose = \MetaData::remittancePurpose()->create($inputs);

            if (! $remittancePurpose) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('metadata::messages.resource.created', ['model' => 'RemittancePurpose']),
                'id' => $remittancePurpose->id,
            ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified remittancePurpose resource found by id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): RemittancePurposeResource|JsonResponse
    {
        try {

            $remittancePurpose = \MetaData::remittancePurpose()->read($id);

            if (! $remittancePurpose) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'RemittancePurpose', 'id' => strval($id)]));
            }

            return new RemittancePurposeResource($remittancePurpose);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified remittancePurpose resource using id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateRemittancePurposeRequest $request, string|int $id): JsonResponse
    {
        try {

            $remittancePurpose = \MetaData::remittancePurpose()->read($id);

            if (! $remittancePurpose) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'RemittancePurpose', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (! \MetaData::remittancePurpose()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('metadata::messages.resource.updated', ['model' => 'RemittancePurpose']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified remittancePurpose resource using id.
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

            $remittancePurpose = \MetaData::remittancePurpose()->read($id);

            if (! $remittancePurpose) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'RemittancePurpose', 'id' => strval($id)]));
            }

            if (! \MetaData::remittancePurpose()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('metadata::messages.resource.deleted', ['model' => 'RemittancePurpose']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified remittancePurpose resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $remittancePurpose = \MetaData::remittancePurpose()->read($id, true);

            if (! $remittancePurpose) {
                throw new ResourceNotFoundException(__('metadata::messages.resource.notfound', ['model' => 'RemittancePurpose', 'id' => strval($id)]));
            }

            if (! \MetaData::remittancePurpose()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('metadata::messages.resource.restored', ['model' => 'RemittancePurpose']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the remittancePurpose resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexRemittancePurposeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $remittancePurposePaginate = \MetaData::remittancePurpose()->export($inputs);

            return $this->exported(__('metadata::messages.resource.exported', ['model' => 'RemittancePurpose']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the remittancePurpose resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return RemittancePurposeCollection|JsonResponse
     */
    public function import(ImportRemittancePurposeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $remittancePurposePaginate = \MetaData::remittancePurpose()->list($inputs);

            return new RemittancePurposeCollection($remittancePurposePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
