<?php

namespace Fintech\MetaData\Http\Resources;

use Fintech\Core\Supports\Constant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FundSourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($item) {

            $links = [
                'show' => action_link(route('metadata.fund-sources.show', $item->getKey()), __('core::messages.action.show'), 'get'),
                'update' => action_link(route('metadata.fund-sources.update', $item->getKey()), __('core::messages.action.update'), 'put'),
                'destroy' => action_link(route('metadata.fund-sources.destroy', $item->getKey()), __('core::messages.action.destroy'), 'delete'),
                'restore' => action_link(route('metadata.fund-sources.restore', $item->getKey()), __('core::messages.action.restore'), 'post'),
            ];

            if ($this->getAttribute('deleted_at') == null) {
                unset($links['restore']);
            } else {
                unset($links['destroy']);
            }

            return [
                "id" => $item->getKey(),
                "name" => $item->name,
                "code" => $item->code,
                "enabled" => $item->enabled,
                "country_id" => $item->country_id,
                "country_name" => $item->country != null ? $item->country->name : null,
                "fund_source_data" => $item->fund_source_data,
                "created_at" => $item->created_at,
                "updated_at" => $item->updated_at,
                "deleted_at" => $item->deleted_at,
                "restored_at" => $item->restored_at,
                "links" => $links
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
        return [
            'options' => [
                'dir' => Constant::SORT_DIRECTIONS,
                'per_page' => Constant::PAGINATE_LENGTHS,
                'sort' => ['id', 'name', 'created_at', 'updated_at'],
            ],
            'query' => $request->all(),
        ];
    }
}
