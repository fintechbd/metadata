<?php

namespace Fintech\MetaData\Repositories\Eloquent;

use Fintech\Core\Repositories\EloquentRepository;
use Fintech\MetaData\Interfaces\CityRepository as InterfacesCityRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Class CityRepository
 */
class CityRepository extends EloquentRepository implements InterfacesCityRepository
{
    public function __construct()
    {
        $model = app(config('fintech.metadata.city_model', \Fintech\MetaData\Models\City::class));

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
                $query->where('name', 'like', "%{$filters['search']}%");
            }
        }

        if(isset($filters['state_id']) && !empty($filters['state_id'])) {
            $query->where('state_id', $filters['state_id']);
        }

        if(isset($filters['country_id']) && !empty($filters['country_id'])) {
            $query->where('country_id', $filters['country_id']);
        }

        //Display Trashed
        if (isset($filters['trashed']) && !empty($filters['trashed'])) {
            $query->onlyTrashed();
        }

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $this->model->getKeyName(), $filters['dir'] ?? 'asc');

        //Execute Output
        return $this->executeQuery($query, $filters);

    }
}
