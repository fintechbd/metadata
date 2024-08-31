<?php

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Support\Str;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createFreshSubRegion()
{
    return MetaData::subregion()->create([
        'name' => Str::random(20),
        'subregion_data' => ['vendors' => 'emq'],
        'region_id' => 1
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
