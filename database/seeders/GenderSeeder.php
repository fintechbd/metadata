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
            $entry['type'] = CatalogType::Gender->value;
            $entry['enabled'] = false;
            MetaData::catalog()->create($entry);
        }
    }

    private function data()
    {
        return array(
            array(
                'name' => 'Male',
                'code' => 'male',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
                    ),
                    'ekyc' => array(
                        'shufti_pro' => 'M',
                        'signzy' => null,
                        'onfido' => null
                    )
                ),
                'catalog_data' => array()
            ),
            array(
                'name' => 'Female',
                'code' => 'female',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
                    ),
                    'ekyc' => array(
                        'shufti_pro' => 'F',
                        'signzy' => null,
                        'onfido' => null
                    )
                ),
                'catalog_data' => array()
            ),
            array(
                'name' => 'Other',
                'code' => 'other',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
                    ),
                    'ekyc' => array(
                        'shufti_pro' => null,
                        'signzy' => null,
                        'onfido' => null
                    )
                ),
                'catalog_data' => array()
            ),
        );
    }
}
