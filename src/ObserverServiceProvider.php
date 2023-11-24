<?php

namespace Fintech\MetaData;

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
            config('fintech.metadata.country_model', \Fintech\MetaData\Models\Country::class)
            => config('fintech.metadata.country_observer', \Fintech\MetaData\Observers\CountryObserver::class),
        ];

        foreach ($observers as $model => $observer) {
            if ($model != null && $observer != null) {
                $model::observe($observer);
            }
        }
    }
}
