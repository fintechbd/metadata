<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $occupation) {
            MetaData::occupation()->create($occupation);
        }
    }

    private function data()
    {
        return array(
            array('id' => '1','country_id' => NULL,'name' => 'Accountant','code' => 'accountant','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:10:17','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '2','country_id' => NULL,'name' => 'Agent','code' => 'agent','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:10:38','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '3','country_id' => NULL,'name' => 'Athlete','code' => 'athlete','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:10:52','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '4','country_id' => NULL,'name' => 'Auditor','code' => 'auditor','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:11:00','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '5','country_id' => NULL,'name' => 'Bank Officer','code' => 'bank-officer','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '6','country_id' => NULL,'name' => 'Beautician','code' => 'beautician','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:11:13','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '7','country_id' => NULL,'name' => 'Bell Boy','code' => 'bell-boy','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:11:24','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '8','country_id' => NULL,'name' => 'Business Visa','code' => 'business-visa','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '9','country_id' => NULL,'name' => 'Businessman Business Woman','code' => 'businessman-business-woman','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:11:41','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '10','country_id' => NULL,'name' => 'Caddy','code' => 'caddy','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:11:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '11','country_id' => NULL,'name' => 'Cargo Freight Assistant','code' => 'cargo-freight-assistant','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:11:59','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '12','country_id' => NULL,'name' => 'Cashier','code' => 'cashier','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:12:09','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '13','country_id' => NULL,'name' => 'Chef','code' => 'chef','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:12:19','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '14','country_id' => NULL,'name' => 'Civil Servant','code' => 'civil-servant','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '15','country_id' => NULL,'name' => 'Cleaner','code' => 'cleaner','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '16','country_id' => NULL,'name' => 'Clerk','code' => 'clerk','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:12:35','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '17','country_id' => NULL,'name' => 'Coach','code' => 'coach','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:13:01','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '18','country_id' => NULL,'name' => 'Construction Worker','code' => 'construction-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '19','country_id' => NULL,'name' => 'Consultant','code' => 'consultant','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '20','country_id' => NULL,'name' => 'Cook','code' => 'cook','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:13:13','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '21','country_id' => NULL,'name' => 'Doctor','code' => 'doctor','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '22','country_id' => NULL,'name' => 'Driver','code' => 'driver','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '23','country_id' => NULL,'name' => 'Engineer','code' => 'engineer','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '24','country_id' => NULL,'name' => 'Entertainer','code' => 'entertainer','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-11-22 22:13:28','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '25','country_id' => NULL,'name' => 'Factory Worker','code' => 'factory-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '26','country_id' => NULL,'name' => 'Garden Worker','code' => 'garden-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:50','updated_at' => '2020-08-28 07:48:50','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '27','country_id' => NULL,'name' => 'General Worker','code' => 'general-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '28','country_id' => NULL,'name' => 'House Wife','code' => 'house-wife','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '29','country_id' => NULL,'name' => 'It Related Fields','code' => 'it-related-fields','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '30','country_id' => NULL,'name' => 'Labourer','code' => 'labourer','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '31','country_id' => NULL,'name' => 'Lecturer','code' => 'lecturer','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '32','country_id' => NULL,'name' => 'Maid','code' => 'maid','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '33','country_id' => NULL,'name' => 'Manager','code' => 'manager','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '34','country_id' => NULL,'name' => 'Nurse','code' => 'nurse','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '35','country_id' => NULL,'name' => 'Outsourced Worker','code' => 'outsourced-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '36','country_id' => NULL,'name' => 'Pilot','code' => 'pilot','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-11-22 22:13:49','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '37','country_id' => NULL,'name' => 'Plantation Worker','code' => 'plantation-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '38','country_id' => NULL,'name' => 'Port Worker','code' => 'port-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '39','country_id' => NULL,'name' => 'Process','code' => 'process','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-11-19 00:39:56','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '40','country_id' => NULL,'name' => 'Professional Visa','code' => 'professional-visa','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '41','country_id' => NULL,'name' => 'Resturant Worker','code' => 'resturant-worker','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-11-22 22:14:11','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '42','country_id' => NULL,'name' => 'Retail Shop Owner','code' => 'retail-shop-owner','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '43','country_id' => NULL,'name' => 'Retail Whosaler Worker','code' => 'retail-whosaler-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '44','country_id' => NULL,'name' => 'Security Guard','code' => 'security-guard','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '45','country_id' => NULL,'name' => 'Self Employed','code' => 'self-employed','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '46','country_id' => NULL,'name' => 'Store Keeper','code' => 'store-keeper','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '47','country_id' => NULL,'name' => 'Student','code' => 'student','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '48','country_id' => NULL,'name' => 'Supervisor','code' => 'supervisor','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '49','country_id' => NULL,'name' => 'Tailor','code' => 'tailor','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-11-22 22:14:38','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '50','country_id' => NULL,'name' => 'Technician','code' => 'technician','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-11-22 22:14:46','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '51','country_id' => NULL,'name' => 'Textile Worker','code' => 'textile-worker','enabled' => '0','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-11-22 22:14:55','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '52','country_id' => NULL,'name' => 'Trader','code' => 'trader','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-08-28 07:48:51','updated_at' => '2020-08-28 07:48:51','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '53','country_id' => NULL,'name' => 'Marine Shipyard','code' => 'marine-shipyard','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2020-09-18 01:14:37','updated_at' => '2020-11-17 19:29:03','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '54','country_id' => NULL,'name' => 'Agriculture','code' => 'agriculture','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '55','country_id' => NULL,'name' => 'Freelance Profession','code' => 'freelance-profession','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '56','country_id' => NULL,'name' => 'Government Officer','code' => 'government-officer','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '57','country_id' => NULL,'name' => 'Housewife','code' => 'housewife','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '58','country_id' => NULL,'name' => 'Lawyer','code' => 'lawyer','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '59','country_id' => NULL,'name' => 'Office Worker','code' => 'office-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '60','country_id' => NULL,'name' => 'Other','code' => 'other','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '61','country_id' => NULL,'name' => 'Public Employee','code' => 'public-employee','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '62','country_id' => NULL,'name' => 'Retirement','code' => 'retirement','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '63','country_id' => NULL,'name' => 'Self-Employed','code' => 'self-employed','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '64','country_id' => NULL,'name' => 'Teacher','code' => 'teacher','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '65','country_id' => NULL,'name' => 'Unemployed','code' => 'unemployed','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '66','country_id' => NULL,'name' => 'Hospitality Worker','code' => 'hospitality-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '67','country_id' => NULL,'name' => 'Security Services','code' => 'security-services','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '68','country_id' => NULL,'name' => 'Domestic Worker','code' => 'domestic-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL),
            array('id' => '69','country_id' => NULL,'name' => 'Retail Worker','code' => 'retail-worker','enabled' => '1','occupation_data' => NULL,'creator_id' => NULL,'editor_id' => NULL,'destroyer_id' => NULL,'restorer_id' => NULL,'created_at' => '2022-01-01 13:45:20','updated_at' => '2022-01-01 13:45:20','deleted_at' => NULL,'restored_at' => NULL)
        );
    }
}
