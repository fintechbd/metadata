<?php

namespace Fintech\MetaData\Http\Resources;

use Fintech\Core\Supports\Constant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OccupationCollection extends ResourceCollection
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
            return [
                "id" => $item->id,
                "name" => $item->name,
                "code" => $item->code,
                "enabled" => $item->enabled,
                "country_id" => $item->country_id,
                "country_name" => $item->country != null ? $item->country->name : null,
                "occupation_data" => $item->occupation_data,
                "created_at" => $item->created_at,
                "updated_at" => $item->updated_at,
                "deleted_at" => $item->deleted_at,
                "restored_at" => $item->restored_at,
                "links" => $item->links
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
