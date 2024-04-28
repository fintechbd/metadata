<?php

namespace Fintech\MetaData\Seeders;

use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countryIds = range(1, 250);
        foreach ($this->data() as $entry) {
            $entry['countries'] = $countryIds;
            $entry['type'] = CatalogType::MaritalStatus->value;
            $entry['enabled'] = false;
            MetaData::catalog()->create($entry);
        }

    }

    private function data()
    {
        return [
            array(
                'name' => 'Unmarried',
                'code' => 'unmarried',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => 'unmarried',
                        'city_bank' => 'unmarried',
                        'emq_api' => 'unmarried',
                        'trans_fast' => 'unmarried',
                        'valyou' => 'unmarried',
                        'islami_bank' => 'unmarried',
                    ),
                    'ekyc' => array(
                        'shufti_pro' => null,
                        'signzy' => null,
                        'onfido' => null,
                    ),
                ),
                'catalog_data' => array(),
            ),
            array(
                'name' => 'Married',
                'code' => 'married',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => 'married',
                        'city_bank' => 'married',
                        'emq_api' => 'married',
                        'trans_fast' => 'married',
                        'valyou' => 'married',
                        'islami_bank' => 'married',
                    ),
                    'ekyc' => array(
                        'shufti_pro' => null,
                        'signzy' => null,
                        'onfido' => null,
                    ),
                ),
                'catalog_data' => array(),
            ),
        ];
    }
}
