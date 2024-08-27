<?php

namespace Fintech\MetaData\Repositories\Eloquent;

use Fintech\Core\Repositories\EloquentRepository;
use Fintech\MetaData\Interfaces\CurrencyRepository as InterfacesCurrencyRepository;
use Fintech\MetaData\Models\Currency;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\JoinClause;

/**
 * Class CurrencyRepository
 */
class CurrencyRepository extends EloquentRepository implements InterfacesCurrencyRepository
{
    public function __construct()
    {
        parent::__construct(config('fintech.metadata.currency_model', Currency::class));
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
                    ->orWhere('code', 'like', "%{$filters['search']}%")
                    ->orWhere('native', 'like', "%{$filters['search']}%")
                    ->orWhere('vendor_code', 'like', "%{$filters['search']}%")
                    ->orWhere('currency_data', 'like', "%{$filters['search']}%")
                    ->orWhere('precision', 'like', "%{$filters['search']}%")
                    ->orWhere('subunit', 'like', "%{$filters['search']}%")
                    ->orWhere('color', 'like', "%{$filters['search']}%");
            });
        }

        if (!empty($filters['id_not_in'])) {
            $query->whereNotIn($this->model->getKeyName(), (array)$filters['id_not_in']);
        }

        if (!empty($filters['id_in'])) {
            $query->whereIn($this->model->getKeyName(), (array)$filters['id_in']);
        }

        //Enabled
        if (isset($filters['enabled'])) {
            $query->where('enabled', $filters['enabled']);
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
