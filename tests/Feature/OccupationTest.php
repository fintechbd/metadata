<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createOccupations(): Model|\MongoDB\Laravel\Eloquent\Model|null
{
    return \Fintech\MetaData\Facades\MetaData::occupation()->create([
        "name" => Str::random(20),
        "code" => "SOF-SOF",
        "country_id" => 1,
        "occupation_data" => [],
    ]);
}

test('occupation list', function () {
    getJson('/api/metadata/occupations')->assertStatus(200);
});



test('occupation created', function () {
    postJson('/api/metadata/occupations', [
        "name" => 'Business',
        "code" => "Business",
        "country_id" => 1,
        "occupation_data" => [],
    ])->assertStatus(201);
});

test('occupation not found', function () {
    createOccupations();
    getJson('/api/metadata/occupations/100')->assertStatus(404);
});

test('occupation detail', function () {
    createOccupations();
    getJson('/api/metadata/occupations/1')->assertStatus(200);
});



test('occupation updated', function () {
    createOccupations();
    putJson('/api/metadata/occupations/1', [
        'name' => Str::random(20),
        'code' => Str::random(20),
    ])->assertStatus(200);
});

test('occupation deleted', function () {
    createOccupations();
    deleteJson('/api/metadata/occupations/1')->assertStatus(200);
});

test('occupation restored', function () {
    $fundSource = createOccupations();
    $fundSource->delete();
    postJson('/api/metadata/occupations/1/restore')->assertStatus(200);
});
