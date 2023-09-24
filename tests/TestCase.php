<?php

namespace Fintech\MetaData\Tests;

use Fintech\MetaData\MetaDataServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            MetaDataServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'mysql');

        /*
        $migration = include __DIR__.'/../database/migrations/create_metadata_table.php.stub';
        $migration->up();
        */
    }
}
