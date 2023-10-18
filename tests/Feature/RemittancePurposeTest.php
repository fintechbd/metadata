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
