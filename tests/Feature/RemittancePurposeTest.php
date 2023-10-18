<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createRemittancePurpose(): Model|\MongoDB\Laravel\Eloquent\Model|null
{
    return \Fintech\MetaData\Facades\MetaData::remittancePurpose()->create([
        "name" => Str::random(20),
        "code" => "SOF-SOF",
        "country_id" => 1,
        "remittance_purpose_data" => [],
    ]);
}
test('Remittance Purpose list', function () {
    getJson('/api/metadata/remittance-purposes')->assertStatus(200);
});

test('Remittance Purpose create for blank all field validation expect status code 422', function () {
    $fundSource = postJson('/api/metadata/remittance-purposes', [
        "name" => '',
        "code" => "",
        "country_id" => '',
        "remittance_purpose_data" => [],
    ])->assertStatus(422);
    //expect($fundSource['message'])->toBe('The name field is required. (and 1 more error)');
});

test('Remittance Purpose create for blank name field validation expect The name field is required.', function () {
    $fundSource = postJson('/api/metadata/remittance-purposes', [
        "name" => '',
        "code" => "business",
        "country_id" => 1,
        "remittance_purpose_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The name field is required.');
});

test('Remittance Purpose create for blank name field validation expect The name field must be at least 5 characters.', function () {
    $fundSource = postJson('/api/metadata/remittance-purposes', [
        "name" => 'BUS',
        "code" => "business",
        "country_id" => 1,
        "remittance_purpose_data" => [],
    ]);
    expect($fundSource['message'])->toBe('The name field must be at least 5 characters.');
});
