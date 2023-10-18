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
