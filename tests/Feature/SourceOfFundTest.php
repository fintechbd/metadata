<?php

use Illuminate\Support\Str;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createCountry()
{
    return \Fintech\MetaData\Facades\MetaData::country()->create([
        "country_id" => Str::random(20),
        "name" => "BD",
        "code" => "BGD",
        "enabled" => "880",
        "fund_source_data" => "Dhaka",
    ]);
}

test('country list', function () {
    getJson('/api/metadata/countries')->assertStatus(200);
});

test('country create validation', function () {
    postJson('/api/metadata/countries', [
        "name" => '',
        "iso2" => "BD",
        "iso3" => "BGD",
        "phone_code" => "880",
        "capital" => "Dhaka",
        "currency" => "BDT",
        "currency_name" => "Bangladeshi Taka",
        "currency_symbol" => "$",
        "nationality" => "Bangladeshi",
        "region_id" => "1",
        "country_id" => "1",
        "language" => "bn",
        "enabled" => "1",
        "emoji" => "",
        "latitude" => "90.000",
        "longitude" => "23.231",
        "timezones" => [],
        "country_data" => []
    ])->assertStatus(422);
});

test('country created', function () {
    postJson('/api/metadata/countries', [
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
        "country_id" => "1",
        "language" => "bn",
        "enabled" => "1",
        "emoji" => "",
        "latitude" => "90.000",
        "longitude" => "23.231",
        "timezones" => [],
        "country_data" => []
    ])->assertStatus(201);
});

test('country not found', function () {
    createCountry();
    getJson('/api/metadata/countries/100')->assertStatus(404);
});

test('country detail', function () {
    createCountry();
    getJson('/api/metadata/countries/1')->assertStatus(200);
});

test('country update validation', function () {
    createCountry();
    putJson('/api/metadata/countries/1', [
        'name' => '',
        'country_data' => ['vendors' => 'emq'],
    ])->assertStatus(422);
});

test('country updated', function () {
    createCountry();
    putJson('/api/metadata/countries/1', [
        'name' => Str::random(20),
    ])->assertStatus(200);
});

test('country deleted', function () {
    createCountry();
    deleteJson('/api/metadata/countries/1')->assertStatus(200);
});

test('country restored', function () {
    $country = createCountry();
    $country->delete();
    postJson('/api/metadata/countries/1/restore')->assertStatus(200);
});
