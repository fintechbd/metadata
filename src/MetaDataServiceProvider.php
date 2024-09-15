<?php

namespace Fintech\MetaData;

use Fintech\Core\Traits\RegisterPackageTrait;
use Fintech\MetaData\Commands\InstallCommand;
use Fintech\MetaData\Providers\ObserverServiceProvider;
use Fintech\MetaData\Providers\RepositoryServiceProvider;
use Illuminate\Support\ServiceProvider;

class MetaDataServiceProvider extends ServiceProvider
{
    use RegisterPackageTrait;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->packageCode = 'metadata';

        $this->mergeConfigFrom(
            __DIR__ . '/../config/metadata.php',
            'fintech.metadata'
        );

        $this->app->register(ObserverServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);

    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->injectOnConfig();

        $this->publishes([
            __DIR__ . '/../config/metadata.php' => config_path('fintech/metadata.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'metadata');

        $this->publishes([
            __DIR__ . '/../lang' => $this->app->langPath('vendor/metadata'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'metadata');

        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/metadata'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class
            ]);
        }
    }
}
