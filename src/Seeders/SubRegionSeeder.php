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
        return array (
            0 =>
                array (
                    'id' => '1',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:10:23',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Northern Africa',
                ),
            1 =>
                array (
                    'id' => '2',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:09',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Middle Africa',
                ),
            2 =>
                array (
                    'id' => '3',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:09',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Western Africa',
                ),
            3 =>
                array (
                    'id' => '4',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:10',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Eastern Africa',
                ),
            4 =>
                array (
                    'id' => '5',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:10',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Southern Africa',
                ),
            5 =>
                array (
                    'id' => '6',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:10',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Northern America',
                ),
            6 =>
                array (
                    'id' => '7',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:10',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Caribbean',
                ),
            7 =>
                array (
                    'id' => '8',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:10',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'South America',
                ),
            8 =>
                array (
                    'id' => '9',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:11',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Central America',
                ),
            9 =>
                array (
                    'id' => '10',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:11',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Central Asia',
                ),
            10 =>
                array (
                    'id' => '11',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:11',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Western Asia',
                ),
            11 =>
                array (
                    'id' => '12',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:11',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Eastern Asia',
                ),
            12 =>
                array (
                    'id' => '13',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:12',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'South-Eastern Asia',
                ),
            13 =>
                array (
                    'id' => '14',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:12',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Southern Asia',
                ),
            14 =>
                array (
                    'id' => '15',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:12',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Eastern Europe',
                ),
            15 =>
                array (
                    'id' => '16',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:12',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Southern Europe',
                ),
            16 =>
                array (
                    'id' => '17',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:12',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Western Europe',
                ),
            17 =>
                array (
                    'id' => '18',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:13',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Northern Europe',
                ),
            18 =>
                array (
                    'id' => '19',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:13',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Australia and New Zealand',
                ),
            19 =>
                array (
                    'id' => '20',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:13',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Melanesia',
                ),
            20 =>
                array (
                    'id' => '21',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:13',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Micronesia',
                ),
            21 =>
                array (
                    'id' => '22',
                    'subregion_data' =>
                        array (
                        ),
                    'creator_id' => NULL,
                    'editor_id' => NULL,
                    'destroyer_id' => NULL,
                    'restorer_id' => NULL,
                    'created_at' => '2023-08-14 13:11:03',
                    'updated_at' => '2023-08-25 02:22:13',
                    'deleted_at' => NULL,
                    'restored_at' => NULL,
                    'name' => 'Polynesia',
                ),
        );
    }
}
