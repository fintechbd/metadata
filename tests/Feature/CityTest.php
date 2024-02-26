<?php

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Support\Str;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createCity()
{
    return MetaData::city()->create([
        "name" => Str::random(20),
        "country_id" => 1,
        "enabled" => "1",
        "city_data" => []
    ]);
}

test('city list', function () {
    getJson('/api/metadata/cities')->assertStatus(200);
});

test('city create validation', function () {
    postJson('/api/metadata/cities', [
        "name" => '',
        "country_id" => "1",
        "state_id" => "1",
        "enabled" => "1",
        "city_data" => []
    ])->assertStatus(422);
});

test('city created', function () {
    postJson('/api/metadata/cities', [
        "name" => Str::random(20),
        "country_id" => "10",
        "state_id" => "10",
        "enabled" => "1",
        "city_data" => []
    ])->assertStatus(201);
});

test('city not found', function () {
    createCity();
    getJson('/api/metadata/cities/100')->assertStatus(404);
});

test('city detail', function () {
    createCity();
    getJson('/api/metadata/cities/1')->assertStatus(200);
});

test('city update validation', function () {
    createCity();
    putJson('/api/metadata/cities/1', [
        'name' => '',
        'city_data' => ['vendors' => 'emq'],
    ])->assertStatus(422);
});

test('city updated', function () {
    createCity();
    putJson('/api/metadata/cities/1', [
        'name' => Str::random(20),
        'country_id' => 1,
        'state_id' => 1
    ])->assertStatus(200);
});

test('city deleted', function () {
    createCity();
    deleteJson('/api/metadata/cities/1')->assertStatus(200);
});

test('city restored', function () {
    $city = createCity();
    $city->delete();
    postJson('/api/metadata/cities/1/restore')->assertStatus(200);
});
