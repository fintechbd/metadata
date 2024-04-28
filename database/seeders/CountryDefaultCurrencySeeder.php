<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class CountryDefaultCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $country) {
            MetaData::country()->update($country, ['currencies' => [$country]]);
        }
    }

    private function data()
    {
        return MetaData::currency()->list(['enabled' => true, 'paginate' => false])->pluck('id')->toArray();
    }
}
