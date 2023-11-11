<?php

namespace Fintech\MetaData\Http\Resources;

use Fintech\Core\Supports\Constant;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CountryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($country) {
            return [
                'id' => $country->getKey(),
                'name' => $country->name,
                'iso3' => $country->iso3,
                'iso2' => $country->iso2,
                'phone_code' => $country->phone_code,
                'currency' => $country->currency,
                'currency_name' => $country->currency_name,
                'country_data' => $country->country_data,
                'enabled' => $country->enabled,
                'logo_svg' => $country->getFirstMediaUrl('logo_svg'),
                'logo_png' => $country->getFirstMediaUrl('logo_png'),
                'region_id' => $country->region_id ?? null,
                'region_name' => ($country->region != null) ? $country->region->name : null,
                'subregion_id' => $country->subregion_id ?? null,
                'subregion_name' => ($country->subregion != null) ? $country->subregion->name : null,
                'created_at' => $country->created_at,
                'updated_at' => $country->updated_at,
                'deleted_at' => $country->deleted_at,
                'restored_at' => $country->restored_at,
                'links' => $country->links,
            ];
        })->toArray();
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @return array<string, mixed>
     */
    public function with(Request $request): array
    {
        $regions = [];

        MetaData::region()->list(['paginate' => false])
            ->each(function ($region) use (&$regions) {
                $regions[$region->getKey()] = $region->name;
            });

        $subregions = [];

        if (is_numeric($request->input('region_id'))) {
            MetaData::subregion()->list(
                ['paginate' => false, 'region_id' => $request->input('region_id')]
            )
                ->each(function ($subregion) use (&$subregions) {
                    $subregions[$subregion->getKey()] = $subregion->name;
                });
        }

        return [
            'options' => [
                'dir' => Constant::SORT_DIRECTIONS,
                'per_page' => Constant::PAGINATE_LENGTHS,
                'sort' => ['id', 'name', 'created_at', 'updated_at'],
                'region_id' => $regions,
                'subregion_id' => $subregions
            ],
            'query' => $request->all(),
        ];
    }
}
