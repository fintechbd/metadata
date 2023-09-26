<?php

namespace Database\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->data();

        foreach (array_chunk($data, 500) as $block) {
            foreach ($block as $state) {
                MetaData::state()->create($state);
            }
        }
    }

    private function data()
    {
        return ;
    }
}
