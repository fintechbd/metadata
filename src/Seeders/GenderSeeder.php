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
        $countryIds = range(1, 250);
        foreach ($this->data() as $entry) {
            $entry['countries'] = $countryIds;
            MetaData::catalog()->create($entry);
        }
    }

    private function data()
    {
        return [
            ['type' => CatalogType::Gender->value, 'name' => 'Male', 'code' => 'male', 'enabled' => true],
            ['type' => CatalogType::Gender->value, 'name' => 'Female', 'code' => 'female', 'enabled' => true],
            ['type' => CatalogType::Gender->value, 'name' => 'Other', 'code' => 'other', 'enabled' => true],
        ];
    }
}
