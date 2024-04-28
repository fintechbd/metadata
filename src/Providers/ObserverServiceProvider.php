<?php

namespace Fintech\MetaData\Providers;

use Fintech\MetaData\Models\Country;
use Fintech\MetaData\Observers\CountryObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     * @return void
     */
    public function boot(): void
    {
        $observers = [
            config('fintech.metadata.country_model', Country::class)
            => config('fintech.metadata.country_observer', CountryObserver::class),
        ];

        foreach ($observers as $model => $observer) {
            if ($model != null && $observer != null) {
                $model::observe($observer);
            }
        }
    }
}
