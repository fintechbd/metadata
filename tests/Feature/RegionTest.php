<?php

use Illuminate\Support\Str;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createFreshRegion()
{
    return \Fintech\MetaData\Facades\MetaData::region()->create([
        'name' => Str::random(20),
        'region_data' => ['vendors' => 'emq'],
    ]);
}

test('region list', function () {
    getJson('/api/metadata/regions')->assertStatus(200);
});

test('region create validation', function () {
    postJson('/api/metadata/regions', [
        'name' => Str::random(3),
    ])->assertStatus(422);
});

test('region created', function () {
    postJson('/api/metadata/regions', [
        'name' => Str::random(20),
        'region_data' => ['en' => 'en'],
    ])->assertStatus(201);
});

test('region not found', function () {
    createFreshRegion();
    getJson('/api/metadata/regions/100')->assertStatus(404);
});

test('region detail', function () {
    createFreshRegion();
    getJson('/api/metadata/regions/1')->assertStatus(200);
});

test('region update validation', function () {
    createFreshRegion();
    putJson('/api/metadata/regions/1', [
        'name' => 'abcd',
        'region_data' => ['vendors' => 'emq'],
    ])->assertStatus(422);
});

test('region updated', function () {
    createFreshRegion();
    putJson('/api/metadata/regions/1', [
        'name' => Str::random(20),
    ])->assertStatus(200);
});

test('region deleted', function () {
    createFreshRegion();
    deleteJson('/api/metadata/regions/1')->assertStatus(200);
});

test('region restored', function () {
    $region = createFreshRegion();
    $region->delete();
    postJson('/api/metadata/regions/1/restore')->assertStatus(200);
});
