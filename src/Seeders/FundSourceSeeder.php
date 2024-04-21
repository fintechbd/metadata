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
            MetaData::fundSource()->create($entry);
        }
    }

    private function data(): array
    {
        return array(
            array('type' => CatalogType::FundSource->value, 'name' => 'Allowance And Commission', 'code' => 'allowance-and-commission', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Bonus', 'code' => 'bonus', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Borrow From Friends', 'code' => 'borrow-from-friends', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Business', 'code' => 'business', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Company Compensation', 'code' => 'company-compensation', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Gift', 'code' => 'gift', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Insurance Claim', 'code' => 'insurance-claim', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Loan From Employer', 'code' => 'loan-from-employer', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Loan From Financial Institution', 'code' => 'loan-from-financial-institution', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Lottery', 'code' => 'lottery', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Pension', 'code' => 'pension', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Salary', 'code' => 'salary', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Salary Borrow From Friends', 'code' => 'salary-borrow-from-friends', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Salary Loan From Employer', 'code' => 'salary-loan-from-employer', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Salary Saving  Borrow From Friends', 'code' => 'salary-saving-borrow-from-friends', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Salary Saving  Loan From Employer', 'code' => 'salary-saving-loan-from-employer', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Saving Borrow From Friends', 'code' => 'saving-borrow-from-friends', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Saving Loan From Employer', 'code' => 'saving-loan-from-employer', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Savings', 'code' => 'savings', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Scholarship', 'code' => 'scholarship', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Share Money With Friends', 'code' => 'share-money-with-friends', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Share Money With Relative', 'code' => 'share-money-with-relative', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Share Money With Spouse', 'code' => 'share-money-with-spouse', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Bank Deposit', 'code' => 'bank-deposit', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Grant From Family Or Friends', 'code' => 'grant-from-family-or-friends', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Redemption Of Investment Products', 'code' => 'redemption-of-investment-products', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Allowance For Family Maintenance', 'code' => 'allowance-for-family-maintenance', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Real Estate', 'code' => 'real-estate', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Revenue', 'code' => 'revenue', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Borrow', 'code' => 'borrow', 'enabled' => true),
            array('type' => CatalogType::FundSource->value, 'name' => 'Others', 'code' => 'others', 'enabled' => true)
        );
    }
}
