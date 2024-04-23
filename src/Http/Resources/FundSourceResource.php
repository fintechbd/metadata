<?php

namespace Fintech\MetaData\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FundSourceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request
     * @return array
     */
    public function toArray($request)
    {
        $links = [
            'show' => action_link(route('metadata.fund-sources.show', $this->getKey()), __('core::messages.action.show'), 'get'),
            'update' => action_link(route('metadata.fund-sources.update', $this->getKey()), __('core::messages.action.update'), 'put'),
            'destroy' => action_link(route('metadata.fund-sources.destroy', $this->getKey()), __('core::messages.action.destroy'), 'delete'),
            'restore' => action_link(route('metadata.fund-sources.restore', $this->getKey()), __('core::messages.action.restore'), 'post'),
        ];

        if ($this->getAttribute('deleted_at') == null) {
            unset($links['restore']);
        } else {
            unset($links['destroy']);
        }

        return [
            "id" => $this->getKey(),
            "name" => $this->name,
            "code" => $this->code,
            "enabled" => $this->enabled,
            "fund_source_data" => $this->fund_source_data,
            "country_id" => $this->country_id,
            "country_name" => $this->country != null ? $this->country->name : null,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
            "restored_at" => $this->restored_at,
            "links" => $links
        ];
    }
}
