<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Fintech\MetaData\Repositories\Eloquent\CurrencyRepository;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $currency) {
            if ($currency['logo_png'] != null) {
                $image_png = __DIR__ . '/../../resources/img/currency_logo_png/' . $currency['logo_png'];
                $currency['logo_png'] = 'data:image/png;base64,' . base64_encode(file_get_contents($image_png));
            }
            if ($currency['logo_svg'] != null) {
                $image_svg = __DIR__ . '/../../resources/img/currency_logo_svg/' . $currency['logo_svg'];
                $currency['logo_svg'] = 'data:image/svg+xml;base64,' . base64_encode(file_get_contents($image_svg));
            }

            (new CurrencyRepository())->create($currency);
        }
    }

    private function data()
    {
        return array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Afghan afghani',
                    'native' => 'Afghan afghani',
                    'code' => 'AFN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '؋',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#74bd4e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_1.svg',
                    'logo_png' => 'country_logo_1.png',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Albanian lek',
                    'native' => 'Albanian lek',
                    'code' => 'ALL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'L',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ed8be3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_2.svg',
                    'logo_png' => 'country_logo_2.png',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Algerian dinar',
                    'native' => 'Algerian dinar',
                    'code' => 'DZD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'د.ج',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#976cb9',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_3.svg',
                    'logo_png' => 'country_logo_3.png',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'US Dollar',
                    'native' => 'US Dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_4.svg',
                    'logo_png' => 'country_logo_4.png',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_5.svg',
                    'logo_png' => 'country_logo_5.png',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Angolan kwanza',
                    'native' => 'Angolan kwanza',
                    'code' => 'AOA',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Kz',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#96b6d5',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_6.svg',
                    'logo_png' => 'country_logo_6.png',
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'East Caribbean dollar',
                    'native' => 'East Caribbean dollar',
                    'code' => 'XCD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#58a9c8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_7.svg',
                    'logo_png' => 'country_logo_7.png',
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Antarctican dollar',
                    'native' => 'Antarctican dollar',
                    'code' => 'AAD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => NULL,
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_8.svg',
                    'logo_png' => 'country_logo_8.png',
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Eastern Caribbean dollar',
                    'native' => 'Eastern Caribbean dollar',
                    'code' => 'XCD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#58a9c8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_9.svg',
                    'logo_png' => 'country_logo_9.png',
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Argentine peso',
                    'native' => 'Argentine peso',
                    'code' => 'ARS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#8f095c',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_10.svg',
                    'logo_png' => 'country_logo_10.png',
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Armenian dram',
                    'native' => 'Armenian dram',
                    'code' => 'AMD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'դր.',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#843736',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_11.svg',
                    'logo_png' => 'country_logo_11.png',
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Aruban florin',
                    'native' => 'Aruban florin',
                    'code' => 'AWG',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ƒ',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#54a0bd',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_12.svg',
                    'logo_png' => 'country_logo_12.png',
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Australian dollar',
                    'native' => 'Australian dollar',
                    'code' => 'AUD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ' ',
                    'color' => '#1050cc',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_13.svg',
                    'logo_png' => 'country_logo_13.png',
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_14.svg',
                    'logo_png' => 'country_logo_14.png',
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'Azerbaijani manat',
                    'native' => 'Azerbaijani manat',
                    'code' => 'AZN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₼',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#da38f1',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_15.svg',
                    'logo_png' => 'country_logo_15.png',
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Bahamian dollar',
                    'native' => 'Bahamian dollar',
                    'code' => 'BSD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#873967',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_16.svg',
                    'logo_png' => 'country_logo_16.png',
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Bahraini dinar',
                    'native' => 'Bahraini dinar',
                    'code' => 'BHD',
                    'precision' => 3,
                    'subunit' => 1000,
                    'symbol' => 'ب.د',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#a3954b',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_17.svg',
                    'logo_png' => 'country_logo_17.png',
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Bangladeshi taka',
                    'native' => 'Bangladeshi taka',
                    'code' => 'BDT',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '৳',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#91fcb2',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_18.svg',
                    'logo_png' => 'country_logo_18.png',
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Barbadian dollar',
                    'native' => 'Barbadian dollar',
                    'code' => 'BBD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#2e7789',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_19.svg',
                    'logo_png' => 'country_logo_19.png',
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'Belarusian ruble',
                    'native' => 'Belarusian ruble',
                    'code' => 'BYN',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Br',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => ' ',
                    'color' => '#a2ed13',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_20.svg',
                    'logo_png' => 'country_logo_20.png',
                ),
            21 =>
                array (
                    'id' => 22,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_21.svg',
                    'logo_png' => 'country_logo_21.png',
                ),
            22 =>
                array (
                    'id' => 23,
                    'name' => 'Belize dollar',
                    'native' => 'Belize dollar',
                    'code' => 'BZD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#db98a5',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_22.svg',
                    'logo_png' => 'country_logo_22.png',
                ),
            23 =>
                array (
                    'id' => 24,
                    'name' => 'West African CFA franc',
                    'native' => 'West African CFA franc',
                    'code' => 'XOF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#94d2a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_23.svg',
                    'logo_png' => 'country_logo_23.png',
                ),
            24 =>
                array (
                    'id' => 25,
                    'name' => 'Bermudian dollar',
                    'native' => 'Bermudian dollar',
                    'code' => 'BMD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#9d109e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_24.svg',
                    'logo_png' => 'country_logo_24.png',
                ),
            25 =>
                array (
                    'id' => 26,
                    'name' => 'Bhutanese ngultrum',
                    'native' => 'Bhutanese ngultrum',
                    'code' => 'BTN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Nu.',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#1f1b0f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_25.svg',
                    'logo_png' => 'country_logo_25.png',
                ),
            26 =>
                array (
                    'id' => 27,
                    'name' => 'Bolivian boliviano',
                    'native' => 'Bolivian boliviano',
                    'code' => 'BOB',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Bs.',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#769104',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_26.svg',
                    'logo_png' => 'country_logo_26.png',
                ),
            27 =>
                array (
                    'id' => 28,
                    'name' => 'Bosnia and Herzegovina convertible mark',
                    'native' => 'Bosnia and Herzegovina convertible mark',
                    'code' => 'BAM',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'КМ',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#1759d1',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_27.svg',
                    'logo_png' => 'country_logo_27.png',
                ),
            28 =>
                array (
                    'id' => 29,
                    'name' => 'Botswana pula',
                    'native' => 'Botswana pula',
                    'code' => 'BWP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'P',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#3a5715',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_28.svg',
                    'logo_png' => 'country_logo_28.png',
                ),
            29 =>
                array (
                    'id' => 30,
                    'name' => 'Norwegian Krone',
                    'native' => 'Norwegian Krone',
                    'code' => 'NOK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'kr',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#39fdae',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            30 =>
                array (
                    'id' => 31,
                    'name' => 'Brazilian real',
                    'native' => 'Brazilian real',
                    'code' => 'BRL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'R$',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#397efb',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_30.svg',
                    'logo_png' => 'country_logo_30.png',
                ),
            31 =>
                array (
                    'id' => 32,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            32 =>
                array (
                    'id' => 33,
                    'name' => 'Brunei dollar',
                    'native' => 'Brunei dollar',
                    'code' => 'BND',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#1bb34f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_32.svg',
                    'logo_png' => 'country_logo_32.png',
                ),
            33 =>
                array (
                    'id' => 34,
                    'name' => 'Bulgarian lev',
                    'native' => 'Bulgarian lev',
                    'code' => 'BGN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'лв',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => ' ',
                    'color' => '#7e261d',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_33.svg',
                    'logo_png' => 'country_logo_33.png',
                ),
            34 =>
                array (
                    'id' => 35,
                    'name' => 'West African CFA franc',
                    'native' => 'West African CFA franc',
                    'code' => 'XOF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#94d2a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_34.svg',
                    'logo_png' => 'country_logo_34.png',
                ),
            35 =>
                array (
                    'id' => 36,
                    'name' => 'Burundian franc',
                    'native' => 'Burundian franc',
                    'code' => 'BIF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#fad6b5',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_35.svg',
                    'logo_png' => 'country_logo_35.png',
                ),
            36 =>
                array (
                    'id' => 37,
                    'name' => 'Cambodian riel',
                    'native' => 'Cambodian riel',
                    'code' => 'KHR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '៛',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#000a0e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_36.svg',
                    'logo_png' => 'country_logo_36.png',
                ),
            37 =>
                array (
                    'id' => 38,
                    'name' => 'Central African CFA franc',
                    'native' => 'Central African CFA franc',
                    'code' => 'XAF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#da5658',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_37.svg',
                    'logo_png' => 'country_logo_37.png',
                ),
            38 =>
                array (
                    'id' => 39,
                    'name' => 'Canadian dollar',
                    'native' => 'Canadian dollar',
                    'code' => 'CAD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#cc9961',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_38.svg',
                    'logo_png' => 'country_logo_38.png',
                ),
            39 =>
                array (
                    'id' => 40,
                    'name' => 'Cape Verdean escudo',
                    'native' => 'Cape Verdean escudo',
                    'code' => 'CVE',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#d62c54',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_39.svg',
                    'logo_png' => 'country_logo_39.png',
                ),
            40 =>
                array (
                    'id' => 41,
                    'name' => 'Cayman Islands dollar',
                    'native' => 'Cayman Islands dollar',
                    'code' => 'KYD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ab97ef',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_40.svg',
                    'logo_png' => 'country_logo_40.png',
                ),
            41 =>
                array (
                    'id' => 42,
                    'name' => 'Central African CFA franc',
                    'native' => 'Central African CFA franc',
                    'code' => 'XAF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#da5658',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_41.svg',
                    'logo_png' => 'country_logo_41.png',
                ),
            42 =>
                array (
                    'id' => 43,
                    'name' => 'Central African CFA franc',
                    'native' => 'Central African CFA franc',
                    'code' => 'XAF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#da5658',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_42.svg',
                    'logo_png' => 'country_logo_42.png',
                ),
            43 =>
                array (
                    'id' => 44,
                    'name' => 'Chilean peso',
                    'native' => 'Chilean peso',
                    'code' => 'CLP',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#f5b0c3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_43.svg',
                    'logo_png' => 'country_logo_43.png',
                ),
            44 =>
                array (
                    'id' => 45,
                    'name' => 'Chinese yuan',
                    'native' => 'Chinese yuan',
                    'code' => 'CNY',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '¥',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#059253',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_44.svg',
                    'logo_png' => 'country_logo_44.png',
                ),
            45 =>
                array (
                    'id' => 46,
                    'name' => 'Australian dollar',
                    'native' => 'Australian dollar',
                    'code' => 'AUD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ' ',
                    'color' => '#1050cc',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            46 =>
                array (
                    'id' => 47,
                    'name' => 'Australian dollar',
                    'native' => 'Australian dollar',
                    'code' => 'AUD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ' ',
                    'color' => '#1050cc',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            47 =>
                array (
                    'id' => 48,
                    'name' => 'Colombian peso',
                    'native' => 'Colombian peso',
                    'code' => 'COP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#864427',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_47.svg',
                    'logo_png' => 'country_logo_47.png',
                ),
            48 =>
                array (
                    'id' => 49,
                    'name' => 'Comorian franc',
                    'native' => 'Comorian franc',
                    'code' => 'KMF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#af7063',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_48.svg',
                    'logo_png' => 'country_logo_48.png',
                ),
            49 =>
                array (
                    'id' => 50,
                    'name' => 'Central African CFA franc',
                    'native' => 'Central African CFA franc',
                    'code' => 'XAF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#da5658',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_49.svg',
                    'logo_png' => 'country_logo_49.png',
                ),
            50 =>
                array (
                    'id' => 51,
                    'name' => 'Congolese Franc',
                    'native' => 'Congolese Franc',
                    'code' => 'CDF',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#3cc950',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_50.svg',
                    'logo_png' => 'country_logo_50.png',
                ),
            51 =>
                array (
                    'id' => 52,
                    'name' => 'Cook Islands dollar',
                    'native' => 'Cook Islands dollar',
                    'code' => 'NZD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#64d480',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_51.svg',
                    'logo_png' => 'country_logo_51.png',
                ),
            52 =>
                array (
                    'id' => 53,
                    'name' => 'Costa Rican colón',
                    'native' => 'Costa Rican colón',
                    'code' => 'CRC',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₡',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#ce19a8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_52.svg',
                    'logo_png' => 'country_logo_52.png',
                ),
            53 =>
                array (
                    'id' => 54,
                    'name' => 'West African CFA franc',
                    'native' => 'West African CFA franc',
                    'code' => 'XOF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#94d2a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_53.svg',
                    'logo_png' => 'country_logo_53.png',
                ),
            54 =>
                array (
                    'id' => 55,
                    'name' => 'Croatian kuna',
                    'native' => 'Croatian kuna',
                    'code' => 'HRK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'kn',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#e0cf04',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_54.svg',
                    'logo_png' => 'country_logo_54.png',
                ),
            55 =>
                array (
                    'id' => 56,
                    'name' => 'Cuban peso',
                    'native' => 'Cuban peso',
                    'code' => 'CUP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#677c1e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_55.svg',
                    'logo_png' => 'country_logo_55.png',
                ),
            56 =>
                array (
                    'id' => 57,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_56.svg',
                    'logo_png' => 'country_logo_56.png',
                ),
            57 =>
                array (
                    'id' => 58,
                    'name' => 'Czech koruna',
                    'native' => 'Czech koruna',
                    'code' => 'CZK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Kč',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#01a0de',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_57.svg',
                    'logo_png' => 'country_logo_57.png',
                ),
            58 =>
                array (
                    'id' => 59,
                    'name' => 'Danish krone',
                    'native' => 'Danish krone',
                    'code' => 'DKK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'kr',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#d42966',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_58.svg',
                    'logo_png' => 'country_logo_58.png',
                ),
            59 =>
                array (
                    'id' => 60,
                    'name' => 'Djiboutian franc',
                    'native' => 'Djiboutian franc',
                    'code' => 'DJF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fdj',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#396d89',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_59.svg',
                    'logo_png' => 'country_logo_59.png',
                ),
            60 =>
                array (
                    'id' => 61,
                    'name' => 'Eastern Caribbean dollar',
                    'native' => 'Eastern Caribbean dollar',
                    'code' => 'XCD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#58a9c8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_60.svg',
                    'logo_png' => 'country_logo_60.png',
                ),
            61 =>
                array (
                    'id' => 62,
                    'name' => 'Dominican peso',
                    'native' => 'Dominican peso',
                    'code' => 'DOP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#e50a78',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_61.svg',
                    'logo_png' => 'country_logo_61.png',
                ),
            62 =>
                array (
                    'id' => 63,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            63 =>
                array (
                    'id' => 64,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_62.svg',
                    'logo_png' => 'country_logo_62.png',
                ),
            64 =>
                array (
                    'id' => 65,
                    'name' => 'Egyptian pound',
                    'native' => 'Egyptian pound',
                    'code' => 'EGP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ج.م',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#d585fb',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_63.svg',
                    'logo_png' => 'country_logo_63.png',
                ),
            65 =>
                array (
                    'id' => 66,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_64.svg',
                    'logo_png' => 'country_logo_64.png',
                ),
            66 =>
                array (
                    'id' => 67,
                    'name' => 'Central African CFA franc',
                    'native' => 'Central African CFA franc',
                    'code' => 'XAF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#da5658',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_65.svg',
                    'logo_png' => 'country_logo_65.png',
                ),
            67 =>
                array (
                    'id' => 68,
                    'name' => 'Eritrean nakfa',
                    'native' => 'Eritrean nakfa',
                    'code' => 'ERN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Nfk',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#373590',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_66.svg',
                    'logo_png' => 'country_logo_66.png',
                ),
            68 =>
                array (
                    'id' => 69,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_67.svg',
                    'logo_png' => 'country_logo_67.png',
                ),
            69 =>
                array (
                    'id' => 70,
                    'name' => 'Ethiopian birr',
                    'native' => 'Ethiopian birr',
                    'code' => 'ETB',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Br',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#d6d6e0',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_68.svg',
                    'logo_png' => 'country_logo_68.png',
                ),
            70 =>
                array (
                    'id' => 71,
                    'name' => 'Falkland Islands pound',
                    'native' => 'Falkland Islands pound',
                    'code' => 'FKP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#2710b4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_69.svg',
                    'logo_png' => 'country_logo_69.png',
                ),
            71 =>
                array (
                    'id' => 72,
                    'name' => 'Danish krone',
                    'native' => 'Danish krone',
                    'code' => 'DKK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'kr',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#d42966',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_70.svg',
                    'logo_png' => 'country_logo_70.png',
                ),
            72 =>
                array (
                    'id' => 73,
                    'name' => 'Fijian dollar',
                    'native' => 'Fijian dollar',
                    'code' => 'FJD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#b683bb',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_71.svg',
                    'logo_png' => 'country_logo_71.png',
                ),
            73 =>
                array (
                    'id' => 74,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_72.svg',
                    'logo_png' => 'country_logo_72.png',
                ),
            74 =>
                array (
                    'id' => 75,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_73.svg',
                    'logo_png' => 'country_logo_73.png',
                ),
            75 =>
                array (
                    'id' => 76,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_74.svg',
                    'logo_png' => 'country_logo_74.png',
                ),
            76 =>
                array (
                    'id' => 77,
                    'name' => 'CFP franc',
                    'native' => 'CFP franc',
                    'code' => 'XPF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#c6c767',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_75.svg',
                    'logo_png' => 'country_logo_75.png',
                ),
            77 =>
                array (
                    'id' => 78,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            78 =>
                array (
                    'id' => 79,
                    'name' => 'Central African CFA franc',
                    'native' => 'Central African CFA franc',
                    'code' => 'XAF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#da5658',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_77.svg',
                    'logo_png' => 'country_logo_77.png',
                ),
            79 =>
                array (
                    'id' => 80,
                    'name' => 'Gambian dalasi',
                    'native' => 'Gambian dalasi',
                    'code' => 'GMD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'D',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#82ac98',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_78.svg',
                    'logo_png' => 'country_logo_78.png',
                ),
            80 =>
                array (
                    'id' => 81,
                    'name' => 'Georgian lari',
                    'native' => 'Georgian lari',
                    'code' => 'GEL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ლ',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#016a42',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_79.svg',
                    'logo_png' => 'country_logo_79.png',
                ),
            81 =>
                array (
                    'id' => 82,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_80.svg',
                    'logo_png' => 'country_logo_80.png',
                ),
            82 =>
                array (
                    'id' => 83,
                    'name' => 'Ghanaian cedi',
                    'native' => 'Ghanaian cedi',
                    'code' => 'GHS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₵',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#9090dd',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_81.svg',
                    'logo_png' => 'country_logo_81.png',
                ),
            83 =>
                array (
                    'id' => 84,
                    'name' => 'Gibraltar pound',
                    'native' => 'Gibraltar pound',
                    'code' => 'GIP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#a06b9c',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_82.svg',
                    'logo_png' => 'country_logo_82.png',
                ),
            84 =>
                array (
                    'id' => 85,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_83.svg',
                    'logo_png' => 'country_logo_83.png',
                ),
            85 =>
                array (
                    'id' => 86,
                    'name' => 'Danish krone',
                    'native' => 'Danish krone',
                    'code' => 'DKK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'kr',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#d42966',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_84.svg',
                    'logo_png' => 'country_logo_84.png',
                ),
            86 =>
                array (
                    'id' => 87,
                    'name' => 'Eastern Caribbean dollar',
                    'native' => 'Eastern Caribbean dollar',
                    'code' => 'XCD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#58a9c8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_85.svg',
                    'logo_png' => 'country_logo_85.png',
                ),
            87 =>
                array (
                    'id' => 88,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_86.svg',
                    'logo_png' => 'country_logo_86.png',
                ),
            88 =>
                array (
                    'id' => 89,
                    'name' => 'US Dollar',
                    'native' => 'US Dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_87.svg',
                    'logo_png' => 'country_logo_87.png',
                ),
            89 =>
                array (
                    'id' => 90,
                    'name' => 'Guatemalan quetzal',
                    'native' => 'Guatemalan quetzal',
                    'code' => 'GTQ',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Q',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#336f18',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_88.svg',
                    'logo_png' => 'country_logo_88.png',
                ),
            90 =>
                array (
                    'id' => 91,
                    'name' => 'British pound',
                    'native' => 'British pound',
                    'code' => 'GBP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#bcc4c3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            91 =>
                array (
                    'id' => 92,
                    'name' => 'Guinean franc',
                    'native' => 'Guinean franc',
                    'code' => 'GNF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#41558e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_89.svg',
                    'logo_png' => 'country_logo_89.png',
                ),
            92 =>
                array (
                    'id' => 93,
                    'name' => 'West African CFA franc',
                    'native' => 'West African CFA franc',
                    'code' => 'XOF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#94d2a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_90.svg',
                    'logo_png' => 'country_logo_90.png',
                ),
            93 =>
                array (
                    'id' => 94,
                    'name' => 'Guyanese dollar',
                    'native' => 'Guyanese dollar',
                    'code' => 'GYD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#0c5980',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_91.svg',
                    'logo_png' => 'country_logo_91.png',
                ),
            94 =>
                array (
                    'id' => 95,
                    'name' => 'Haitian gourde',
                    'native' => 'Haitian gourde',
                    'code' => 'HTG',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'G',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#783183',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_92.svg',
                    'logo_png' => 'country_logo_92.png',
                ),
            95 =>
                array (
                    'id' => 96,
                    'name' => 'Australian dollar',
                    'native' => 'Australian dollar',
                    'code' => 'AUD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ' ',
                    'color' => '#1050cc',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            96 =>
                array (
                    'id' => 97,
                    'name' => 'Honduran lempira',
                    'native' => 'Honduran lempira',
                    'code' => 'HNL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'L',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#fd1950',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_95.svg',
                    'logo_png' => 'country_logo_95.png',
                ),
            97 =>
                array (
                    'id' => 98,
                    'name' => 'Hong Kong dollar',
                    'native' => 'Hong Kong dollar',
                    'code' => 'HKD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#9f7657',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_96.svg',
                    'logo_png' => 'country_logo_96.png',
                ),
            98 =>
                array (
                    'id' => 99,
                    'name' => 'Hungarian forint',
                    'native' => 'Hungarian forint',
                    'code' => 'HUF',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Ft',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#9fa2ea',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_97.svg',
                    'logo_png' => 'country_logo_97.png',
                ),
            99 =>
                array (
                    'id' => 100,
                    'name' => 'Icelandic króna',
                    'native' => 'Icelandic króna',
                    'code' => 'ISK',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'kr',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#5ab626',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_98.svg',
                    'logo_png' => 'country_logo_98.png',
                ),
            100 =>
                array (
                    'id' => 101,
                    'name' => 'Indian rupee',
                    'native' => 'Indian rupee',
                    'code' => 'INR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₹',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#350644',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_99.svg',
                    'logo_png' => 'country_logo_99.png',
                ),
            101 =>
                array (
                    'id' => 102,
                    'name' => 'Indonesian rupiah',
                    'native' => 'Indonesian rupiah',
                    'code' => 'IDR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Rp',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#2f4441',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_100.svg',
                    'logo_png' => 'country_logo_100.png',
                ),
            102 =>
                array (
                    'id' => 103,
                    'name' => 'Iranian rial',
                    'native' => 'Iranian rial',
                    'code' => 'IRR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '﷼',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#2e89f7',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_101.svg',
                    'logo_png' => 'country_logo_101.png',
                ),
            103 =>
                array (
                    'id' => 104,
                    'name' => 'Iraqi dinar',
                    'native' => 'Iraqi dinar',
                    'code' => 'IQD',
                    'precision' => 3,
                    'subunit' => 1000,
                    'symbol' => 'ع.د',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#57150f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_102.svg',
                    'logo_png' => 'country_logo_102.png',
                ),
            104 =>
                array (
                    'id' => 105,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_103.svg',
                    'logo_png' => 'country_logo_103.png',
                ),
            105 =>
                array (
                    'id' => 106,
                    'name' => 'Israeli new shekel',
                    'native' => 'Israeli new shekel',
                    'code' => 'ILS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₪',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ca9b16',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_104.svg',
                    'logo_png' => 'country_logo_104.png',
                ),
            106 =>
                array (
                    'id' => 107,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_105.svg',
                    'logo_png' => 'country_logo_105.png',
                ),
            107 =>
                array (
                    'id' => 108,
                    'name' => 'Jamaican dollar',
                    'native' => 'Jamaican dollar',
                    'code' => 'JMD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#1f4260',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_106.svg',
                    'logo_png' => 'country_logo_106.png',
                ),
            108 =>
                array (
                    'id' => 109,
                    'name' => 'Japanese yen',
                    'native' => 'Japanese yen',
                    'code' => 'JPY',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => '¥',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#98fda0',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_107.svg',
                    'logo_png' => 'country_logo_107.png',
                ),
            109 =>
                array (
                    'id' => 110,
                    'name' => 'British pound',
                    'native' => 'British pound',
                    'code' => 'GBP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#bcc4c3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            110 =>
                array (
                    'id' => 111,
                    'name' => 'Jordanian dinar',
                    'native' => 'Jordanian dinar',
                    'code' => 'JOD',
                    'precision' => 3,
                    'subunit' => 100,
                    'symbol' => 'د.ا',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6a9222',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_108.svg',
                    'logo_png' => 'country_logo_108.png',
                ),
            111 =>
                array (
                    'id' => 112,
                    'name' => 'Kazakhstani tenge',
                    'native' => 'Kazakhstani tenge',
                    'code' => 'KZT',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '〒',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#09577f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_109.svg',
                    'logo_png' => 'country_logo_109.png',
                ),
            112 =>
                array (
                    'id' => 113,
                    'name' => 'Kenyan shilling',
                    'native' => 'Kenyan shilling',
                    'code' => 'KES',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'KSh',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#d160d0',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_110.svg',
                    'logo_png' => 'country_logo_110.png',
                ),
            113 =>
                array (
                    'id' => 114,
                    'name' => 'Australian dollar',
                    'native' => 'Australian dollar',
                    'code' => 'AUD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ' ',
                    'color' => '#1050cc',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_111.svg',
                    'logo_png' => 'country_logo_111.png',
                ),
            114 =>
                array (
                    'id' => 115,
                    'name' => 'North Korean Won',
                    'native' => 'North Korean Won',
                    'code' => 'KPW',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₩',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#b76596',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_112.svg',
                    'logo_png' => 'country_logo_112.png',
                ),
            115 =>
                array (
                    'id' => 116,
                    'name' => 'Won',
                    'native' => 'Won',
                    'code' => 'KRW',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => '₩',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#945b99',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_113.svg',
                    'logo_png' => 'country_logo_113.png',
                ),
            116 =>
                array (
                    'id' => 117,
                    'name' => 'Kuwaiti dinar',
                    'native' => 'Kuwaiti dinar',
                    'code' => 'KWD',
                    'precision' => 3,
                    'subunit' => 1000,
                    'symbol' => 'د.ك',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#09fcb7',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_114.svg',
                    'logo_png' => 'country_logo_114.png',
                ),
            117 =>
                array (
                    'id' => 118,
                    'name' => 'Kyrgyzstani som',
                    'native' => 'Kyrgyzstani som',
                    'code' => 'KGS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'som',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#b84128',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_115.svg',
                    'logo_png' => 'country_logo_115.png',
                ),
            118 =>
                array (
                    'id' => 119,
                    'name' => 'Lao kip',
                    'native' => 'Lao kip',
                    'code' => 'LAK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₭',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#bee4ed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_116.svg',
                    'logo_png' => 'country_logo_116.png',
                ),
            119 =>
                array (
                    'id' => 120,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_117.svg',
                    'logo_png' => 'country_logo_117.png',
                ),
            120 =>
                array (
                    'id' => 121,
                    'name' => 'Lebanese pound',
                    'native' => 'Lebanese pound',
                    'code' => 'LBP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ل.ل',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#2c2f95',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_118.svg',
                    'logo_png' => 'country_logo_118.png',
                ),
            121 =>
                array (
                    'id' => 122,
                    'name' => 'Lesotho loti',
                    'native' => 'Lesotho loti',
                    'code' => 'LSL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'L',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ffd6ea',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_119.svg',
                    'logo_png' => 'country_logo_119.png',
                ),
            122 =>
                array (
                    'id' => 123,
                    'name' => 'Liberian dollar',
                    'native' => 'Liberian dollar',
                    'code' => 'LRD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#2b2e61',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_120.svg',
                    'logo_png' => 'country_logo_120.png',
                ),
            123 =>
                array (
                    'id' => 124,
                    'name' => 'Libyan dinar',
                    'native' => 'Libyan dinar',
                    'code' => 'LYD',
                    'precision' => 3,
                    'subunit' => 1000,
                    'symbol' => 'ل.د',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#7e5bbd',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_121.svg',
                    'logo_png' => 'country_logo_121.png',
                ),
            124 =>
                array (
                    'id' => 125,
                    'name' => 'Swiss franc',
                    'native' => 'Swiss franc',
                    'code' => 'CHF',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'CHF',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#47217f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_122.svg',
                    'logo_png' => 'country_logo_122.png',
                ),
            125 =>
                array (
                    'id' => 126,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_123.svg',
                    'logo_png' => 'country_logo_123.png',
                ),
            126 =>
                array (
                    'id' => 127,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_124.svg',
                    'logo_png' => 'country_logo_124.png',
                ),
            127 =>
                array (
                    'id' => 128,
                    'name' => 'Macanese pataca',
                    'native' => 'Macanese pataca',
                    'code' => 'MOP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'P',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#b66dcf',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_125.svg',
                    'logo_png' => 'country_logo_125.png',
                ),
            128 =>
                array (
                    'id' => 129,
                    'name' => 'Denar',
                    'native' => 'Denar',
                    'code' => 'MKD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ден',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ab30f8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_126.svg',
                    'logo_png' => 'country_logo_126.png',
                ),
            129 =>
                array (
                    'id' => 130,
                    'name' => 'Malagasy ariary',
                    'native' => 'Malagasy ariary',
                    'code' => 'MGA',
                    'precision' => 2,
                    'subunit' => 5,
                    'symbol' => 'Ar',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#2a5f56',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_127.svg',
                    'logo_png' => 'country_logo_127.png',
                ),
            130 =>
                array (
                    'id' => 131,
                    'name' => 'Malawian kwacha',
                    'native' => 'Malawian kwacha',
                    'code' => 'MWK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'MK',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#b280b4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_128.svg',
                    'logo_png' => 'country_logo_128.png',
                ),
            131 =>
                array (
                    'id' => 132,
                    'name' => 'Malaysian ringgit',
                    'native' => 'Malaysian ringgit',
                    'code' => 'MYR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'RM',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#e11fcd',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_129.svg',
                    'logo_png' => 'country_logo_129.png',
                ),
            132 =>
                array (
                    'id' => 133,
                    'name' => 'Maldivian rufiyaa',
                    'native' => 'Maldivian rufiyaa',
                    'code' => 'MVR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'MVR',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#882d16',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_130.svg',
                    'logo_png' => 'country_logo_130.png',
                ),
            133 =>
                array (
                    'id' => 134,
                    'name' => 'West African CFA franc',
                    'native' => 'West African CFA franc',
                    'code' => 'XOF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#94d2a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_131.svg',
                    'logo_png' => 'country_logo_131.png',
                ),
            134 =>
                array (
                    'id' => 135,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_132.svg',
                    'logo_png' => 'country_logo_132.png',
                ),
            135 =>
                array (
                    'id' => 136,
                    'name' => 'British pound',
                    'native' => 'British pound',
                    'code' => 'GBP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#bcc4c3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            136 =>
                array (
                    'id' => 137,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_133.svg',
                    'logo_png' => 'country_logo_133.png',
                ),
            137 =>
                array (
                    'id' => 138,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_134.svg',
                    'logo_png' => 'country_logo_134.png',
                ),
            138 =>
                array (
                    'id' => 139,
                    'name' => 'Mauritanian ouguiya',
                    'native' => 'Mauritanian ouguiya',
                    'code' => 'MRO',
                    'precision' => 2,
                    'subunit' => 5,
                    'symbol' => 'UM',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#558d54',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_135.svg',
                    'logo_png' => 'country_logo_135.png',
                ),
            139 =>
                array (
                    'id' => 140,
                    'name' => 'Mauritian rupee',
                    'native' => 'Mauritian rupee',
                    'code' => 'MUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₨',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#fe9c62',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_136.svg',
                    'logo_png' => 'country_logo_136.png',
                ),
            140 =>
                array (
                    'id' => 141,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            141 =>
                array (
                    'id' => 142,
                    'name' => 'Mexican peso',
                    'native' => 'Mexican peso',
                    'code' => 'MXN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#aac121',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_138.svg',
                    'logo_png' => 'country_logo_138.png',
                ),
            142 =>
                array (
                    'id' => 143,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_139.svg',
                    'logo_png' => 'country_logo_139.png',
                ),
            143 =>
                array (
                    'id' => 144,
                    'name' => 'Moldovan leu',
                    'native' => 'Moldovan leu',
                    'code' => 'MDL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'L',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#1cf3b4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_140.svg',
                    'logo_png' => 'country_logo_140.png',
                ),
            144 =>
                array (
                    'id' => 145,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_141.svg',
                    'logo_png' => 'country_logo_141.png',
                ),
            145 =>
                array (
                    'id' => 146,
                    'name' => 'Mongolian tögrög',
                    'native' => 'Mongolian tögrög',
                    'code' => 'MNT',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₮',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#feed86',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_142.svg',
                    'logo_png' => 'country_logo_142.png',
                ),
            146 =>
                array (
                    'id' => 147,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_244.svg',
                    'logo_png' => 'country_logo_244.png',
                ),
            147 =>
                array (
                    'id' => 148,
                    'name' => 'Eastern Caribbean dollar',
                    'native' => 'Eastern Caribbean dollar',
                    'code' => 'XCD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#58a9c8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_143.svg',
                    'logo_png' => 'country_logo_143.png',
                ),
            148 =>
                array (
                    'id' => 149,
                    'name' => 'Moroccan dirham',
                    'native' => 'Moroccan dirham',
                    'code' => 'MAD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'د.م.',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ce165c',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_144.svg',
                    'logo_png' => 'country_logo_144.png',
                ),
            149 =>
                array (
                    'id' => 150,
                    'name' => 'Mozambican metical',
                    'native' => 'Mozambican metical',
                    'code' => 'MZN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'MTn',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#22eb46',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_145.svg',
                    'logo_png' => 'country_logo_145.png',
                ),
            150 =>
                array (
                    'id' => 151,
                    'name' => 'Burmese kyat',
                    'native' => 'Burmese kyat',
                    'code' => 'MMK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'K',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#e31030',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_146.svg',
                    'logo_png' => 'country_logo_146.png',
                ),
            151 =>
                array (
                    'id' => 152,
                    'name' => 'Namibian dollar',
                    'native' => 'Namibian dollar',
                    'code' => 'NAD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#83142d',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_147.svg',
                    'logo_png' => 'country_logo_147.png',
                ),
            152 =>
                array (
                    'id' => 153,
                    'name' => 'Australian dollar',
                    'native' => 'Australian dollar',
                    'code' => 'AUD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ' ',
                    'color' => '#1050cc',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_148.svg',
                    'logo_png' => 'country_logo_148.png',
                ),
            153 =>
                array (
                    'id' => 154,
                    'name' => 'Nepalese rupee',
                    'native' => 'Nepalese rupee',
                    'code' => 'NPR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₨',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#819068',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_149.svg',
                    'logo_png' => 'country_logo_149.png',
                ),
            154 =>
                array (
                    'id' => 155,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_246.svg',
                    'logo_png' => 'country_logo_246.png',
                ),
            155 =>
                array (
                    'id' => 156,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_150.svg',
                    'logo_png' => 'country_logo_150.png',
                ),
            156 =>
                array (
                    'id' => 157,
                    'name' => 'CFP franc',
                    'native' => 'CFP franc',
                    'code' => 'XPF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#c6c767',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_152.svg',
                    'logo_png' => 'country_logo_152.png',
                ),
            157 =>
                array (
                    'id' => 158,
                    'name' => 'New Zealand dollar',
                    'native' => 'New Zealand dollar',
                    'code' => 'NZD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#64d480',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_153.svg',
                    'logo_png' => 'country_logo_153.png',
                ),
            158 =>
                array (
                    'id' => 159,
                    'name' => 'Nicaraguan córdoba',
                    'native' => 'Nicaraguan córdoba',
                    'code' => 'NIO',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'C$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#978452',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_154.svg',
                    'logo_png' => 'country_logo_154.png',
                ),
            159 =>
                array (
                    'id' => 160,
                    'name' => 'West African CFA franc',
                    'native' => 'West African CFA franc',
                    'code' => 'XOF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#94d2a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_155.svg',
                    'logo_png' => 'country_logo_155.png',
                ),
            160 =>
                array (
                    'id' => 161,
                    'name' => 'Nigerian naira',
                    'native' => 'Nigerian naira',
                    'code' => 'NGN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₦',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#f7c45e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_156.svg',
                    'logo_png' => 'country_logo_156.png',
                ),
            161 =>
                array (
                    'id' => 162,
                    'name' => 'New Zealand dollar',
                    'native' => 'New Zealand dollar',
                    'code' => 'NZD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#64d480',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_157.svg',
                    'logo_png' => 'country_logo_157.png',
                ),
            162 =>
                array (
                    'id' => 163,
                    'name' => 'Australian dollar',
                    'native' => 'Australian dollar',
                    'code' => 'AUD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ' ',
                    'color' => '#1050cc',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_158.svg',
                    'logo_png' => 'country_logo_158.png',
                ),
            163 =>
                array (
                    'id' => 164,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_159.svg',
                    'logo_png' => 'country_logo_159.png',
                ),
            164 =>
                array (
                    'id' => 165,
                    'name' => 'Norwegian krone',
                    'native' => 'Norwegian krone',
                    'code' => 'NOK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'kr',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#39fdae',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_160.svg',
                    'logo_png' => 'country_logo_160.png',
                ),
            165 =>
                array (
                    'id' => 166,
                    'name' => 'Omani rial',
                    'native' => 'Omani rial',
                    'code' => 'OMR',
                    'precision' => 3,
                    'subunit' => 1000,
                    'symbol' => 'ر.ع.',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#9d9edb',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_161.svg',
                    'logo_png' => 'country_logo_161.png',
                ),
            166 =>
                array (
                    'id' => 167,
                    'name' => 'Pakistani rupee',
                    'native' => 'Pakistani rupee',
                    'code' => 'PKR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₨',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#47eb4f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_162.svg',
                    'logo_png' => 'country_logo_162.png',
                ),
            167 =>
                array (
                    'id' => 168,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_163.svg',
                    'logo_png' => 'country_logo_163.png',
                ),
            168 =>
                array (
                    'id' => 169,
                    'name' => 'Israeli new shekel',
                    'native' => 'Israeli new shekel',
                    'code' => 'ILS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₪',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ca9b16',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            169 =>
                array (
                    'id' => 170,
                    'name' => 'Panamanian balboa',
                    'native' => 'Panamanian balboa',
                    'code' => 'PAB',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'B/.',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#fb8deb',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_165.svg',
                    'logo_png' => 'country_logo_165.png',
                ),
            170 =>
                array (
                    'id' => 171,
                    'name' => 'Papua New Guinean kina',
                    'native' => 'Papua New Guinean kina',
                    'code' => 'PGK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'K',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#72a2c3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_166.svg',
                    'logo_png' => 'country_logo_166.png',
                ),
            171 =>
                array (
                    'id' => 172,
                    'name' => 'Paraguayan guarani',
                    'native' => 'Paraguayan guarani',
                    'code' => 'PYG',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => '₲',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#f38040',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_167.svg',
                    'logo_png' => 'country_logo_167.png',
                ),
            172 =>
                array (
                    'id' => 173,
                    'name' => 'Peruvian sol',
                    'native' => 'Peruvian sol',
                    'code' => 'PEN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'S/',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#cc0e74',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_168.svg',
                    'logo_png' => 'country_logo_168.png',
                ),
            173 =>
                array (
                    'id' => 174,
                    'name' => 'Philippine peso',
                    'native' => 'Philippine peso',
                    'code' => 'PHP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₱',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#32c2e0',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_169.svg',
                    'logo_png' => 'country_logo_169.png',
                ),
            174 =>
                array (
                    'id' => 175,
                    'name' => 'New Zealand dollar',
                    'native' => 'New Zealand dollar',
                    'code' => 'NZD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#64d480',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_170.svg',
                    'logo_png' => 'country_logo_170.png',
                ),
            175 =>
                array (
                    'id' => 176,
                    'name' => 'Polish złoty',
                    'native' => 'Polish złoty',
                    'code' => 'PLN',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'zł',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => ' ',
                    'color' => '#e39aaf',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_171.svg',
                    'logo_png' => 'country_logo_171.png',
                ),
            176 =>
                array (
                    'id' => 177,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_172.svg',
                    'logo_png' => 'country_logo_172.png',
                ),
            177 =>
                array (
                    'id' => 178,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_173.svg',
                    'logo_png' => 'country_logo_173.png',
                ),
            178 =>
                array (
                    'id' => 179,
                    'name' => 'Qatari riyal',
                    'native' => 'Qatari riyal',
                    'code' => 'QAR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ر.ق',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#9a5a55',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_174.svg',
                    'logo_png' => 'country_logo_174.png',
                ),
            179 =>
                array (
                    'id' => 180,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_175.svg',
                    'logo_png' => 'country_logo_175.png',
                ),
            180 =>
                array (
                    'id' => 181,
                    'name' => 'Romanian leu',
                    'native' => 'Romanian leu',
                    'code' => 'RON',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Lei',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#259dd0',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            181 =>
                array (
                    'id' => 182,
                    'name' => 'Russian ruble',
                    'native' => 'Russian ruble',
                    'code' => 'RUB',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₽',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#0e466e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_177.svg',
                    'logo_png' => 'country_logo_177.png',
                ),
            182 =>
                array (
                    'id' => 183,
                    'name' => 'Rwandan franc',
                    'native' => 'Rwandan franc',
                    'code' => 'RWF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'FRw',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#cbfc3d',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_178.svg',
                    'logo_png' => 'country_logo_178.png',
                ),
            183 =>
                array (
                    'id' => 184,
                    'name' => 'Saint Helena pound',
                    'native' => 'Saint Helena pound',
                    'code' => 'SHP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#2b269e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_179.svg',
                    'logo_png' => 'country_logo_179.png',
                ),
            184 =>
                array (
                    'id' => 185,
                    'name' => 'Eastern Caribbean dollar',
                    'native' => 'Eastern Caribbean dollar',
                    'code' => 'XCD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#58a9c8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_180.svg',
                    'logo_png' => 'country_logo_180.png',
                ),
            185 =>
                array (
                    'id' => 186,
                    'name' => 'Eastern Caribbean dollar',
                    'native' => 'Eastern Caribbean dollar',
                    'code' => 'XCD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#58a9c8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_181.svg',
                    'logo_png' => 'country_logo_181.png',
                ),
            186 =>
                array (
                    'id' => 187,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_182.svg',
                    'logo_png' => 'country_logo_182.png',
                ),
            187 =>
                array (
                    'id' => 188,
                    'name' => 'Eastern Caribbean dollar',
                    'native' => 'Eastern Caribbean dollar',
                    'code' => 'XCD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#58a9c8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_183.svg',
                    'logo_png' => 'country_logo_183.png',
                ),
            188 =>
                array (
                    'id' => 189,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_189.svg',
                    'logo_png' => 'country_logo_189.png',
                ),
            189 =>
                array (
                    'id' => 190,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            190 =>
                array (
                    'id' => 191,
                    'name' => 'Samoan tālā',
                    'native' => 'Samoan tālā',
                    'code' => 'WST',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'T',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#034616',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_184.svg',
                    'logo_png' => 'country_logo_184.png',
                ),
            191 =>
                array (
                    'id' => 192,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_185.svg',
                    'logo_png' => 'country_logo_185.png',
                ),
            192 =>
                array (
                    'id' => 193,
                    'name' => 'Dobra',
                    'native' => 'Dobra',
                    'code' => 'STD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Db',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#356059',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_186.svg',
                    'logo_png' => 'country_logo_186.png',
                ),
            193 =>
                array (
                    'id' => 194,
                    'name' => 'Saudi riyal',
                    'native' => 'Saudi riyal',
                    'code' => 'SAR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ر.س',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#576ec7',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_187.svg',
                    'logo_png' => 'country_logo_187.png',
                ),
            194 =>
                array (
                    'id' => 195,
                    'name' => 'West African CFA franc',
                    'native' => 'West African CFA franc',
                    'code' => 'XOF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#94d2a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_188.svg',
                    'logo_png' => 'country_logo_188.png',
                ),
            195 =>
                array (
                    'id' => 196,
                    'name' => 'Serbian dinar',
                    'native' => 'Serbian dinar',
                    'code' => 'RSD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'РСД',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#61df23',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_247.svg',
                    'logo_png' => 'country_logo_247.png',
                ),
            196 =>
                array (
                    'id' => 197,
                    'name' => 'Seychellois rupee',
                    'native' => 'Seychellois rupee',
                    'code' => 'SCR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₨',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#006c5b',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_190.svg',
                    'logo_png' => 'country_logo_190.png',
                ),
            197 =>
                array (
                    'id' => 198,
                    'name' => 'Sierra Leonean leone',
                    'native' => 'Sierra Leonean leone',
                    'code' => 'SLL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Le',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#7dc211',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_191.svg',
                    'logo_png' => 'country_logo_191.png',
                ),
            198 =>
                array (
                    'id' => 199,
                    'name' => 'Singapore dollar',
                    'native' => 'Singapore dollar',
                    'code' => 'SGD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#4985df',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_192.svg',
                    'logo_png' => 'country_logo_192.png',
                ),
            199 =>
                array (
                    'id' => 200,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_193.svg',
                    'logo_png' => 'country_logo_193.png',
                ),
            200 =>
                array (
                    'id' => 201,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_194.svg',
                    'logo_png' => 'country_logo_194.png',
                ),
            201 =>
                array (
                    'id' => 202,
                    'name' => 'Solomon Islands dollar',
                    'native' => 'Solomon Islands dollar',
                    'code' => 'SBD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#01baed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_195.svg',
                    'logo_png' => 'country_logo_195.png',
                ),
            202 =>
                array (
                    'id' => 203,
                    'name' => 'Somali shilling',
                    'native' => 'Somali shilling',
                    'code' => 'SOS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Sh',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#b5fe2a',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_196.svg',
                    'logo_png' => 'country_logo_196.png',
                ),
            203 =>
                array (
                    'id' => 204,
                    'name' => 'South African rand',
                    'native' => 'South African rand',
                    'code' => 'ZAR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'R',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#3e5fec',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_197.svg',
                    'logo_png' => 'country_logo_197.png',
                ),
            204 =>
                array (
                    'id' => 205,
                    'name' => 'British pound',
                    'native' => 'British pound',
                    'code' => 'GBP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#bcc4c3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            205 =>
                array (
                    'id' => 206,
                    'name' => 'South Sudanese pound',
                    'native' => 'South Sudanese pound',
                    'code' => 'SSP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#648680',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            206 =>
                array (
                    'id' => 207,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_199.svg',
                    'logo_png' => 'country_logo_199.png',
                ),
            207 =>
                array (
                    'id' => 208,
                    'name' => 'Sri Lankan rupee',
                    'native' => 'Sri Lankan rupee',
                    'code' => 'LKR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₨',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6a8eaf',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_200.svg',
                    'logo_png' => 'country_logo_200.png',
                ),
            208 =>
                array (
                    'id' => 209,
                    'name' => 'Sudanese pound',
                    'native' => 'Sudanese pound',
                    'code' => 'SDG',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#688bb8',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_201.svg',
                    'logo_png' => 'country_logo_201.png',
                ),
            209 =>
                array (
                    'id' => 210,
                    'name' => 'Surinamese dollar',
                    'native' => 'Surinamese dollar',
                    'code' => 'SRD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#9df3c5',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_202.svg',
                    'logo_png' => 'country_logo_202.png',
                ),
            210 =>
                array (
                    'id' => 211,
                    'name' => 'Norwegian Krone',
                    'native' => 'Norwegian Krone',
                    'code' => 'NOK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'kr',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#39fdae',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_203.svg',
                    'logo_png' => 'country_logo_203.png',
                ),
            211 =>
                array (
                    'id' => 212,
                    'name' => 'Lilangeni',
                    'native' => 'Lilangeni',
                    'code' => 'SZL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'E',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#a45728',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_204.svg',
                    'logo_png' => 'country_logo_204.png',
                ),
            212 =>
                array (
                    'id' => 213,
                    'name' => 'Swedish krona',
                    'native' => 'Swedish krona',
                    'code' => 'SEK',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'kr',
                    'symbol_first' => false,
                    'decimal_mark' => ',',
                    'thousands_separator' => ' ',
                    'color' => '#07486c',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_205.svg',
                    'logo_png' => 'country_logo_205.png',
                ),
            213 =>
                array (
                    'id' => 214,
                    'name' => 'Swiss franc',
                    'native' => 'Swiss franc',
                    'code' => 'CHF',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'CHF',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#47217f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_206.svg',
                    'logo_png' => 'country_logo_206.png',
                ),
            214 =>
                array (
                    'id' => 215,
                    'name' => 'Syrian pound',
                    'native' => 'Syrian pound',
                    'code' => 'SYP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£S',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#3eb3bd',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_207.svg',
                    'logo_png' => 'country_logo_207.png',
                ),
            215 =>
                array (
                    'id' => 216,
                    'name' => 'New Taiwan dollar',
                    'native' => 'New Taiwan dollar',
                    'code' => 'TWD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#4f00a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_208.svg',
                    'logo_png' => 'country_logo_208.png',
                ),
            216 =>
                array (
                    'id' => 217,
                    'name' => 'Tajikistani somoni',
                    'native' => 'Tajikistani somoni',
                    'code' => 'TJS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ЅМ',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ccb61c',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_209.svg',
                    'logo_png' => 'country_logo_209.png',
                ),
            217 =>
                array (
                    'id' => 218,
                    'name' => 'Tanzanian shilling',
                    'native' => 'Tanzanian shilling',
                    'code' => 'TZS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Sh',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#5f611e',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_210.svg',
                    'logo_png' => 'country_logo_210.png',
                ),
            218 =>
                array (
                    'id' => 219,
                    'name' => 'Thai baht',
                    'native' => 'Thai baht',
                    'code' => 'THB',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '฿',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#3035b6',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_211.svg',
                    'logo_png' => 'country_logo_211.png',
                ),
            219 =>
                array (
                    'id' => 220,
                    'name' => 'West African CFA franc',
                    'native' => 'West African CFA franc',
                    'code' => 'XOF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#94d2a4',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_213.svg',
                    'logo_png' => 'country_logo_213.png',
                ),
            220 =>
                array (
                    'id' => 221,
                    'name' => 'New Zealand dollar',
                    'native' => 'New Zealand dollar',
                    'code' => 'NZD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#64d480',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_214.svg',
                    'logo_png' => 'country_logo_214.png',
                ),
            221 =>
                array (
                    'id' => 222,
                    'name' => 'Tongan paʻanga',
                    'native' => 'Tongan paʻanga',
                    'code' => 'TOP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'T$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#39b84d',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_215.svg',
                    'logo_png' => 'country_logo_215.png',
                ),
            222 =>
                array (
                    'id' => 223,
                    'name' => 'Trinidad and Tobago dollar',
                    'native' => 'Trinidad and Tobago dollar',
                    'code' => 'TTD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#487fb0',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_216.svg',
                    'logo_png' => 'country_logo_216.png',
                ),
            223 =>
                array (
                    'id' => 224,
                    'name' => 'Tunisian dinar',
                    'native' => 'Tunisian dinar',
                    'code' => 'TND',
                    'precision' => 3,
                    'subunit' => 1000,
                    'symbol' => 'د.ت',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#bd83a1',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_217.svg',
                    'logo_png' => 'country_logo_217.png',
                ),
            224 =>
                array (
                    'id' => 225,
                    'name' => 'Turkish lira',
                    'native' => 'Turkish lira',
                    'code' => 'TRY',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₺',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#d190cf',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_218.svg',
                    'logo_png' => 'country_logo_218.png',
                ),
            225 =>
                array (
                    'id' => 226,
                    'name' => 'Turkmenistan manat',
                    'native' => 'Turkmenistan manat',
                    'code' => 'TMT',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'T',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#4dba4f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_219.svg',
                    'logo_png' => 'country_logo_219.png',
                ),
            226 =>
                array (
                    'id' => 227,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_220.svg',
                    'logo_png' => 'country_logo_220.png',
                ),
            227 =>
                array (
                    'id' => 228,
                    'name' => 'Australian dollar',
                    'native' => 'Australian dollar',
                    'code' => 'AUD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ' ',
                    'color' => '#1050cc',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_221.svg',
                    'logo_png' => 'country_logo_221.png',
                ),
            228 =>
                array (
                    'id' => 229,
                    'name' => 'Ugandan shilling',
                    'native' => 'Ugandan shilling',
                    'code' => 'UGX',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'USh',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#50cfc9',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_222.svg',
                    'logo_png' => 'country_logo_222.png',
                ),
            229 =>
                array (
                    'id' => 230,
                    'name' => 'Ukrainian hryvnia',
                    'native' => 'Ukrainian hryvnia',
                    'code' => 'UAH',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '₴',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#2aef3d',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_223.svg',
                    'logo_png' => 'country_logo_223.png',
                ),
            230 =>
                array (
                    'id' => 231,
                    'name' => 'United Arab Emirates dirham',
                    'native' => 'United Arab Emirates dirham',
                    'code' => 'AED',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'د.إ',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#96b6b3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_224.svg',
                    'logo_png' => 'country_logo_224.png',
                ),
            231 =>
                array (
                    'id' => 232,
                    'name' => 'British pound',
                    'native' => 'British pound',
                    'code' => 'GBP',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '£',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#bcc4c3',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_225.svg',
                    'logo_png' => 'country_logo_225.png',
                ),
            232 =>
                array (
                    'id' => 233,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_226.svg',
                    'logo_png' => 'country_logo_226.png',
                ),
            233 =>
                array (
                    'id' => 234,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => NULL,
                    'logo_png' => NULL,
                ),
            234 =>
                array (
                    'id' => 235,
                    'name' => 'Uruguayan peso',
                    'native' => 'Uruguayan peso',
                    'code' => 'UYU',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#43a4e5',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_228.svg',
                    'logo_png' => 'country_logo_228.png',
                ),
            235 =>
                array (
                    'id' => 236,
                    'name' => 'Uzbekistani soʻm',
                    'native' => 'Uzbekistani soʻm',
                    'code' => 'UZS',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'лв',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#8f5f2f',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_229.svg',
                    'logo_png' => 'country_logo_229.png',
                ),
            236 =>
                array (
                    'id' => 237,
                    'name' => 'Vanuatu vatu',
                    'native' => 'Vanuatu vatu',
                    'code' => 'VUV',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Vt',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#c31700',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_230.svg',
                    'logo_png' => 'country_logo_230.png',
                ),
            237 =>
                array (
                    'id' => 238,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_94.svg',
                    'logo_png' => 'country_logo_94.png',
                ),
            238 =>
                array (
                    'id' => 239,
                    'name' => 'Bolívar',
                    'native' => 'Bolívar',
                    'code' => 'VES',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'Bs',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => NULL,
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_231.svg',
                    'logo_png' => 'country_logo_231.png',
                ),
            239 =>
                array (
                    'id' => 240,
                    'name' => 'Vietnamese đồng',
                    'native' => 'Vietnamese đồng',
                    'code' => 'VND',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => '₫',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#13f8b9',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_232.svg',
                    'logo_png' => 'country_logo_232.png',
                ),
            240 =>
                array (
                    'id' => 241,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_233.svg',
                    'logo_png' => 'country_logo_233.png',
                ),
            241 =>
                array (
                    'id' => 242,
                    'name' => 'United States dollar',
                    'native' => 'United States dollar',
                    'code' => 'USD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#6185ee',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_234.svg',
                    'logo_png' => 'country_logo_234.png',
                ),
            242 =>
                array (
                    'id' => 243,
                    'name' => 'CFP franc',
                    'native' => 'CFP franc',
                    'code' => 'XPF',
                    'precision' => 0,
                    'subunit' => 1,
                    'symbol' => 'Fr',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#c6c767',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_235.svg',
                    'logo_png' => 'country_logo_235.png',
                ),
            243 =>
                array (
                    'id' => 244,
                    'name' => 'Moroccan Dirham',
                    'native' => 'Moroccan Dirham',
                    'code' => 'MAD',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'د.م.',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#ce165c',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_236.svg',
                    'logo_png' => 'country_logo_236.png',
                ),
            244 =>
                array (
                    'id' => 245,
                    'name' => 'Yemeni rial',
                    'native' => 'Yemeni rial',
                    'code' => 'YER',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '﷼',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#8cd260',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_237.svg',
                    'logo_png' => 'country_logo_237.png',
                ),
            245 =>
                array (
                    'id' => 246,
                    'name' => 'Zambian kwacha',
                    'native' => 'Zambian kwacha',
                    'code' => 'ZMW',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ZK',
                    'symbol_first' => false,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#5dfbd7',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_238.svg',
                    'logo_png' => 'country_logo_238.png',
                ),
            246 =>
                array (
                    'id' => 247,
                    'name' => 'Zimbabwe Dollar',
                    'native' => 'Zimbabwe Dollar',
                    'code' => 'ZWL',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '$',
                    'symbol_first' => true,
                    'decimal_mark' => '.',
                    'thousands_separator' => ',',
                    'color' => '#4a6863',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_239.svg',
                    'logo_png' => 'country_logo_239.png',
                ),
            247 =>
                array (
                    'id' => 248,
                    'name' => 'Euro',
                    'native' => 'Euro',
                    'code' => 'EUR',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => '€',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#432eed',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_248.svg',
                    'logo_png' => 'country_logo_248.png',
                ),
            248 =>
                array (
                    'id' => 249,
                    'name' => 'Netherlands Antillean guilder',
                    'native' => 'Netherlands Antillean guilder',
                    'code' => 'ANG',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ƒ',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#4e8535',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_249.svg',
                    'logo_png' => 'country_logo_249.png',
                ),
            249 =>
                array (
                    'id' => 250,
                    'name' => 'Netherlands Antillean guilder',
                    'native' => 'Netherlands Antillean guilder',
                    'code' => 'ANG',
                    'precision' => 2,
                    'subunit' => 100,
                    'symbol' => 'ƒ',
                    'symbol_first' => true,
                    'decimal_mark' => ',',
                    'thousands_separator' => '.',
                    'color' => '#4e8535',
                    'enabled' => false,
                    'vendor_code' =>
                        array (
                            'remit' =>
                                array (
                                    'agrani' => NULL,
                                    'citybank' => NULL,
                                    'emqapi' => NULL,
                                    'transfast' => NULL,
                                    'valyou' => NULL,
                                    'islamibank' => NULL,
                                    'meghnabank' => NULL,
                                ),
                            'banco' =>
                                array (
                                ),
                        ),
                    'currency_data' =>
                        array (
                        ),
                    'logo_svg' => 'country_logo_250.svg',
                    'logo_png' => 'country_logo_250.png',
                ),
        );
    }
}
