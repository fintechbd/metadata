<?php

namespace Fintech\MetaData\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->getKey(),
            'name' => $this->name,
            'iso3' => $this->iso3,
            'iso2' => $this->iso2,
            'phone_code' => $this->phone_code,
            'capital' => $this->capital,
            'currency' => $this->currency,
            'currency_name' => $this->currency_name,
            'currency_symbol' => $this->currency_symbol,
            'nationality' => $this->nationality,
            'timezones' => $this->timezones,
            'country_data' => $this->country_data,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'emoji' => $this->emoji,
            'enabled' => $this->enabled,
            'logo' => $this->logo,
            'language' => $this->language,
            'region_id' => $this->region_id ?? null,
            'region_name' => ($this->region != null) ? $this->region->name : null,
            'subregion_id' => $this->subregion_id ?? null,
            'subregion_name' => ($this->subregion != null) ? $this->subregion->name : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'restored_at' => $this->restored_at,
            'links' => $this->links,
        ];
    }
}
