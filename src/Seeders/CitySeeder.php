<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->data();

        foreach (array_chunk($data, 500) as $block) {
            set_time_limit(2100);
            foreach ($block as $city) {
                MetaData::city()->create($city);
            }
            break;
        }
    }

    public function data()
    {
        return include __DIR__.'/cities.dat';
    }
}
