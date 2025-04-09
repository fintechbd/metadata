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
        foreach ($this->data() as $entry) {
            $entry['type'] = CatalogType::Gender->value;
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
                        'agranibank' => null,
                        'citybank' => null,
                        'emqapi' => null,
                        'transfast' => null,
                        'valyou' => null,
                        'islamibank' => null
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
                        'agranibank' => null,
                        'citybank' => null,
                        'emqapi' => null,
                        'transfast' => null,
                        'valyou' => null,
                        'islamibank' => null
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
                        'agranibank' => null,
                        'citybank' => null,
                        'emqapi' => null,
                        'transfast' => null,
                        'valyou' => null,
                        'islamibank' => null
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
