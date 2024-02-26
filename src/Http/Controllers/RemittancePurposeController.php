<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Http\Requests\ImportRemittancePurposeRequest;
use Fintech\MetaData\Http\Requests\IndexRemittancePurposeRequest;
use Fintech\MetaData\Http\Requests\StoreRemittancePurposeRequest;
use Fintech\MetaData\Http\Requests\UpdateRemittancePurposeRequest;
use Fintech\MetaData\Http\Resources\RemittancePurposeCollection;
use Fintech\MetaData\Http\Resources\RemittancePurposeResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

            $remittancePurposePaginate = MetaData::remittancePurpose()->list($inputs);

            return new RemittancePurposeCollection($remittancePurposePaginate);

        } catch (Exception $exception) {

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

            $remittancePurpose = MetaData::remittancePurpose()->create($inputs);

            if (!$remittancePurpose) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.remittance_purpose_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Purpose of Remittance']),
                'id' => $remittancePurpose->getKey(),
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @LRDparam trashed boolean|nullable
     *
     * @lrd:start
     * Return a specified remittancePurpose resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): RemittancePurposeResource|JsonResponse
    {
        try {

            $remittancePurpose = MetaData::remittancePurpose()->find($id);

            if (!$remittancePurpose) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.remittance_purpose_model'), $id);
            }

            return new RemittancePurposeResource($remittancePurpose);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified remittancePurpose resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateRemittancePurposeRequest $request, string|int $id): JsonResponse
    {
        try {

            $remittancePurpose = MetaData::remittancePurpose()->find($id);

            if (!$remittancePurpose) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.remittance_purpose_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::remittancePurpose()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.remittance_purpose_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Purpose of Remittance']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

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
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $remittancePurpose = MetaData::remittancePurpose()->find($id);

            if (!$remittancePurpose) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.remittance_purpose_model'), $id);
            }

            if (!MetaData::remittancePurpose()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.remittance_purpose_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Purpose of Remittance']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

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

            $remittancePurpose = MetaData::remittancePurpose()->find($id, true);

            if (!$remittancePurpose) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.remittance_purpose_model'), $id);
            }

            if (!MetaData::remittancePurpose()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.remittance_purpose_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Purpose of Remittance']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

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

            $remittancePurposePaginate = MetaData::remittancePurpose()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Purpose of Remittance']));

        } catch (Exception $exception) {

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

            $remittancePurposePaginate = MetaData::remittancePurpose()->list($inputs);

            return new RemittancePurposeCollection($remittancePurposePaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function dropdown(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $label = 'name';

            $attribute = 'id';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::remittancePurpose()->list($filters)->map(function ($entry) use ($label, $attribute) {
                return [
                    'attribute' => $entry->{$attribute} ?? 'id',
                    'label' => $entry->{$label} ?? 'name',
                ];
            })->toArray();

            return new DropDownCollection($entries);

        } catch (Exception $exception) {
            return $this->failed($exception->getMessage());
        }
    }
}
