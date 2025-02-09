<?php

namespace Fintech\MetaData\Seeders;

use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class BusinessIndustrySeeder extends Seeder
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
                'name' => 'Tangible Goods',
                'code' => 'tangible-goods',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => 'tangible-goods',
                        'citybank' => 'tangible-goods',
                        'emqapi' => 'tangible-goods',
                        'transfast' => 'tangible-goods',
                        'valyou' => 'tangible-goods',
                        'islamibank' => 'tangible-goods',
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
                'name' => 'Intangible Goods',
                'code' => 'intangible-goods',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => 'intangible-goods',
                        'citybank' => 'intangible-goods',
                        'emqapi' => 'intangible-goods',
                        'transfast' => 'intangible-goods',
                        'valyou' => 'intangible-goods',
                        'islamibank' => 'intangible-goods',
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
