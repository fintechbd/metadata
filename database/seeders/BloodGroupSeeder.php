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
        foreach ($this->data() as $entry) {
            $entry['type'] = CatalogType::BloodGroup->value;
            $entry['enabled'] = false;
            MetaData::catalog()->create($entry);
        }
    }

    private function data(): array
    {
        return array(
            array(
                'name' => 'A+ve',
                'code' => 'a+',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
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
            array(
                'name' => 'A-ve',
                'code' => 'a-',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
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
            array(
                'name' => 'B+ve',
                'code' => 'b+',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
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
            array(
                'name' => 'B-ve',
                'code' => 'b-',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
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
            array(
                'name' => 'O+ve',
                'code' => 'o+',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
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
            array(
                'name' => 'O-ve',
                'code' => 'o-',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
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
            array(
                'name' => 'AB+ve',
                'code' => 'ab+',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
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
            array(
                'name' => 'AB-ve',
                'code' => 'ab-',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
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
