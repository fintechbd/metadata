<?php

namespace Fintech\MetaData;

use Fintech\MetaData\Commands\InstallCommand;
use Fintech\MetaData\Commands\MetaDataCommand;
use Illuminate\Support\ServiceProvider;

class MetaDataServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/metadata.php', 'metadata'
        );

        $this->app->register(RouteServiceProvider::class);

        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/metadata.php' => config_path('metadata.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'metadata');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/metadata'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'metadata');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/metadata'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
                MetaDataCommand::class,
            ]);
        }
    }
}
