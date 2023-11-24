<?php

namespace Fintech\MetaData\Repositories\Eloquent;

use Fintech\Core\Repositories\EloquentRepository;
use Fintech\MetaData\Interfaces\CountryRepository as InterfacesCountryRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Class CountryRepository
 */
class CountryRepository extends EloquentRepository implements InterfacesCountryRepository
{
    public function __construct()
    {
        $model = app(config('fintech.metadata.country_model', \Fintech\MetaData\Models\Country::class));

        if (!$model instanceof Model) {
            throw new InvalidArgumentException("Eloquent repository require model class to be `Illuminate\Database\Eloquent\Model` instance.");
        }

        $this->model = $model;
    }

    /**
     * return a list or pagination of items from
     * filtered options
     *
     * @return Paginator|Collection
     */
    public function list(array $filters = [])
    {
        $query = $this->model->newQuery();

        if (isset($filters['search']) && !empty($filters['search'])) {
            if (is_numeric($filters['search'])) {
                $query->where($this->model->getKeyName(), 'like', "%{$filters['search']}%");
            } else {
                $query->where('name', 'like', "%{$filters['search']}%")
                    ->orWhere('iso3', 'like', "%{$filters['search']}%")
                    ->orWhere('iso2', 'like', "%{$filters['search']}%")
                    ->orWhere('phone_code', 'like', "%{$filters['search']}%")
                    ->orWhere('capital', 'like', "%{$filters['search']}%")
                    ->orWhere('currency', 'like', "%{$filters['search']}%")
                    ->orWhere('currency_name', 'like', "%{$filters['search']}%")
                    ->orWhere('nationality', 'like', "%{$filters['search']}%")
                    ->orWhere('country_data', 'like', "%{$filters['search']}%");
            }
        }

        if (isset($filters['iso3']) && !empty($filters['iso3'])) {
            $query->where('iso3', $filters['iso3']);
        }

        if (isset($filters['iso2']) && !empty($filters['iso2'])) {
            $query->where('iso2', $filters['iso2']);
        }

        if (isset($filters['currency']) && !empty($filters['currency'])) {
            $query->where('currency', $filters['currency']);
        }

        //Enabled
        if (isset($filters['enabled'])) {
            $query->where('enabled', $filters['enabled']);
        }

        if (isset($filters['region_id']) && !empty($filters['region_id'])) {
            $query->where('region_id', $filters['region_id']);
        }

        if (isset($filters['subregion_id']) && !empty($filters['subregion_id'])) {
            $query->where('subregion_id', $filters['subregion_id']);
        }

        if (isset($filters['language_enabled'])) {
            $query->whereJsonContains('country_data->language_enabled', $filters['language_enabled']);
        }

        if (isset($filters['is_serving'])) {
            $query->whereJsonContains('country_data->is_serving', $filters['is_serving']);
        }

        if (isset($filters['multi_currency_enabled'])) {
            $query->whereJsonContains('country_data->multi_currency_enabled', $filters['multi_currency_enabled']);
        }

        //Display Trashed
        if (isset($filters['trashed'])) {
            $query->onlyTrashed();
        }

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $this->model->getKeyName(), $filters['dir'] ?? 'asc');

        logger("COUNTRY REPOSITORY QUERY : " . $query->toRawSql());

        //Execute Output
        return $this->executeQuery($query, $filters);

    }
}
