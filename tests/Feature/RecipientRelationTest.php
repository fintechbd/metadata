<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

/**
 * @return Model|\MongoDB\Laravel\Eloquent\Model|null
 */
function createRelations(): Model|\MongoDB\Laravel\Eloquent\Model|null
{
    return \Fintech\MetaData\Facades\MetaData::relation()->create([
        "name" => Str::random(20),
        "code" => "SOF-SOF",
        "country_id" => 1,
        "relation_data" => [],
    ]);
}

test('relation list', function () {
    getJson('/api/metadata/relations')->assertStatus(200);
});

test('relation create for blank all field validation expect status code 422', function () {
    $recipientRelation = postJson('/api/metadata/relations', [
        "name" => '',
        "code" => "",
        "country_id" => '',
        "relation_data" => [],
    ])->assertStatus(422);
    //expect($recipientRelation['message'])->toBe('The name field is required. (and 1 more error)');
});

test('relation create for blank name field validation expect The name field is required.', function () {
    $recipientRelation = postJson('/api/metadata/relations', [
        "name" => '',
        "code" => "business",
        "country_id" => 1,
        "relation_data" => [],
    ]);
    expect($recipientRelation['message'])->toBe('The name field is required.');
});

test('relation create for name field validation expect The name field must be at least 5 characters.', function () {
    $recipientRelation = postJson('/api/metadata/relations', [
        "name" => 'BUS',
        "code" => "business",
        "country_id" => 1,
        "relation_data" => [],
    ]);
    expect($recipientRelation['message'])->toBe('The name field must be at least 5 characters.');
});

test('relation create for blank code field validation expect The code field is required.', function () {
    $recipientRelation = postJson('/api/metadata/relations', [
        "name" => "Business",
        "code" => "",
        "country_id" => '',
        "relation_data" => [],
    ]);
    expect($recipientRelation['message'])->toBe('The code field is required.');
    //assertStatus(422);
});

test('relation create for code field validation expect The code field must be at least 5 characters.', function () {
    $recipientRelation = postJson('/api/metadata/relations', [
        "name" => "Business",
        "code" => "BUS",
        "country_id" => '',
        "relation_data" => [],
    ]);
    expect($recipientRelation['message'])->toBe('The code field must be at least 5 characters.');
    //assertStatus(422);
});

test('relation created', function () {
    postJson('/api/metadata/relations', [
        "name" => 'Business',
        "code" => "Business",
        "country_id" => 1,
        "relation_data" => [],
    ])->assertStatus(201);
});

test('relation not found', function () {
    createRelations();
    getJson('/api/metadata/relations/100')->assertStatus(404);
});

test('relation detail', function () {
    createRelations();
    getJson('/api/metadata/relations/1')->assertStatus(200);
});

test('relation update for blank name field validation expect The name field is required.', function () {
    createRelations();
    $recipientRelation = putJson('/api/metadata/relations/1', [
        "name" => '',
        "code" => "business",
        "country_id" => 1,
        "relation_data" => [],
    ]);
    expect($recipientRelation['message'])->toBe('The name field is required.');
});

test('relation update for name field validation expect The name field must be at least 5 characters.', function () {
    createRelations();
    $recipientRelation = putJson('/api/metadata/relations/1', [
        "name" => 'BUS',
        "code" => "business",
        "country_id" => 1,
        "relation_data" => [],
    ]);
    expect($recipientRelation['message'])->toBe('The name field must be at least 5 characters.');
});

test('relation update for blank code field validation expect The code field is required.', function () {
    createRelations();
    $recipientRelation = putJson('/api/metadata/relations/1', [
        "name" => "Business",
        "code" => "",
        "country_id" => '',
        "relation_data" => [],
    ]);
    expect($recipientRelation['message'])->toBe('The code field is required.');
    //assertStatus(422);
});

test('relation update for code field validation expect The code field must be at least 5 characters.', function () {
    createRelations();
    $recipientRelation = putJson('/api/metadata/relations/1', [
        "name" => "Business",
        "code" => "BUS",
        "country_id" => '',
        "relation_data" => [],
    ]);
    expect($recipientRelation['message'])->toBe('The code field must be at least 5 characters.');
    //assertStatus(422);
});

test('relation updated', function () {
    createRelations();
    putJson('/api/metadata/relations/1', [
        'name' => Str::random(20),
        'code' => Str::random(20),
    ])->assertStatus(200);
});

test('relation deleted', function () {
    createRelations();
    deleteJson('/api/metadata/relations/1')->assertStatus(200);
});

test('relation restored', function () {
    $recipientRelation = createRelations();
    $recipientRelation->delete();
    postJson('/api/metadata/relations/1/restore')->assertStatus(200);
});
