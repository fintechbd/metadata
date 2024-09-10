<?php

namespace Fintech\MetaData\Seeders;

use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $entry) {
            MetaData::relation()->create($entry);
        }
    }

    private function data(): array
    {
        return array(
            array(
                'name' => 'Aunt',
                'code' => 'aunt',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Brother',
                'code' => 'brother',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Brother In Law',
                'code' => 'brother-in-law',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Business Associate',
                'code' => 'business-associate',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Cousin',
                'code' => 'cousin',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Daughter',
                'code' => 'daughter',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Employee',
                'code' => 'employee',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Father',
                'code' => 'father',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Father In Law',
                'code' => 'father-in-law',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Friend',
                'code' => 'friend',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Grand Father',
                'code' => 'grand-father',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Grand Mother',
                'code' => 'grand-mother',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Husband',
                'code' => 'husband',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Mother',
                'code' => 'mother',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Mother In Law',
                'code' => 'mother-in-law',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Nephew',
                'code' => 'nephew',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Niece',
                'code' => 'niece',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Non Related',
                'code' => 'non-related',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Relative',
                'code' => 'relative',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Self',
                'code' => 'self',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Sister',
                'code' => 'sister',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Sister In Law',
                'code' => 'sister-in-law',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Son',
                'code' => 'son',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Uncle',
                'code' => 'uncle',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Wife',
                'code' => 'wife',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Parents',
                'code' => 'parents',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Siblings',
                'code' => 'siblings',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Other Relatives',
                'code' => 'other-relatives',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Vendor',
                'code' => 'vendor',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Supplier',
                'code' => 'supplier',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Spouse',
                'code' => 'spouse',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Friends',
                'code' => 'friends',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Employer',
                'code' => 'employer',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Child',
                'code' => 'child',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Business Partner',
                'code' => 'business-partner',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Agent',
                'code' => 'agent',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Creditor',
                'code' => 'creditor',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
            array(
                'name' => 'Others',
                'code' => 'other',
                'vendor_code' =>
                    array(
                        'remit' =>
                            array(
                                'argani' => null,
                                'citybank' => null,
                                'emqapi' => null,
                                'transfast' => null,
                                'valyou' => null,
                                'islamibank' => null,
                            ),
                        'ekyc' =>
                            array(
                                'shufti_pro' => null,
                                'signzy' => null,
                                'onfido' => null,
                            ),
                    ),
                'catalog_data' =>
                    array(),
            ),
        );
    }
}
