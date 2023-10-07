<?php

namespace Fintech\MetaData\Repositories\Eloquent;

use Fintech\Core\Repositories\EloquentRepository;
use Fintech\MetaData\Interfaces\SubRegionRepository as InterfacesSubRegionRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Class SubRegionRepository
 */
class SubRegionRepository extends EloquentRepository implements InterfacesSubRegionRepository
{
    public function __construct()
    {
        $model = app()->make(config('fintech.metadata.subregion_model', \Fintech\MetaData\Models\Subregion::class));

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
                $query->orWhere('subregion_data', 'like', "%{$filters['search']}%");
            }
        }

        if (isset($filters['region_id']) && !empty($filters['region_id'])) {
            $query->where('region_id', "=", $filters['region_id']);
        }

        //Display Trashed
        if (isset($filters['trashed']) && !empty($filters['trashed'])) {
            $query->onlyTrashed();
        }

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $this->model->getKeyName(), $filters['dir'] ?? 'asc');

        //Prepare Output
        return (isset($filters['paginate']) && $filters['paginate'] == true)
            ? $query->simplePaginate(($filters['per_page'] ?? 20))
            : $query->get();

    }
}
