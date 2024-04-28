<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class SubRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $subregion) {
            MetaData::subregion()->create($subregion);
        }
    }

    private function data()
    {
        return [
            ['id' => '1', 'subregion_data' => [], 'name' => 'Northern Africa', 'region_id' => 1],
            ['id' => '2', 'subregion_data' => [], 'name' => 'Middle Africa', 'region_id' => 1],
            ['id' => '3', 'subregion_data' => [], 'name' => 'Western Africa', 'region_id' => 1],
            ['id' => '4', 'subregion_data' => [], 'name' => 'Eastern Africa', 'region_id' => 1],
            ['id' => '5', 'subregion_data' => [], 'name' => 'Southern Africa', 'region_id' => 1],
            ['id' => '6', 'subregion_data' => [], 'name' => 'Northern America', 'region_id' => 2],
            ['id' => '7', 'subregion_data' => [], 'name' => 'Caribbean', 'region_id' => 2],
            ['id' => '8', 'subregion_data' => [], 'name' => 'South America', 'region_id' => 2],
            ['id' => '9', 'subregion_data' => [], 'name' => 'Central America', 'region_id' => 2],
            ['id' => '10', 'subregion_data' => [], 'name' => 'Central Asia', 'region_id' => 3],
            ['id' => '11', 'subregion_data' => [], 'name' => 'Western Asia', 'region_id' => 3],
            ['id' => '12', 'subregion_data' => [], 'name' => 'Eastern Asia', 'region_id' => 3],
            ['id' => '13', 'subregion_data' => [], 'name' => 'South-Eastern Asia', 'region_id' => 3],
            ['id' => '14', 'subregion_data' => [], 'name' => 'Southern Asia', 'region_id' => 3],
            ['id' => '15', 'subregion_data' => [], 'name' => 'Eastern Europe', 'region_id' => 4],
            ['id' => '16', 'subregion_data' => [], 'name' => 'Southern Europe', 'region_id' => 4],
            ['id' => '17', 'subregion_data' => [], 'name' => 'Western Europe', 'region_id' => 4],
            ['id' => '18', 'subregion_data' => [], 'name' => 'Northern Europe', 'region_id' => 4],
            ['id' => '19', 'subregion_data' => [], 'name' => 'Australia and New Zealand', 'region_id' => 5],
            ['id' => '20', 'subregion_data' => [], 'name' => 'Melanesia', 'region_id' => 5],
            ['id' => '21', 'subregion_data' => [], 'name' => 'Micronesia', 'region_id' => 5],
            ['id' => '22', 'subregion_data' => [], 'name' => 'Polynesia', 'region_id' => 5],
        ];
    }
}
