<?php

use Illuminate\Support\Facades\Http;



test('region list', function () {
    $response = Http::get(BASE_URL.'/regions');
    expect($response->status())->toEqual(200);
});

test('region created', function () {
    $response = Http::post(BASE_URL.'/regions', [
        'region_name' => 'Test',
        'region_translations' => ['en' => 'Test'],
        'region_data' => ['en' => 'Test'],
    ]);
    expect($response->status())->toEqual(201);
});

test('region detail', function () {
    $response = Http::get(BASE_URL.'/regions/2');
    expect($response->status())->toEqual(200);
});

test('region updated', function () {
    $response = Http::put(BASE_URL.'/regions/2', [
        'region_name' => 'Test2',
    ]);
    expect($response->status())->toEqual(202);
});

//test('region deleted', function () {
//    $response = Http::delete(BASE_URL . '/regions/1');
//    expect($response->status())->toEqual(200);
//});
