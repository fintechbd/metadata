<?php

namespace Fintech\MetaData\Tests;

use Fintech\MetaData\MetaDataServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use DatabaseMigrations;

    /**
     * @param $app
     * @return void
     */
    public function getEnvironmentSetUp($app): void
    {
        config()->set('app.env', 'testing');
        config()->set('database.default', 'testing');


        $migrations = [
//            include __DIR__ . '/../database/migrations/2023_09_23_201014_create_regions_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_23_201022_create_subregions_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_22_190520_create_countries_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_22_190534_create_states_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_22_190542_create_cities_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_22_190551_create_banks_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_22_190658_create_bank_branches_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_23_201134_create_fund_sources_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_23_201147_create_occupations_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_23_201201_create_relations_table.php',
//            include __DIR__ . '/../database/migrations/2023_09_23_201230_create_remittance_purposes_table.php',
//            include __DIR__ . '/../database/migrations/2023_10_07_213147_create_id_doc_types_table.php'
        ];

        foreach ($migrations as $migration) {
            $migration->up();
        }
    }

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @param $app
     * @return string[]
     */
    protected function getPackageProviders($app): array
    {
        return [
            MetaDataServiceProvider::class,
        ];
    }
}
