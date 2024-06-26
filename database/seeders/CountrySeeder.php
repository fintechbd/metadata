<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $country) {
            if ($country['logo_png'] != null) {
                $image_png = __DIR__ . '/../../resources/img/country_logo_png/' . $country['logo_png'];
                $country['logo_png'] = 'data:image/png;base64,' . base64_encode(file_get_contents($image_png));
            }
            if ($country['logo_svg'] != null) {
                $image_svg = __DIR__ . '/../../resources/img/country_logo_svg/' . $country['logo_svg'];
                $country['logo_svg'] = 'data:image/svg+xml;base64,' . base64_encode(file_get_contents($image_svg));
            }
            MetaData::country()->create($country);
        }
    }

    private function data()
    {
        return array(
            array(
                'id' => '1',
                'name' => 'Afghanistan',
                'iso3' => 'AFG',
                'iso2' => 'AF',
                'phone_code' => '93',
                'capital' => 'Kabul',
                'currency' => 'AFN',
                'currency_name' => 'Afghan afghani',
                'currency_symbol' => '؋',
                'nationality' => 'Afghan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Kabul',
                            'gmtOffset' => 16200,
                            'gmtOffsetName' => 'UTC+04:30',
                            'abbreviation' => 'AFT',
                            'tzName' => 'Afghanistan Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '33.00000000',
                'longitude' => '65.00000000',
                'emoji' => '🇦🇫',
                'enabled' => true,
                'logo_svg' => 'country_logo_1.svg',
                'logo_png' => 'country_logo_1.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Afghanistan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '2',
                'name' => 'Aland Islands',
                'iso3' => 'ALA',
                'iso2' => 'AX',
                'phone_code' => '+358-18',
                'capital' => 'Mariehamn',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Aland Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Mariehamn',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '60.11666700',
                'longitude' => '19.90000000',
                'emoji' => '🇦🇽',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Aland Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '3',
                'name' => 'Albania',
                'iso3' => 'ALB',
                'iso2' => 'AL',
                'phone_code' => '355',
                'capital' => 'Tirana',
                'currency' => 'ALL',
                'currency_name' => 'Albanian lek',
                'currency_symbol' => 'Lek',
                'nationality' => 'Albanian ',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Tirane',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '41.00000000',
                'longitude' => '20.00000000',
                'emoji' => '🇦🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_2.svg',
                'logo_png' => 'country_logo_2.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Albania',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '4',
                'name' => 'Algeria',
                'iso3' => 'DZA',
                'iso2' => 'DZ',
                'phone_code' => '213',
                'capital' => 'Algiers',
                'currency' => 'DZD',
                'currency_name' => 'Algerian dinar',
                'currency_symbol' => 'دج',
                'nationality' => 'Algerian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Algiers',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '28.00000000',
                'longitude' => '3.00000000',
                'emoji' => '🇩🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_3.svg',
                'logo_png' => 'country_logo_3.png',
                'region_id' => '1',
                'subregion_id' => '1',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Algeria',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '5',
                'name' => 'American Samoa',
                'iso3' => 'ASM',
                'iso2' => 'AS',
                'phone_code' => '+1-684',
                'capital' => 'Pago Pago',
                'currency' => 'USD',
                'currency_name' => 'US Dollar',
                'currency_symbol' => '$',
                'nationality' => 'American Samoan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Pago_Pago',
                            'gmtOffset' => -39600,
                            'gmtOffsetName' => 'UTC-11:00',
                            'abbreviation' => 'SST',
                            'tzName' => 'Samoa Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-14.33333333',
                'longitude' => '-170.00000000',
                'emoji' => '🇦🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_4.svg',
                'logo_png' => 'country_logo_4.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'American Samoa',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '6',
                'name' => 'Andorra',
                'iso3' => 'AND',
                'iso2' => 'AD',
                'phone_code' => '376',
                'capital' => 'Andorra la Vella',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Andorran',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Andorra',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '42.50000000',
                'longitude' => '1.50000000',
                'emoji' => '🇦🇩',
                'enabled' => true,
                'logo_svg' => 'country_logo_5.svg',
                'logo_png' => 'country_logo_5.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Andorra',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '7',
                'name' => 'Angola',
                'iso3' => 'AGO',
                'iso2' => 'AO',
                'phone_code' => '244',
                'capital' => 'Luanda',
                'currency' => 'AOA',
                'currency_name' => 'Angolan kwanza',
                'currency_symbol' => 'Kz',
                'nationality' => 'Angolan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Luanda',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-12.50000000',
                'longitude' => '18.50000000',
                'emoji' => '🇦🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_6.svg',
                'logo_png' => 'country_logo_6.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Angola',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '8',
                'name' => 'Anguilla',
                'iso3' => 'AIA',
                'iso2' => 'AI',
                'phone_code' => '+1-264',
                'capital' => 'The Valley',
                'currency' => 'XCD',
                'currency_name' => 'East Caribbean dollar',
                'currency_symbol' => '$',
                'nationality' => 'Anguillan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Anguilla',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.25000000',
                'longitude' => '-63.16666666',
                'emoji' => '🇦🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_7.svg',
                'logo_png' => 'country_logo_7.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Anguilla',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '9',
                'name' => 'Antarctica',
                'iso3' => 'ATA',
                'iso2' => 'AQ',
                'phone_code' => '672',
                'capital' => '',
                'currency' => 'AAD',
                'currency_name' => 'Antarctican dollar',
                'currency_symbol' => '$',
                'nationality' => 'Antarctic',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Antarctica/Casey',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'AWST',
                            'tzName' => 'Australian Western Standard Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/Davis',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'DAVT',
                            'tzName' => 'Davis Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/DumontDUrville',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'DDUT',
                            'tzName' => 'Dumont d\'Urville Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/Mawson',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'MAWT',
                            'tzName' => 'Mawson Station Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/McMurdo',
                            'gmtOffset' => 46800,
                            'gmtOffsetName' => 'UTC+13:00',
                            'abbreviation' => 'NZDT',
                            'tzName' => 'New Zealand Daylight Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/Palmer',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'CLST',
                            'tzName' => 'Chile Summer Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/Rothera',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ROTT',
                            'tzName' => 'Rothera Research Station Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/Syowa',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'SYOT',
                            'tzName' => 'Showa Station Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/Troll',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                        array(
                            'zoneName' => 'Antarctica/Vostok',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'VOST',
                            'tzName' => 'Vostok Station Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-74.65000000',
                'longitude' => '4.48000000',
                'emoji' => '🇦🇶',
                'enabled' => true,
                'logo_svg' => 'country_logo_8.svg',
                'logo_png' => 'country_logo_8.png',
                'region_id' => '6',
                'subregion_id' => null,
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Antarctica',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '10',
                'name' => 'Antigua And Barbuda',
                'iso3' => 'ATG',
                'iso2' => 'AG',
                'phone_code' => '+1-268',
                'capital' => 'St. John\'s',
                'currency' => 'XCD',
                'currency_name' => 'Eastern Caribbean dollar',
                'currency_symbol' => '$',
                'nationality' => 'Antiguan or Barbudan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Antigua',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '17.05000000',
                'longitude' => '-61.80000000',
                'emoji' => '🇦🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_9.svg',
                'logo_png' => 'country_logo_9.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Antigua And Barbuda',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '11',
                'name' => 'Argentina',
                'iso3' => 'ARG',
                'iso2' => 'AR',
                'phone_code' => '54',
                'capital' => 'Buenos Aires',
                'currency' => 'ARS',
                'currency_name' => 'Argentine peso',
                'currency_symbol' => '$',
                'nationality' => 'Argentine',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Argentina/Buenos_Aires',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/Catamarca',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/Cordoba',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/Jujuy',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/La_Rioja',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/Mendoza',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/Rio_Gallegos',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/Salta',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/San_Juan',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/San_Luis',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/Tucuman',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                        array(
                            'zoneName' => 'America/Argentina/Ushuaia',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'ART',
                            'tzName' => 'Argentina Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-34.00000000',
                'longitude' => '-64.00000000',
                'emoji' => '🇦🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_10.svg',
                'logo_png' => 'country_logo_10.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Argentina',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '12',
                'name' => 'Armenia',
                'iso3' => 'ARM',
                'iso2' => 'AM',
                'phone_code' => '374',
                'capital' => 'Yerevan',
                'currency' => 'AMD',
                'currency_name' => 'Armenian dram',
                'currency_symbol' => '֏',
                'nationality' => 'Armenian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Yerevan',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'AMT',
                            'tzName' => 'Armenia Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '40.00000000',
                'longitude' => '45.00000000',
                'emoji' => '🇦🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_11.svg',
                'logo_png' => 'country_logo_11.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Armenia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '13',
                'name' => 'Aruba',
                'iso3' => 'ABW',
                'iso2' => 'AW',
                'phone_code' => '297',
                'capital' => 'Oranjestad',
                'currency' => 'AWG',
                'currency_name' => 'Aruban florin',
                'currency_symbol' => 'ƒ',
                'nationality' => 'Aruban',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Aruba',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '12.50000000',
                'longitude' => '-69.96666666',
                'emoji' => '🇦🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_12.svg',
                'logo_png' => 'country_logo_12.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Aruba',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '14',
                'name' => 'Australia',
                'iso3' => 'AUS',
                'iso2' => 'AU',
                'phone_code' => '61',
                'capital' => 'Canberra',
                'currency' => 'AUD',
                'currency_name' => 'Australian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Australian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Antarctica/Macquarie',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'MIST',
                            'tzName' => 'Macquarie Island Station Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Adelaide',
                            'gmtOffset' => 37800,
                            'gmtOffsetName' => 'UTC+10:30',
                            'abbreviation' => 'ACDT',
                            'tzName' => 'Australian Central Daylight Saving Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Brisbane',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'AEST',
                            'tzName' => 'Australian Eastern Standard Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Broken_Hill',
                            'gmtOffset' => 37800,
                            'gmtOffsetName' => 'UTC+10:30',
                            'abbreviation' => 'ACDT',
                            'tzName' => 'Australian Central Daylight Saving Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Currie',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'AEDT',
                            'tzName' => 'Australian Eastern Daylight Saving Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Darwin',
                            'gmtOffset' => 34200,
                            'gmtOffsetName' => 'UTC+09:30',
                            'abbreviation' => 'ACST',
                            'tzName' => 'Australian Central Standard Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Eucla',
                            'gmtOffset' => 31500,
                            'gmtOffsetName' => 'UTC+08:45',
                            'abbreviation' => 'ACWST',
                            'tzName' => 'Australian Central Western Standard Time (Unofficial)',
                        ),
                        array(
                            'zoneName' => 'Australia/Hobart',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'AEDT',
                            'tzName' => 'Australian Eastern Daylight Saving Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Lindeman',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'AEST',
                            'tzName' => 'Australian Eastern Standard Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Lord_Howe',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'LHST',
                            'tzName' => 'Lord Howe Summer Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Melbourne',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'AEDT',
                            'tzName' => 'Australian Eastern Daylight Saving Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Perth',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'AWST',
                            'tzName' => 'Australian Western Standard Time',
                        ),
                        array(
                            'zoneName' => 'Australia/Sydney',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'AEDT',
                            'tzName' => 'Australian Eastern Daylight Saving Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => true,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-27.00000000',
                'longitude' => '133.00000000',
                'emoji' => '🇦🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_13.svg',
                'logo_png' => 'country_logo_13.png',
                'region_id' => '5',
                'subregion_id' => '19',
                'language' =>
                    array(
                        'code' => 'en',
                        'name' => 'Australia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '15',
                'name' => 'Austria',
                'iso3' => 'AUT',
                'iso2' => 'AT',
                'phone_code' => '43',
                'capital' => 'Vienna',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Austrian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Vienna',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '47.33333333',
                'longitude' => '13.33333333',
                'emoji' => '🇦🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_14.svg',
                'logo_png' => 'country_logo_14.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Austria',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '16',
                'name' => 'Azerbaijan',
                'iso3' => 'AZE',
                'iso2' => 'AZ',
                'phone_code' => '994',
                'capital' => 'Baku',
                'currency' => 'AZN',
                'currency_name' => 'Azerbaijani manat',
                'currency_symbol' => 'm',
                'nationality' => 'Azerbaijani, Azeri',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Baku',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'AZT',
                            'tzName' => 'Azerbaijan Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '40.50000000',
                'longitude' => '47.50000000',
                'emoji' => '🇦🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_15.svg',
                'logo_png' => 'country_logo_15.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Azerbaijan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '17',
                'name' => 'The Bahamas',
                'iso3' => 'BHS',
                'iso2' => 'BS',
                'phone_code' => '+1-242',
                'capital' => 'Nassau',
                'currency' => 'BSD',
                'currency_name' => 'Bahamian dollar',
                'currency_symbol' => 'B$',
                'nationality' => 'Bahamian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Nassau',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America)',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '24.25000000',
                'longitude' => '-76.00000000',
                'emoji' => '🇧🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_16.svg',
                'logo_png' => 'country_logo_16.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'The Bahamas',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '18',
                'name' => 'Bahrain',
                'iso3' => 'BHR',
                'iso2' => 'BH',
                'phone_code' => '973',
                'capital' => 'Manama',
                'currency' => 'BHD',
                'currency_name' => 'Bahraini dinar',
                'currency_symbol' => '.د.ب',
                'nationality' => 'Bahraini',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Bahrain',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Arabia Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '26.00000000',
                'longitude' => '50.55000000',
                'emoji' => '🇧🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_17.svg',
                'logo_png' => 'country_logo_17.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Bahrain',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '19',
                'name' => 'Bangladesh',
                'iso3' => 'BGD',
                'iso2' => 'BD',
                'phone_code' => '880',
                'capital' => 'Dhaka',
                'currency' => 'BDT',
                'currency_name' => 'Bangladeshi taka',
                'currency_symbol' => '৳',
                'nationality' => 'Bangladeshi',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Dhaka',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'BDT',
                            'tzName' => 'Bangladesh Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => true,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '24.00000000',
                'longitude' => '90.00000000',
                'emoji' => '🇧🇩',
                'enabled' => true,
                'logo_svg' => 'country_logo_18.svg',
                'logo_png' => 'country_logo_18.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => 'bn',
                        'name' => 'Bangla',
                        'native' => "বাংলা",

                    ),
            ),
            array(
                'id' => '20',
                'name' => 'Barbados',
                'iso3' => 'BRB',
                'iso2' => 'BB',
                'phone_code' => '+1-246',
                'capital' => 'Bridgetown',
                'currency' => 'BBD',
                'currency_name' => 'Barbadian dollar',
                'currency_symbol' => 'Bds$',
                'nationality' => 'Barbadian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Barbados',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.16666666',
                'longitude' => '-59.53333333',
                'emoji' => '🇧🇧',
                'enabled' => true,
                'logo_svg' => 'country_logo_19.svg',
                'logo_png' => 'country_logo_19.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Barbados',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '21',
                'name' => 'Belarus',
                'iso3' => 'BLR',
                'iso2' => 'BY',
                'phone_code' => '375',
                'capital' => 'Minsk',
                'currency' => 'BYN',
                'currency_name' => 'Belarusian ruble',
                'currency_symbol' => 'Br',
                'nationality' => 'Belarusian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Minsk',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'MSK',
                            'tzName' => 'Moscow Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '53.00000000',
                'longitude' => '28.00000000',
                'emoji' => '🇧🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_20.svg',
                'logo_png' => 'country_logo_20.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Belarus',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '22',
                'name' => 'Belgium',
                'iso3' => 'BEL',
                'iso2' => 'BE',
                'phone_code' => '32',
                'capital' => 'Brussels',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Belgian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Brussels',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '50.83333333',
                'longitude' => '4.00000000',
                'emoji' => '🇧🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_21.svg',
                'logo_png' => 'country_logo_21.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Belgium',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '23',
                'name' => 'Belize',
                'iso3' => 'BLZ',
                'iso2' => 'BZ',
                'phone_code' => '501',
                'capital' => 'Belmopan',
                'currency' => 'BZD',
                'currency_name' => 'Belize dollar',
                'currency_symbol' => '$',
                'nationality' => 'Belizean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Belize',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America)',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '17.25000000',
                'longitude' => '-88.75000000',
                'emoji' => '🇧🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_22.svg',
                'logo_png' => 'country_logo_22.png',
                'region_id' => '2',
                'subregion_id' => '9',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Belize',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '24',
                'name' => 'Benin',
                'iso3' => 'BEN',
                'iso2' => 'BJ',
                'phone_code' => '229',
                'capital' => 'Porto-Novo',
                'currency' => 'XOF',
                'currency_name' => 'West African CFA franc',
                'currency_symbol' => 'CFA',
                'nationality' => 'Beninese, Beninois',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Porto-Novo',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '9.50000000',
                'longitude' => '2.25000000',
                'emoji' => '🇧🇯',
                'enabled' => true,
                'logo_svg' => 'country_logo_23.svg',
                'logo_png' => 'country_logo_23.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Benin',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '25',
                'name' => 'Bermuda',
                'iso3' => 'BMU',
                'iso2' => 'BM',
                'phone_code' => '+1-441',
                'capital' => 'Hamilton',
                'currency' => 'BMD',
                'currency_name' => 'Bermudian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Bermudian, Bermudan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Atlantic/Bermuda',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '32.33333333',
                'longitude' => '-64.75000000',
                'emoji' => '🇧🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_24.svg',
                'logo_png' => 'country_logo_24.png',
                'region_id' => '2',
                'subregion_id' => '6',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Bermuda',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '26',
                'name' => 'Bhutan',
                'iso3' => 'BTN',
                'iso2' => 'BT',
                'phone_code' => '975',
                'capital' => 'Thimphu',
                'currency' => 'BTN',
                'currency_name' => 'Bhutanese ngultrum',
                'currency_symbol' => 'Nu.',
                'nationality' => 'Bhutanese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Thimphu',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'BTT',
                            'tzName' => 'Bhutan Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '27.50000000',
                'longitude' => '90.50000000',
                'emoji' => '🇧🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_25.svg',
                'logo_png' => 'country_logo_25.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Bhutan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '27',
                'name' => 'Bolivia',
                'iso3' => 'BOL',
                'iso2' => 'BO',
                'phone_code' => '591',
                'capital' => 'Sucre',
                'currency' => 'BOB',
                'currency_name' => 'Bolivian boliviano',
                'currency_symbol' => 'Bs.',
                'nationality' => 'Bolivian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/La_Paz',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'BOT',
                            'tzName' => 'Bolivia Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-17.00000000',
                'longitude' => '-65.00000000',
                'emoji' => '🇧🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_26.svg',
                'logo_png' => 'country_logo_26.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Bolivia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '28',
                'name' => 'Bosnia and Herzegovina',
                'iso3' => 'BIH',
                'iso2' => 'BA',
                'phone_code' => '387',
                'capital' => 'Sarajevo',
                'currency' => 'BAM',
                'currency_name' => 'Bosnia and Herzegovina convertible mark',
                'currency_symbol' => 'KM',
                'nationality' => 'Bosnian or Herzegovinian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Sarajevo',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '44.00000000',
                'longitude' => '18.00000000',
                'emoji' => '🇧🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_27.svg',
                'logo_png' => 'country_logo_27.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Bosnia and Herzegovina',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '29',
                'name' => 'Botswana',
                'iso3' => 'BWA',
                'iso2' => 'BW',
                'phone_code' => '267',
                'capital' => 'Gaborone',
                'currency' => 'BWP',
                'currency_name' => 'Botswana pula',
                'currency_symbol' => 'P',
                'nationality' => 'Motswana, Botswanan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Gaborone',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'CAT',
                            'tzName' => 'Central Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-22.00000000',
                'longitude' => '24.00000000',
                'emoji' => '🇧🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_28.svg',
                'logo_png' => 'country_logo_28.png',
                'region_id' => '1',
                'subregion_id' => '5',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Botswana',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '30',
                'name' => 'Bouvet Island',
                'iso3' => 'BVT',
                'iso2' => 'BV',
                'phone_code' => '0055',
                'capital' => '',
                'currency' => 'NOK',
                'currency_name' => 'Norwegian Krone',
                'currency_symbol' => 'kr',
                'nationality' => 'Bouvet Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Oslo',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-54.43333333',
                'longitude' => '3.40000000',
                'emoji' => '🇧🇻',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => null,
                'subregion_id' => null,
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Bouvet Island',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '31',
                'name' => 'Brazil',
                'iso3' => 'BRA',
                'iso2' => 'BR',
                'phone_code' => '55',
                'capital' => 'Brasilia',
                'currency' => 'BRL',
                'currency_name' => 'Brazilian real',
                'currency_symbol' => 'R$',
                'nationality' => 'Brazilian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Araguaina',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasília Time',
                        ),
                        array(
                            'zoneName' => 'America/Bahia',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasília Time',
                        ),
                        array(
                            'zoneName' => 'America/Belem',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasília Time',
                        ),
                        array(
                            'zoneName' => 'America/Boa_Vista',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AMT',
                            'tzName' => 'Amazon Time (Brazil)[3',
                        ),
                        array(
                            'zoneName' => 'America/Campo_Grande',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AMT',
                            'tzName' => 'Amazon Time (Brazil)[3',
                        ),
                        array(
                            'zoneName' => 'America/Cuiaba',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasilia Time',
                        ),
                        array(
                            'zoneName' => 'America/Eirunepe',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'ACT',
                            'tzName' => 'Acre Time',
                        ),
                        array(
                            'zoneName' => 'America/Fortaleza',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasília Time',
                        ),
                        array(
                            'zoneName' => 'America/Maceio',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasília Time',
                        ),
                        array(
                            'zoneName' => 'America/Manaus',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AMT',
                            'tzName' => 'Amazon Time (Brazil)',
                        ),
                        array(
                            'zoneName' => 'America/Noronha',
                            'gmtOffset' => -7200,
                            'gmtOffsetName' => 'UTC-02:00',
                            'abbreviation' => 'FNT',
                            'tzName' => 'Fernando de Noronha Time',
                        ),
                        array(
                            'zoneName' => 'America/Porto_Velho',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AMT',
                            'tzName' => 'Amazon Time (Brazil)[3',
                        ),
                        array(
                            'zoneName' => 'America/Recife',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasília Time',
                        ),
                        array(
                            'zoneName' => 'America/Rio_Branco',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'ACT',
                            'tzName' => 'Acre Time',
                        ),
                        array(
                            'zoneName' => 'America/Santarem',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasília Time',
                        ),
                        array(
                            'zoneName' => 'America/Sao_Paulo',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'BRT',
                            'tzName' => 'Brasília Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-10.00000000',
                'longitude' => '-55.00000000',
                'emoji' => '🇧🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_30.svg',
                'logo_png' => 'country_logo_30.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Brazil',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '32',
                'name' => 'British Indian Ocean Territory',
                'iso3' => 'IOT',
                'iso2' => 'IO',
                'phone_code' => '246',
                'capital' => 'Diego Garcia',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'BIOT',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Chagos',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'IOT',
                            'tzName' => 'Indian Ocean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-6.00000000',
                'longitude' => '71.50000000',
                'emoji' => '🇮🇴',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'British Indian Ocean Territory',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '33',
                'name' => 'Brunei',
                'iso3' => 'BRN',
                'iso2' => 'BN',
                'phone_code' => '673',
                'capital' => 'Bandar Seri Begawan',
                'currency' => 'BND',
                'currency_name' => 'Brunei dollar',
                'currency_symbol' => 'B$',
                'nationality' => 'Bruneian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Brunei',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'BNT',
                            'tzName' => 'Brunei Darussalam Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '4.50000000',
                'longitude' => '114.66666666',
                'emoji' => '🇧🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_32.svg',
                'logo_png' => 'country_logo_32.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Brunei',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '34',
                'name' => 'Bulgaria',
                'iso3' => 'BGR',
                'iso2' => 'BG',
                'phone_code' => '359',
                'capital' => 'Sofia',
                'currency' => 'BGN',
                'currency_name' => 'Bulgarian lev',
                'currency_symbol' => 'Лв.',
                'nationality' => 'Bulgarian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Sofia',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '43.00000000',
                'longitude' => '25.00000000',
                'emoji' => '🇧🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_33.svg',
                'logo_png' => 'country_logo_33.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Bulgaria',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '35',
                'name' => 'Burkina Faso',
                'iso3' => 'BFA',
                'iso2' => 'BF',
                'phone_code' => '226',
                'capital' => 'Ouagadougou',
                'currency' => 'XOF',
                'currency_name' => 'West African CFA franc',
                'currency_symbol' => 'CFA',
                'nationality' => 'Burkinabe',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Ouagadougou',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.00000000',
                'longitude' => '-2.00000000',
                'emoji' => '🇧🇫',
                'enabled' => true,
                'logo_svg' => 'country_logo_34.svg',
                'logo_png' => 'country_logo_34.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Burkina Faso',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '36',
                'name' => 'Burundi',
                'iso3' => 'BDI',
                'iso2' => 'BI',
                'phone_code' => '257',
                'capital' => 'Bujumbura',
                'currency' => 'BIF',
                'currency_name' => 'Burundian franc',
                'currency_symbol' => 'FBu',
                'nationality' => 'Burundian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Bujumbura',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'CAT',
                            'tzName' => 'Central Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-3.50000000',
                'longitude' => '30.00000000',
                'emoji' => '🇧🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_35.svg',
                'logo_png' => 'country_logo_35.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Burundi',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '37',
                'name' => 'Cambodia',
                'iso3' => 'KHM',
                'iso2' => 'KH',
                'phone_code' => '855',
                'capital' => 'Phnom Penh',
                'currency' => 'KHR',
                'currency_name' => 'Cambodian riel',
                'currency_symbol' => 'KHR',
                'nationality' => 'Cambodian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Phnom_Penh',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'ICT',
                            'tzName' => 'Indochina Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.00000000',
                'longitude' => '105.00000000',
                'emoji' => '🇰🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_36.svg',
                'logo_png' => 'country_logo_36.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cambodia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '38',
                'name' => 'Cameroon',
                'iso3' => 'CMR',
                'iso2' => 'CM',
                'phone_code' => '237',
                'capital' => 'Yaounde',
                'currency' => 'XAF',
                'currency_name' => 'Central African CFA franc',
                'currency_symbol' => 'FCFA',
                'nationality' => 'Cameroonian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Douala',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '6.00000000',
                'longitude' => '12.00000000',
                'emoji' => '🇨🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_37.svg',
                'logo_png' => 'country_logo_37.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cameroon',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '39',
                'name' => 'Canada',
                'iso3' => 'CAN',
                'iso2' => 'CA',
                'phone_code' => '1',
                'capital' => 'Ottawa',
                'currency' => 'CAD',
                'currency_name' => 'Canadian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Canadian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Atikokan',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America)',
                        ),
                        array(
                            'zoneName' => 'America/Blanc-Sablon',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Cambridge_Bay',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America)',
                        ),
                        array(
                            'zoneName' => 'America/Creston',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America)',
                        ),
                        array(
                            'zoneName' => 'America/Dawson',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America)',
                        ),
                        array(
                            'zoneName' => 'America/Dawson_Creek',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America)',
                        ),
                        array(
                            'zoneName' => 'America/Edmonton',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America)',
                        ),
                        array(
                            'zoneName' => 'America/Fort_Nelson',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America)',
                        ),
                        array(
                            'zoneName' => 'America/Glace_Bay',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Goose_Bay',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Halifax',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Inuvik',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Iqaluit',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Moncton',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Nipigon',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Pangnirtung',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Rainy_River',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Rankin_Inlet',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Regina',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Resolute',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/St_Johns',
                            'gmtOffset' => -12600,
                            'gmtOffsetName' => 'UTC-03:30',
                            'abbreviation' => 'NST',
                            'tzName' => 'Newfoundland Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Swift_Current',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Thunder_Bay',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Toronto',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Vancouver',
                            'gmtOffset' => -28800,
                            'gmtOffsetName' => 'UTC-08:00',
                            'abbreviation' => 'PST',
                            'tzName' => 'Pacific Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Whitehorse',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Winnipeg',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Yellowknife',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '60.00000000',
                'longitude' => '-95.00000000',
                'emoji' => '🇨🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_38.svg',
                'logo_png' => 'country_logo_38.png',
                'region_id' => '2',
                'subregion_id' => '6',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Canada',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '40',
                'name' => 'Cape Verde',
                'iso3' => 'CPV',
                'iso2' => 'CV',
                'phone_code' => '238',
                'capital' => 'Praia',
                'currency' => 'CVE',
                'currency_name' => 'Cape Verdean escudo',
                'currency_symbol' => '$',
                'nationality' => 'Verdean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Atlantic/Cape_Verde',
                            'gmtOffset' => -3600,
                            'gmtOffsetName' => 'UTC-01:00',
                            'abbreviation' => 'CVT',
                            'tzName' => 'Cape Verde Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '16.00000000',
                'longitude' => '-24.00000000',
                'emoji' => '🇨🇻',
                'enabled' => true,
                'logo_svg' => 'country_logo_39.svg',
                'logo_png' => 'country_logo_39.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cape Verde',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '41',
                'name' => 'Cayman Islands',
                'iso3' => 'CYM',
                'iso2' => 'KY',
                'phone_code' => '+1-345',
                'capital' => 'George Town',
                'currency' => 'KYD',
                'currency_name' => 'Cayman Islands dollar',
                'currency_symbol' => '$',
                'nationality' => 'Caymanian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Cayman',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '19.50000000',
                'longitude' => '-80.50000000',
                'emoji' => '🇰🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_40.svg',
                'logo_png' => 'country_logo_40.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cayman Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '42',
                'name' => 'Central African Republic',
                'iso3' => 'CAF',
                'iso2' => 'CF',
                'phone_code' => '236',
                'capital' => 'Bangui',
                'currency' => 'XAF',
                'currency_name' => 'Central African CFA franc',
                'currency_symbol' => 'FCFA',
                'nationality' => 'Central African',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Bangui',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '7.00000000',
                'longitude' => '21.00000000',
                'emoji' => '🇨🇫',
                'enabled' => true,
                'logo_svg' => 'country_logo_41.svg',
                'logo_png' => 'country_logo_41.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Central African Republic',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '43',
                'name' => 'Chad',
                'iso3' => 'TCD',
                'iso2' => 'TD',
                'phone_code' => '235',
                'capital' => 'N\'Djamena',
                'currency' => 'XAF',
                'currency_name' => 'Central African CFA franc',
                'currency_symbol' => 'FCFA',
                'nationality' => 'Chadian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Ndjamena',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.00000000',
                'longitude' => '19.00000000',
                'emoji' => '🇹🇩',
                'enabled' => true,
                'logo_svg' => 'country_logo_42.svg',
                'logo_png' => 'country_logo_42.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Chad',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '44',
                'name' => 'Chile',
                'iso3' => 'CHL',
                'iso2' => 'CL',
                'phone_code' => '56',
                'capital' => 'Santiago',
                'currency' => 'CLP',
                'currency_name' => 'Chilean peso',
                'currency_symbol' => '$',
                'nationality' => 'Chilean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Punta_Arenas',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'CLST',
                            'tzName' => 'Chile Summer Time',
                        ),
                        array(
                            'zoneName' => 'America/Santiago',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'CLST',
                            'tzName' => 'Chile Summer Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Easter',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EASST',
                            'tzName' => 'Easter Island Summer Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-30.00000000',
                'longitude' => '-71.00000000',
                'emoji' => '🇨🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_43.svg',
                'logo_png' => 'country_logo_43.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Chile',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '45',
                'name' => 'China',
                'iso3' => 'CHN',
                'iso2' => 'CN',
                'phone_code' => '86',
                'capital' => 'Beijing',
                'currency' => 'CNY',
                'currency_name' => 'Chinese yuan',
                'currency_symbol' => '¥',
                'nationality' => 'Chinese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Shanghai',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'China Standard Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Urumqi',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'XJT',
                            'tzName' => 'China Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => true,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '35.00000000',
                'longitude' => '105.00000000',
                'emoji' => '🇨🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_44.svg',
                'logo_png' => 'country_logo_44.png',
                'region_id' => '3',
                'subregion_id' => '12',
                'language' =>
                    array(
                        'code' => 'zh',
                        'name' => 'China',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '46',
                'name' => 'Christmas Island',
                'iso3' => 'CXR',
                'iso2' => 'CX',
                'phone_code' => '61',
                'capital' => 'Flying Fish Cove',
                'currency' => 'AUD',
                'currency_name' => 'Australian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Christmas Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Christmas',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'CXT',
                            'tzName' => 'Christmas Island Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-10.50000000',
                'longitude' => '105.66666666',
                'emoji' => '🇨🇽',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '5',
                'subregion_id' => '19',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Christmas Island',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '47',
                'name' => 'Cocos (Keeling) Islands',
                'iso3' => 'CCK',
                'iso2' => 'CC',
                'phone_code' => '61',
                'capital' => 'West Island',
                'currency' => 'AUD',
                'currency_name' => 'Australian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Cocos Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Cocos',
                            'gmtOffset' => 23400,
                            'gmtOffsetName' => 'UTC+06:30',
                            'abbreviation' => 'CCT',
                            'tzName' => 'Cocos Islands Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-12.50000000',
                'longitude' => '96.83333333',
                'emoji' => '🇨🇨',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '5',
                'subregion_id' => '19',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cocos (Keeling) Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '48',
                'name' => 'Colombia',
                'iso3' => 'COL',
                'iso2' => 'CO',
                'phone_code' => '57',
                'capital' => 'Bogotá',
                'currency' => 'COP',
                'currency_name' => 'Colombian peso',
                'currency_symbol' => '$',
                'nationality' => 'Colombian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Bogota',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'COT',
                            'tzName' => 'Colombia Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '4.00000000',
                'longitude' => '-72.00000000',
                'emoji' => '🇨🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_47.svg',
                'logo_png' => 'country_logo_47.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Colombia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '49',
                'name' => 'Comoros',
                'iso3' => 'COM',
                'iso2' => 'KM',
                'phone_code' => '269',
                'capital' => 'Moroni',
                'currency' => 'KMF',
                'currency_name' => 'Comorian franc',
                'currency_symbol' => 'CF',
                'nationality' => 'Comoran, Comorian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Comoro',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-12.16666666',
                'longitude' => '44.25000000',
                'emoji' => '🇰🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_48.svg',
                'logo_png' => 'country_logo_48.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Comoros',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '50',
                'name' => 'Congo',
                'iso3' => 'COG',
                'iso2' => 'CG',
                'phone_code' => '242',
                'capital' => 'Brazzaville',
                'currency' => 'XAF',
                'currency_name' => 'Central African CFA franc',
                'currency_symbol' => 'FC',
                'nationality' => 'Congolese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Brazzaville',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-1.00000000',
                'longitude' => '15.00000000',
                'emoji' => '🇨🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_49.svg',
                'logo_png' => 'country_logo_49.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Congo',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '51',
                'name' => 'Democratic Republic of the Congo',
                'iso3' => 'COD',
                'iso2' => 'CD',
                'phone_code' => '243',
                'capital' => 'Kinshasa',
                'currency' => 'CDF',
                'currency_name' => 'Congolese Franc',
                'currency_symbol' => 'FC',
                'nationality' => 'Congolese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Kinshasa',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                        array(
                            'zoneName' => 'Africa/Lubumbashi',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'CAT',
                            'tzName' => 'Central Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '0.00000000',
                'longitude' => '25.00000000',
                'emoji' => '🇨🇩',
                'enabled' => true,
                'logo_svg' => 'country_logo_50.svg',
                'logo_png' => 'country_logo_50.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Democratic Republic of the Congo',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '52',
                'name' => 'Cook Islands',
                'iso3' => 'COK',
                'iso2' => 'CK',
                'phone_code' => '682',
                'capital' => 'Avarua',
                'currency' => 'NZD',
                'currency_name' => 'Cook Islands dollar',
                'currency_symbol' => '$',
                'nationality' => 'Cook Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Rarotonga',
                            'gmtOffset' => -36000,
                            'gmtOffsetName' => 'UTC-10:00',
                            'abbreviation' => 'CKT',
                            'tzName' => 'Cook Island Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-21.23333333',
                'longitude' => '-159.76666666',
                'emoji' => '🇨🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_51.svg',
                'logo_png' => 'country_logo_51.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cook Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '53',
                'name' => 'Costa Rica',
                'iso3' => 'CRI',
                'iso2' => 'CR',
                'phone_code' => '506',
                'capital' => 'San Jose',
                'currency' => 'CRC',
                'currency_name' => 'Costa Rican colón',
                'currency_symbol' => '₡',
                'nationality' => 'Costa Rican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Costa_Rica',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '10.00000000',
                'longitude' => '-84.00000000',
                'emoji' => '🇨🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_52.svg',
                'logo_png' => 'country_logo_52.png',
                'region_id' => '2',
                'subregion_id' => '9',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Costa Rica',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '54',
                'name' => 'Cote D\'Ivoire (Ivory Coast)',
                'iso3' => 'CIV',
                'iso2' => 'CI',
                'phone_code' => '225',
                'capital' => 'Yamoussoukro',
                'currency' => 'XOF',
                'currency_name' => 'West African CFA franc',
                'currency_symbol' => 'CFA',
                'nationality' => 'Ivorian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Abidjan',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '8.00000000',
                'longitude' => '-5.00000000',
                'emoji' => '🇨🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_53.svg',
                'logo_png' => 'country_logo_53.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cote D\'Ivoire (Ivory Coast)',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '55',
                'name' => 'Croatia',
                'iso3' => 'HRV',
                'iso2' => 'HR',
                'phone_code' => '385',
                'capital' => 'Zagreb',
                'currency' => 'HRK',
                'currency_name' => 'Croatian kuna',
                'currency_symbol' => 'kn',
                'nationality' => 'Croatian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Zagreb',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '45.16666666',
                'longitude' => '15.50000000',
                'emoji' => '🇭🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_54.svg',
                'logo_png' => 'country_logo_54.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Croatia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '56',
                'name' => 'Cuba',
                'iso3' => 'CUB',
                'iso2' => 'CU',
                'phone_code' => '53',
                'capital' => 'Havana',
                'currency' => 'CUP',
                'currency_name' => 'Cuban peso',
                'currency_symbol' => '$',
                'nationality' => 'Cuban',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Havana',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Cuba Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '21.50000000',
                'longitude' => '-80.00000000',
                'emoji' => '🇨🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_55.svg',
                'logo_png' => 'country_logo_55.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cuba',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '57',
                'name' => 'Cyprus',
                'iso3' => 'CYP',
                'iso2' => 'CY',
                'phone_code' => '357',
                'capital' => 'Nicosia',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Cypriot',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Famagusta',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Nicosia',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '35.00000000',
                'longitude' => '33.00000000',
                'emoji' => '🇨🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_56.svg',
                'logo_png' => 'country_logo_56.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Cyprus',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '58',
                'name' => 'Czech Republic',
                'iso3' => 'CZE',
                'iso2' => 'CZ',
                'phone_code' => '420',
                'capital' => 'Prague',
                'currency' => 'CZK',
                'currency_name' => 'Czech koruna',
                'currency_symbol' => 'Kč',
                'nationality' => 'Czech',
                'timezones' => null,
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '49.75000000',
                'longitude' => '15.50000000',
                'emoji' => '🇨🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_57.svg',
                'logo_png' => 'country_logo_57.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Czech Republic',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '59',
                'name' => 'Denmark',
                'iso3' => 'DNK',
                'iso2' => 'DK',
                'phone_code' => '45',
                'capital' => 'Copenhagen',
                'currency' => 'DKK',
                'currency_name' => 'Danish krone',
                'currency_symbol' => 'Kr.',
                'nationality' => 'Danish',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Copenhagen',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '56.00000000',
                'longitude' => '10.00000000',
                'emoji' => '🇩🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_58.svg',
                'logo_png' => 'country_logo_58.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Denmark',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '60',
                'name' => 'Djibouti',
                'iso3' => 'DJI',
                'iso2' => 'DJ',
                'phone_code' => '253',
                'capital' => 'Djibouti',
                'currency' => 'DJF',
                'currency_name' => 'Djiboutian franc',
                'currency_symbol' => 'Fdj',
                'nationality' => 'Djiboutian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Djibouti',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '11.50000000',
                'longitude' => '43.00000000',
                'emoji' => '🇩🇯',
                'enabled' => true,
                'logo_svg' => 'country_logo_59.svg',
                'logo_png' => 'country_logo_59.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Djibouti',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '61',
                'name' => 'Dominica',
                'iso3' => 'DMA',
                'iso2' => 'DM',
                'phone_code' => '+1-767',
                'capital' => 'Roseau',
                'currency' => 'XCD',
                'currency_name' => 'Eastern Caribbean dollar',
                'currency_symbol' => '$',
                'nationality' => 'Dominican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Dominica',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.41666666',
                'longitude' => '-61.33333333',
                'emoji' => '🇩🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_60.svg',
                'logo_png' => 'country_logo_60.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Dominica',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '62',
                'name' => 'Dominican Republic',
                'iso3' => 'DOM',
                'iso2' => 'DO',
                'phone_code' => '+1-809 and 1-829',
                'capital' => 'Santo Domingo',
                'currency' => 'DOP',
                'currency_name' => 'Dominican peso',
                'currency_symbol' => '$',
                'nationality' => 'Dominican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Santo_Domingo',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '19.00000000',
                'longitude' => '-70.66666666',
                'emoji' => '🇩🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_61.svg',
                'logo_png' => 'country_logo_61.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Dominican Republic',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '63',
                'name' => 'East Timor',
                'iso3' => 'TLS',
                'iso2' => 'TL',
                'phone_code' => '670',
                'capital' => 'Dili',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Timorese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Dili',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'TLT',
                            'tzName' => 'Timor Leste Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-8.83333333',
                'longitude' => '125.91666666',
                'emoji' => '🇹🇱',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'East Timor',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '64',
                'name' => 'Ecuador',
                'iso3' => 'ECU',
                'iso2' => 'EC',
                'phone_code' => '593',
                'capital' => 'Quito',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Ecuadorian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Guayaquil',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'ECT',
                            'tzName' => 'Ecuador Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Galapagos',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'GALT',
                            'tzName' => 'Galápagos Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-2.00000000',
                'longitude' => '-77.50000000',
                'emoji' => '🇪🇨',
                'enabled' => true,
                'logo_svg' => 'country_logo_62.svg',
                'logo_png' => 'country_logo_62.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Ecuador',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '65',
                'name' => 'Egypt',
                'iso3' => 'EGY',
                'iso2' => 'EG',
                'phone_code' => '20',
                'capital' => 'Cairo',
                'currency' => 'EGP',
                'currency_name' => 'Egyptian pound',
                'currency_symbol' => 'ج.م',
                'nationality' => 'Egyptian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Cairo',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '27.00000000',
                'longitude' => '30.00000000',
                'emoji' => '🇪🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_63.svg',
                'logo_png' => 'country_logo_63.png',
                'region_id' => '1',
                'subregion_id' => '1',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Egypt',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '66',
                'name' => 'El Salvador',
                'iso3' => 'SLV',
                'iso2' => 'SV',
                'phone_code' => '503',
                'capital' => 'San Salvador',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Salvadoran',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/El_Salvador',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.83333333',
                'longitude' => '-88.91666666',
                'emoji' => '🇸🇻',
                'enabled' => true,
                'logo_svg' => 'country_logo_64.svg',
                'logo_png' => 'country_logo_64.png',
                'region_id' => '2',
                'subregion_id' => '9',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'El Salvador',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '67',
                'name' => 'Equatorial Guinea',
                'iso3' => 'GNQ',
                'iso2' => 'GQ',
                'phone_code' => '240',
                'capital' => 'Malabo',
                'currency' => 'XAF',
                'currency_name' => 'Central African CFA franc',
                'currency_symbol' => 'FCFA',
                'nationality' => 'Equatorial Guinean, Equatoguinean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Malabo',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '2.00000000',
                'longitude' => '10.00000000',
                'emoji' => '🇬🇶',
                'enabled' => true,
                'logo_svg' => 'country_logo_65.svg',
                'logo_png' => 'country_logo_65.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Equatorial Guinea',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '68',
                'name' => 'Eritrea',
                'iso3' => 'ERI',
                'iso2' => 'ER',
                'phone_code' => '291',
                'capital' => 'Asmara',
                'currency' => 'ERN',
                'currency_name' => 'Eritrean nakfa',
                'currency_symbol' => 'Nfk',
                'nationality' => 'Eritrean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Asmara',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.00000000',
                'longitude' => '39.00000000',
                'emoji' => '🇪🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_66.svg',
                'logo_png' => 'country_logo_66.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Eritrea',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '69',
                'name' => 'Estonia',
                'iso3' => 'EST',
                'iso2' => 'EE',
                'phone_code' => '372',
                'capital' => 'Tallinn',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Estonian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Tallinn',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '59.00000000',
                'longitude' => '26.00000000',
                'emoji' => '🇪🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_67.svg',
                'logo_png' => 'country_logo_67.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Estonia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '70',
                'name' => 'Ethiopia',
                'iso3' => 'ETH',
                'iso2' => 'ET',
                'phone_code' => '251',
                'capital' => 'Addis Ababa',
                'currency' => 'ETB',
                'currency_name' => 'Ethiopian birr',
                'currency_symbol' => 'Nkf',
                'nationality' => 'Ethiopian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Addis_Ababa',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '8.00000000',
                'longitude' => '38.00000000',
                'emoji' => '🇪🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_68.svg',
                'logo_png' => 'country_logo_68.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Ethiopia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '71',
                'name' => 'Falkland Islands',
                'iso3' => 'FLK',
                'iso2' => 'FK',
                'phone_code' => '500',
                'capital' => 'Stanley',
                'currency' => 'FKP',
                'currency_name' => 'Falkland Islands pound',
                'currency_symbol' => '£',
                'nationality' => 'Falkland Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Atlantic/Stanley',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'FKST',
                            'tzName' => 'Falkland Islands Summer Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-51.75000000',
                'longitude' => '-59.00000000',
                'emoji' => '🇫🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_69.svg',
                'logo_png' => 'country_logo_69.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Falkland Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '72',
                'name' => 'Faroe Islands',
                'iso3' => 'FRO',
                'iso2' => 'FO',
                'phone_code' => '298',
                'capital' => 'Torshavn',
                'currency' => 'DKK',
                'currency_name' => 'Danish krone',
                'currency_symbol' => 'Kr.',
                'nationality' => 'Faroese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Atlantic/Faroe',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'WET',
                            'tzName' => 'Western European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '62.00000000',
                'longitude' => '-7.00000000',
                'emoji' => '🇫🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_70.svg',
                'logo_png' => 'country_logo_70.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Faroe Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '73',
                'name' => 'Fiji Islands',
                'iso3' => 'FJI',
                'iso2' => 'FJ',
                'phone_code' => '679',
                'capital' => 'Suva',
                'currency' => 'FJD',
                'currency_name' => 'Fijian dollar',
                'currency_symbol' => 'FJ$',
                'nationality' => 'Fijian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Fiji',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'FJT',
                            'tzName' => 'Fiji Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-18.00000000',
                'longitude' => '175.00000000',
                'emoji' => '🇫🇯',
                'enabled' => true,
                'logo_svg' => 'country_logo_71.svg',
                'logo_png' => 'country_logo_71.png',
                'region_id' => '5',
                'subregion_id' => '20',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Fiji Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '74',
                'name' => 'Finland',
                'iso3' => 'FIN',
                'iso2' => 'FI',
                'phone_code' => '358',
                'capital' => 'Helsinki',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Finnish',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Helsinki',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '64.00000000',
                'longitude' => '26.00000000',
                'emoji' => '🇫🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_72.svg',
                'logo_png' => 'country_logo_72.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Finland',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '75',
                'name' => 'France',
                'iso3' => 'FRA',
                'iso2' => 'FR',
                'phone_code' => '33',
                'capital' => 'Paris',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'French',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Paris',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '46.00000000',
                'longitude' => '2.00000000',
                'emoji' => '🇫🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_73.svg',
                'logo_png' => 'country_logo_73.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'France',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '76',
                'name' => 'French Guiana',
                'iso3' => 'GUF',
                'iso2' => 'GF',
                'phone_code' => '594',
                'capital' => 'Cayenne',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'French Guianese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Cayenne',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'GFT',
                            'tzName' => 'French Guiana Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '4.00000000',
                'longitude' => '-53.00000000',
                'emoji' => '🇬🇫',
                'enabled' => true,
                'logo_svg' => 'country_logo_74.svg',
                'logo_png' => 'country_logo_74.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'French Guiana',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '77',
                'name' => 'French Polynesia',
                'iso3' => 'PYF',
                'iso2' => 'PF',
                'phone_code' => '689',
                'capital' => 'Papeete',
                'currency' => 'XPF',
                'currency_name' => 'CFP franc',
                'currency_symbol' => '₣',
                'nationality' => 'French Polynesia',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Gambier',
                            'gmtOffset' => -32400,
                            'gmtOffsetName' => 'UTC-09:00',
                            'abbreviation' => 'GAMT',
                            'tzName' => 'Gambier Islands Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Marquesas',
                            'gmtOffset' => -34200,
                            'gmtOffsetName' => 'UTC-09:30',
                            'abbreviation' => 'MART',
                            'tzName' => 'Marquesas Islands Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Tahiti',
                            'gmtOffset' => -36000,
                            'gmtOffsetName' => 'UTC-10:00',
                            'abbreviation' => 'TAHT',
                            'tzName' => 'Tahiti Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-15.00000000',
                'longitude' => '-140.00000000',
                'emoji' => '🇵🇫',
                'enabled' => true,
                'logo_svg' => 'country_logo_75.svg',
                'logo_png' => 'country_logo_75.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'French Polynesia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '78',
                'name' => 'French Southern Territories',
                'iso3' => 'ATF',
                'iso2' => 'TF',
                'phone_code' => '262',
                'capital' => 'Port-aux-Francais',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'French Southern Territories',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Kerguelen',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'TFT',
                            'tzName' => 'French Southern and Antarctic Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-49.25000000',
                'longitude' => '69.16700000',
                'emoji' => '🇹🇫',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '1',
                'subregion_id' => '5',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'French Southern Territories',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '79',
                'name' => 'Gabon',
                'iso3' => 'GAB',
                'iso2' => 'GA',
                'phone_code' => '241',
                'capital' => 'Libreville',
                'currency' => 'XAF',
                'currency_name' => 'Central African CFA franc',
                'currency_symbol' => 'FCFA',
                'nationality' => 'Gabonese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Libreville',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-1.00000000',
                'longitude' => '11.75000000',
                'emoji' => '🇬🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_77.svg',
                'logo_png' => 'country_logo_77.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Gabon',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '80',
                'name' => 'Gambia The',
                'iso3' => 'GMB',
                'iso2' => 'GM',
                'phone_code' => '220',
                'capital' => 'Banjul',
                'currency' => 'GMD',
                'currency_name' => 'Gambian dalasi',
                'currency_symbol' => 'D',
                'nationality' => 'Gambian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Banjul',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.46666666',
                'longitude' => '-16.56666666',
                'emoji' => '🇬🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_78.svg',
                'logo_png' => 'country_logo_78.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Gambia The',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '81',
                'name' => 'Georgia',
                'iso3' => 'GEO',
                'iso2' => 'GE',
                'phone_code' => '995',
                'capital' => 'Tbilisi',
                'currency' => 'GEL',
                'currency_name' => 'Georgian lari',
                'currency_symbol' => 'ლ',
                'nationality' => 'Georgian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Tbilisi',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'GET',
                            'tzName' => 'Georgia Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '42.00000000',
                'longitude' => '43.50000000',
                'emoji' => '🇬🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_79.svg',
                'logo_png' => 'country_logo_79.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Georgia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '82',
                'name' => 'Germany',
                'iso3' => 'DEU',
                'iso2' => 'DE',
                'phone_code' => '49',
                'capital' => 'Berlin',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'German',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Berlin',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Busingen',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '51.00000000',
                'longitude' => '9.00000000',
                'emoji' => '🇩🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_80.svg',
                'logo_png' => 'country_logo_80.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Germany',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '83',
                'name' => 'Ghana',
                'iso3' => 'GHA',
                'iso2' => 'GH',
                'phone_code' => '233',
                'capital' => 'Accra',
                'currency' => 'GHS',
                'currency_name' => 'Ghanaian cedi',
                'currency_symbol' => 'GH₵',
                'nationality' => 'Ghanaian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Accra',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '8.00000000',
                'longitude' => '-2.00000000',
                'emoji' => '🇬🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_81.svg',
                'logo_png' => 'country_logo_81.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Ghana',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '84',
                'name' => 'Gibraltar',
                'iso3' => 'GIB',
                'iso2' => 'GI',
                'phone_code' => '350',
                'capital' => 'Gibraltar',
                'currency' => 'GIP',
                'currency_name' => 'Gibraltar pound',
                'currency_symbol' => '£',
                'nationality' => 'Gibraltar',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Gibraltar',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '36.13333333',
                'longitude' => '-5.35000000',
                'emoji' => '🇬🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_82.svg',
                'logo_png' => 'country_logo_82.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Gibraltar',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '85',
                'name' => 'Greece',
                'iso3' => 'GRC',
                'iso2' => 'GR',
                'phone_code' => '30',
                'capital' => 'Athens',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Greek, Hellenic',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Athens',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '39.00000000',
                'longitude' => '22.00000000',
                'emoji' => '🇬🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_83.svg',
                'logo_png' => 'country_logo_83.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Greece',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '86',
                'name' => 'Greenland',
                'iso3' => 'GRL',
                'iso2' => 'GL',
                'phone_code' => '299',
                'capital' => 'Nuuk',
                'currency' => 'DKK',
                'currency_name' => 'Danish krone',
                'currency_symbol' => 'Kr.',
                'nationality' => 'Greenlandic',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Danmarkshavn',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                        array(
                            'zoneName' => 'America/Nuuk',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'WGT',
                            'tzName' => 'West Greenland Time',
                        ),
                        array(
                            'zoneName' => 'America/Scoresbysund',
                            'gmtOffset' => -3600,
                            'gmtOffsetName' => 'UTC-01:00',
                            'abbreviation' => 'EGT',
                            'tzName' => 'Eastern Greenland Time',
                        ),
                        array(
                            'zoneName' => 'America/Thule',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '72.00000000',
                'longitude' => '-40.00000000',
                'emoji' => '🇬🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_84.svg',
                'logo_png' => 'country_logo_84.png',
                'region_id' => '2',
                'subregion_id' => '6',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Greenland',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '87',
                'name' => 'Grenada',
                'iso3' => 'GRD',
                'iso2' => 'GD',
                'phone_code' => '+1-473',
                'capital' => 'St. George\'s',
                'currency' => 'XCD',
                'currency_name' => 'Eastern Caribbean dollar',
                'currency_symbol' => '$',
                'nationality' => 'Grenadian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Grenada',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '12.11666666',
                'longitude' => '-61.66666666',
                'emoji' => '🇬🇩',
                'enabled' => true,
                'logo_svg' => 'country_logo_85.svg',
                'logo_png' => 'country_logo_85.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Grenada',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '88',
                'name' => 'Guadeloupe',
                'iso3' => 'GLP',
                'iso2' => 'GP',
                'phone_code' => '590',
                'capital' => 'Basse-Terre',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Guadeloupe',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Guadeloupe',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '16.25000000',
                'longitude' => '-61.58333300',
                'emoji' => '🇬🇵',
                'enabled' => true,
                'logo_svg' => 'country_logo_86.svg',
                'logo_png' => 'country_logo_86.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Guadeloupe',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '89',
                'name' => 'Guam',
                'iso3' => 'GUM',
                'iso2' => 'GU',
                'phone_code' => '+1-671',
                'capital' => 'Hagatna',
                'currency' => 'USD',
                'currency_name' => 'US Dollar',
                'currency_symbol' => '$',
                'nationality' => 'Guamanian, Guambat',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Guam',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'CHST',
                            'tzName' => 'Chamorro Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.46666666',
                'longitude' => '144.78333333',
                'emoji' => '🇬🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_87.svg',
                'logo_png' => 'country_logo_87.png',
                'region_id' => '5',
                'subregion_id' => '21',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Guam',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '90',
                'name' => 'Guatemala',
                'iso3' => 'GTM',
                'iso2' => 'GT',
                'phone_code' => '502',
                'capital' => 'Guatemala City',
                'currency' => 'GTQ',
                'currency_name' => 'Guatemalan quetzal',
                'currency_symbol' => 'Q',
                'nationality' => 'Guatemalan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Guatemala',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.50000000',
                'longitude' => '-90.25000000',
                'emoji' => '🇬🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_88.svg',
                'logo_png' => 'country_logo_88.png',
                'region_id' => '2',
                'subregion_id' => '9',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Guatemala',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '91',
                'name' => 'Guernsey and Alderney',
                'iso3' => 'GGY',
                'iso2' => 'GG',
                'phone_code' => '+44-1481',
                'capital' => 'St Peter Port',
                'currency' => 'GBP',
                'currency_name' => 'British pound',
                'currency_symbol' => '£',
                'nationality' => 'Channel Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Guernsey',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '49.46666666',
                'longitude' => '-2.58333333',
                'emoji' => '🇬🇬',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Guernsey and Alderney',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '92',
                'name' => 'Guinea',
                'iso3' => 'GIN',
                'iso2' => 'GN',
                'phone_code' => '224',
                'capital' => 'Conakry',
                'currency' => 'GNF',
                'currency_name' => 'Guinean franc',
                'currency_symbol' => 'FG',
                'nationality' => 'Guinean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Conakry',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '11.00000000',
                'longitude' => '-10.00000000',
                'emoji' => '🇬🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_89.svg',
                'logo_png' => 'country_logo_89.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Guinea',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '93',
                'name' => 'Guinea-Bissau',
                'iso3' => 'GNB',
                'iso2' => 'GW',
                'phone_code' => '245',
                'capital' => 'Bissau',
                'currency' => 'XOF',
                'currency_name' => 'West African CFA franc',
                'currency_symbol' => 'CFA',
                'nationality' => 'Bissau-Guinean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Bissau',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '12.00000000',
                'longitude' => '-15.00000000',
                'emoji' => '🇬🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_90.svg',
                'logo_png' => 'country_logo_90.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Guinea-Bissau',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '94',
                'name' => 'Guyana',
                'iso3' => 'GUY',
                'iso2' => 'GY',
                'phone_code' => '592',
                'capital' => 'Georgetown',
                'currency' => 'GYD',
                'currency_name' => 'Guyanese dollar',
                'currency_symbol' => '$',
                'nationality' => 'Guyanese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Guyana',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'GYT',
                            'tzName' => 'Guyana Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '5.00000000',
                'longitude' => '-59.00000000',
                'emoji' => '🇬🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_91.svg',
                'logo_png' => 'country_logo_91.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Guyana',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '95',
                'name' => 'Haiti',
                'iso3' => 'HTI',
                'iso2' => 'HT',
                'phone_code' => '509',
                'capital' => 'Port-au-Prince',
                'currency' => 'HTG',
                'currency_name' => 'Haitian gourde',
                'currency_symbol' => 'G',
                'nationality' => 'Haitian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Port-au-Prince',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '19.00000000',
                'longitude' => '-72.41666666',
                'emoji' => '🇭🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_92.svg',
                'logo_png' => 'country_logo_92.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Haiti',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '96',
                'name' => 'Heard Island and McDonald Islands',
                'iso3' => 'HMD',
                'iso2' => 'HM',
                'phone_code' => '672',
                'capital' => '',
                'currency' => 'AUD',
                'currency_name' => 'Australian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Heard Island or McDonald Islands',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Kerguelen',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'TFT',
                            'tzName' => 'French Southern and Antarctic Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-53.10000000',
                'longitude' => '72.51666666',
                'emoji' => '🇭🇲',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => null,
                'subregion_id' => null,
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Heard Island and McDonald Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '97',
                'name' => 'Honduras',
                'iso3' => 'HND',
                'iso2' => 'HN',
                'phone_code' => '504',
                'capital' => 'Tegucigalpa',
                'currency' => 'HNL',
                'currency_name' => 'Honduran lempira',
                'currency_symbol' => 'L',
                'nationality' => 'Honduran',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Tegucigalpa',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.00000000',
                'longitude' => '-86.50000000',
                'emoji' => '🇭🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_95.svg',
                'logo_png' => 'country_logo_95.png',
                'region_id' => '2',
                'subregion_id' => '9',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Honduras',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '98',
                'name' => 'Hong Kong S.A.R.',
                'iso3' => 'HKG',
                'iso2' => 'HK',
                'phone_code' => '852',
                'capital' => 'Hong Kong',
                'currency' => 'HKD',
                'currency_name' => 'Hong Kong dollar',
                'currency_symbol' => '$',
                'nationality' => 'Hong Kong, Hong Kongese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Hong_Kong',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'HKT',
                            'tzName' => 'Hong Kong Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '22.25000000',
                'longitude' => '114.16666666',
                'emoji' => '🇭🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_96.svg',
                'logo_png' => 'country_logo_96.png',
                'region_id' => '3',
                'subregion_id' => '12',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Hong Kong S.A.R.',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '99',
                'name' => 'Hungary',
                'iso3' => 'HUN',
                'iso2' => 'HU',
                'phone_code' => '36',
                'capital' => 'Budapest',
                'currency' => 'HUF',
                'currency_name' => 'Hungarian forint',
                'currency_symbol' => 'Ft',
                'nationality' => 'Hungarian, Magyar',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Budapest',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '47.00000000',
                'longitude' => '20.00000000',
                'emoji' => '🇭🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_97.svg',
                'logo_png' => 'country_logo_97.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Hungary',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '100',
                'name' => 'Iceland',
                'iso3' => 'ISL',
                'iso2' => 'IS',
                'phone_code' => '354',
                'capital' => 'Reykjavik',
                'currency' => 'ISK',
                'currency_name' => 'Icelandic króna',
                'currency_symbol' => 'kr',
                'nationality' => 'Icelandic',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Atlantic/Reykjavik',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '65.00000000',
                'longitude' => '-18.00000000',
                'emoji' => '🇮🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_98.svg',
                'logo_png' => 'country_logo_98.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Iceland',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '101',
                'name' => 'India',
                'iso3' => 'IND',
                'iso2' => 'IN',
                'phone_code' => '91',
                'capital' => 'New Delhi',
                'currency' => 'INR',
                'currency_name' => 'Indian rupee',
                'currency_symbol' => '₹',
                'nationality' => 'Indian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Kolkata',
                            'gmtOffset' => 19800,
                            'gmtOffsetName' => 'UTC+05:30',
                            'abbreviation' => 'IST',
                            'tzName' => 'Indian Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '20.00000000',
                'longitude' => '77.00000000',
                'emoji' => '🇮🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_99.svg',
                'logo_png' => 'country_logo_99.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'India',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '102',
                'name' => 'Indonesia',
                'iso3' => 'IDN',
                'iso2' => 'ID',
                'phone_code' => '62',
                'capital' => 'Jakarta',
                'currency' => 'IDR',
                'currency_name' => 'Indonesian rupiah',
                'currency_symbol' => 'Rp',
                'nationality' => 'Indonesian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Jakarta',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'WIB',
                            'tzName' => 'Western Indonesian Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Jayapura',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'WIT',
                            'tzName' => 'Eastern Indonesian Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Makassar',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'WITA',
                            'tzName' => 'Central Indonesia Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Pontianak',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'WIB',
                            'tzName' => 'Western Indonesian Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => true,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-5.00000000',
                'longitude' => '120.00000000',
                'emoji' => '🇮🇩',
                'enabled' => true,
                'logo_svg' => 'country_logo_100.svg',
                'logo_png' => 'country_logo_100.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => 'IND',
                        'name' => 'Indonesia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '103',
                'name' => 'Iran',
                'iso3' => 'IRN',
                'iso2' => 'IR',
                'phone_code' => '98',
                'capital' => 'Tehran',
                'currency' => 'IRR',
                'currency_name' => 'Iranian rial',
                'currency_symbol' => '﷼',
                'nationality' => 'Iranian, Persian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Tehran',
                            'gmtOffset' => 12600,
                            'gmtOffsetName' => 'UTC+03:30',
                            'abbreviation' => 'IRDT',
                            'tzName' => 'Iran Daylight Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '32.00000000',
                'longitude' => '53.00000000',
                'emoji' => '🇮🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_101.svg',
                'logo_png' => 'country_logo_101.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Iran',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '104',
                'name' => 'Iraq',
                'iso3' => 'IRQ',
                'iso2' => 'IQ',
                'phone_code' => '964',
                'capital' => 'Baghdad',
                'currency' => 'IQD',
                'currency_name' => 'Iraqi dinar',
                'currency_symbol' => 'د.ع',
                'nationality' => 'Iraqi',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Baghdad',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Arabia Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '33.00000000',
                'longitude' => '44.00000000',
                'emoji' => '🇮🇶',
                'enabled' => true,
                'logo_svg' => 'country_logo_102.svg',
                'logo_png' => 'country_logo_102.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Iraq',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '105',
                'name' => 'Ireland',
                'iso3' => 'IRL',
                'iso2' => 'IE',
                'phone_code' => '353',
                'capital' => 'Dublin',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Irish',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Dublin',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '53.00000000',
                'longitude' => '-8.00000000',
                'emoji' => '🇮🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_103.svg',
                'logo_png' => 'country_logo_103.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Ireland',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '106',
                'name' => 'Israel',
                'iso3' => 'ISR',
                'iso2' => 'IL',
                'phone_code' => '972',
                'capital' => 'Jerusalem',
                'currency' => 'ILS',
                'currency_name' => 'Israeli new shekel',
                'currency_symbol' => '₪',
                'nationality' => 'Israeli',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Jerusalem',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'IST',
                            'tzName' => 'Israel Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '31.50000000',
                'longitude' => '34.75000000',
                'emoji' => '🇮🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_104.svg',
                'logo_png' => 'country_logo_104.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Israel',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '107',
                'name' => 'Italy',
                'iso3' => 'ITA',
                'iso2' => 'IT',
                'phone_code' => '39',
                'capital' => 'Rome',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Italian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Rome',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '42.83333333',
                'longitude' => '12.83333333',
                'emoji' => '🇮🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_105.svg',
                'logo_png' => 'country_logo_105.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Italy',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '108',
                'name' => 'Jamaica',
                'iso3' => 'JAM',
                'iso2' => 'JM',
                'phone_code' => '+1-876',
                'capital' => 'Kingston',
                'currency' => 'JMD',
                'currency_name' => 'Jamaican dollar',
                'currency_symbol' => 'J$',
                'nationality' => 'Jamaican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Jamaica',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.25000000',
                'longitude' => '-77.50000000',
                'emoji' => '🇯🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_106.svg',
                'logo_png' => 'country_logo_106.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Jamaica',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '109',
                'name' => 'Japan',
                'iso3' => 'JPN',
                'iso2' => 'JP',
                'phone_code' => '81',
                'capital' => 'Tokyo',
                'currency' => 'JPY',
                'currency_name' => 'Japanese yen',
                'currency_symbol' => '¥',
                'nationality' => 'Japanese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Tokyo',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'JST',
                            'tzName' => 'Japan Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '36.00000000',
                'longitude' => '138.00000000',
                'emoji' => '🇯🇵',
                'enabled' => true,
                'logo_svg' => 'country_logo_107.svg',
                'logo_png' => 'country_logo_107.png',
                'region_id' => '3',
                'subregion_id' => '12',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Japan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '110',
                'name' => 'Jersey',
                'iso3' => 'JEY',
                'iso2' => 'JE',
                'phone_code' => '+44-1534',
                'capital' => 'Saint Helier',
                'currency' => 'GBP',
                'currency_name' => 'British pound',
                'currency_symbol' => '£',
                'nationality' => 'Channel Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Jersey',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '49.25000000',
                'longitude' => '-2.16666666',
                'emoji' => '🇯🇪',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Jersey',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '111',
                'name' => 'Jordan',
                'iso3' => 'JOR',
                'iso2' => 'JO',
                'phone_code' => '962',
                'capital' => 'Amman',
                'currency' => 'JOD',
                'currency_name' => 'Jordanian dinar',
                'currency_symbol' => 'ا.د',
                'nationality' => 'Jordanian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Amman',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '31.00000000',
                'longitude' => '36.00000000',
                'emoji' => '🇯🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_108.svg',
                'logo_png' => 'country_logo_108.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Jordan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '112',
                'name' => 'Kazakhstan',
                'iso3' => 'KAZ',
                'iso2' => 'KZ',
                'phone_code' => '7',
                'capital' => 'Astana',
                'currency' => 'KZT',
                'currency_name' => 'Kazakhstani tenge',
                'currency_symbol' => 'лв',
                'nationality' => 'Kazakhstani, Kazakh',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Almaty',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'ALMT',
                            'tzName' => 'Alma-Ata Time[1',
                        ),
                        array(
                            'zoneName' => 'Asia/Aqtau',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'AQTT',
                            'tzName' => 'Aqtobe Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Aqtobe',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'AQTT',
                            'tzName' => 'Aqtobe Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Atyrau',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'MSD+1',
                            'tzName' => 'Moscow Daylight Time+1',
                        ),
                        array(
                            'zoneName' => 'Asia/Oral',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'ORAT',
                            'tzName' => 'Oral Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Qostanay',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'QYZST',
                            'tzName' => 'Qyzylorda Summer Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Qyzylorda',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'QYZT',
                            'tzName' => 'Qyzylorda Summer Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '48.00000000',
                'longitude' => '68.00000000',
                'emoji' => '🇰🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_109.svg',
                'logo_png' => 'country_logo_109.png',
                'region_id' => '3',
                'subregion_id' => '10',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Kazakhstan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '113',
                'name' => 'Kenya',
                'iso3' => 'KEN',
                'iso2' => 'KE',
                'phone_code' => '254',
                'capital' => 'Nairobi',
                'currency' => 'KES',
                'currency_name' => 'Kenyan shilling',
                'currency_symbol' => 'KSh',
                'nationality' => 'Kenyan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Nairobi',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '1.00000000',
                'longitude' => '38.00000000',
                'emoji' => '🇰🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_110.svg',
                'logo_png' => 'country_logo_110.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Kenya',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '114',
                'name' => 'Kiribati',
                'iso3' => 'KIR',
                'iso2' => 'KI',
                'phone_code' => '686',
                'capital' => 'Tarawa',
                'currency' => 'AUD',
                'currency_name' => 'Australian dollar',
                'currency_symbol' => '$',
                'nationality' => 'I-Kiribati',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Enderbury',
                            'gmtOffset' => 46800,
                            'gmtOffsetName' => 'UTC+13:00',
                            'abbreviation' => 'PHOT',
                            'tzName' => 'Phoenix Island Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Kiritimati',
                            'gmtOffset' => 50400,
                            'gmtOffsetName' => 'UTC+14:00',
                            'abbreviation' => 'LINT',
                            'tzName' => 'Line Islands Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Tarawa',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'GILT',
                            'tzName' => 'Gilbert Island Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '1.41666666',
                'longitude' => '173.00000000',
                'emoji' => '🇰🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_111.svg',
                'logo_png' => 'country_logo_111.png',
                'region_id' => '5',
                'subregion_id' => '21',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Kiribati',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '115',
                'name' => 'North Korea',
                'iso3' => 'PRK',
                'iso2' => 'KP',
                'phone_code' => '850',
                'capital' => 'Pyongyang',
                'currency' => 'KPW',
                'currency_name' => 'North Korean Won',
                'currency_symbol' => '₩',
                'nationality' => 'North Korean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Pyongyang',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'KST',
                            'tzName' => 'Korea Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '40.00000000',
                'longitude' => '127.00000000',
                'emoji' => '🇰🇵',
                'enabled' => true,
                'logo_svg' => 'country_logo_112.svg',
                'logo_png' => 'country_logo_112.png',
                'region_id' => '3',
                'subregion_id' => '12',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'North Korea',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '116',
                'name' => 'South Korea',
                'iso3' => 'KOR',
                'iso2' => 'KR',
                'phone_code' => '82',
                'capital' => 'Seoul',
                'currency' => 'KRW',
                'currency_name' => 'Won',
                'currency_symbol' => '₩',
                'nationality' => 'South Korean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Seoul',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'KST',
                            'tzName' => 'Korea Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '37.00000000',
                'longitude' => '127.50000000',
                'emoji' => '🇰🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_113.svg',
                'logo_png' => 'country_logo_113.png',
                'region_id' => '3',
                'subregion_id' => '12',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'South Korea',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '117',
                'name' => 'Kuwait',
                'iso3' => 'KWT',
                'iso2' => 'KW',
                'phone_code' => '965',
                'capital' => 'Kuwait City',
                'currency' => 'KWD',
                'currency_name' => 'Kuwaiti dinar',
                'currency_symbol' => 'ك.د',
                'nationality' => 'Kuwaiti',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Kuwait',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Arabia Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '29.50000000',
                'longitude' => '45.75000000',
                'emoji' => '🇰🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_114.svg',
                'logo_png' => 'country_logo_114.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Kuwait',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '118',
                'name' => 'Kyrgyzstan',
                'iso3' => 'KGZ',
                'iso2' => 'KG',
                'phone_code' => '996',
                'capital' => 'Bishkek',
                'currency' => 'KGS',
                'currency_name' => 'Kyrgyzstani som',
                'currency_symbol' => 'лв',
                'nationality' => 'Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Bishkek',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'KGT',
                            'tzName' => 'Kyrgyzstan Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '41.00000000',
                'longitude' => '75.00000000',
                'emoji' => '🇰🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_115.svg',
                'logo_png' => 'country_logo_115.png',
                'region_id' => '3',
                'subregion_id' => '10',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Kyrgyzstan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '119',
                'name' => 'Laos',
                'iso3' => 'LAO',
                'iso2' => 'LA',
                'phone_code' => '856',
                'capital' => 'Vientiane',
                'currency' => 'LAK',
                'currency_name' => 'Lao kip',
                'currency_symbol' => '₭',
                'nationality' => 'Lao, Laotian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Vientiane',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'ICT',
                            'tzName' => 'Indochina Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.00000000',
                'longitude' => '105.00000000',
                'emoji' => '🇱🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_116.svg',
                'logo_png' => 'country_logo_116.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Laos',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '120',
                'name' => 'Latvia',
                'iso3' => 'LVA',
                'iso2' => 'LV',
                'phone_code' => '371',
                'capital' => 'Riga',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Latvian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Riga',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '57.00000000',
                'longitude' => '25.00000000',
                'emoji' => '🇱🇻',
                'enabled' => true,
                'logo_svg' => 'country_logo_117.svg',
                'logo_png' => 'country_logo_117.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Latvia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '121',
                'name' => 'Lebanon',
                'iso3' => 'LBN',
                'iso2' => 'LB',
                'phone_code' => '961',
                'capital' => 'Beirut',
                'currency' => 'LBP',
                'currency_name' => 'Lebanese pound',
                'currency_symbol' => '£',
                'nationality' => 'Lebanese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Beirut',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '33.83333333',
                'longitude' => '35.83333333',
                'emoji' => '🇱🇧',
                'enabled' => true,
                'logo_svg' => 'country_logo_118.svg',
                'logo_png' => 'country_logo_118.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Lebanon',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '122',
                'name' => 'Lesotho',
                'iso3' => 'LSO',
                'iso2' => 'LS',
                'phone_code' => '266',
                'capital' => 'Maseru',
                'currency' => 'LSL',
                'currency_name' => 'Lesotho loti',
                'currency_symbol' => 'L',
                'nationality' => 'Basotho',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Maseru',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'SAST',
                            'tzName' => 'South African Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-29.50000000',
                'longitude' => '28.50000000',
                'emoji' => '🇱🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_119.svg',
                'logo_png' => 'country_logo_119.png',
                'region_id' => '1',
                'subregion_id' => '5',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Lesotho',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '123',
                'name' => 'Liberia',
                'iso3' => 'LBR',
                'iso2' => 'LR',
                'phone_code' => '231',
                'capital' => 'Monrovia',
                'currency' => 'LRD',
                'currency_name' => 'Liberian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Liberian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Monrovia',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '6.50000000',
                'longitude' => '-9.50000000',
                'emoji' => '🇱🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_120.svg',
                'logo_png' => 'country_logo_120.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Liberia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '124',
                'name' => 'Libya',
                'iso3' => 'LBY',
                'iso2' => 'LY',
                'phone_code' => '218',
                'capital' => 'Tripolis',
                'currency' => 'LYD',
                'currency_name' => 'Libyan dinar',
                'currency_symbol' => 'د.ل',
                'nationality' => 'Libyan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Tripoli',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '25.00000000',
                'longitude' => '17.00000000',
                'emoji' => '🇱🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_121.svg',
                'logo_png' => 'country_logo_121.png',
                'region_id' => '1',
                'subregion_id' => '1',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Libya',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '125',
                'name' => 'Liechtenstein',
                'iso3' => 'LIE',
                'iso2' => 'LI',
                'phone_code' => '423',
                'capital' => 'Vaduz',
                'currency' => 'CHF',
                'currency_name' => 'Swiss franc',
                'currency_symbol' => 'CHf',
                'nationality' => 'Liechtenstein',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Vaduz',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '47.26666666',
                'longitude' => '9.53333333',
                'emoji' => '🇱🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_122.svg',
                'logo_png' => 'country_logo_122.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Liechtenstein',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '126',
                'name' => 'Lithuania',
                'iso3' => 'LTU',
                'iso2' => 'LT',
                'phone_code' => '370',
                'capital' => 'Vilnius',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Lithuanian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Vilnius',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '56.00000000',
                'longitude' => '24.00000000',
                'emoji' => '🇱🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_123.svg',
                'logo_png' => 'country_logo_123.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Lithuania',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '127',
                'name' => 'Luxembourg',
                'iso3' => 'LUX',
                'iso2' => 'LU',
                'phone_code' => '352',
                'capital' => 'Luxembourg',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Luxembourg, Luxembourgish',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Luxembourg',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '49.75000000',
                'longitude' => '6.16666666',
                'emoji' => '🇱🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_124.svg',
                'logo_png' => 'country_logo_124.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Luxembourg',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '128',
                'name' => 'Macau S.A.R.',
                'iso3' => 'MAC',
                'iso2' => 'MO',
                'phone_code' => '853',
                'capital' => 'Macao',
                'currency' => 'MOP',
                'currency_name' => 'Macanese pataca',
                'currency_symbol' => '$',
                'nationality' => 'Macanese, Chinese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Macau',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'China Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '22.16666666',
                'longitude' => '113.55000000',
                'emoji' => '🇲🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_125.svg',
                'logo_png' => 'country_logo_125.png',
                'region_id' => '3',
                'subregion_id' => '12',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Macau S.A.R.',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '129',
                'name' => 'North Macedonia',
                'iso3' => 'MKD',
                'iso2' => 'MK',
                'phone_code' => '389',
                'capital' => 'Skopje',
                'currency' => 'MKD',
                'currency_name' => 'Denar',
                'currency_symbol' => 'ден',
                'nationality' => 'Macedonian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Skopje',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '41.83333333',
                'longitude' => '22.00000000',
                'emoji' => '🇲🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_126.svg',
                'logo_png' => 'country_logo_126.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'North Macedonia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '130',
                'name' => 'Madagascar',
                'iso3' => 'MDG',
                'iso2' => 'MG',
                'phone_code' => '261',
                'capital' => 'Antananarivo',
                'currency' => 'MGA',
                'currency_name' => 'Malagasy ariary',
                'currency_symbol' => 'Ar',
                'nationality' => 'Malagasy',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Antananarivo',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-20.00000000',
                'longitude' => '47.00000000',
                'emoji' => '🇲🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_127.svg',
                'logo_png' => 'country_logo_127.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Madagascar',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '131',
                'name' => 'Malawi',
                'iso3' => 'MWI',
                'iso2' => 'MW',
                'phone_code' => '265',
                'capital' => 'Lilongwe',
                'currency' => 'MWK',
                'currency_name' => 'Malawian kwacha',
                'currency_symbol' => 'MK',
                'nationality' => 'Malawian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Blantyre',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'CAT',
                            'tzName' => 'Central Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-13.50000000',
                'longitude' => '34.00000000',
                'emoji' => '🇲🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_128.svg',
                'logo_png' => 'country_logo_128.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Malawi',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '132',
                'name' => 'Malaysia',
                'iso3' => 'MYS',
                'iso2' => 'MY',
                'phone_code' => '60',
                'capital' => 'Kuala Lumpur',
                'currency' => 'MYR',
                'currency_name' => 'Malaysian ringgit',
                'currency_symbol' => 'RM',
                'nationality' => 'Malaysian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Kuala_Lumpur',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'MYT',
                            'tzName' => 'Malaysia Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Kuching',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'MYT',
                            'tzName' => 'Malaysia Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => true,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '2.50000000',
                'longitude' => '112.50000000',
                'emoji' => '🇲🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_129.svg',
                'logo_png' => 'country_logo_129.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => 'ms',
                        'name' => 'Malaysia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '133',
                'name' => 'Maldives',
                'iso3' => 'MDV',
                'iso2' => 'MV',
                'phone_code' => '960',
                'capital' => 'Male',
                'currency' => 'MVR',
                'currency_name' => 'Maldivian rufiyaa',
                'currency_symbol' => 'Rf',
                'nationality' => 'Maldivian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Maldives',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'MVT',
                            'tzName' => 'Maldives Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '3.25000000',
                'longitude' => '73.00000000',
                'emoji' => '🇲🇻',
                'enabled' => true,
                'logo_svg' => 'country_logo_130.svg',
                'logo_png' => 'country_logo_130.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Maldives',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '134',
                'name' => 'Mali',
                'iso3' => 'MLI',
                'iso2' => 'ML',
                'phone_code' => '223',
                'capital' => 'Bamako',
                'currency' => 'XOF',
                'currency_name' => 'West African CFA franc',
                'currency_symbol' => 'CFA',
                'nationality' => 'Malian, Malinese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Bamako',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '17.00000000',
                'longitude' => '-4.00000000',
                'emoji' => '🇲🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_131.svg',
                'logo_png' => 'country_logo_131.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Mali',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '135',
                'name' => 'Malta',
                'iso3' => 'MLT',
                'iso2' => 'MT',
                'phone_code' => '356',
                'capital' => 'Valletta',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Maltese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Malta',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '35.83333333',
                'longitude' => '14.58333333',
                'emoji' => '🇲🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_132.svg',
                'logo_png' => 'country_logo_132.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Malta',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '136',
                'name' => 'Man (Isle of)',
                'iso3' => 'IMN',
                'iso2' => 'IM',
                'phone_code' => '+44-1624',
                'capital' => 'Douglas, Isle of Man',
                'currency' => 'GBP',
                'currency_name' => 'British pound',
                'currency_symbol' => '£',
                'nationality' => 'Manx',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Isle_of_Man',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '54.25000000',
                'longitude' => '-4.50000000',
                'emoji' => '🇮🇲',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Man (Isle of)',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '137',
                'name' => 'Marshall Islands',
                'iso3' => 'MHL',
                'iso2' => 'MH',
                'phone_code' => '692',
                'capital' => 'Majuro',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Marshallese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Kwajalein',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'MHT',
                            'tzName' => 'Marshall Islands Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Majuro',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'MHT',
                            'tzName' => 'Marshall Islands Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '9.00000000',
                'longitude' => '168.00000000',
                'emoji' => '🇲🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_133.svg',
                'logo_png' => 'country_logo_133.png',
                'region_id' => '5',
                'subregion_id' => '21',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Marshall Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '138',
                'name' => 'Martinique',
                'iso3' => 'MTQ',
                'iso2' => 'MQ',
                'phone_code' => '596',
                'capital' => 'Fort-de-France',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Martiniquais, Martinican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Martinique',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '14.66666700',
                'longitude' => '-61.00000000',
                'emoji' => '🇲🇶',
                'enabled' => true,
                'logo_svg' => 'country_logo_134.svg',
                'logo_png' => 'country_logo_134.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Martinique',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '139',
                'name' => 'Mauritania',
                'iso3' => 'MRT',
                'iso2' => 'MR',
                'phone_code' => '222',
                'capital' => 'Nouakchott',
                'currency' => 'MRO',
                'currency_name' => 'Mauritanian ouguiya',
                'currency_symbol' => 'MRU',
                'nationality' => 'Mauritanian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Nouakchott',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '20.00000000',
                'longitude' => '-12.00000000',
                'emoji' => '🇲🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_135.svg',
                'logo_png' => 'country_logo_135.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Mauritania',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '140',
                'name' => 'Mauritius',
                'iso3' => 'MUS',
                'iso2' => 'MU',
                'phone_code' => '230',
                'capital' => 'Port Louis',
                'currency' => 'MUR',
                'currency_name' => 'Mauritian rupee',
                'currency_symbol' => '₨',
                'nationality' => 'Mauritian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Mauritius',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'MUT',
                            'tzName' => 'Mauritius Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-20.28333333',
                'longitude' => '57.55000000',
                'emoji' => '🇲🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_136.svg',
                'logo_png' => 'country_logo_136.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Mauritius',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '141',
                'name' => 'Mayotte',
                'iso3' => 'MYT',
                'iso2' => 'YT',
                'phone_code' => '262',
                'capital' => 'Mamoudzou',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Mahoran',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Mayotte',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-12.83333333',
                'longitude' => '45.16666666',
                'emoji' => '🇾🇹',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Mayotte',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '142',
                'name' => 'Mexico',
                'iso3' => 'MEX',
                'iso2' => 'MX',
                'phone_code' => '52',
                'capital' => 'Ciudad de México',
                'currency' => 'MXN',
                'currency_name' => 'Mexican peso',
                'currency_symbol' => '$',
                'nationality' => 'Mexican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Bahia_Banderas',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Cancun',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Chihuahua',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Hermosillo',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Matamoros',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Mazatlan',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Merida',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Mexico_City',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Monterrey',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Ojinaga',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Tijuana',
                            'gmtOffset' => -28800,
                            'gmtOffsetName' => 'UTC-08:00',
                            'abbreviation' => 'PST',
                            'tzName' => 'Pacific Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '23.00000000',
                'longitude' => '-102.00000000',
                'emoji' => '🇲🇽',
                'enabled' => true,
                'logo_svg' => 'country_logo_138.svg',
                'logo_png' => 'country_logo_138.png',
                'region_id' => '2',
                'subregion_id' => '9',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Mexico',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '143',
                'name' => 'Micronesia',
                'iso3' => 'FSM',
                'iso2' => 'FM',
                'phone_code' => '691',
                'capital' => 'Palikir',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Micronesian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Chuuk',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'CHUT',
                            'tzName' => 'Chuuk Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Kosrae',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'KOST',
                            'tzName' => 'Kosrae Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Pohnpei',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'PONT',
                            'tzName' => 'Pohnpei Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '6.91666666',
                'longitude' => '158.25000000',
                'emoji' => '🇫🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_139.svg',
                'logo_png' => 'country_logo_139.png',
                'region_id' => '5',
                'subregion_id' => '21',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Micronesia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '144',
                'name' => 'Moldova',
                'iso3' => 'MDA',
                'iso2' => 'MD',
                'phone_code' => '373',
                'capital' => 'Chisinau',
                'currency' => 'MDL',
                'currency_name' => 'Moldovan leu',
                'currency_symbol' => 'L',
                'nationality' => 'Moldovan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Chisinau',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '47.00000000',
                'longitude' => '29.00000000',
                'emoji' => '🇲🇩',
                'enabled' => true,
                'logo_svg' => 'country_logo_140.svg',
                'logo_png' => 'country_logo_140.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Moldova',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '145',
                'name' => 'Monaco',
                'iso3' => 'MCO',
                'iso2' => 'MC',
                'phone_code' => '377',
                'capital' => 'Monaco',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Monegasque, Monacan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Monaco',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '43.73333333',
                'longitude' => '7.40000000',
                'emoji' => '🇲🇨',
                'enabled' => true,
                'logo_svg' => 'country_logo_141.svg',
                'logo_png' => 'country_logo_141.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Monaco',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '146',
                'name' => 'Mongolia',
                'iso3' => 'MNG',
                'iso2' => 'MN',
                'phone_code' => '976',
                'capital' => 'Ulan Bator',
                'currency' => 'MNT',
                'currency_name' => 'Mongolian tögrög',
                'currency_symbol' => '₮',
                'nationality' => 'Mongolian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Choibalsan',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'CHOT',
                            'tzName' => 'Choibalsan Standard Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Hovd',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'HOVT',
                            'tzName' => 'Hovd Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Ulaanbaatar',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'ULAT',
                            'tzName' => 'Ulaanbaatar Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '46.00000000',
                'longitude' => '105.00000000',
                'emoji' => '🇲🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_142.svg',
                'logo_png' => 'country_logo_142.png',
                'region_id' => '3',
                'subregion_id' => '12',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Mongolia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '147',
                'name' => 'Montenegro',
                'iso3' => 'MNE',
                'iso2' => 'ME',
                'phone_code' => '382',
                'capital' => 'Podgorica',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Montenegrin',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Podgorica',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '42.50000000',
                'longitude' => '19.30000000',
                'emoji' => '🇲🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_244.svg',
                'logo_png' => 'country_logo_244.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Montenegro',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '148',
                'name' => 'Montserrat',
                'iso3' => 'MSR',
                'iso2' => 'MS',
                'phone_code' => '+1-664',
                'capital' => 'Plymouth',
                'currency' => 'XCD',
                'currency_name' => 'Eastern Caribbean dollar',
                'currency_symbol' => '$',
                'nationality' => 'Montserratian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Montserrat',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '16.75000000',
                'longitude' => '-62.20000000',
                'emoji' => '🇲🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_143.svg',
                'logo_png' => 'country_logo_143.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Montserrat',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '149',
                'name' => 'Morocco',
                'iso3' => 'MAR',
                'iso2' => 'MA',
                'phone_code' => '212',
                'capital' => 'Rabat',
                'currency' => 'MAD',
                'currency_name' => 'Moroccan dirham',
                'currency_symbol' => 'DH',
                'nationality' => 'Moroccan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Casablanca',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WEST',
                            'tzName' => 'Western European Summer Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '32.00000000',
                'longitude' => '-5.00000000',
                'emoji' => '🇲🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_144.svg',
                'logo_png' => 'country_logo_144.png',
                'region_id' => '1',
                'subregion_id' => '1',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Morocco',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '150',
                'name' => 'Mozambique',
                'iso3' => 'MOZ',
                'iso2' => 'MZ',
                'phone_code' => '258',
                'capital' => 'Maputo',
                'currency' => 'MZN',
                'currency_name' => 'Mozambican metical',
                'currency_symbol' => 'MT',
                'nationality' => 'Mozambican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Maputo',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'CAT',
                            'tzName' => 'Central Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-18.25000000',
                'longitude' => '35.00000000',
                'emoji' => '🇲🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_145.svg',
                'logo_png' => 'country_logo_145.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Mozambique',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '151',
                'name' => 'Myanmar',
                'iso3' => 'MMR',
                'iso2' => 'MM',
                'phone_code' => '95',
                'capital' => 'Nay Pyi Taw',
                'currency' => 'MMK',
                'currency_name' => 'Burmese kyat',
                'currency_symbol' => 'K',
                'nationality' => 'Burmese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Yangon',
                            'gmtOffset' => 23400,
                            'gmtOffsetName' => 'UTC+06:30',
                            'abbreviation' => 'MMT',
                            'tzName' => 'Myanmar Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => true,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '22.00000000',
                'longitude' => '98.00000000',
                'emoji' => '🇲🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_146.svg',
                'logo_png' => 'country_logo_146.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => 'mm',
                        'name' => 'Myanmar',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '152',
                'name' => 'Namibia',
                'iso3' => 'NAM',
                'iso2' => 'NA',
                'phone_code' => '264',
                'capital' => 'Windhoek',
                'currency' => 'NAD',
                'currency_name' => 'Namibian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Namibian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Windhoek',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'WAST',
                            'tzName' => 'West Africa Summer Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-22.00000000',
                'longitude' => '17.00000000',
                'emoji' => '🇳🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_147.svg',
                'logo_png' => 'country_logo_147.png',
                'region_id' => '1',
                'subregion_id' => '5',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Namibia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '153',
                'name' => 'Nauru',
                'iso3' => 'NRU',
                'iso2' => 'NR',
                'phone_code' => '674',
                'capital' => 'Yaren',
                'currency' => 'AUD',
                'currency_name' => 'Australian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Nauruan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Nauru',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'NRT',
                            'tzName' => 'Nauru Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-0.53333333',
                'longitude' => '166.91666666',
                'emoji' => '🇳🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_148.svg',
                'logo_png' => 'country_logo_148.png',
                'region_id' => '5',
                'subregion_id' => '21',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Nauru',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '154',
                'name' => 'Nepal',
                'iso3' => 'NPL',
                'iso2' => 'NP',
                'phone_code' => '977',
                'capital' => 'Kathmandu',
                'currency' => 'NPR',
                'currency_name' => 'Nepalese rupee',
                'currency_symbol' => '₨',
                'nationality' => 'Nepali, Nepalese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Kathmandu',
                            'gmtOffset' => 20700,
                            'gmtOffsetName' => 'UTC+05:45',
                            'abbreviation' => 'NPT',
                            'tzName' => 'Nepal Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => true,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '28.00000000',
                'longitude' => '84.00000000',
                'emoji' => '🇳🇵',
                'enabled' => true,
                'logo_svg' => 'country_logo_149.svg',
                'logo_png' => 'country_logo_149.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => 'ne',
                        'name' => 'Nepal',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '155',
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'iso3' => 'BES',
                'iso2' => 'BQ',
                'phone_code' => '599',
                'capital' => 'Kralendijk',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Bonaire',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Anguilla',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '12.15000000',
                'longitude' => '-68.26666700',
                'emoji' => '🇧🇶',
                'enabled' => true,
                'logo_svg' => 'country_logo_246.svg',
                'logo_png' => 'country_logo_246.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Bonaire, Sint Eustatius and Saba',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '156',
                'name' => 'Netherlands',
                'iso3' => 'NLD',
                'iso2' => 'NL',
                'phone_code' => '31',
                'capital' => 'Amsterdam',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Dutch, Netherlandic',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Amsterdam',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '52.50000000',
                'longitude' => '5.75000000',
                'emoji' => '🇳🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_150.svg',
                'logo_png' => 'country_logo_150.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Netherlands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '157',
                'name' => 'New Caledonia',
                'iso3' => 'NCL',
                'iso2' => 'NC',
                'phone_code' => '687',
                'capital' => 'Noumea',
                'currency' => 'XPF',
                'currency_name' => 'CFP franc',
                'currency_symbol' => '₣',
                'nationality' => 'New Caledonian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Noumea',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'NCT',
                            'tzName' => 'New Caledonia Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-21.50000000',
                'longitude' => '165.50000000',
                'emoji' => '🇳🇨',
                'enabled' => true,
                'logo_svg' => 'country_logo_152.svg',
                'logo_png' => 'country_logo_152.png',
                'region_id' => '5',
                'subregion_id' => '20',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'New Caledonia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '158',
                'name' => 'New Zealand',
                'iso3' => 'NZL',
                'iso2' => 'NZ',
                'phone_code' => '64',
                'capital' => 'Wellington',
                'currency' => 'NZD',
                'currency_name' => 'New Zealand dollar',
                'currency_symbol' => '$',
                'nationality' => 'New Zealand, NZ',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Auckland',
                            'gmtOffset' => 46800,
                            'gmtOffsetName' => 'UTC+13:00',
                            'abbreviation' => 'NZDT',
                            'tzName' => 'New Zealand Daylight Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Chatham',
                            'gmtOffset' => 49500,
                            'gmtOffsetName' => 'UTC+13:45',
                            'abbreviation' => 'CHAST',
                            'tzName' => 'Chatham Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-41.00000000',
                'longitude' => '174.00000000',
                'emoji' => '🇳🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_153.svg',
                'logo_png' => 'country_logo_153.png',
                'region_id' => '5',
                'subregion_id' => '19',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'New Zealand',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '159',
                'name' => 'Nicaragua',
                'iso3' => 'NIC',
                'iso2' => 'NI',
                'phone_code' => '505',
                'capital' => 'Managua',
                'currency' => 'NIO',
                'currency_name' => 'Nicaraguan córdoba',
                'currency_symbol' => 'C$',
                'nationality' => 'Nicaraguan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Managua',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.00000000',
                'longitude' => '-85.00000000',
                'emoji' => '🇳🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_154.svg',
                'logo_png' => 'country_logo_154.png',
                'region_id' => '2',
                'subregion_id' => '9',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Nicaragua',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '160',
                'name' => 'Niger',
                'iso3' => 'NER',
                'iso2' => 'NE',
                'phone_code' => '227',
                'capital' => 'Niamey',
                'currency' => 'XOF',
                'currency_name' => 'West African CFA franc',
                'currency_symbol' => 'CFA',
                'nationality' => 'Nigerien',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Niamey',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '16.00000000',
                'longitude' => '8.00000000',
                'emoji' => '🇳🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_155.svg',
                'logo_png' => 'country_logo_155.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Niger',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '161',
                'name' => 'Nigeria',
                'iso3' => 'NGA',
                'iso2' => 'NG',
                'phone_code' => '234',
                'capital' => 'Abuja',
                'currency' => 'NGN',
                'currency_name' => 'Nigerian naira',
                'currency_symbol' => '₦',
                'nationality' => 'Nigerian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Lagos',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WAT',
                            'tzName' => 'West Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '10.00000000',
                'longitude' => '8.00000000',
                'emoji' => '🇳🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_156.svg',
                'logo_png' => 'country_logo_156.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Nigeria',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '162',
                'name' => 'Niue',
                'iso3' => 'NIU',
                'iso2' => 'NU',
                'phone_code' => '683',
                'capital' => 'Alofi',
                'currency' => 'NZD',
                'currency_name' => 'New Zealand dollar',
                'currency_symbol' => '$',
                'nationality' => 'Niuean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Niue',
                            'gmtOffset' => -39600,
                            'gmtOffsetName' => 'UTC-11:00',
                            'abbreviation' => 'NUT',
                            'tzName' => 'Niue Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-19.03333333',
                'longitude' => '-169.86666666',
                'emoji' => '🇳🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_157.svg',
                'logo_png' => 'country_logo_157.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Niue',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '163',
                'name' => 'Norfolk Island',
                'iso3' => 'NFK',
                'iso2' => 'NF',
                'phone_code' => '672',
                'capital' => 'Kingston',
                'currency' => 'AUD',
                'currency_name' => 'Australian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Norfolk Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Norfolk',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'NFT',
                            'tzName' => 'Norfolk Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-29.03333333',
                'longitude' => '167.95000000',
                'emoji' => '🇳🇫',
                'enabled' => true,
                'logo_svg' => 'country_logo_158.svg',
                'logo_png' => 'country_logo_158.png',
                'region_id' => '5',
                'subregion_id' => '19',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Norfolk Island',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '164',
                'name' => 'Northern Mariana Islands',
                'iso3' => 'MNP',
                'iso2' => 'MP',
                'phone_code' => '+1-670',
                'capital' => 'Saipan',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Northern Marianan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Saipan',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'ChST',
                            'tzName' => 'Chamorro Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.20000000',
                'longitude' => '145.75000000',
                'emoji' => '🇲🇵',
                'enabled' => true,
                'logo_svg' => 'country_logo_159.svg',
                'logo_png' => 'country_logo_159.png',
                'region_id' => '5',
                'subregion_id' => '21',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Northern Mariana Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '165',
                'name' => 'Norway',
                'iso3' => 'NOR',
                'iso2' => 'NO',
                'phone_code' => '47',
                'capital' => 'Oslo',
                'currency' => 'NOK',
                'currency_name' => 'Norwegian krone',
                'currency_symbol' => 'kr',
                'nationality' => 'Norwegian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Oslo',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '62.00000000',
                'longitude' => '10.00000000',
                'emoji' => '🇳🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_160.svg',
                'logo_png' => 'country_logo_160.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Norway',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '166',
                'name' => 'Oman',
                'iso3' => 'OMN',
                'iso2' => 'OM',
                'phone_code' => '968',
                'capital' => 'Muscat',
                'currency' => 'OMR',
                'currency_name' => 'Omani rial',
                'currency_symbol' => '.ع.ر',
                'nationality' => 'Omani',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Muscat',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'GST',
                            'tzName' => 'Gulf Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '21.00000000',
                'longitude' => '57.00000000',
                'emoji' => '🇴🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_161.svg',
                'logo_png' => 'country_logo_161.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Oman',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '167',
                'name' => 'Pakistan',
                'iso3' => 'PAK',
                'iso2' => 'PK',
                'phone_code' => '92',
                'capital' => 'Islamabad',
                'currency' => 'PKR',
                'currency_name' => 'Pakistani rupee',
                'currency_symbol' => '₨',
                'nationality' => 'Pakistani',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Karachi',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'PKT',
                            'tzName' => 'Pakistan Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '30.00000000',
                'longitude' => '70.00000000',
                'emoji' => '🇵🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_162.svg',
                'logo_png' => 'country_logo_162.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Pakistan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '168',
                'name' => 'Palau',
                'iso3' => 'PLW',
                'iso2' => 'PW',
                'phone_code' => '680',
                'capital' => 'Melekeok',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Palauan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Palau',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'PWT',
                            'tzName' => 'Palau Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '7.50000000',
                'longitude' => '134.50000000',
                'emoji' => '🇵🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_163.svg',
                'logo_png' => 'country_logo_163.png',
                'region_id' => '5',
                'subregion_id' => '21',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Palau',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '169',
                'name' => 'Palestinian Territory Occupied',
                'iso3' => 'PSE',
                'iso2' => 'PS',
                'phone_code' => '970',
                'capital' => 'East Jerusalem',
                'currency' => 'ILS',
                'currency_name' => 'Israeli new shekel',
                'currency_symbol' => '₪',
                'nationality' => 'Palestinian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Gaza',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Hebron',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '31.90000000',
                'longitude' => '35.20000000',
                'emoji' => '🇵🇸',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Palestinian Territory Occupied',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '170',
                'name' => 'Panama',
                'iso3' => 'PAN',
                'iso2' => 'PA',
                'phone_code' => '507',
                'capital' => 'Panama City',
                'currency' => 'PAB',
                'currency_name' => 'Panamanian balboa',
                'currency_symbol' => 'B/.',
                'nationality' => 'Panamanian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Panama',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '9.00000000',
                'longitude' => '-80.00000000',
                'emoji' => '🇵🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_165.svg',
                'logo_png' => 'country_logo_165.png',
                'region_id' => '2',
                'subregion_id' => '9',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Panama',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '171',
                'name' => 'Papua new Guinea',
                'iso3' => 'PNG',
                'iso2' => 'PG',
                'phone_code' => '675',
                'capital' => 'Port Moresby',
                'currency' => 'PGK',
                'currency_name' => 'Papua New Guinean kina',
                'currency_symbol' => 'K',
                'nationality' => 'Papua New Guinean, Papuan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Bougainville',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'BST',
                            'tzName' => 'Bougainville Standard Time[6',
                        ),
                        array(
                            'zoneName' => 'Pacific/Port_Moresby',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'PGT',
                            'tzName' => 'Papua New Guinea Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-6.00000000',
                'longitude' => '147.00000000',
                'emoji' => '🇵🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_166.svg',
                'logo_png' => 'country_logo_166.png',
                'region_id' => '5',
                'subregion_id' => '20',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Papua new Guinea',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '172',
                'name' => 'Paraguay',
                'iso3' => 'PRY',
                'iso2' => 'PY',
                'phone_code' => '595',
                'capital' => 'Asuncion',
                'currency' => 'PYG',
                'currency_name' => 'Paraguayan guarani',
                'currency_symbol' => '₲',
                'nationality' => 'Paraguayan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Asuncion',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'PYST',
                            'tzName' => 'Paraguay Summer Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-23.00000000',
                'longitude' => '-58.00000000',
                'emoji' => '🇵🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_167.svg',
                'logo_png' => 'country_logo_167.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Paraguay',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '173',
                'name' => 'Peru',
                'iso3' => 'PER',
                'iso2' => 'PE',
                'phone_code' => '51',
                'capital' => 'Lima',
                'currency' => 'PEN',
                'currency_name' => 'Peruvian sol',
                'currency_symbol' => 'S/.',
                'nationality' => 'Peruvian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Lima',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'PET',
                            'tzName' => 'Peru Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-10.00000000',
                'longitude' => '-76.00000000',
                'emoji' => '🇵🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_168.svg',
                'logo_png' => 'country_logo_168.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Peru',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '174',
                'name' => 'Philippines',
                'iso3' => 'PHL',
                'iso2' => 'PH',
                'phone_code' => '63',
                'capital' => 'Manila',
                'currency' => 'PHP',
                'currency_name' => 'Philippine peso',
                'currency_symbol' => '₱',
                'nationality' => 'Philippine, Filipino',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Manila',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'PHT',
                            'tzName' => 'Philippine Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.00000000',
                'longitude' => '122.00000000',
                'emoji' => '🇵🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_169.svg',
                'logo_png' => 'country_logo_169.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Philippines',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '175',
                'name' => 'Pitcairn Island',
                'iso3' => 'PCN',
                'iso2' => 'PN',
                'phone_code' => '870',
                'capital' => 'Adamstown',
                'currency' => 'NZD',
                'currency_name' => 'New Zealand dollar',
                'currency_symbol' => '$',
                'nationality' => 'Pitcairn Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Pitcairn',
                            'gmtOffset' => -28800,
                            'gmtOffsetName' => 'UTC-08:00',
                            'abbreviation' => 'PST',
                            'tzName' => 'Pacific Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-25.06666666',
                'longitude' => '-130.10000000',
                'emoji' => '🇵🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_170.svg',
                'logo_png' => 'country_logo_170.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Pitcairn Island',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '176',
                'name' => 'Poland',
                'iso3' => 'POL',
                'iso2' => 'PL',
                'phone_code' => '48',
                'capital' => 'Warsaw',
                'currency' => 'PLN',
                'currency_name' => 'Polish złoty',
                'currency_symbol' => 'zł',
                'nationality' => 'Polish',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Warsaw',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '52.00000000',
                'longitude' => '20.00000000',
                'emoji' => '🇵🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_171.svg',
                'logo_png' => 'country_logo_171.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Poland',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '177',
                'name' => 'Portugal',
                'iso3' => 'PRT',
                'iso2' => 'PT',
                'phone_code' => '351',
                'capital' => 'Lisbon',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Portuguese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Atlantic/Azores',
                            'gmtOffset' => -3600,
                            'gmtOffsetName' => 'UTC-01:00',
                            'abbreviation' => 'AZOT',
                            'tzName' => 'Azores Standard Time',
                        ),
                        array(
                            'zoneName' => 'Atlantic/Madeira',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'WET',
                            'tzName' => 'Western European Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Lisbon',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'WET',
                            'tzName' => 'Western European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '39.50000000',
                'longitude' => '-8.00000000',
                'emoji' => '🇵🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_172.svg',
                'logo_png' => 'country_logo_172.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Portugal',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '178',
                'name' => 'Puerto Rico',
                'iso3' => 'PRI',
                'iso2' => 'PR',
                'phone_code' => '+1-787 and 1-939',
                'capital' => 'San Juan',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Puerto Rican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Puerto_Rico',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.25000000',
                'longitude' => '-66.50000000',
                'emoji' => '🇵🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_173.svg',
                'logo_png' => 'country_logo_173.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Puerto Rico',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '179',
                'name' => 'Qatar',
                'iso3' => 'QAT',
                'iso2' => 'QA',
                'phone_code' => '974',
                'capital' => 'Doha',
                'currency' => 'QAR',
                'currency_name' => 'Qatari riyal',
                'currency_symbol' => 'ق.ر',
                'nationality' => 'Qatari',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Qatar',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Arabia Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '25.50000000',
                'longitude' => '51.25000000',
                'emoji' => '🇶🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_174.svg',
                'logo_png' => 'country_logo_174.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Qatar',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '180',
                'name' => 'Reunion',
                'iso3' => 'REU',
                'iso2' => 'RE',
                'phone_code' => '262',
                'capital' => 'Saint-Denis',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Reunionese, Reunionnais',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Reunion',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'RET',
                            'tzName' => 'Réunion Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-21.15000000',
                'longitude' => '55.50000000',
                'emoji' => '🇷🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_175.svg',
                'logo_png' => 'country_logo_175.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Reunion',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '181',
                'name' => 'Romania',
                'iso3' => 'ROU',
                'iso2' => 'RO',
                'phone_code' => '40',
                'capital' => 'Bucharest',
                'currency' => 'RON',
                'currency_name' => 'Romanian leu',
                'currency_symbol' => 'lei',
                'nationality' => 'Romanian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Bucharest',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '46.00000000',
                'longitude' => '25.00000000',
                'emoji' => '🇷🇴',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Romania',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '182',
                'name' => 'Russia',
                'iso3' => 'RUS',
                'iso2' => 'RU',
                'phone_code' => '7',
                'capital' => 'Moscow',
                'currency' => 'RUB',
                'currency_name' => 'Russian ruble',
                'currency_symbol' => '₽',
                'nationality' => 'Russian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Anadyr',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'ANAT',
                            'tzName' => 'Anadyr Time[4',
                        ),
                        array(
                            'zoneName' => 'Asia/Barnaul',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'KRAT',
                            'tzName' => 'Krasnoyarsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Chita',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'YAKT',
                            'tzName' => 'Yakutsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Irkutsk',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'IRKT',
                            'tzName' => 'Irkutsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Kamchatka',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'PETT',
                            'tzName' => 'Kamchatka Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Khandyga',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'YAKT',
                            'tzName' => 'Yakutsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Krasnoyarsk',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'KRAT',
                            'tzName' => 'Krasnoyarsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Magadan',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'MAGT',
                            'tzName' => 'Magadan Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Novokuznetsk',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'KRAT',
                            'tzName' => 'Krasnoyarsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Novosibirsk',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'NOVT',
                            'tzName' => 'Novosibirsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Omsk',
                            'gmtOffset' => 21600,
                            'gmtOffsetName' => 'UTC+06:00',
                            'abbreviation' => 'OMST',
                            'tzName' => 'Omsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Sakhalin',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'SAKT',
                            'tzName' => 'Sakhalin Island Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Srednekolymsk',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'SRET',
                            'tzName' => 'Srednekolymsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Tomsk',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'MSD+3',
                            'tzName' => 'Moscow Daylight Time+3',
                        ),
                        array(
                            'zoneName' => 'Asia/Ust-Nera',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'VLAT',
                            'tzName' => 'Vladivostok Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Vladivostok',
                            'gmtOffset' => 36000,
                            'gmtOffsetName' => 'UTC+10:00',
                            'abbreviation' => 'VLAT',
                            'tzName' => 'Vladivostok Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Yakutsk',
                            'gmtOffset' => 32400,
                            'gmtOffsetName' => 'UTC+09:00',
                            'abbreviation' => 'YAKT',
                            'tzName' => 'Yakutsk Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Yekaterinburg',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'YEKT',
                            'tzName' => 'Yekaterinburg Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Astrakhan',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'SAMT',
                            'tzName' => 'Samara Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Kaliningrad',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Kirov',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'MSK',
                            'tzName' => 'Moscow Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Moscow',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'MSK',
                            'tzName' => 'Moscow Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Samara',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'SAMT',
                            'tzName' => 'Samara Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Saratov',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'MSD',
                            'tzName' => 'Moscow Daylight Time+4',
                        ),
                        array(
                            'zoneName' => 'Europe/Ulyanovsk',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'SAMT',
                            'tzName' => 'Samara Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Volgograd',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'MSK',
                            'tzName' => 'Moscow Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '60.00000000',
                'longitude' => '100.00000000',
                'emoji' => '🇷🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_177.svg',
                'logo_png' => 'country_logo_177.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Russia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '183',
                'name' => 'Rwanda',
                'iso3' => 'RWA',
                'iso2' => 'RW',
                'phone_code' => '250',
                'capital' => 'Kigali',
                'currency' => 'RWF',
                'currency_name' => 'Rwandan franc',
                'currency_symbol' => 'FRw',
                'nationality' => 'Rwandan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Kigali',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'CAT',
                            'tzName' => 'Central Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-2.00000000',
                'longitude' => '30.00000000',
                'emoji' => '🇷🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_178.svg',
                'logo_png' => 'country_logo_178.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Rwanda',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '184',
                'name' => 'Saint Helena',
                'iso3' => 'SHN',
                'iso2' => 'SH',
                'phone_code' => '290',
                'capital' => 'Jamestown',
                'currency' => 'SHP',
                'currency_name' => 'Saint Helena pound',
                'currency_symbol' => '£',
                'nationality' => 'Saint Helenian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Atlantic/St_Helena',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-15.95000000',
                'longitude' => '-5.70000000',
                'emoji' => '🇸🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_179.svg',
                'logo_png' => 'country_logo_179.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Saint Helena',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '185',
                'name' => 'Saint Kitts And Nevis',
                'iso3' => 'KNA',
                'iso2' => 'KN',
                'phone_code' => '+1-869',
                'capital' => 'Basseterre',
                'currency' => 'XCD',
                'currency_name' => 'Eastern Caribbean dollar',
                'currency_symbol' => '$',
                'nationality' => 'Kittitian or Nevisian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/St_Kitts',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '17.33333333',
                'longitude' => '-62.75000000',
                'emoji' => '🇰🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_180.svg',
                'logo_png' => 'country_logo_180.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Saint Kitts And Nevis',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '186',
                'name' => 'Saint Lucia',
                'iso3' => 'LCA',
                'iso2' => 'LC',
                'phone_code' => '+1-758',
                'capital' => 'Castries',
                'currency' => 'XCD',
                'currency_name' => 'Eastern Caribbean dollar',
                'currency_symbol' => '$',
                'nationality' => 'Saint Lucian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/St_Lucia',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.88333333',
                'longitude' => '-60.96666666',
                'emoji' => '🇱🇨',
                'enabled' => true,
                'logo_svg' => 'country_logo_181.svg',
                'logo_png' => 'country_logo_181.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Saint Lucia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '187',
                'name' => 'Saint Pierre and Miquelon',
                'iso3' => 'SPM',
                'iso2' => 'PM',
                'phone_code' => '508',
                'capital' => 'Saint-Pierre',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Saint-Pierrais or Miquelonnais',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Miquelon',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'PMDT',
                            'tzName' => 'Pierre & Miquelon Daylight Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '46.83333333',
                'longitude' => '-56.33333333',
                'emoji' => '🇵🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_182.svg',
                'logo_png' => 'country_logo_182.png',
                'region_id' => '2',
                'subregion_id' => '6',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Saint Pierre and Miquelon',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '188',
                'name' => 'Saint Vincent And The Grenadines',
                'iso3' => 'VCT',
                'iso2' => 'VC',
                'phone_code' => '+1-784',
                'capital' => 'Kingstown',
                'currency' => 'XCD',
                'currency_name' => 'Eastern Caribbean dollar',
                'currency_symbol' => '$',
                'nationality' => 'Saint Vincentian, Vincentian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/St_Vincent',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '13.25000000',
                'longitude' => '-61.20000000',
                'emoji' => '🇻🇨',
                'enabled' => true,
                'logo_svg' => 'country_logo_183.svg',
                'logo_png' => 'country_logo_183.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Saint Vincent And The Grenadines',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '189',
                'name' => 'Saint-Barthelemy',
                'iso3' => 'BLM',
                'iso2' => 'BL',
                'phone_code' => '590',
                'capital' => 'Gustavia',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Barthelemois',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/St_Barthelemy',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.50000000',
                'longitude' => '-63.41666666',
                'emoji' => '🇧🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_189.svg',
                'logo_png' => 'country_logo_189.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Saint-Barthelemy',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '190',
                'name' => 'Saint-Martin (French part)',
                'iso3' => 'MAF',
                'iso2' => 'MF',
                'phone_code' => '590',
                'capital' => 'Marigot',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Saint-Martinoise',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Marigot',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.08333333',
                'longitude' => '-63.95000000',
                'emoji' => '🇲🇫',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Saint-Martin (French part)',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '191',
                'name' => 'Samoa',
                'iso3' => 'WSM',
                'iso2' => 'WS',
                'phone_code' => '685',
                'capital' => 'Apia',
                'currency' => 'WST',
                'currency_name' => 'Samoan tālā',
                'currency_symbol' => 'SAT',
                'nationality' => 'Samoan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Apia',
                            'gmtOffset' => 50400,
                            'gmtOffsetName' => 'UTC+14:00',
                            'abbreviation' => 'WST',
                            'tzName' => 'West Samoa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-13.58333333',
                'longitude' => '-172.33333333',
                'emoji' => '🇼🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_184.svg',
                'logo_png' => 'country_logo_184.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Samoa',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '192',
                'name' => 'San Marino',
                'iso3' => 'SMR',
                'iso2' => 'SM',
                'phone_code' => '378',
                'capital' => 'San Marino',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Sammarinese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/San_Marino',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '43.76666666',
                'longitude' => '12.41666666',
                'emoji' => '🇸🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_185.svg',
                'logo_png' => 'country_logo_185.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'San Marino',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '193',
                'name' => 'Sao Tome and Principe',
                'iso3' => 'STP',
                'iso2' => 'ST',
                'phone_code' => '239',
                'capital' => 'Sao Tome',
                'currency' => 'STD',
                'currency_name' => 'Dobra',
                'currency_symbol' => 'Db',
                'nationality' => 'Sao Tomean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Sao_Tome',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '1.00000000',
                'longitude' => '7.00000000',
                'emoji' => '🇸🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_186.svg',
                'logo_png' => 'country_logo_186.png',
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Sao Tome and Principe',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '194',
                'name' => 'Saudi Arabia',
                'iso3' => 'SAU',
                'iso2' => 'SA',
                'phone_code' => '966',
                'capital' => 'Riyadh',
                'currency' => 'SAR',
                'currency_name' => 'Saudi riyal',
                'currency_symbol' => '﷼',
                'nationality' => 'Saudi, Saudi Arabian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Riyadh',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Arabia Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '25.00000000',
                'longitude' => '45.00000000',
                'emoji' => '🇸🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_187.svg',
                'logo_png' => 'country_logo_187.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Saudi Arabia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '195',
                'name' => 'Senegal',
                'iso3' => 'SEN',
                'iso2' => 'SN',
                'phone_code' => '221',
                'capital' => 'Dakar',
                'currency' => 'XOF',
                'currency_name' => 'West African CFA franc',
                'currency_symbol' => 'CFA',
                'nationality' => 'Senegalese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Dakar',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '14.00000000',
                'longitude' => '-14.00000000',
                'emoji' => '🇸🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_188.svg',
                'logo_png' => 'country_logo_188.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Senegal',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '196',
                'name' => 'Serbia',
                'iso3' => 'SRB',
                'iso2' => 'RS',
                'phone_code' => '381',
                'capital' => 'Belgrade',
                'currency' => 'RSD',
                'currency_name' => 'Serbian dinar',
                'currency_symbol' => 'din',
                'nationality' => 'Serbian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Belgrade',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '44.00000000',
                'longitude' => '21.00000000',
                'emoji' => '🇷🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_247.svg',
                'logo_png' => 'country_logo_247.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Serbia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '197',
                'name' => 'Seychelles',
                'iso3' => 'SYC',
                'iso2' => 'SC',
                'phone_code' => '248',
                'capital' => 'Victoria',
                'currency' => 'SCR',
                'currency_name' => 'Seychellois rupee',
                'currency_symbol' => 'SRe',
                'nationality' => 'Seychellois',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Indian/Mahe',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'SCT',
                            'tzName' => 'Seychelles Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-4.58333333',
                'longitude' => '55.66666666',
                'emoji' => '🇸🇨',
                'enabled' => true,
                'logo_svg' => 'country_logo_190.svg',
                'logo_png' => 'country_logo_190.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Seychelles',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '198',
                'name' => 'Sierra Leone',
                'iso3' => 'SLE',
                'iso2' => 'SL',
                'phone_code' => '232',
                'capital' => 'Freetown',
                'currency' => 'SLL',
                'currency_name' => 'Sierra Leonean leone',
                'currency_symbol' => 'Le',
                'nationality' => 'Sierra Leonean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Freetown',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '8.50000000',
                'longitude' => '-11.50000000',
                'emoji' => '🇸🇱',
                'enabled' => true,
                'logo_svg' => 'country_logo_191.svg',
                'logo_png' => 'country_logo_191.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Sierra Leone',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '199',
                'name' => 'Singapore',
                'iso3' => 'SGP',
                'iso2' => 'SG',
                'phone_code' => '65',
                'capital' => 'Singapur',
                'currency' => 'SGD',
                'currency_name' => 'Singapore dollar',
                'currency_symbol' => '$',
                'nationality' => 'Singaporean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Singapore',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'SGT',
                            'tzName' => 'Singapore Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => true,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '1.36666666',
                'longitude' => '103.80000000',
                'emoji' => '🇸🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_192.svg',
                'logo_png' => 'country_logo_192.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => 'en',
                        'name' => 'Singapore',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '200',
                'name' => 'Slovakia',
                'iso3' => 'SVK',
                'iso2' => 'SK',
                'phone_code' => '421',
                'capital' => 'Bratislava',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Slovak',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Bratislava',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '48.66666666',
                'longitude' => '19.50000000',
                'emoji' => '🇸🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_193.svg',
                'logo_png' => 'country_logo_193.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Slovakia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '201',
                'name' => 'Slovenia',
                'iso3' => 'SVN',
                'iso2' => 'SI',
                'phone_code' => '386',
                'capital' => 'Ljubljana',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Slovenian, Slovene',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Ljubljana',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '46.11666666',
                'longitude' => '14.81666666',
                'emoji' => '🇸🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_194.svg',
                'logo_png' => 'country_logo_194.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Slovenia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '202',
                'name' => 'Solomon Islands',
                'iso3' => 'SLB',
                'iso2' => 'SB',
                'phone_code' => '677',
                'capital' => 'Honiara',
                'currency' => 'SBD',
                'currency_name' => 'Solomon Islands dollar',
                'currency_symbol' => 'Si$',
                'nationality' => 'Solomon Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Guadalcanal',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'SBT',
                            'tzName' => 'Solomon Islands Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-8.00000000',
                'longitude' => '159.00000000',
                'emoji' => '🇸🇧',
                'enabled' => true,
                'logo_svg' => 'country_logo_195.svg',
                'logo_png' => 'country_logo_195.png',
                'region_id' => '5',
                'subregion_id' => '20',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Solomon Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '203',
                'name' => 'Somalia',
                'iso3' => 'SOM',
                'iso2' => 'SO',
                'phone_code' => '252',
                'capital' => 'Mogadishu',
                'currency' => 'SOS',
                'currency_name' => 'Somali shilling',
                'currency_symbol' => 'Sh.so.',
                'nationality' => 'Somali, Somalian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Mogadishu',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '10.00000000',
                'longitude' => '49.00000000',
                'emoji' => '🇸🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_196.svg',
                'logo_png' => 'country_logo_196.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Somalia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '204',
                'name' => 'South Africa',
                'iso3' => 'ZAF',
                'iso2' => 'ZA',
                'phone_code' => '27',
                'capital' => 'Pretoria',
                'currency' => 'ZAR',
                'currency_name' => 'South African rand',
                'currency_symbol' => 'R',
                'nationality' => 'South African',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Johannesburg',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'SAST',
                            'tzName' => 'South African Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-29.00000000',
                'longitude' => '24.00000000',
                'emoji' => '🇿🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_197.svg',
                'logo_png' => 'country_logo_197.png',
                'region_id' => '1',
                'subregion_id' => '5',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'South Africa',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '205',
                'name' => 'South Georgia',
                'iso3' => 'SGS',
                'iso2' => 'GS',
                'phone_code' => '500',
                'capital' => 'Grytviken',
                'currency' => 'GBP',
                'currency_name' => 'British pound',
                'currency_symbol' => '£',
                'nationality' => 'South Georgia or South Sandwich Islands',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Atlantic/South_Georgia',
                            'gmtOffset' => -7200,
                            'gmtOffsetName' => 'UTC-02:00',
                            'abbreviation' => 'GST',
                            'tzName' => 'South Georgia and the South Sandwich Islands Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-54.50000000',
                'longitude' => '-37.00000000',
                'emoji' => '🇬🇸',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'South Georgia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '206',
                'name' => 'South Sudan',
                'iso3' => 'SSD',
                'iso2' => 'SS',
                'phone_code' => '211',
                'capital' => 'Juba',
                'currency' => 'SSP',
                'currency_name' => 'South Sudanese pound',
                'currency_symbol' => '£',
                'nationality' => 'South Sudanese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Juba',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '7.00000000',
                'longitude' => '30.00000000',
                'emoji' => '🇸🇸',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '1',
                'subregion_id' => '2',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'South Sudan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '207',
                'name' => 'Spain',
                'iso3' => 'ESP',
                'iso2' => 'ES',
                'phone_code' => '34',
                'capital' => 'Madrid',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Spanish',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Ceuta',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                        array(
                            'zoneName' => 'Atlantic/Canary',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'WET',
                            'tzName' => 'Western European Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Madrid',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '40.00000000',
                'longitude' => '-4.00000000',
                'emoji' => '🇪🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_199.svg',
                'logo_png' => 'country_logo_199.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Spain',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '208',
                'name' => 'Sri Lanka',
                'iso3' => 'LKA',
                'iso2' => 'LK',
                'phone_code' => '94',
                'capital' => 'Colombo',
                'currency' => 'LKR',
                'currency_name' => 'Sri Lankan rupee',
                'currency_symbol' => 'Rs',
                'nationality' => 'Sri Lankan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Colombo',
                            'gmtOffset' => 19800,
                            'gmtOffsetName' => 'UTC+05:30',
                            'abbreviation' => 'IST',
                            'tzName' => 'Indian Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '7.00000000',
                'longitude' => '81.00000000',
                'emoji' => '🇱🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_200.svg',
                'logo_png' => 'country_logo_200.png',
                'region_id' => '3',
                'subregion_id' => '14',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Sri Lanka',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '209',
                'name' => 'Sudan',
                'iso3' => 'SDN',
                'iso2' => 'SD',
                'phone_code' => '249',
                'capital' => 'Khartoum',
                'currency' => 'SDG',
                'currency_name' => 'Sudanese pound',
                'currency_symbol' => '.س.ج',
                'nationality' => 'Sudanese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Khartoum',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'Eastern African Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.00000000',
                'longitude' => '30.00000000',
                'emoji' => '🇸🇩',
                'enabled' => true,
                'logo_svg' => 'country_logo_201.svg',
                'logo_png' => 'country_logo_201.png',
                'region_id' => '1',
                'subregion_id' => '1',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Sudan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '210',
                'name' => 'Suriname',
                'iso3' => 'SUR',
                'iso2' => 'SR',
                'phone_code' => '597',
                'capital' => 'Paramaribo',
                'currency' => 'SRD',
                'currency_name' => 'Surinamese dollar',
                'currency_symbol' => '$',
                'nationality' => 'Surinamese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Paramaribo',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'SRT',
                            'tzName' => 'Suriname Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '4.00000000',
                'longitude' => '-56.00000000',
                'emoji' => '🇸🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_202.svg',
                'logo_png' => 'country_logo_202.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Suriname',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '211',
                'name' => 'Svalbard And Jan Mayen Islands',
                'iso3' => 'SJM',
                'iso2' => 'SJ',
                'phone_code' => '47',
                'capital' => 'Longyearbyen',
                'currency' => 'NOK',
                'currency_name' => 'Norwegian Krone',
                'currency_symbol' => 'kr',
                'nationality' => 'Svalbard',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Arctic/Longyearbyen',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '78.00000000',
                'longitude' => '20.00000000',
                'emoji' => '🇸🇯',
                'enabled' => true,
                'logo_svg' => 'country_logo_203.svg',
                'logo_png' => 'country_logo_203.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Svalbard And Jan Mayen Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '212',
                'name' => 'Swaziland',
                'iso3' => 'SWZ',
                'iso2' => 'SZ',
                'phone_code' => '268',
                'capital' => 'Mbabane',
                'currency' => 'SZL',
                'currency_name' => 'Lilangeni',
                'currency_symbol' => 'E',
                'nationality' => 'Swazi',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Mbabane',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'SAST',
                            'tzName' => 'South African Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-26.50000000',
                'longitude' => '31.50000000',
                'emoji' => '🇸🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_204.svg',
                'logo_png' => 'country_logo_204.png',
                'region_id' => '1',
                'subregion_id' => '5',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Swaziland',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '213',
                'name' => 'Sweden',
                'iso3' => 'SWE',
                'iso2' => 'SE',
                'phone_code' => '46',
                'capital' => 'Stockholm',
                'currency' => 'SEK',
                'currency_name' => 'Swedish krona',
                'currency_symbol' => 'kr',
                'nationality' => 'Swedish',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Stockholm',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '62.00000000',
                'longitude' => '15.00000000',
                'emoji' => '🇸🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_205.svg',
                'logo_png' => 'country_logo_205.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Sweden',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '214',
                'name' => 'Switzerland',
                'iso3' => 'CHE',
                'iso2' => 'CH',
                'phone_code' => '41',
                'capital' => 'Bern',
                'currency' => 'CHF',
                'currency_name' => 'Swiss franc',
                'currency_symbol' => 'CHf',
                'nationality' => 'Swiss',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Zurich',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '47.00000000',
                'longitude' => '8.00000000',
                'emoji' => '🇨🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_206.svg',
                'logo_png' => 'country_logo_206.png',
                'region_id' => '4',
                'subregion_id' => '17',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Switzerland',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '215',
                'name' => 'Syria',
                'iso3' => 'SYR',
                'iso2' => 'SY',
                'phone_code' => '963',
                'capital' => 'Damascus',
                'currency' => 'SYP',
                'currency_name' => 'Syrian pound',
                'currency_symbol' => 'LS',
                'nationality' => 'Syrian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Damascus',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '35.00000000',
                'longitude' => '38.00000000',
                'emoji' => '🇸🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_207.svg',
                'logo_png' => 'country_logo_207.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Syria',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '216',
                'name' => 'Taiwan',
                'iso3' => 'TWN',
                'iso2' => 'TW',
                'phone_code' => '886',
                'capital' => 'Taipei',
                'currency' => 'TWD',
                'currency_name' => 'New Taiwan dollar',
                'currency_symbol' => '$',
                'nationality' => 'Chinese, Taiwanese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Taipei',
                            'gmtOffset' => 28800,
                            'gmtOffsetName' => 'UTC+08:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'China Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '23.50000000',
                'longitude' => '121.00000000',
                'emoji' => '🇹🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_208.svg',
                'logo_png' => 'country_logo_208.png',
                'region_id' => '3',
                'subregion_id' => '12',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Taiwan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '217',
                'name' => 'Tajikistan',
                'iso3' => 'TJK',
                'iso2' => 'TJ',
                'phone_code' => '992',
                'capital' => 'Dushanbe',
                'currency' => 'TJS',
                'currency_name' => 'Tajikistani somoni',
                'currency_symbol' => 'SM',
                'nationality' => 'Tajikistani',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Dushanbe',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'TJT',
                            'tzName' => 'Tajikistan Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '39.00000000',
                'longitude' => '71.00000000',
                'emoji' => '🇹🇯',
                'enabled' => true,
                'logo_svg' => 'country_logo_209.svg',
                'logo_png' => 'country_logo_209.png',
                'region_id' => '3',
                'subregion_id' => '10',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Tajikistan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '218',
                'name' => 'Tanzania',
                'iso3' => 'TZA',
                'iso2' => 'TZ',
                'phone_code' => '255',
                'capital' => 'Dodoma',
                'currency' => 'TZS',
                'currency_name' => 'Tanzanian shilling',
                'currency_symbol' => 'TSh',
                'nationality' => 'Tanzanian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Dar_es_Salaam',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-6.00000000',
                'longitude' => '35.00000000',
                'emoji' => '🇹🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_210.svg',
                'logo_png' => 'country_logo_210.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Tanzania',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '219',
                'name' => 'Thailand',
                'iso3' => 'THA',
                'iso2' => 'TH',
                'phone_code' => '66',
                'capital' => 'Bangkok',
                'currency' => 'THB',
                'currency_name' => 'Thai baht',
                'currency_symbol' => '฿',
                'nationality' => 'Thai',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Bangkok',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'ICT',
                            'tzName' => 'Indochina Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.00000000',
                'longitude' => '100.00000000',
                'emoji' => '🇹🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_211.svg',
                'logo_png' => 'country_logo_211.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Thailand',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '220',
                'name' => 'Togo',
                'iso3' => 'TGO',
                'iso2' => 'TG',
                'phone_code' => '228',
                'capital' => 'Lome',
                'currency' => 'XOF',
                'currency_name' => 'West African CFA franc',
                'currency_symbol' => 'CFA',
                'nationality' => 'Togolese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Lome',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '8.00000000',
                'longitude' => '1.16666666',
                'emoji' => '🇹🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_213.svg',
                'logo_png' => 'country_logo_213.png',
                'region_id' => '1',
                'subregion_id' => '3',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Togo',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '221',
                'name' => 'Tokelau',
                'iso3' => 'TKL',
                'iso2' => 'TK',
                'phone_code' => '690',
                'capital' => '',
                'currency' => 'NZD',
                'currency_name' => 'New Zealand dollar',
                'currency_symbol' => '$',
                'nationality' => 'Tokelauan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Fakaofo',
                            'gmtOffset' => 46800,
                            'gmtOffsetName' => 'UTC+13:00',
                            'abbreviation' => 'TKT',
                            'tzName' => 'Tokelau Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-9.00000000',
                'longitude' => '-172.00000000',
                'emoji' => '🇹🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_214.svg',
                'logo_png' => 'country_logo_214.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Tokelau',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '222',
                'name' => 'Tonga',
                'iso3' => 'TON',
                'iso2' => 'TO',
                'phone_code' => '676',
                'capital' => 'Nuku\'alofa',
                'currency' => 'TOP',
                'currency_name' => 'Tongan paʻanga',
                'currency_symbol' => '$',
                'nationality' => 'Tongan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Tongatapu',
                            'gmtOffset' => 46800,
                            'gmtOffsetName' => 'UTC+13:00',
                            'abbreviation' => 'TOT',
                            'tzName' => 'Tonga Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-20.00000000',
                'longitude' => '-175.00000000',
                'emoji' => '🇹🇴',
                'enabled' => true,
                'logo_svg' => 'country_logo_215.svg',
                'logo_png' => 'country_logo_215.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Tonga',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '223',
                'name' => 'Trinidad And Tobago',
                'iso3' => 'TTO',
                'iso2' => 'TT',
                'phone_code' => '+1-868',
                'capital' => 'Port of Spain',
                'currency' => 'TTD',
                'currency_name' => 'Trinidad and Tobago dollar',
                'currency_symbol' => '$',
                'nationality' => 'Trinidadian or Tobagonian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Port_of_Spain',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '11.00000000',
                'longitude' => '-61.00000000',
                'emoji' => '🇹🇹',
                'enabled' => true,
                'logo_svg' => 'country_logo_216.svg',
                'logo_png' => 'country_logo_216.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Trinidad And Tobago',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '224',
                'name' => 'Tunisia',
                'iso3' => 'TUN',
                'iso2' => 'TN',
                'phone_code' => '216',
                'capital' => 'Tunis',
                'currency' => 'TND',
                'currency_name' => 'Tunisian dinar',
                'currency_symbol' => 'ت.د',
                'nationality' => 'Tunisian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Tunis',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '34.00000000',
                'longitude' => '9.00000000',
                'emoji' => '🇹🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_217.svg',
                'logo_png' => 'country_logo_217.png',
                'region_id' => '1',
                'subregion_id' => '1',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Tunisia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '225',
                'name' => 'Turkey',
                'iso3' => 'TUR',
                'iso2' => 'TR',
                'phone_code' => '90',
                'capital' => 'Ankara',
                'currency' => 'TRY',
                'currency_name' => 'Turkish lira',
                'currency_symbol' => '₺',
                'nationality' => 'Turkish',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Istanbul',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '39.00000000',
                'longitude' => '35.00000000',
                'emoji' => '🇹🇷',
                'enabled' => true,
                'logo_svg' => 'country_logo_218.svg',
                'logo_png' => 'country_logo_218.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Turkey',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '226',
                'name' => 'Turkmenistan',
                'iso3' => 'TKM',
                'iso2' => 'TM',
                'phone_code' => '993',
                'capital' => 'Ashgabat',
                'currency' => 'TMT',
                'currency_name' => 'Turkmenistan manat',
                'currency_symbol' => 'T',
                'nationality' => 'Turkmen',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Ashgabat',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'TMT',
                            'tzName' => 'Turkmenistan Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '40.00000000',
                'longitude' => '60.00000000',
                'emoji' => '🇹🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_219.svg',
                'logo_png' => 'country_logo_219.png',
                'region_id' => '3',
                'subregion_id' => '10',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Turkmenistan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '227',
                'name' => 'Turks And Caicos Islands',
                'iso3' => 'TCA',
                'iso2' => 'TC',
                'phone_code' => '+1-649',
                'capital' => 'Cockburn Town',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'Turks and Caicos Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Grand_Turk',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '21.75000000',
                'longitude' => '-71.58333333',
                'emoji' => '🇹🇨',
                'enabled' => true,
                'logo_svg' => 'country_logo_220.svg',
                'logo_png' => 'country_logo_220.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Turks And Caicos Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '228',
                'name' => 'Tuvalu',
                'iso3' => 'TUV',
                'iso2' => 'TV',
                'phone_code' => '688',
                'capital' => 'Funafuti',
                'currency' => 'AUD',
                'currency_name' => 'Australian dollar',
                'currency_symbol' => '$',
                'nationality' => 'Tuvaluan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Funafuti',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'TVT',
                            'tzName' => 'Tuvalu Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-8.00000000',
                'longitude' => '178.00000000',
                'emoji' => '🇹🇻',
                'enabled' => true,
                'logo_svg' => 'country_logo_221.svg',
                'logo_png' => 'country_logo_221.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Tuvalu',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '229',
                'name' => 'Uganda',
                'iso3' => 'UGA',
                'iso2' => 'UG',
                'phone_code' => '256',
                'capital' => 'Kampala',
                'currency' => 'UGX',
                'currency_name' => 'Ugandan shilling',
                'currency_symbol' => 'USh',
                'nationality' => 'Ugandan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Kampala',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'EAT',
                            'tzName' => 'East Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '1.00000000',
                'longitude' => '32.00000000',
                'emoji' => '🇺🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_222.svg',
                'logo_png' => 'country_logo_222.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Uganda',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '230',
                'name' => 'Ukraine',
                'iso3' => 'UKR',
                'iso2' => 'UA',
                'phone_code' => '380',
                'capital' => 'Kyiv',
                'currency' => 'UAH',
                'currency_name' => 'Ukrainian hryvnia',
                'currency_symbol' => '₴',
                'nationality' => 'Ukrainian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Kiev',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Simferopol',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'MSK',
                            'tzName' => 'Moscow Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Uzhgorod',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                        array(
                            'zoneName' => 'Europe/Zaporozhye',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'EET',
                            'tzName' => 'Eastern European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '49.00000000',
                'longitude' => '32.00000000',
                'emoji' => '🇺🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_223.svg',
                'logo_png' => 'country_logo_223.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Ukraine',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '231',
                'name' => 'United Arab Emirates',
                'iso3' => 'ARE',
                'iso2' => 'AE',
                'phone_code' => '971',
                'capital' => 'Abu Dhabi',
                'currency' => 'AED',
                'currency_name' => 'United Arab Emirates dirham',
                'currency_symbol' => 'إ.د',
                'nationality' => 'Emirati, Emirian, Emiri',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Dubai',
                            'gmtOffset' => 14400,
                            'gmtOffsetName' => 'UTC+04:00',
                            'abbreviation' => 'GST',
                            'tzName' => 'Gulf Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '24.00000000',
                'longitude' => '54.00000000',
                'emoji' => '🇦🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_224.svg',
                'logo_png' => 'country_logo_224.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'United Arab Emirates',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '232',
                'name' => 'United Kingdom',
                'iso3' => 'GBR',
                'iso2' => 'GB',
                'phone_code' => '44',
                'capital' => 'London',
                'currency' => 'GBP',
                'currency_name' => 'British pound',
                'currency_symbol' => '£',
                'nationality' => 'British, UK',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/London',
                            'gmtOffset' => 0,
                            'gmtOffsetName' => 'UTC±00',
                            'abbreviation' => 'GMT',
                            'tzName' => 'Greenwich Mean Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '54.00000000',
                'longitude' => '-2.00000000',
                'emoji' => '🇬🇧',
                'enabled' => true,
                'logo_svg' => 'country_logo_225.svg',
                'logo_png' => 'country_logo_225.png',
                'region_id' => '4',
                'subregion_id' => '18',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'United Kingdom',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '233',
                'name' => 'United States',
                'iso3' => 'USA',
                'iso2' => 'US',
                'phone_code' => '1',
                'capital' => 'Washington',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'American',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Adak',
                            'gmtOffset' => -36000,
                            'gmtOffsetName' => 'UTC-10:00',
                            'abbreviation' => 'HST',
                            'tzName' => 'Hawaii–Aleutian Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Anchorage',
                            'gmtOffset' => -32400,
                            'gmtOffsetName' => 'UTC-09:00',
                            'abbreviation' => 'AKST',
                            'tzName' => 'Alaska Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Boise',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Chicago',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Denver',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Detroit',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Indiana/Indianapolis',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Indiana/Knox',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Indiana/Marengo',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Indiana/Petersburg',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Indiana/Tell_City',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Indiana/Vevay',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Indiana/Vincennes',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Indiana/Winamac',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Juneau',
                            'gmtOffset' => -32400,
                            'gmtOffsetName' => 'UTC-09:00',
                            'abbreviation' => 'AKST',
                            'tzName' => 'Alaska Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Kentucky/Louisville',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Kentucky/Monticello',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Los_Angeles',
                            'gmtOffset' => -28800,
                            'gmtOffsetName' => 'UTC-08:00',
                            'abbreviation' => 'PST',
                            'tzName' => 'Pacific Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Menominee',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Metlakatla',
                            'gmtOffset' => -32400,
                            'gmtOffsetName' => 'UTC-09:00',
                            'abbreviation' => 'AKST',
                            'tzName' => 'Alaska Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/New_York',
                            'gmtOffset' => -18000,
                            'gmtOffsetName' => 'UTC-05:00',
                            'abbreviation' => 'EST',
                            'tzName' => 'Eastern Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Nome',
                            'gmtOffset' => -32400,
                            'gmtOffsetName' => 'UTC-09:00',
                            'abbreviation' => 'AKST',
                            'tzName' => 'Alaska Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/North_Dakota/Beulah',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/North_Dakota/Center',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/North_Dakota/New_Salem',
                            'gmtOffset' => -21600,
                            'gmtOffsetName' => 'UTC-06:00',
                            'abbreviation' => 'CST',
                            'tzName' => 'Central Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Phoenix',
                            'gmtOffset' => -25200,
                            'gmtOffsetName' => 'UTC-07:00',
                            'abbreviation' => 'MST',
                            'tzName' => 'Mountain Standard Time (North America',
                        ),
                        array(
                            'zoneName' => 'America/Sitka',
                            'gmtOffset' => -32400,
                            'gmtOffsetName' => 'UTC-09:00',
                            'abbreviation' => 'AKST',
                            'tzName' => 'Alaska Standard Time',
                        ),
                        array(
                            'zoneName' => 'America/Yakutat',
                            'gmtOffset' => -32400,
                            'gmtOffsetName' => 'UTC-09:00',
                            'abbreviation' => 'AKST',
                            'tzName' => 'Alaska Standard Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Honolulu',
                            'gmtOffset' => -36000,
                            'gmtOffsetName' => 'UTC-10:00',
                            'abbreviation' => 'HST',
                            'tzName' => 'Hawaii–Aleutian Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '38.00000000',
                'longitude' => '-97.00000000',
                'emoji' => '🇺🇸',
                'enabled' => true,
                'logo_svg' => 'country_logo_226.svg',
                'logo_png' => 'country_logo_226.png',
                'region_id' => '2',
                'subregion_id' => '6',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'United States',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '234',
                'name' => 'United States Minor Outlying Islands',
                'iso3' => 'UMI',
                'iso2' => 'UM',
                'phone_code' => '1',
                'capital' => '',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'American',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Midway',
                            'gmtOffset' => -39600,
                            'gmtOffsetName' => 'UTC-11:00',
                            'abbreviation' => 'SST',
                            'tzName' => 'Samoa Standard Time',
                        ),
                        array(
                            'zoneName' => 'Pacific/Wake',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'WAKT',
                            'tzName' => 'Wake Island Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '0.00000000',
                'longitude' => '0.00000000',
                'emoji' => '🇺🇲',
                'enabled' => true,
                'logo_svg' => null,
                'logo_png' => null,
                'region_id' => '2',
                'subregion_id' => '6',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'United States Minor Outlying Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '235',
                'name' => 'Uruguay',
                'iso3' => 'URY',
                'iso2' => 'UY',
                'phone_code' => '598',
                'capital' => 'Montevideo',
                'currency' => 'UYU',
                'currency_name' => 'Uruguayan peso',
                'currency_symbol' => '$',
                'nationality' => 'Uruguayan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Montevideo',
                            'gmtOffset' => -10800,
                            'gmtOffsetName' => 'UTC-03:00',
                            'abbreviation' => 'UYT',
                            'tzName' => 'Uruguay Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-33.00000000',
                'longitude' => '-56.00000000',
                'emoji' => '🇺🇾',
                'enabled' => true,
                'logo_svg' => 'country_logo_228.svg',
                'logo_png' => 'country_logo_228.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Uruguay',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '236',
                'name' => 'Uzbekistan',
                'iso3' => 'UZB',
                'iso2' => 'UZ',
                'phone_code' => '998',
                'capital' => 'Tashkent',
                'currency' => 'UZS',
                'currency_name' => 'Uzbekistani soʻm',
                'currency_symbol' => 'лв',
                'nationality' => 'Uzbekistani, Uzbek',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Samarkand',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'UZT',
                            'tzName' => 'Uzbekistan Time',
                        ),
                        array(
                            'zoneName' => 'Asia/Tashkent',
                            'gmtOffset' => 18000,
                            'gmtOffsetName' => 'UTC+05:00',
                            'abbreviation' => 'UZT',
                            'tzName' => 'Uzbekistan Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '41.00000000',
                'longitude' => '64.00000000',
                'emoji' => '🇺🇿',
                'enabled' => true,
                'logo_svg' => 'country_logo_229.svg',
                'logo_png' => 'country_logo_229.png',
                'region_id' => '3',
                'subregion_id' => '10',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Uzbekistan',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '237',
                'name' => 'Vanuatu',
                'iso3' => 'VUT',
                'iso2' => 'VU',
                'phone_code' => '678',
                'capital' => 'Port Vila',
                'currency' => 'VUV',
                'currency_name' => 'Vanuatu vatu',
                'currency_symbol' => 'VT',
                'nationality' => 'Ni-Vanuatu, Vanuatuan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Efate',
                            'gmtOffset' => 39600,
                            'gmtOffsetName' => 'UTC+11:00',
                            'abbreviation' => 'VUT',
                            'tzName' => 'Vanuatu Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-16.00000000',
                'longitude' => '167.00000000',
                'emoji' => '🇻🇺',
                'enabled' => true,
                'logo_svg' => 'country_logo_230.svg',
                'logo_png' => 'country_logo_230.png',
                'region_id' => '5',
                'subregion_id' => '20',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Vanuatu',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '238',
                'name' => 'Vatican City State (Holy See)',
                'iso3' => 'VAT',
                'iso2' => 'VA',
                'phone_code' => '379',
                'capital' => 'Vatican City',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Vatican',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Vatican',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '41.90000000',
                'longitude' => '12.45000000',
                'emoji' => '🇻🇦',
                'enabled' => true,
                'logo_svg' => 'country_logo_94.svg',
                'logo_png' => 'country_logo_94.png',
                'region_id' => '4',
                'subregion_id' => '16',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Vatican City State (Holy See)',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '239',
                'name' => 'Venezuela',
                'iso3' => 'VEN',
                'iso2' => 'VE',
                'phone_code' => '58',
                'capital' => 'Caracas',
                'currency' => 'VES',
                'currency_name' => 'Bolívar',
                'currency_symbol' => 'Bs',
                'nationality' => 'Venezuelan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Caracas',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'VET',
                            'tzName' => 'Venezuelan Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '8.00000000',
                'longitude' => '-66.00000000',
                'emoji' => '🇻🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_231.svg',
                'logo_png' => 'country_logo_231.png',
                'region_id' => '2',
                'subregion_id' => '8',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Venezuela',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '240',
                'name' => 'Vietnam',
                'iso3' => 'VNM',
                'iso2' => 'VN',
                'phone_code' => '84',
                'capital' => 'Hanoi',
                'currency' => 'VND',
                'currency_name' => 'Vietnamese đồng',
                'currency_symbol' => '₫',
                'nationality' => 'Vietnamese',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Ho_Chi_Minh',
                            'gmtOffset' => 25200,
                            'gmtOffsetName' => 'UTC+07:00',
                            'abbreviation' => 'ICT',
                            'tzName' => 'Indochina Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '16.16666666',
                'longitude' => '107.83333333',
                'emoji' => '🇻🇳',
                'enabled' => true,
                'logo_svg' => 'country_logo_232.svg',
                'logo_png' => 'country_logo_232.png',
                'region_id' => '3',
                'subregion_id' => '13',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Vietnam',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '241',
                'name' => 'Virgin Islands (British)',
                'iso3' => 'VGB',
                'iso2' => 'VG',
                'phone_code' => '+1-284',
                'capital' => 'Road Town',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'British Virgin Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Tortola',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.43138300',
                'longitude' => '-64.62305000',
                'emoji' => '🇻🇬',
                'enabled' => true,
                'logo_svg' => 'country_logo_233.svg',
                'logo_png' => 'country_logo_233.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Virgin Islands (British)',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '242',
                'name' => 'Virgin Islands (US)',
                'iso3' => 'VIR',
                'iso2' => 'VI',
                'phone_code' => '+1-340',
                'capital' => 'Charlotte Amalie',
                'currency' => 'USD',
                'currency_name' => 'United States dollar',
                'currency_symbol' => '$',
                'nationality' => 'U.S. Virgin Island',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/St_Thomas',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.34000000',
                'longitude' => '-64.93000000',
                'emoji' => '🇻🇮',
                'enabled' => true,
                'logo_svg' => 'country_logo_234.svg',
                'logo_png' => 'country_logo_234.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Virgin Islands (US)',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '243',
                'name' => 'Wallis And Futuna Islands',
                'iso3' => 'WLF',
                'iso2' => 'WF',
                'phone_code' => '681',
                'capital' => 'Mata Utu',
                'currency' => 'XPF',
                'currency_name' => 'CFP franc',
                'currency_symbol' => '₣',
                'nationality' => 'Wallis and Futuna, Wallisian or Futunan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Pacific/Wallis',
                            'gmtOffset' => 43200,
                            'gmtOffsetName' => 'UTC+12:00',
                            'abbreviation' => 'WFT',
                            'tzName' => 'Wallis & Futuna Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-13.30000000',
                'longitude' => '-176.20000000',
                'emoji' => '🇼🇫',
                'enabled' => true,
                'logo_svg' => 'country_logo_235.svg',
                'logo_png' => 'country_logo_235.png',
                'region_id' => '5',
                'subregion_id' => '22',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Wallis And Futuna Islands',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '244',
                'name' => 'Western Sahara',
                'iso3' => 'ESH',
                'iso2' => 'EH',
                'phone_code' => '212',
                'capital' => 'El-Aaiun',
                'currency' => 'MAD',
                'currency_name' => 'Moroccan Dirham',
                'currency_symbol' => 'MAD',
                'nationality' => 'Sahrawi, Sahrawian, Sahraouian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/El_Aaiun',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'WEST',
                            'tzName' => 'Western European Summer Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '24.50000000',
                'longitude' => '-13.00000000',
                'emoji' => '🇪🇭',
                'enabled' => true,
                'logo_svg' => 'country_logo_236.svg',
                'logo_png' => 'country_logo_236.png',
                'region_id' => '1',
                'subregion_id' => '1',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Western Sahara',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '245',
                'name' => 'Yemen',
                'iso3' => 'YEM',
                'iso2' => 'YE',
                'phone_code' => '967',
                'capital' => 'Sanaa',
                'currency' => 'YER',
                'currency_name' => 'Yemeni rial',
                'currency_symbol' => '﷼',
                'nationality' => 'Yemeni',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Asia/Aden',
                            'gmtOffset' => 10800,
                            'gmtOffsetName' => 'UTC+03:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Arabia Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '15.00000000',
                'longitude' => '48.00000000',
                'emoji' => '🇾🇪',
                'enabled' => true,
                'logo_svg' => 'country_logo_237.svg',
                'logo_png' => 'country_logo_237.png',
                'region_id' => '3',
                'subregion_id' => '11',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Yemen',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '246',
                'name' => 'Zambia',
                'iso3' => 'ZMB',
                'iso2' => 'ZM',
                'phone_code' => '260',
                'capital' => 'Lusaka',
                'currency' => 'ZMW',
                'currency_name' => 'Zambian kwacha',
                'currency_symbol' => 'ZK',
                'nationality' => 'Zambian',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Lusaka',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'CAT',
                            'tzName' => 'Central Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-15.00000000',
                'longitude' => '30.00000000',
                'emoji' => '🇿🇲',
                'enabled' => true,
                'logo_svg' => 'country_logo_238.svg',
                'logo_png' => 'country_logo_238.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Zambia',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '247',
                'name' => 'Zimbabwe',
                'iso3' => 'ZWE',
                'iso2' => 'ZW',
                'phone_code' => '263',
                'capital' => 'Harare',
                'currency' => 'ZWL',
                'currency_name' => 'Zimbabwe Dollar',
                'currency_symbol' => '$',
                'nationality' => 'Zimbabwean',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Africa/Harare',
                            'gmtOffset' => 7200,
                            'gmtOffsetName' => 'UTC+02:00',
                            'abbreviation' => 'CAT',
                            'tzName' => 'Central Africa Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '-20.00000000',
                'longitude' => '30.00000000',
                'emoji' => '🇿🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_239.svg',
                'logo_png' => 'country_logo_239.png',
                'region_id' => '1',
                'subregion_id' => '4',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Zimbabwe',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '248',
                'name' => 'Kosovo',
                'iso3' => 'XKX',
                'iso2' => 'XK',
                'phone_code' => '383',
                'capital' => 'Pristina',
                'currency' => 'EUR',
                'currency_name' => 'Euro',
                'currency_symbol' => '€',
                'nationality' => 'Kosovar, Kosovan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'Europe/Belgrade',
                            'gmtOffset' => 3600,
                            'gmtOffsetName' => 'UTC+01:00',
                            'abbreviation' => 'CET',
                            'tzName' => 'Central European Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '42.56129090',
                'longitude' => '20.34030350',
                'emoji' => '🇽🇰',
                'enabled' => true,
                'logo_svg' => 'country_logo_248.svg',
                'logo_png' => 'country_logo_248.png',
                'region_id' => '4',
                'subregion_id' => '15',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Kosovo',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '249',
                'name' => 'Curaçao',
                'iso3' => 'CUW',
                'iso2' => 'CW',
                'phone_code' => '599',
                'capital' => 'Willemstad',
                'currency' => 'ANG',
                'currency_name' => 'Netherlands Antillean guilder',
                'currency_symbol' => 'ƒ',
                'nationality' => 'Curacaoan',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Curacao',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '12.11666700',
                'longitude' => '-68.93333300',
                'emoji' => '🇨🇼',
                'enabled' => true,
                'logo_svg' => 'country_logo_249.svg',
                'logo_png' => 'country_logo_249.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Curaçao',
                        'native' => null,

                    ),
            ),
            array(
                'id' => '250',
                'name' => 'Sint Maarten (Dutch part)',
                'iso3' => 'SXM',
                'iso2' => 'SX',
                'phone_code' => '1721',
                'capital' => 'Philipsburg',
                'currency' => 'ANG',
                'currency_name' => 'Netherlands Antillean guilder',
                'currency_symbol' => 'ƒ',
                'nationality' => 'Sint Maarten',
                'timezones' =>
                    array(
                        array(
                            'zoneName' => 'America/Anguilla',
                            'gmtOffset' => -14400,
                            'gmtOffsetName' => 'UTC-04:00',
                            'abbreviation' => 'AST',
                            'tzName' => 'Atlantic Standard Time',
                        ),
                    ),
                'country_data' =>
                    array(
                        'language_enabled' => false,
                        'multi_currency_enabled' => false,
                        'is_serving' => false,
                    ),
                'latitude' => '18.03333300',
                'longitude' => '-63.05000000',
                'emoji' => '🇸🇽',
                'enabled' => true,
                'logo_svg' => 'country_logo_250.svg',
                'logo_png' => 'country_logo_250.png',
                'region_id' => '2',
                'subregion_id' => '7',
                'language' =>
                    array(
                        'code' => null,
                        'name' => 'Sint Maarten (Dutch part)',
                        'native' => null,

                    ),
            ),
        );
    }
}
