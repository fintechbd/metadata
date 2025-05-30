<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class IdDocTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $entry) {
            MetaData::idDocType()->create($entry);
        }
    }

    private function data(): array
    {
        return array(
            array(
                'name' => 'Passport',
                'code' => 'passport',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '1',
                            'emqapi' => null,
                            'transfast' => 'passport',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'passport',
                            'signzy' => 'Passport',
                            'onfido' => 'passport',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(
                    1, 11, 15, 17, 18, 25, 32, 36, 44, 56, 79, 96, 99, 100, 109, 101, 102, 104, 107, 108, 112, 113, 114, 115, 116, 118, 129, 146, 130, 142, 149, 161, 162, 164, 169, 174, 187, 192, 200, 207, 208, 209, 211, 212, 219, 224, 229, 232, 237, 19,),
            ),
            array(
                'name' => 'Driving Licence',
                'code' => 'driving-licence',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '9',
                            'emqapi' => null,
                            'transfast' => 'driving_license',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'driving_license',
                            'signzy' => 'Driving License',
                            'onfido' => 'driving_licence',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '2',
                ),
                'countries' => array(
                    11, 15, 18, 32, 44, 56, 79, 96, 100, 104, 107, 108, 113, 114, 129, 142, 161, 162, 169, 174, 187, 192, 200, 208, 211, 224, 232, 237, 19,),
            ),
            array(
                'name' => 'National Identity Card',
                'code' => 'national-identity-card',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '3',
                            'emqapi' => null,
                            'transfast' => 'id_card',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'id_card',
                            'signzy' => 'Other Id Card',
                            'onfido' => 'national_identity_card',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '2',
                ),
                'countries' => array(
                    15, 17, 18, 32, 44, 56, 79, 96, 99, 100, 107, 108, 113, 114, 129, 161, 162, 169, 174, 192, 208, 211, 224, 232, 19,),
            ),
            array(
                'name' => 'Residence Permit',
                'code' => 'residence-permit',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '5',
                            'emqapi' => null,
                            'transfast' => 'residence_permit',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'residence_permit',
                            'signzy' => 'Residence Id Card',
                            'onfido' => 'residence_permit',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '2',
                ),
                'countries' => array(
                    56, 107, 129, 161, 174, 187, 208, 224,),
            ),
            array(
                'name' => 'Voter Id',
                'code' => 'voter-id',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '9',
                            'emqapi' => null,
                            'transfast' => 'voter_id',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'voter_id',
                            'signzy' => 'Other Id Card',
                            'onfido' => 'voter_id',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(
                    99, 169,),
            ),
            array(
                'name' => 'Tax Id',
                'code' => 'tax-id',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '9',
                            'emqapi' => null,
                            'transfast' => 'tax_id',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'tax_id',
                            'signzy' => 'Other Id Card',
                            'onfido' => 'tax_id',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(
                    99,),
            ),
            array(
                'name' => 'Social Security Card',
                'code' => 'social-security-card',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '4',
                            'emqapi' => null,
                            'transfast' => 'social_security_card',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'social_security_card',
                            'signzy' => 'Social Security Card',
                            'onfido' => 'social_security_card',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(
                    107, 169,),
            ),
            array(
                'name' => 'Postal Identity Card',
                'code' => 'postal-identity-card',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '9',
                            'emqapi' => null,
                            'transfast' => 'postal_identity_card',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'postal_identity_card',
                            'signzy' => 'Other Id Card',
                            'onfido' => 'postal_identity_card',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(
                    107, 169,),
            ),
            array(
                'name' => 'Professional Qualification Card',
                'code' => 'professional-qualification-card',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '9',
                            'emqapi' => null,
                            'transfast' => 'professional_qualification_card',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'professional_qualification_card',
                            'signzy' => 'Other Id Card',
                            'onfido' => 'professional_qualification_card',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '1',
                ),
                'countries' => array(
                    169,),
            ),
            array(
                'name' => 'Work Permit',
                'code' => 'work-permit',
                'vendor_code' => array(
                    'remit' =>
                        array(
                            'agranibank' => null,
                            'citybank' => '2',
                            'emqapi' => null,
                            'transfast' => 'work_permit',
                            'valyou' => null,
                            'islamibank' => null,
                        ),
                    'ekyc' =>
                        array(
                            'shufti_pro' => 'work_permit',
                            'signzy' => 'Other Id Card',
                            'onfido' => 'work_permit',
                        ),
                ),
                'catalog_data' => array(
                    'sides' => '2',
                ),
                'countries' => array(
                    192,),
            ),
        );
    }
}
