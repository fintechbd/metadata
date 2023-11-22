<?php

namespace Fintech\MetaData\Seeders;

use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->data();

        foreach (array_chunk($data, 200) as $block) {
            set_time_limit(2100);
            foreach ($block as $entry) {
                MetaData::catalog()->create($entry);
            }
        }
    }

    private function data()
    {
        return [
            ['name' => 'Male',  'code' => 'male', 'type' => CatalogType::Gender->value, 'enabled' => true],
            ['name' => 'Female',  'code' => 'female', 'type' => CatalogType::Gender->value, 'enabled' => true],
            ['name' => 'Other',  'code' => 'other', 'type' => CatalogType::Gender->value, 'enabled' => true],
        ];
    }
}
