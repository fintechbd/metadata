<?php

namespace Fintech\MetaData\Http\Resources;

use Fintech\Core\Supports\Constant;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class IdDocTypeCollection extends ResourceCollection
{
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
                'countries' => MetaData::country()->list(['paginate' => false])->pluck('name', 'id')->toArray(),
                'per_page' => Constant::PAGINATE_LENGTHS,
                'sort' => ['id', 'name', 'code', 'enabled', 'created_at', 'updated_at'],
            ],
            'query' => $request->all(),
        ];
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($item) {

            $links = [
                'show' => action_link(route('metadata.id-doc-types.show', $item->getKey()), __('core::messages.action.show'), 'get'),
                'update' => action_link(route('metadata.id-doc-types.update', $item->getKey()), __('core::messages.action.update'), 'put'),
                'destroy' => action_link(route('metadata.id-doc-types.destroy', $item->getKey()), __('core::messages.action.destroy'), 'delete'),
                'restore' => action_link(route('metadata.id-doc-types.restore', $item->getKey()), __('core::messages.action.restore'), 'post'),
            ];

            if ($item->getAttribute('deleted_at') == null) {
                unset($links['restore']);
            } else {
                unset($links['destroy']);
            }

            return [
                'id' => $item->getKey(),
                'name' => $item->name,
                'code' => $item->code,
                'sides' => $item->sides,
                'enabled' => $item->enabled,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
                'deleted_at' => $item->deleted_at,
                'restored_at' => $item->restored_at,
            ];
        })->toArray();
    }
}
