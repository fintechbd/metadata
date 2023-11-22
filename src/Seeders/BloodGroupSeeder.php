<?php

namespace Fintech\MetaData\Seeders;

use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
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
            ['name' => 'A+ve', 'code' => 'a+', 'type' => CatalogType::BloodGroup->value, 'enabled' => true],
            ['name' => 'A-ve', 'code' => 'a-', 'type' => CatalogType::BloodGroup->value, 'enabled' => true],
            ['name' => 'B+ve', 'code' => 'b+', 'type' => CatalogType::BloodGroup->value, 'enabled' => true],
            ['name' => 'B-ve', 'code' => 'b-', 'type' => CatalogType::BloodGroup->value, 'enabled' => true],
            ['name' => 'O+ve', 'code' => 'o+', 'type' => CatalogType::BloodGroup->value, 'enabled' => true],
            ['name' => 'O-ve', 'code' => 'o-', 'type' => CatalogType::BloodGroup->value, 'enabled' => true],
            ['name' => 'AB+ve', 'code' => 'ab+', 'type' => CatalogType::BloodGroup->value, 'enabled' => true],
            ['name' => 'AB-ve', 'code' => 'ab-', 'type' => CatalogType::BloodGroup->value, 'enabled' => true]
        ];
    }
}
