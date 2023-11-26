<?php

namespace Fintech\MetaData\Http\Controllers;

use Illuminate\Routing\Controller;
use Exception;
use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Http\JsonResponse;

class GenderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    /**
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function __invoke(DropDownRequest $request): DropDownCollection|JsonResponse
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
}
