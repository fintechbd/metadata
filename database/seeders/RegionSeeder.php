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
            ['id' => '1', 'name' => 'Africa', 'region_data' => []],
            ['id' => '2', 'name' => 'Americas', 'region_data' => []],
            ['id' => '3', 'name' => 'Asia', 'region_data' => []],
            ['id' => '4', 'name' => 'Europe', 'region_data' => []],
            ['id' => '5', 'name' => 'Oceania', 'region_data' => []],
            ['id' => '6', 'name' => 'Polar', 'region_data' => []],
        ];
    }
}
