<?php

use Illuminate\Support\Facades\Http;

test('country list', function () {
    $response = Http::get(BASE_URL.'/countries');
    expect($response->status())->toEqual(200);
});

test('country created', function () {
    $response = Http::post(BASE_URL.'/countries', [
        'country_name' => 'Test',
        'country_iso2' => 'test',
        'country_iso3' => 'test',
        'country_num_code' => '01',
        'country_phone_code' => '880',
        'country_capital' => 'test',
        'country_currency' => 'BDT',
        'country_region' => 'Asia',
        'country_subregion' => 'South',
        'country_currency_symbol' => '$',
        'country_language' => 'bn',
        'country_status' => 'ACTIVE',
    ]);
    expect($response->status())->toEqual(201);
});

test('country detail', function () {
    $response = Http::get(BASE_URL.'/countries/1');
    expect($response->status())->toEqual(200);
});

test('country updated', function () {
    $response = Http::put(BASE_URL.'/countries/1', [
        'country_name' => 'Test v2',
        'country_iso2' => 'test',
        'country_iso3' => 'test',
        'country_num_code' => '01',
        'country_phone_code' => '880',
        'country_capital' => 'test',
        'country_currency' => 'BDT',
        'country_region' => 'Asia',
        'country_subregion' => 'South',
        'country_currency_symbol' => '$',
        'country_language' => 'bn',
        'country_status' => 'ACTIVE',
    ]);
    expect($response->status())->toEqual(202);
});

//test('country deleted', function () {
//    $response = Http::delete(BASE_URL . '/countries/1');
//    expect($response->status())->toEqual(200);
//});
