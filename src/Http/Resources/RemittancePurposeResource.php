<?php

namespace Fintech\MetaData\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RemittancePurposeResource extends JsonResource
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
            "id" => $this->iid,
            "country_id" => $this->country_id,
            "country_name" => $this->country != null ? $this->country->name : null,
            "name" => $this->name,
            "code" => $this->code,
            "enabled" => $this->enabled,
            "occupation_data" => $this->fund_source_data,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
            "restored_at" => $this->restored_at,
            "links" => $this->links
        ];
    }
}
