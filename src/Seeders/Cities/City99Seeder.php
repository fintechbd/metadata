<?php

namespace Fintech\MetaData\Seeders\Cities;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class City99Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->data();

        foreach (array_chunk($data, 200) as $block) {
            set_time_limit(2100);
            foreach ($block as $city) {
                MetaData::city()->create($city);
            }
        }
    }

    private function data()
    {
        return array(
  0 =>
  array(
    'id' => '153616',
    'name' => 'Santa Isabel',
    'latitude' => '17.96607750',
    'longitude' => '-66.40489200',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5201',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  1 =>
  array(
    'id' => '153617',
    'name' => 'Toa Alta',
    'latitude' => '18.38828230',
    'longitude' => '-66.24822370',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5202',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  2 =>
  array(
    'id' => '153618',
    'name' => 'Toa Baja',
    'latitude' => '18.44447090',
    'longitude' => '-66.25432930',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5203',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  3 =>
  array(
    'id' => '153619',
    'name' => 'Trujillo Alto',
    'latitude' => '18.35467190',
    'longitude' => '-66.00738760',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5204',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  4 =>
  array(
    'id' => '153620',
    'name' => 'Utuado',
    'latitude' => '18.26550950',
    'longitude' => '-66.70045190',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5205',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  5 =>
  array(
    'id' => '153621',
    'name' => 'Vega Alta',
    'latitude' => '18.41217030',
    'longitude' => '-66.33128050',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5206',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  6 =>
  array(
    'id' => '153622',
    'name' => 'Vega Baja',
    'latitude' => '18.44614590',
    'longitude' => '-66.40419670',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5207',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  7 =>
  array(
    'id' => '153623',
    'name' => 'Vieques',
    'latitude' => '18.12628540',
    'longitude' => '-65.44009850',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5208',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  8 =>
  array(
    'id' => '153624',
    'name' => 'Villalba',
    'latitude' => '18.12175540',
    'longitude' => '-66.49857870',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5209',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  9 =>
  array(
    'id' => '153625',
    'name' => 'Yabucoa',
    'latitude' => '18.05052010',
    'longitude' => '-65.87932880',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5210',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  10 =>
  array(
    'id' => '153626',
    'name' => 'Yauco',
    'latitude' => '18.03496400',
    'longitude' => '-66.84989830',
    'enabled' => '1',
    'country_id' => '178',
    'state_id' => '5211',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  11 =>
  array(
    'id' => '153627',
    'name' => 'City of Industry',
    'latitude' => '34.01583333',
    'longitude' => '-117.95083333',
    'enabled' => '1',
    'country_id' => '233',
    'state_id' => '1416',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  12 =>
  array(
    'id' => '153628',
    'name' => 'Perinthalmanna',
    'latitude' => '10.97768000',
    'longitude' => '76.22850800',
    'enabled' => '1',
    'country_id' => '101',
    'state_id' => '4028',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  13 =>
  array(
    'id' => '153629',
    'name' => 'Hedehusene',
    'latitude' => '55.67594000',
    'longitude' => '12.56553000',
    'enabled' => '1',
    'country_id' => '59',
    'state_id' => '1530',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  14 =>
  array(
    'id' => '153630',
    'name' => 'Nouméa',
    'latitude' => '-22.27580000',
    'longitude' => '166.45800000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5225',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  15 =>
  array(
    'id' => '153631',
    'name' => 'Le Mont-Dore',
    'latitude' => '-22.21570000',
    'longitude' => '166.46650000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5225',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  16 =>
  array(
    'id' => '153632',
    'name' => 'Dumbéa',
    'latitude' => '-22.15000000',
    'longitude' => '166.45000000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5225',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  17 =>
  array(
    'id' => '153633',
    'name' => 'Païta',
    'latitude' => '-22.13370000',
    'longitude' => '166.35050000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5225',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  18 =>
  array(
    'id' => '153634',
    'name' => 'Bourail',
    'latitude' => '-21.57010000',
    'longitude' => '165.48040000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5225',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  19 =>
  array(
    'id' => '153635',
    'name' => 'Koné',
    'latitude' => '-21.05900000',
    'longitude' => '164.85180000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5226',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  20 =>
  array(
    'id' => '153636',
    'name' => 'Poindimié',
    'latitude' => '-20.94960000',
    'longitude' => '165.32930000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5226',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  21 =>
  array(
    'id' => '153637',
    'name' => 'Houaïlou',
    'latitude' => '-21.29090000',
    'longitude' => '165.62170000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5226',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  22 =>
  array(
    'id' => '153638',
    'name' => 'Lifou',
    'latitude' => '-20.96670000',
    'longitude' => '167.23330000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5227',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  23 =>
  array(
    'id' => '153639',
    'name' => 'Maré',
    'latitude' => '-21.51670000',
    'longitude' => '167.98330000',
    'enabled' => '1',
    'country_id' => '157',
    'state_id' => '5227',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
  24 =>
  array(
    'id' => '153640',
    'name' => 'Dessau-Roßlau',
    'latitude' => '51.86055555',
    'longitude' => '12.24694444',
    'enabled' => '1',
    'country_id' => '82',
    'state_id' => '3011',
    'creator_id' => null,
    'editor_id' => null,
    'destroyer_id' => null,
    'restorer_id' => null,
  ),
);
    }
}
