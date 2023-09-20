<?php

namespace Fintech\MetaData;

use Fintech\MetaData\Interfaces\CountryRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CountryRepository::class, function () {
            return match(config('database.default')){
                'mongodb' => new \Fintech\MetaData\Repositories\Mongodb\CountryRepository(),
                default => new \Fintech\MetaData\Repositories\Eloquent\CountryRepository()
            };
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [CountryRepository::class];
    }
}
