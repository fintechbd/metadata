<?php

namespace Fintech\MetaData\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Fintech\Core\Http\Requests\DropDownRequest;
use Fintech\Core\Http\Resources\DropDownCollection;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PhoneCodeDropDownController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a list of phone code of all serving countries only
     * @lrd:end
     *
     * @param DropDownRequest $request
     * @return DropDownCollection|JsonResponse
     */
    public function __invoke(DropDownRequest $request): DropDownCollection|JsonResponse
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
