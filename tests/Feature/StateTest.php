<?php

use Illuminate\Support\Facades\Http;

define('BASE_URL', 'http://devstarter.test/api/v1/metadata');

test('state list', function () {
    $response = Http::get(BASE_URL . '/states');
    expect($response->status())->toEqual(200);
});

test('state created', function () {
    $response = Http::post(BASE_URL . '/states', [
        'state_name' => 'Test',
        'state_iso2' => '12',
        'state_iso3' => '123',
        'state_num_code' => '012',
        'state_type' => 'DIVISION',
        'state_status' => 'ACTIVE',
        'state_timezones' => 'test',
        'country_id' => 1,
    ]);


    expect($response->status())->toEqual(200);
});

test('state detail', function () {
    $response = Http::get(BASE_URL . '/states/1');
    expect($response->status())->toEqual(200);
});

test('state updated', function () {
    $response = Http::put(BASE_URL . '/states/1', [
        'state_name' => 'Test2',
        'state_iso2' => '12',
        'state_iso3' => '123',
        'state_num_code' => '012',
        'state_type' => 'DIVISION',
        'state_status' => 'ACTIVE',
        'state_timezones' => 'test',
        'country_id' => 1,
    ]);
    expect($response->status())->toEqual(202);
});

//test('state deleted', function () {
//    $response = Http::delete(BASE_URL . '/states/1');
//    expect($response->status())->toEqual(200);
//});
