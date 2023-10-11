<?php

use Illuminate\Support\Facades\Http;

test('city list', function () {
    $response = Http::get(BASE_URL.'/cities');
    expect($response->status())->toEqual(200);
});

test('city created', function () {

    $response = Http::post(BASE_URL.'/cities', [
        'city_name' => 'Dhaka',
        'city_iso2' => 'test',
        'city_iso3' => 'test',
        'city_num_code' => 'test',
        'city_type' => 'test',
        'city_status' => 'test',
        'state_id' => 1,
        'country_id' => 1,
    ]);
    expect($response->status())->toEqual(201);
});

test('city detail', function () {
    $response = Http::get(BASE_URL.'/cities/1');
    expect($response->status())->toEqual(200);
});

test('city updated', function () {
    $response = Http::put(BASE_URL.'/cities/1', [
        'city_name' => 'Dhaka2',
    ]);
    expect($response->status())->toEqual(202);
});

test('city deleted', function () {
    $response = Http::delete(BASE_URL.'/cities/1');
    expect($response->status())->toEqual(200);
});
