<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\MetaData\Facades\MetaData;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\MetaData\Http\Requests\ImportStateRequest;
use Fintech\MetaData\Http\Requests\IndexStateRequest;
use Fintech\MetaData\Http\Requests\StoreStateRequest;
use Fintech\MetaData\Http\Requests\UpdateStateRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\MetaData\Http\Resources\StateCollection;
use Fintech\MetaData\Http\Resources\StateResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

            $statePaginate = MetaData::state()->list($inputs);

            return new StateCollection($statePaginate);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Create a new state resource in storage.
     *
     * @lrd:end
     */
    public function store(StoreStateRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $state = MetaData::state()->create($inputs);

            if (! $state) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.state_model'));
            }

            return response()->created([
                'message' => __('core::messages.resource.created', ['model' => 'State']),
                'id' => $state->getKey(),
            ]);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @LRDparam trashed boolean|nullable
     *
     * @lrd:start
     * Return a specified state resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): StateResource|JsonResponse
    {
        try {

            $state = MetaData::state()->find($id);

            if (! $state) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.state_model'), $id);
            }

            return new StateResource($state);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @lrd:start
     * Update a specified state resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function update(UpdateStateRequest $request, string|int $id): JsonResponse
    {
        try {

            $state = MetaData::state()->find($id);

            if (! $state) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.state_model'), $id);
            }

            $inputs = $request->validated();

            if (! MetaData::state()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.state_model'), $id);
            }

            return response()->updated(__('core::messages.resource.updated', ['model' => 'State']));

        } catch (Exception $exception) {

            return response()->failed($exception);
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
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $state = MetaData::state()->find($id);

            if (! $state) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.state_model'), $id);
            }

            if (! MetaData::state()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.state_model'), $id);
            }

            return response()->deleted(__('core::messages.resource.deleted', ['model' => 'State']));

        } catch (Exception $exception) {

            return response()->failed($exception);
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

            $state = MetaData::state()->find($id, true);

            if (! $state) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.state_model'), $id);
            }

            if (! MetaData::state()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.state_model'), $id);
            }

            return response()->restored(__('core::messages.resource.restored', ['model' => 'State']));

        } catch (Exception $exception) {

            return response()->failed($exception);
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

            $statePaginate = MetaData::state()->export($inputs);

            return response()->exported(__('core::messages.resource.exported', ['model' => 'State']));

        } catch (Exception $exception) {

            return response()->failed($exception);
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

            $statePaginate = MetaData::state()->list($inputs);

            return new StateCollection($statePaginate);

        } catch (Exception $exception) {

            return response()->failed($exception);
        }
    }

    /**
     * @LRDparam country_id required|integer|min:1
     *
     * @lrd:start
     *
     * @lrd:end
     */
    public function dropdown(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $filters['enabled'] = $filters['enabled'] ?? true;

            $label = 'name';

            $attribute = 'id';

            if (! empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (! empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::state()->list($filters)->map(function ($entry) use ($label, $attribute) {
                return [
                    'attribute' => $entry->{$attribute} ?? 'id',
                    'label' => $entry->{$label} ?? 'name',
                ];
            })->toArray();

            return new DropDownCollection($entries);

        } catch (Exception $exception) {
            return response()->failed($exception);
        }
    }
}
