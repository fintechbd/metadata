<?php

namespace Fintech\MetaData\Repositories\Eloquent;

use Fintech\Core\Repositories\EloquentRepository;
use Fintech\MetaData\Interfaces\CountryRepository as InterfacesCountryRepository;
use Fintech\MetaData\Models\Country;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\JoinClause;
use InvalidArgumentException;

/**
 * Class CountryRepository
 */
class CountryRepository extends EloquentRepository implements InterfacesCountryRepository
{
    public function __construct()
    {
        $model = app(config('fintech.metadata.country_model', Country::class));

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

        if (!empty($filters['search'])) {
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

        if (!empty($filters['country_id'])) {
            $query->where('id', $filters['country_id']);
        }

        if (!empty($filters['in_array_country_id'])) {
            $query->whereIn('id', $filters['in_array_country_id']);
        }

        if (!empty($filters['iso3'])) {
            $query->where('iso3', $filters['iso3']);
        }

        if (!empty($filters['iso2'])) {
            $query->where('iso2', $filters['iso2']);
        }

        if (!empty($filters['currency'])) {
            $query->where('currency', $filters['currency']);
        }

        //Enabled
        if (isset($filters['enabled'])) {
            $query->where('enabled', $filters['enabled']);
        }

        if (!empty($filters['region_id'])) {
            $query->where('region_id', $filters['region_id']);
        }

        if (!empty($filters['subregion_id'])) {
            $query->where('subregion_id', $filters['subregion_id']);
        }

        if (isset($filters['language_enabled']) && is_bool($filters['language_enabled'])) {
            $query->where('country_data->language_enabled', $filters['language_enabled']);
        }

        if (isset($filters['is_serving']) && is_bool($filters['is_serving'])) {
            $query->where('country_data->is_serving', $filters['is_serving']);
        }

        if (isset($filters['is_destination']) && is_bool($filters['is_destination'])) {
            $query->select('countries.*')->groupBy('countries.id')
                ->join('service_stats', 'countries.id', '=', 'service_stats.destination_country_id');
        }

        if (isset($filters['multi_currency_enabled']) && is_bool($filters['multi_currency_enabled'])) {
            $query->where('country_data->multi_currency_enabled', $filters['multi_currency_enabled']);
        }
        if (!empty($filters['multi_currency_country_id'])) {
            $query->join('country_currency', function (JoinClause $joinClause) use ($filters) {
                return $joinClause->on('countries.id', '=', 'country_currency.country_id')
                    ->where('country_currency.country_id', '=', $filters['multi_currency_country_id']);
            });
        }

        //Display Trashed
        if (isset($filters['trashed']) && $filters['trashed'] === true) {
            $query->onlyTrashed();
        }

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $this->model->getKeyName(), $filters['dir'] ?? 'asc');

        //Execute Output
        return $this->executeQuery($query, $filters);

    }
}
