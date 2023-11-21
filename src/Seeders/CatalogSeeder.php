<?php

namespace Fintech\MetaData\Seeders;

use Illuminate\Database\Seeder;
use Fintech\MetaData\Facades\MetaData;

class CatalogSeeder extends Seeder
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
        return array();
    }
}
