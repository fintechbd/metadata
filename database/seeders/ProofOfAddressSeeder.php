<?php

namespace Fintech\MetaData\Seeders;

use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class ProofOfAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $entry) {
            $entry['type'] = CatalogType::ProofOfAddress->value;
            $entry['enabled'] = false;
            MetaData::catalog()->create($entry);
        }
    }

    private function data(): array
    {
        return array(
            array(
                'name' => 'Tenancy Contract',
                'code' => 'tenancy-contract',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'argani' => null,
                            'city_bank' => '1',
                            'emq_api' => null,
                            'trans_fast' => 'tenancy-contract',
                            'valyou' => null,
                            'islami_bank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'tenancy-contract',
                            'signzy' => null,
                            'onfido' => 'tenancy-contract',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(),
            ),
            array(
                'name' => 'Utility Bill',
                'code' => 'utility-bill',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'argani' => null,
                            'city_bank' => '9',
                            'emq_api' => null,
                            'trans_fast' => 'utility-bill',
                            'valyou' => null,
                            'islami_bank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'utility-bill',
                            'signzy' => null,
                            'onfido' => 'utility-bill',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(),
            ),
            array(
                'name' => 'Bank Statement',
                'code' => 'bank-statement',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'argani' => null,
                            'city_bank' => '3',
                            'emq_api' => null,
                            'trans_fast' => 'bank-statement',
                            'valyou' => null,
                            'islami_bank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'bank-statement',
                            'signzy' => null,
                            'onfido' => 'bank-statement',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(),
            ),
            array(
                'name' => 'Credit Card Statement',
                'code' => 'credit-card-statement',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'argani' => null,
                            'city_bank' => '5',
                            'emq_api' => null,
                            'trans_fast' => 'credit-card-statement',
                            'valyou' => null,
                            'islami_bank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'credit-card-statement',
                            'signzy' => null,
                            'onfido' => 'credit-card-statement',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '2',
                ),
                'countries' => array(
                    56, 107, 129, 161, 174, 187, 208, 224,),
            ),
            array(
                'name' => 'Telephone Bill',
                'code' => 'telephone-bill',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'argani' => null,
                            'city_bank' => '9',
                            'emq_api' => null,
                            'trans_fast' => 'telephone-bill',
                            'valyou' => null,
                            'islami_bank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'telephone-bill',
                            'signzy' => null,
                            'onfido' => 'telephone-bill',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(
                    99, 169,),
            )
        );
    }
}
