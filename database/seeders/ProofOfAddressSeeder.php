<?php

namespace Fintech\MetaData\Seeders;

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
                            'citybank' => '1',
                            'emqapi' => null,
                            'transfast' => 'tenancy-contract',
                            'valyou' => null,
                            'islamibank' => null,
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
                            'citybank' => '9',
                            'emqapi' => null,
                            'transfast' => 'utility-bill',
                            'valyou' => null,
                            'islamibank' => null,
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
                            'citybank' => '3',
                            'emqapi' => null,
                            'transfast' => 'bank-statement',
                            'valyou' => null,
                            'islamibank' => null,
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
                            'citybank' => '5',
                            'emqapi' => null,
                            'transfast' => 'credit-card-statement',
                            'valyou' => null,
                            'islamibank' => null,
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
                            'citybank' => '9',
                            'emqapi' => null,
                            'transfast' => 'telephone-bill',
                            'valyou' => null,
                            'islamibank' => null,
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
