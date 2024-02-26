<?php

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Support\Str;
use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createState()
{
    return MetaData::state()->create([
        "name" => Str::random(20),
        "country_id" => 1,
        "enabled" => "1",
        "state_data" => []
    ]);
}

test('state list', function () {
    getJson('/api/metadata/states')->assertStatus(200);
});

test('state create validation', function () {
    postJson('/api/metadata/states', [
        "name" => '',
        "country_id" => "1",
        "enabled" => "1",
        "state_data" => []
    ])->assertStatus(422);
});

test('state created', function () {
    postJson('/api/metadata/states', [
        "name" => Str::random(20),
        "country_id" => "10",
        "enabled" => "1",
        "state_data" => []
    ])->assertStatus(201);
});

test('state not found', function () {
    createState();
    getJson('/api/metadata/states/100')->assertStatus(404);
});

test('state detail', function () {
    createState();
    getJson('/api/metadata/states/1')->assertStatus(200);
});

test('state update validation', function () {
    createState();
    putJson('/api/metadata/states/1', [
        'name' => '',
        'state_data' => ['vendors' => 'emq'],
    ])->assertStatus(422);
});

test('state updated', function () {
    createState();
    putJson('/api/metadata/states/1', [
        'name' => Str::random(20),
        'country_id' => 1
    ])->assertStatus(200);
});

test('state deleted', function () {
    createState();
    deleteJson('/api/metadata/states/1')->assertStatus(200);
});

test('state restored', function () {
    $state = createState();
    $state->delete();
    postJson('/api/metadata/states/1/restore')->assertStatus(200);
});
