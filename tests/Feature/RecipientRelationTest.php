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
    $fundSource = postJson('/api/metadata/relations', [
        "name" => '',
        "code" => "",
        "country_id" => '',
        "relation_data" => [],
    ])->assertStatus(422);
    //expect($fundSource['message'])->toBe('The name field is required. (and 1 more error)');
});

test('relation create for blank name field validation expect The name field is required.', function () {
    $fundSource = postJson('/api/metadata/relations', [
        "name" => '',
        "code" => "business",
        "country_id" => 1,
        "relation_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The name field is required.');
});
