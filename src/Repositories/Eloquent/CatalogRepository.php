<?php

namespace Fintech\MetaData\Repositories\Eloquent;

use Fintech\Core\Repositories\EloquentRepository;
use Fintech\MetaData\Interfaces\CatalogRepository as InterfacesCatalogRepository;
use Fintech\MetaData\Models\Catalog;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use InvalidArgumentException;

/**
 * Class CatalogRepository
 * @package Fintech\MetaData\Repositories\Eloquent
 */
class CatalogRepository extends EloquentRepository implements InterfacesCatalogRepository
{
    public function __construct()
    {
        $model = app(config('fintech.metadata.catalog_model', Catalog::class));

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

        //Searching
        if (!empty($filters['search'])) {
            if (is_numeric($filters['search'])) {
                $query->where($this->model->getKeyName(), 'like', "%{$filters['search']}%");
            } else {
                $query->where('name', 'like', "%{$filters['search']}%");
                $query->orWhere('catalog_data', 'like', "%{$filters['search']}%");
            }
        }

        if (!empty($filters['type'])) {
            $query->where('type', $filters['type']);
        }

        if (!empty($filters['name'])) {
            $query->where('name', $filters['name']);
        }

        if (!empty($filters['code'])) {
            $query->where('code', $filters['code']);
        }

        if (isset($filters['enabled']) && is_bool($filters['enabled'])) {
            $query->where('enabled', $filters['enabled']);
        }

        //Display Trashed
        if (isset($filters['trashed']) && $filters['trashed'] === true) {
            $query->onlyTrashed();
        }

        if (!empty($filters['type'])) {
            $query->where('type', $filters['type']);
        }

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $this->model->getKeyName(), $filters['dir'] ?? 'asc');

        //Execute Output
        return $this->executeQuery($query, $filters);

    }
}
