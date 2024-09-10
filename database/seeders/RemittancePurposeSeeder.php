<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class RemittancePurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $entry) {
            MetaData::remittancePurpose()->create($entry);
        }
    }

    private function data(): array
    {
        return array(
            array(
                'name' => 'Build Acquisition Renovation Property',
                'code' => 'build-acquisition-renovation-property',
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
                'name' => 'Business Travel',
                'code' => 'business-travel',
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
                'name' => 'Buying Goods From Suppliers',
                'code' => 'buying-goods-from-suppliers',
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
                'name' => 'Compensation',
                'code' => 'compensation',
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
                'name' => 'Educational Expenses',
                'code' => 'educational-expenses',
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
                'name' => 'Family Maintenance or Savings',
                'code' => 'family-maintenance-or-savings',
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
                'name' => 'Grants And Gifts',
                'code' => 'grants-and-gifts',
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
                'name' => 'Insurance Premium',
                'code' => 'insurance-premium',
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
                'name' => 'Investment In Equity Shares',
                'code' => 'investment-in-equity-shares',
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
                'name' => 'Investment In Real Estate',
                'code' => 'investment-in-real-estate',
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
                'name' => 'Investment In Securities',
                'code' => 'investment-in-securities',
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
                'name' => 'Medical Expenses',
                'code' => 'medical-expenses',
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
                'name' => 'Pay Employee Salary',
                'code' => 'pay-employee-salary',
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
                'name' => 'Payment To Foreign Worker Agency',
                'code' => 'payment-to-foreign-worker-agency',
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
                'name' => 'Personal Travels Tours',
                'code' => 'personal-travels-and-tours',
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
                'name' => 'Religious Festival',
                'code' => 'religious-festival',
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
                'name' => 'Rental Payment',
                'code' => 'rental-payment',
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
                'name' => 'Repatriation Of Business Profits',
                'code' => 'repatriation-of-business-profits',
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
                'name' => 'Repayment Of Loans',
                'code' => 'repayment-of-loans',
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
                'name' => 'Tax Payment',
                'code' => 'tax-payment',
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
                'name' => 'Travel And Transportation Expenses',
                'code' => 'travel-and-transportation-expenses',
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
                'name' => 'Family or Living Expense',
                'code' => 'family-or-living-expense',
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
                'name' => 'Charity Donation',
                'code' => 'charity-donation',
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
                'name' => 'Payment For Services',
                'code' => 'payment-for-services',
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
                'name' => 'Travel Expenses',
                'code' => 'travel-expenses',
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
                'name' => 'Personal Asset Allocation',
                'code' => 'personal-asset-allocation',
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
                'name' => 'Payment For Goods',
                'code' => 'payment-for-goods',
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
                'name' => 'Capital Transfer',
                'code' => 'capital-transfer',
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
                'name' => 'Employee Payroll',
                'code' => 'employee-payroll',
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
                'name' => 'Goods Trade',
                'code' => 'goods-trade',
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
                'name' => 'Services Trade',
                'code' => 'services-trade',
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
                'name' => 'Return Of Export Trade',
                'code' => 'return-of-export-trade',
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
