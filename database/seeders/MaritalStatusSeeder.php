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
        foreach ($this->data() as $entry) {
            $entry['type'] = CatalogType::MaritalStatus->value;
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
                        'citybank' => 'unmarried',
                        'emqapi' => 'unmarried',
                        'transfast' => 'unmarried',
                        'valyou' => 'unmarried',
                        'islamibank' => 'unmarried',
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
                        'citybank' => 'married',
                        'emqapi' => 'married',
                        'transfast' => 'married',
                        'valyou' => 'married',
                        'islamibank' => 'married',
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
