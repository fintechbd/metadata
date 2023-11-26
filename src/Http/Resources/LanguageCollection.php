<?php

namespace Fintech\MetaData\Http\Resources;

use Fintech\Core\Supports\Constant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class LanguageCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($country) use ($request) {
            $data['id'] = $country->getKey();
            $this->getOfficialLanguage($country->languages, $data);
            $data['logo_svg'] = $country->getFirstMediaUrl('logo_svg');
            $data['logo_png'] = $country->getFirstMediaUrl('logo_png');
            $data['enabled'] = $country->country_data['language_enabled'] ?? false;
            $data['language_data'] = $country->languages;
            $data['created_at'] = $country->created_at;
            $data['updated_at'] = $country->updated_at;

            return $data;
        })->toArray();
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param Request $request
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

    private function getOfficialLanguage(array $languages, &$data): void
    {
        $officialLanguage = array_filter($languages, fn($language) => $language['is_official'] == true);
        $officialLanguage = (!empty($officialLanguage)) ? array_shift($officialLanguage) : [];
        $data['name'] = $officialLanguage['name'] ?? null;
        $data['code'] = $officialLanguage['code'] ?? null;
        $data['native'] = $officialLanguage['native'] ?? null;
        $data['is_official'] = $officialLanguage['is_official'] ?? false;
    }
}
