<?php

use Illuminate\Support\Str;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
use function Pest\Laravel\putJson;

function createFundSources()
{
    return \Fintech\MetaData\Facades\MetaData::fundSource()->create([
        "name" => Str::random(20),
        "code" => "SOF-SOF",
        "country_id" => 1,
        "fund_source_data" => [],
    ]);
}

test('fund source list', function () {
    getJson('/api/metadata/fund-sources')->assertStatus(200);
});

test('fund source created', function () {
    postJson('/api/metadata/fund-sources', [
        "name" => 'Business',
        "code" => "Business",
        "country_id" => 1,
        "fund_source_data" => [],
    ])->assertStatus(201);
});

test('fund source not found', function () {
    createFundSources();
    getJson('/api/metadata/fund-sources/100')->assertStatus(404);
});

test('fund source detail', function () {
    createFundSources();
    getJson('/api/metadata/fund-sources/1')->assertStatus(200);
});

test('fund source update validation', function () {
    createFundSources();
    putJson('/api/metadata/fund-sources/1', [
        "name" => '',
        "code" => "Business",
        "country_id" => 1,
        "fund_source_data" => [],
    ])->assertStatus(422);
});

test('fund source updated', function () {
    createFundSources();
    putJson('/api/metadata/fund-sources/1', [
        'name' => Str::random(20),
    ])->assertStatus(200);
});

test('fund source deleted', function () {
    createFundSources();
    deleteJson('/api/metadata/fund-sources/1')->assertStatus(200);
});

test('fund source restored', function () {
    $fundSource = createFundSources();
    $fundSource->delete();
    postJson('/api/metadata/fund-sources/1/restore')->assertStatus(200);
});

test('fund source code field validation', function () {
    postJson('/api/metadata/fund-sources', [
        "name" => 'Business',
        "code" => "Business",
        "country_id" => 1,
        "fund_source_data" => [],
    ])->dd();
    //assertStatus(201);
});
