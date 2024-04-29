<?php

namespace Fintech\MetaData\Http\Controllers;

use Exception;
use Fintech\Business\Facades\Business;
use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\Core\Facades\Core;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class DropDownController extends Controller
{
    use ApiResponseTrait;

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function catalog(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $entries = collect();

            foreach (CatalogType::toArray() as $key => $status) {
                $entries->push(['label' => trim(preg_replace('/([A-Z])/', ' $1', $status)), 'attribute' => $key]);
            }

            return new DropDownCollection($entries);

        } catch (Exception $exception) {
            return $this->failed($exception->getMessage());
        }
    }

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function bloodGroup(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $filters['type'] = CatalogType::BloodGroup->value;

            $label = 'name';

            $attribute = 'code';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::catalog()->list($filters)->map(function ($entry) use ($label, $attribute) {
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

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function gender(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $filters['type'] = CatalogType::Gender->value;

            $label = 'name';

            $attribute = 'code';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::catalog()->list($filters)->map(function ($entry) use ($label, $attribute) {
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

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function maritalStatus(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $filters['type'] = CatalogType::MaritalStatus->value;

            $label = 'name';

            $attribute = 'code';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::catalog()->list($filters)->map(function ($entry) use ($label, $attribute) {
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

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function fundSource(DropDownRequest $request): DropDownCollection|JsonResponse
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

            $entries = MetaData::fundSource()->list($filters)->map(function ($entry) use ($label, $attribute) {
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

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function relation(DropDownRequest $request): DropDownCollection|JsonResponse
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

            $entries = MetaData::relation()->list($filters)->map(function ($entry) use ($label, $attribute) {
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

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function remittancePurpose(DropDownRequest $request): DropDownCollection|JsonResponse
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

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function occupation(DropDownRequest $request): DropDownCollection|JsonResponse
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

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function idDocType(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();

            $label = 'name';

            $attribute = 'code';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::idDocType()->list($filters)->map(function ($entry) use ($label, $attribute) {
                return [
                    'label' => $entry->{$label} ?? 'name',
                    'attribute' => $entry->{$attribute} ?? 'id',
                    'sides' => $entry->sides ?? 1,
                    'id' => $entry->getKey() ?? null
                ];
            });

            return new DropDownCollection($entries);

        } catch (Exception $exception) {
            return $this->failed($exception->getMessage());
        }
    }

    /**
     * Handle the incoming request.
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function nationality(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();
            if (Core::packageExists('Business')) {
                $filters['in_array_country_id'] = Business::serviceStat()->list([
                    'sort' => 'destination_country_id',
                    'dir' => 'asc',
                    'paginate' => false,
                ])?->pluck('destination_country_id')->toArray() ?? [];

                $filters['in_array_country_id'] = array_values(array_unique($filters['in_array_country_id']));
            } else {
                $filters['is_serving'] = true;
            }


            $label = 'nationality';
            $attribute = 'nationality';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::country()->list($filters)->map(function ($entry) use ($label, $attribute) {
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

    /**
     * @lrd:start
     * Return a list of phone code of all serving countries only
     * @lrd:end
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function phoneCode(DropDownRequest $request): DropDownCollection|JsonResponse
    {
        try {
            $filters = $request->all();
            $filters['is_serving'] = true;

            $label = 'phone_code';

            $attribute = 'phone_code';

            if (!empty($filters['label'])) {
                $label = $filters['label'];
                unset($filters['label']);
            }

            if (!empty($filters['attribute'])) {
                $attribute = $filters['attribute'];
                unset($filters['attribute']);
            }

            $entries = MetaData::country()->list($filters)->map(function ($entry) use ($label, $attribute) {
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