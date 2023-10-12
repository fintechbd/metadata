<?php

use Illuminate\Support\Str;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createFreshSubRegion()
{
    return \Fintech\MetaData\Facades\MetaData::country()->create([
        "name" => Str::random(20),
        "iso2" => "BD",
        "iso3" => "BGD",
        "phone_code" => "880",
        "capital" => "Dhaka",
        "currency" => "BDT",
        "currency_name" => "Bangladeshi Taka",
        "currency_symbol" => "$",
        "nationality" => "Bangladeshi",
        "region_id" => "1",
        "subregion_id" => "1",
        "language" => "bn",
        "enabled" => "1",
        "emoji" => "",
        "latitude" => "",
        "longitude" => "",
        "timezones" => [
        ],
        "country_data" => [
        ]
    ]);
}

test('subregion list', function () {
    getJson('/api/metadata/subregions')->assertStatus(200);
});

test('subregion create validation', function () {
    postJson('/api/metadata/subregions', [
        'name' => Str::random(3),
    ])->assertStatus(422);
});

test('subregion created', function () {
    postJson('/api/metadata/subregions', [
        'name' => Str::random(20),
        'subregion_data' => ['en' => 'en'],
    ])->assertStatus(201);
});

test('subregion not found', function () {
    createFreshSubRegion();
    getJson('/api/metadata/subregions/100')->assertStatus(404);
});

test('subregion detail', function () {
    createFreshSubRegion();
    getJson('/api/metadata/subregions/1')->assertStatus(200);
});

test('subregion update validation', function () {
    createFreshSubRegion();
    putJson('/api/metadata/subregions/1', [
        'name' => 'abcd',
        'subregion_data' => ['vendors' => 'emq'],
    ])->assertStatus(422);
});

test('subregion updated', function () {
    createFreshSubRegion();
    putJson('/api/metadata/subregions/1', [
        'name' => Str::random(20),
    ])->assertStatus(200);
});

test('subregion deleted', function () {
    createFreshSubRegion();
    deleteJson('/api/metadata/subregions/1')->assertStatus(200);
});

test('subregion restored', function () {
    $subregion = createFreshSubRegion();
    $subregion->delete();
    postJson('/api/metadata/subregions/1/restore')->assertStatus(200);
});


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
