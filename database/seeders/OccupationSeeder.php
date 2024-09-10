<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $entry) {
            MetaData::occupation()->create($entry);
        }
    }

    private function data(): array
    {
        return array(
            array(
                'name' => 'Accountant',
                'code' => 'accountant',
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
                'name' => 'Athlete',
                'code' => 'athlete',
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
                'name' => 'Auditor',
                'code' => 'auditor',
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
                'name' => 'Bank Officer',
                'code' => 'bank-officer',
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
                'name' => 'Beautician',
                'code' => 'beautician',
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
                'name' => 'Bell Boy',
                'code' => 'bell-boy',
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
                'name' => 'Business Visa',
                'code' => 'business-visa',
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
                'name' => 'Businessman Business Woman',
                'code' => 'businessman-business-woman',
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
                'name' => 'Caddy',
                'code' => 'caddy',
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
                'name' => 'Cargo Freight Assistant',
                'code' => 'cargo-freight-assistant',
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
                'name' => 'Cashier',
                'code' => 'cashier',
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
                'name' => 'Chef',
                'code' => 'chef',
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
                'name' => 'Civil Servant',
                'code' => 'civil-servant',
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
                'name' => 'Cleaner',
                'code' => 'cleaner',
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
                'name' => 'Clerk',
                'code' => 'clerk',
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
                'name' => 'Coach',
                'code' => 'coach',
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
                'name' => 'Construction Worker',
                'code' => 'construction-worker',
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
                'name' => 'Consultant',
                'code' => 'consultant',
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
                'name' => 'Cook',
                'code' => 'cook',
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
                'name' => 'Doctor',
                'code' => 'doctor',
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
                'name' => 'Driver',
                'code' => 'driver',
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
                'name' => 'Engineer',
                'code' => 'engineer',
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
                'name' => 'Entertainer',
                'code' => 'entertainer',
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
                'name' => 'Factory Worker',
                'code' => 'factory-worker',
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
                'name' => 'Garden Worker',
                'code' => 'garden-worker',
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
                'name' => 'General Worker',
                'code' => 'general-worker',
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
                'name' => 'House Wife',
                'code' => 'house-wife',
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
                'name' => 'It Related Fields',
                'code' => 'it-related-fields',
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
                'name' => 'Labourer',
                'code' => 'labourer',
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
                'name' => 'Lecturer',
                'code' => 'lecturer',
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
                'name' => 'Maid',
                'code' => 'maid',
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
                'name' => 'Manager',
                'code' => 'manager',
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
                'name' => 'Nurse',
                'code' => 'nurse',
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
                'name' => 'Outsourced Worker',
                'code' => 'outsourced-worker',
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
                'name' => 'Pilot',
                'code' => 'pilot',
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
                'name' => 'Plantation Worker',
                'code' => 'plantation-worker',
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
                'name' => 'Port Worker',
                'code' => 'port-worker',
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
                'name' => 'Process',
                'code' => 'process',
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
                'name' => 'Professional Visa',
                'code' => 'professional-visa',
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
                'name' => 'Resturant Worker',
                'code' => 'resturant-worker',
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
                'name' => 'Retail Shop Owner',
                'code' => 'retail-shop-owner',
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
                'name' => 'Retail Whosaler Worker',
                'code' => 'retail-whosaler-worker',
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
                'name' => 'Security Guard',
                'code' => 'security-guard',
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
                'name' => 'Self Employed',
                'code' => 'self-employed',
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
                'name' => 'Store Keeper',
                'code' => 'store-keeper',
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
                'name' => 'Student',
                'code' => 'student',
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
                'name' => 'Supervisor',
                'code' => 'supervisor',
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
                'name' => 'Tailor',
                'code' => 'tailor',
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
                'name' => 'Technician',
                'code' => 'technician',
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
                'name' => 'Textile Worker',
                'code' => 'textile-worker',
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
                'name' => 'Trader',
                'code' => 'trader',
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
                'name' => 'Marine Shipyard',
                'code' => 'marine-shipyard',
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
                'name' => 'Agriculture',
                'code' => 'agriculture',
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
                'name' => 'Freelance Profession',
                'code' => 'freelance-profession',
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
                'name' => 'Government Officer',
                'code' => 'government-officer',
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
                'name' => 'Housewife',
                'code' => 'housewife',
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
                'name' => 'Lawyer',
                'code' => 'lawyer',
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
                'name' => 'Office Worker',
                'code' => 'office-worker',
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
                'name' => 'Other',
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
            array(
                'name' => 'Public Employee',
                'code' => 'public-employee',
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
                'name' => 'Retirement',
                'code' => 'retirement',
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
                'name' => 'Teacher',
                'code' => 'teacher',
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
                'name' => 'Unemployed',
                'code' => 'unemployed',
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
                'name' => 'Hospitality Worker',
                'code' => 'hospitality-worker',
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
                'name' => 'Security Services',
                'code' => 'security-services',
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
                'name' => 'Domestic Worker',
                'code' => 'domestic-worker',
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
                'name' => 'Retail Worker',
                'code' => 'retail-worker',
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
