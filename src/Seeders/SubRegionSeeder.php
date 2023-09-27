<?php

namespace Fintech\MetaData\Seeders;

use Fintech\MetaData\Facades\MetaData;
use Illuminate\Database\Seeder;

class SubRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $subregion) {
            MetaData::subregion()->create($subregion);
        }
    }

    private function data()
    {
        return [
            0 => [
                'id' => '1',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:10:23',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Northern Africa',
            ],
            1 => [
                'id' => '2',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:09',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Middle Africa',
            ],
            2 => [
                'id' => '3',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:09',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Western Africa',
            ],
            3 => [
                'id' => '4',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:10',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Eastern Africa',
            ],
            4 => [
                'id' => '5',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:10',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Southern Africa',
            ],
            5 => [
                'id' => '6',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:10',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Northern America',
            ],
            6 => [
                'id' => '7',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:10',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Caribbean',
            ],
            7 => [
                'id' => '8',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:10',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'South America',
            ],
            8 => [
                'id' => '9',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:11',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Central America',
            ],
            9 => [
                'id' => '10',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:11',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Central Asia',
            ],
            10 => [
                'id' => '11',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:11',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Western Asia',
            ],
            11 => [
                'id' => '12',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:11',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Eastern Asia',
            ],
            12 => [
                'id' => '13',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:12',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'South-Eastern Asia',
            ],
            13 => [
                'id' => '14',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:12',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Southern Asia',
            ],
            14 => [
                'id' => '15',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:12',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Eastern Europe',
            ],
            15 => [
                'id' => '16',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:12',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Southern Europe',
            ],
            16 => [
                'id' => '17',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:12',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Western Europe',
            ],
            17 => [
                'id' => '18',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:13',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Northern Europe',
            ],
            18 => [
                'id' => '19',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:13',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Australia and New Zealand',
            ],
            19 => [
                'id' => '20',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:13',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Melanesia',
            ],
            20 => [
                'id' => '21',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:13',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Micronesia',
            ],
            21 => [
                'id' => '22',
                'subregion_data' => [
                ],
                'creator_id' => null,
                'editor_id' => null,
                'destroyer_id' => null,
                'restorer_id' => null,
                'created_at' => '2023-08-14 13:11:03',
                'updated_at' => '2023-08-25 02:22:13',
                'deleted_at' => null,
                'restored_at' => null,
                'name' => 'Polynesia',
            ],
        ];
    }
}
