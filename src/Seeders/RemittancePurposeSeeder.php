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
        foreach ($this->data() as $remittancePurpose) {
            MetaData::remittancePurpose()->create($remittancePurpose);
        }
    }

    private function data()
    {
        return array(
            array('id' => '1', 'country_id' => null, 'name' => 'Build Acquisition Renovation Property', 'code' => 'build-acquisition-renovation-property', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:53:30'),
            array('id' => '2', 'country_id' => null, 'name' => 'Business Travel', 'code' => 'business-travel', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:53:34'),
            array('id' => '3', 'country_id' => null, 'name' => 'Buying Goods From Suppliers', 'code' => 'buying-goods-from-suppliers', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:53:38'),
            array('id' => '4', 'country_id' => null, 'name' => 'Compensation', 'code' => 'compensation', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:53:44'),
            array('id' => '5', 'country_id' => null, 'name' => 'Educational Expenses', 'code' => 'educational-expenses', 'enabled' => '1', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2022-03-22 16:29:01'),
            array('id' => '6', 'country_id' => null, 'name' => 'Family Maintenance or Savings', 'code' => 'family-maintenance-or-savings', 'enabled' => '1', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2022-02-06 21:31:31'),
            array('id' => '7', 'country_id' => null, 'name' => 'Grants And Gifts', 'code' => 'grants-and-gifts', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:53:47'),
            array('id' => '8', 'country_id' => null, 'name' => 'Insurance Premium', 'code' => 'insurance-premium', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:53:51'),
            array('id' => '9', 'country_id' => null, 'name' => 'Investment In Equity Shares', 'code' => 'investment-in-equity-shares', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2021-12-16 09:35:46'),
            array('id' => '10', 'country_id' => null, 'name' => 'Investment In Real Estate', 'code' => 'investment-in-real-estate', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:53:59'),
            array('id' => '11', 'country_id' => null, 'name' => 'Investment In Securities', 'code' => 'investment-in-securities', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:54:03'),
            array('id' => '12', 'country_id' => null, 'name' => 'Medical Expenses', 'code' => 'medical-expenses', 'enabled' => '1', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2022-02-06 21:31:47'),
            array('id' => '13', 'country_id' => null, 'name' => 'Pay Employee Salary', 'code' => 'pay-employee-salary', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:54:07'),
            array('id' => '14', 'country_id' => null, 'name' => 'Payment To Foreign Worker Agency', 'code' => 'payment-to-foreign-worker-agency', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:54:11'),
            array('id' => '15', 'country_id' => null, 'name' => 'Personal Travels Tours', 'code' => 'personal-travels-and-tours', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:54:15'),
            array('id' => '16', 'country_id' => null, 'name' => 'Religious Festival', 'code' => 'religious-festival', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:54:19'),
            array('id' => '17', 'country_id' => null, 'name' => 'Rental Payment', 'code' => 'rental-payment', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:54:23'),
            array('id' => '18', 'country_id' => null, 'name' => 'Repatriation Of Business Profits', 'code' => 'repatriation-of-business-profits', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2020-09-15 16:54:27'),
            array('id' => '19', 'country_id' => null, 'name' => 'Repayment Of Loans', 'code' => 'repayment-of-loans', 'enabled' => '1', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:52', 'updated_at' => '2022-02-06 21:31:39'),
            array('id' => '20', 'country_id' => null, 'name' => 'Tax Payment', 'code' => 'tax-payment', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:53', 'updated_at' => '2020-09-15 16:54:30'),
            array('id' => '21', 'country_id' => null, 'name' => 'Travel And Transportation Expenses', 'code' => 'travel-and-transportation-expenses', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2020-08-28 07:48:53', 'updated_at' => '2020-09-15 16:54:35'),
            array('id' => '22', 'country_id' => null, 'name' => 'Family or Living Expense', 'code' => 'family-or-living-expense', 'enabled' => '1', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:43', 'updated_at' => '2022-02-06 21:31:35'),
            array('id' => '23', 'country_id' => null, 'name' => 'Charity Donation', 'code' => 'charity-donation', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:44', 'updated_at' => '2022-03-22 16:26:38'),
            array('id' => '24', 'country_id' => null, 'name' => 'Payment For Services', 'code' => 'payment-for-services', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:44', 'updated_at' => '2021-12-16 09:35:44'),
            array('id' => '25', 'country_id' => null, 'name' => 'Travel Expenses', 'code' => 'travel-expenses', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:44', 'updated_at' => '2021-12-16 09:35:44'),
            array('id' => '26', 'country_id' => null, 'name' => 'Personal Asset Allocation', 'code' => 'personal-asset-allocation', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:45', 'updated_at' => '2021-12-16 09:35:45'),
            array('id' => '27', 'country_id' => null, 'name' => 'Payment For Goods', 'code' => 'payment-for-goods', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:45', 'updated_at' => '2021-12-16 09:35:45'),
            array('id' => '28', 'country_id' => null, 'name' => 'Capital Transfer', 'code' => 'capital-transfer', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:45', 'updated_at' => '2021-12-16 09:35:45'),
            array('id' => '29', 'country_id' => null, 'name' => 'Employee Payroll', 'code' => 'employee-payroll', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:46', 'updated_at' => '2021-12-16 09:35:46'),
            array('id' => '30', 'country_id' => null, 'name' => 'Goods Trade', 'code' => 'goods-trade', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:46', 'updated_at' => '2021-12-16 09:35:46'),
            array('id' => '31', 'country_id' => null, 'name' => 'Services Trade', 'code' => 'services-trade', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:47', 'updated_at' => '2021-12-16 09:35:47'),
            array('id' => '32', 'country_id' => null, 'name' => 'Return Of Export Trade', 'code' => 'return-of-export-trade', 'enabled' => '0', 'remittance_purpose_data' => null,'created_at' => '2021-12-16 09:35:47', 'updated_at' => '2021-12-16 09:35:47')
        );
    }
}
