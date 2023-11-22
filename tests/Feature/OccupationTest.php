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

test('occupation create for blank all field validation expect status code 422', function () {
    $fundSource = postJson('/api/metadata/occupations', [
        "name" => '',
        "code" => "",
        "country_id" => '',
        "occupation_data" => [],
    ])->assertStatus(422);
    //expect($fundSource['message'])->toBe('The name field is required. (and 1 more error)');
});

test('occupation create for blank name field validation expect The name field is required.', function () {
    $fundSource = postJson('/api/metadata/occupations', [
        "name" => '',
        "code" => "business",
        "country_id" => 1,
        "occupation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The name field is required.');
});

test('occupation create for blank name field validation expect The name field must be at least 5 characters.', function () {
    $fundSource = postJson('/api/metadata/occupations', [
        "name" => 'BUS',
        "code" => "business",
        "country_id" => 1,
        "occupation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The name field must be at least 5 characters.');
});

test('occupation create for blank code field validation expect The code field is required.', function () {
    $fundSource = postJson('/api/metadata/occupations', [
        "name" => "Business",
        "code" => "",
        "country_id" => '',
        "occupation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The code field is required.');
    //assertStatus(422);
});

test('occupation create for blank code field validation expect The code field must be at least 5 characters.', function () {
    $fundSource = postJson('/api/metadata/occupations', [
        "name" => "Business",
        "code" => "BUS",
        "country_id" => '',
        "occupation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The code field must be at least 5 characters.');
    //assertStatus(422);
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

test('occupation update for blank name field validation expect The name field is required.', function () {
    createOccupations();
    $fundSource = putJson('/api/metadata/occupations/1', [
        "name" => '',
        "code" => "business",
        "country_id" => 1,
        "occupation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The name field is required.');
});

test('occupation update for blank name field validation expect The name field must be at least 5 characters.', function () {
    createOccupations();
    $fundSource = putJson('/api/metadata/occupations/1', [
        "name" => 'BUS',
        "code" => "business",
        "country_id" => 1,
        "occupation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The name field must be at least 5 characters.');
});

test('occupation update for blank code field validation expect The code field is required.', function () {
    createOccupations();
    $fundSource = putJson('/api/metadata/occupations/1', [
        "name" => "Business",
        "code" => "",
        "country_id" => '',
        "occupation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The code field is required.');
    //assertStatus(422);
});

test('occupation update for blank code field validation expect The code field must be at least 5 characters.', function () {
    createOccupations();
    $fundSource = putJson('/api/metadata/occupations/1', [
        "name" => "Business",
        "code" => "BUS",
        "country_id" => '',
        "occupation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The code field must be at least 5 characters.');
    //assertStatus(422);
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
