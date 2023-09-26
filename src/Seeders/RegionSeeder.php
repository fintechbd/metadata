<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $region) {
            MetaData::region()->create($region);
        }
    }

    private function data()
    {
        return [
            [
                'id' => '1',
                'name' => [
                    "en" => "Africa",
                    "kr" => "아프리카",
                    "pt" => "África",
                    "nl" => "Afrika",
                    "hr" => "Afrika",
                    "fa" => "آفریقا",
                    "de" => "Afrika",
                    "es" => "África",
                    "fr" => "Afrique",
                    "ja" => "アフリカ",
                    "it" => "Africa",
                    "zh" => "非洲",
                    "tr" => "Afrika"
                ],
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '2',
                'name' => [
                    "en" => "Americas",
                    "kr" => "아메리카",
                    "pt" => "América",
                    "nl" => "Amerika",
                    "hr" => "Amerika",
                    "fa" => "قاره آمریکا",
                    "de" => "Amerika",
                    "es" => "América",
                    "fr" => "Amérique",
                    "ja" => "アメリカ州",
                    "it" => "America",
                    "zh" => "美洲",
                    "tr" => "Amerika"
                ],
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '3',
                'name' => [
                    "en" => "Asia",
                    "kr" => "아시아",
                    "pt-BR" => "Ásia",
                    "pt" => "Ásia",
                    "nl" => "Azië",
                    "hr" => "Ázsia",
                    "fa" => "آسیا",
                    "de" => "Asien",
                    "es" => "Asia",
                    "fr" => "Asie",
                    "ja" => "アジア",
                    "it" => "Asia",
                    "zh" => "亚洲",
                    "tr" => "Asya"
                ],
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '4',
                'name' => [
                    "en" => "Europe",
                    "kr" => "유럽",
                    "pt" => "Europa",
                    "nl" => "Europa",
                    "hr" => "Európa",
                    "fa" => "اروپا",
                    "de" => "Europa",
                    "es" => "Europa",
                    "fr" => "Europe",
                    "ja" => "ヨーロッパ",
                    "it" => "Europa",
                    "zh" => "欧洲",
                    "tr" => "Avrupa"
                ],
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '5',
                'name' => [
                    "en" => "Oceania",
                    "kr" => "오세아니아",
                    "pt" => "Oceania",
                    "nl" => "Oceanië en Australië",
                    "hr" => "Óceánia és Ausztrália",
                    "fa" => "اقیانوسیه",
                    "de" => "Ozeanien und Australien",
                    "es" => "Oceanía",
                    "fr" => "Océanie",
                    "ja" => "オセアニア",
                    "it" => "Oceania",
                    "zh" => "大洋洲",
                    "tr" => "Okyanusya"
                ],
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '6',
                'name' => [
                    "en" => "Polar",
                    "kr" => "남극",
                    "pt" => "Antártida",
                    "nl" => "Antarctica",
                    "hr" => "Antarktika",
                    "fa" => "جنوبگان",
                    "de" => "Antarktika",
                    "es" => "Antártida",
                    "fr" => "Antarctique",
                    "ja" => "南極大陸",
                    "it" => "Antartide",
                    "zh" => "南極洲",
                    "tr" => "Antarktika"
                ],
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
        ];
    }
}
