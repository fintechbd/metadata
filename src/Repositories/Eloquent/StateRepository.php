<?php

namespace Fintech\MetaData\Repositories\Eloquent;

use Fintech\Core\Repositories\EloquentRepository;
use Fintech\MetaData\Interfaces\StateRepository as InterfacesStateRepository;
use Fintech\MetaData\Models\State;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class StateRepository
 */
class StateRepository extends EloquentRepository implements InterfacesStateRepository
{
    public function __construct()
    {
        parent::__construct(config('fintech.metadata.state_model', State::class));
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
            $query->where(function ($query) use ($filters) {
                $query->where($this->model->getKeyName(), 'like', "%{$filters['search']}%")
                ->orWhere('name', 'like', "%{$filters['search']}%")
                ->orWhere('type', 'like', "%{$filters['search']}%")
                ->orWhere('state_data', 'like', "%{$filters['search']}%")
                ->orWhereHas('country', function ($query) use ($filters) {
                    return $query->where('name', 'like', "%{$filters['search']}%")
                        ->orWhere('iso2', 'like', "%{$filters['search']}%")
                        ->orWhere('iso3', 'like', "%{$filters['search']}%")
                        ->orWhere('phone_code', 'like', "%{$filters['search']}%")
                        ->orWhere('capital', 'like', "%{$filters['search']}%")
                        ->orWhere('currency', 'like', "%{$filters['search']}%")
                        ->orWhere('currency_name', 'like', "%{$filters['search']}%")
                        ->orWhere('country_data', 'like', "%{$filters['search']}%")
                        ->orWhere('nationality', 'like', "%{$filters['search']}%");
                });
            });
        }

        if (!empty($filters['id_not_in'])) {
            $query->whereNotIn($this->model->getKeyName(), (array)$filters['id_not_in']);
        }

        if (!empty($filters['id_in'])) {
            $query->whereIn($this->model->getKeyName(), (array)$filters['id_in']);
        }

        if (!empty($filters['country_id'])) {
            $query->where('country_id', $filters['country_id']);
        }


        if (!empty($filters['enabled'])) {
            $query->where('enabled', "=", $filters['enabled']);
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
