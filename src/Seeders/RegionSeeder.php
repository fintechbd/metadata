<?php

namespace Database\Seeders;

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
                'name' => 'Africa',
                'translations' => '{"kr":"아프리카","pt-BR":"África","pt":"África","nl":"Afrika","hr":"Afrika","fa":"آفریقا","de":"Afrika","es":"África","fr":"Afrique","ja":"アフリカ","it":"Africa","cn":"非洲","tr":"Afrika"}',
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '2',
                'name' => 'Americas',
                'translations' => '{"kr":"아메리카","pt-BR":"América","pt":"América","nl":"Amerika","hr":"Amerika","fa":"قاره آمریکا","de":"Amerika","es":"América","fr":"Amérique","ja":"アメリカ州","it":"America","cn":"美洲","tr":"Amerika"}',
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '3',
                'name' => 'Asia',
                'translations' => '{"kr":"아시아","pt-BR":"Ásia","pt":"Ásia","nl":"Azië","hr":"Ázsia","fa":"آسیا","de":"Asien","es":"Asia","fr":"Asie","ja":"アジア","it":"Asia","cn":"亚洲","tr":"Asya"}',
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '4',
                'name' => 'Europe',
                'translations' => '{"kr":"유럽","pt-BR":"Europa","pt":"Europa","nl":"Europa","hr":"Európa","fa":"اروپا","de":"Europa","es":"Europa","fr":"Europe","ja":"ヨーロッパ","it":"Europa","cn":"欧洲","tr":"Avrupa"}',
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '5',
                'name' => 'Oceania',
                'translations' => '{"kr":"오세아니아","pt-BR":"Oceania","pt":"Oceania","nl":"Oceanië en Australië","hr":"Óceánia és Ausztrália","fa":"اقیانوسیه","de":"Ozeanien und Australien","es":"Oceanía","fr":"Océanie","ja":"オセアニア","it":"Oceania","cn":"大洋洲","tr":"Okyanusya"}',
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '6',
                'name' => 'Polar',
                'translations' => '{"kr":"남극","pt-BR":"Antártida","pt":"Antártida","nl":"Antarctica","hr":"Antarktika","fa":"جنوبگان","de":"Antarktika","es":"Antártida","fr":"Antarctique","ja":"南極大陸","it":"Antartide","cn":"南極洲","tr":"Antarktika"}',
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
        ];
    }
}
