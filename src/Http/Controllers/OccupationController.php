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
use Fintech\MetaData\Http\Requests\ImportOccupationRequest;
use Fintech\MetaData\Http\Requests\IndexOccupationRequest;
use Fintech\MetaData\Http\Requests\StoreOccupationRequest;
use Fintech\MetaData\Http\Requests\UpdateOccupationRequest;
use Fintech\MetaData\Http\Resources\OccupationCollection;
use Fintech\MetaData\Http\Resources\OccupationResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class OccupationController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to occupation
 *
 * @lrd:end
 */
class OccupationController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the occupation resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexOccupationRequest $request): OccupationCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $occupationPaginate = MetaData::occupation()->list($inputs);

            return new OccupationCollection($occupationPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new occupation resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreOccupationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $occupation = MetaData::occupation()->create($inputs);

            if (!$occupation) {
                throw (new StoreOperationException())->setModel(config('fintech.metadata.occupation_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Occupation']),
                'id' => $occupation->getKey(),
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @LRDparam trashed boolean|nullable
     *
     * @lrd:start
     * Return a specified occupation resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): OccupationResource|JsonResponse
    {
        try {

            $occupation = MetaData::occupation()->find($id);

            if (!$occupation) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.occupation_model'), $id);
            }

            return new OccupationResource($occupation);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified occupation resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateOccupationRequest $request, string|int $id): JsonResponse
    {
        try {

            $occupation = MetaData::occupation()->find($id);

            if (!$occupation) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.occupation_model'), $id);
            }

            $inputs = $request->validated();

            if (!MetaData::occupation()->update($id, $inputs)) {

                throw (new UpdateOperationException())->setModel(config('fintech.metadata.occupation_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Occupation']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified occupation resource using id.
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

            $occupation = MetaData::occupation()->find($id);

            if (!$occupation) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.occupation_model'), $id);
            }

            if (!MetaData::occupation()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.metadata.occupation_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Occupation']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified occupation resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $occupation = MetaData::occupation()->find($id, true);

            if (!$occupation) {
                throw (new ModelNotFoundException())->setModel(config('fintech.metadata.occupation_model'), $id);
            }

            if (!MetaData::occupation()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.metadata.occupation_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Occupation']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the occupation resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexOccupationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $occupationPaginate = MetaData::occupation()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Occupation']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the occupation resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return OccupationCollection|JsonResponse
     */
    public function import(ImportOccupationRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $occupationPaginate = MetaData::occupation()->list($inputs);

            return new OccupationCollection($occupationPaginate);

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

            $entries = MetaData::occupation()->list($filters)->map(function ($entry) use ($label, $attribute) {
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
