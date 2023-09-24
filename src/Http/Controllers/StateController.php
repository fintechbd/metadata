<?php

namespace Fintech\MetaData\Http\Controllers;

use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\ResourceNotFoundException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Http\Requests\ImportStateRequest;
use Fintech\MetaData\Http\Requests\IndexStateRequest;
use Fintech\MetaData\Http\Requests\StoreStateRequest;
use Fintech\MetaData\Http\Requests\UpdateStateRequest;
use Fintech\MetaData\Http\Resources\StateCollection;
use Fintech\MetaData\Http\Resources\StateResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class StateController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to state
 *
 * @lrd:end
 */
class StateController extends Controller
{
    use ApiResponseTrait;

    /**
     * StateController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @lrd:start
     * Return a listing of the state resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexStateRequest $request): StateCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $statePaginate = \MetaData::state()->list($inputs);

            return new StateCollection($statePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new state resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreStateRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $state = \MetaData::state()->create($inputs);

            if (! $state) {
                throw new StoreOperationException();
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'State']),
                'id' => $state->id,
            ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified state resource found by id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     */
    public function show(string|int $id): StateResource|JsonResponse
    {
        try {

            $state = \MetaData::state()->read($id);

            if (! $state) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'State', 'id' => strval($id)]));
            }

            return new StateResource($state);

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified state resource using id.
     *
     * @lrd:end
     *
     * @throws ResourceNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateStateRequest $request, string|int $id): JsonResponse
    {
        try {

            $state = \MetaData::state()->read($id);

            if (! $state) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'State', 'id' => strval($id)]));
            }

            $inputs = $request->validated();

            if (! \MetaData::state()->update($id, $inputs)) {

                throw new UpdateOperationException();
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'State']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified state resource using id.
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

            $state = \MetaData::state()->read($id);

            if (! $state) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'State', 'id' => strval($id)]));
            }

            if (! \MetaData::state()->destroy($id)) {

                throw new DeleteOperationException();
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'State']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified state resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $state = \MetaData::state()->read($id, true);

            if (! $state) {
                throw new ResourceNotFoundException(__('core::messages.resource.notfound', ['model' => 'State', 'id' => strval($id)]));
            }

            if (! \MetaData::state()->restore($id)) {

                throw new RestoreOperationException();
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'State']));

        } catch (ResourceNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the state resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexStateRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $statePaginate = \MetaData::state()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'State']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the state resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return StateCollection|JsonResponse
     */
    public function import(ImportStateRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $statePaginate = \MetaData::state()->list($inputs);

            return new StateCollection($statePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
