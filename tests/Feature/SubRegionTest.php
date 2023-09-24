<?php

use Illuminate\Support\Facades\Http;

define('BASE_URL', 'http://devstarter.test/api/v1/metadata');

test('subregion list', function () {
    $response = Http::get(BASE_URL.'/subregions');
    expect($response->status())->toEqual(200);
});

test('subregion created', function () {
    $response = Http::post(BASE_URL.'/subregions', [
        'region_id' => 1,
        'subregion_name' => 'Test',
        'subregion_translations' => '',
        'subregion_data' => '',
    ]);
    expect($response->status())->toEqual(201);
});

test('subregion detail', function () {
    $response = Http::get(BASE_URL.'/subregions/1');
    expect($response->status())->toEqual(200);
});

test('subregion updated', function () {
    $response = Http::put(BASE_URL.'/subregions/1', [
        'subregion_name' => 'Test2',
    ]);
    expect($response->status())->toEqual(202);
});

//test('subregion deleted', function () {
//    $response = Http::delete(BASE_URL . '/subregions/1');
//    expect($response->status())->toEqual(200);
//});
