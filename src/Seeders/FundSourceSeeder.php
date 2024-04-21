<?php

namespace Fintech\MetaData\Seeders;

use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class FundSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countryIds = range(1, 250);
        foreach ($this->data() as $entry) {
            $entry['countries'] = $countryIds;
            $entry['type'] = CatalogType::FundSource->value;
            $entry['enabled'] = false;
            MetaData::fundSource()->create($entry);
        }
    }

    private function data(): array
    {
        return array(
            array(
                'name' => 'Allowance And Commission',
                'code' => 'allowance-and-commission',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Bonus',
                'code' => 'bonus',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Borrow From Friends',
                'code' => 'borrow-from-friends',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Business',
                'code' => 'business',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Company Compensation',
                'code' => 'company-compensation',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Gift',
                'code' => 'gift',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Insurance Claim',
                'code' => 'insurance-claim',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Loan From Employer',
                'code' => 'loan-from-employer',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Loan From Financial Institution',
                'code' => 'loan-from-financial-institution',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Lottery',
                'code' => 'lottery',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Pension',
                'code' => 'pension',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Salary',
                'code' => 'salary',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Salary Borrow From Friends',
                'code' => 'salary-borrow-from-friends',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Salary Loan From Employer',
                'code' => 'salary-loan-from-employer',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Salary Saving  Borrow From Friends',
                'code' => 'salary-saving-borrow-from-friends',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Salary Saving  Loan From Employer',
                'code' => 'salary-saving-loan-from-employer',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Saving Borrow From Friends',
                'code' => 'saving-borrow-from-friends',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Saving Loan From Employer',
                'code' => 'saving-loan-from-employer'
            ),
            array(
                'name' => 'Savings',
                'code' => 'savings',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Scholarship',
                'code' => 'scholarship',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Share Money With Friends',
                'code' => 'share-money-with-friends',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Share Money With Relative',
                'code' => 'share-money-with-relative',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Share Money With Spouse',
                'code' => 'share-money-with-spouse',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Bank Deposit',
                'code' => 'bank-deposit',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Grant From Family Or Friends',
                'code' => 'grant-from-family-or-friends',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Redemption Of Investment Products',
                'code' => 'redemption-of-investment-products',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Allowance For Family Maintenance',
                'code' => 'allowance-for-family-maintenance',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Real Estate',
                'code' => 'real-estate',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Revenue',
                'code' => 'revenue',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Borrow',
                'code' => 'borrow',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
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
                'name' => 'Others',
                'code' => 'others',
                'vendor_code' => array(
                    'remit' => array(
                        'argani' => null,
                        'city_bank' => null,
                        'emq_api' => null,
                        'trans_fast' => null,
                        'valyou' => null,
                        'islami_bank' => null
                    ),
                    'ekyc' => array(
                        'shufti_pro' => null,
                        'signzy' => null,
                        'onfido' => null
                    )
                ),
                'catalog_data' => array()
            )
        );
    }
}
