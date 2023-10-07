<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class FundSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $region) {
            MetaData::fundSource()->create($region);
        }
    }

    private function data()
    {
        return [
            [
                'id' => '1',
                'name' => 'Africa',
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '2',
                'name' => 'Americas',
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '3',
                'name' => 'Asia',
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '4',
                'name' => 'Europe',
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '5',
                'name' => 'Oceania',
                'region_data' => [],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-14 13:11:03',
            ],
            [
                'id' => '6',
                'name' => 'Polar',
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
