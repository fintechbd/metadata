<?php

namespace Fintech\MetaData\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LanguageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $data['id'] = $this->getKey();
        $this->getOfficialLanguage($this->languages, $data);
        $data['logo_svg'] = $this->getFirstMediaUrl('logo_svg');
        $data['logo_png'] = $this->getFirstMediaUrl('logo_png');
        $data['enabled'] = $this->country_data['language_enabled'] ?? false;
        $data['language_data'] = $this->languages;
        $data['created_at'] = $this->created_at;
        $data['updated_at'] = $this->updated_at;

        return $data;
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
