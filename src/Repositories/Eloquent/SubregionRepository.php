<?php

namespace Fintech\MetaData\Repositories\Eloquent;

use Fintech\Core\Repositories\EloquentRepository;
use Fintech\MetaData\Interfaces\SubregionRepository as InterfacesSubRegionRepository;
use Fintech\MetaData\Models\Subregion;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class SubRegionRepository
 */
class SubregionRepository extends EloquentRepository implements InterfacesSubRegionRepository
{
    public function __construct()
    {
        parent::__construct(config('fintech.metadata.subregion_model', Subregion::class));
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
                $query->where('name', 'like', "%{$filters['search']}%");
                $query->orWhere('subregion_data', 'like', "%{$filters['search']}%");
            }
        }

        if (!empty($filters['id_not_in'])) {
            $query->whereNotIn($this->model->getKeyName(), (array)$filters['id_not_in']);
        }

        if (!empty($filters['id_in'])) {
            $query->whereIn($this->model->getKeyName(), (array)$filters['id_in']);
        }

        if (!empty($filters['region_id'])) {
            $query->where('region_id', "=", $filters['region_id']);
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
