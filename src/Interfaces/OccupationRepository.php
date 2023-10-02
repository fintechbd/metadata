<?php

namespace Fintech\MetaData\Interfaces;

use Fintech\MetaData\Exceptions\OccupationRepositoryException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use MongoDB\Laravel\Eloquent\Model as MongodbModel;

/**
 * Interface OccupationRepository
 */
interface OccupationRepository
{
    /**
     * return a list or pagination of items from
     * filtered options
     *
     * @return LengthAwarePaginator|Builder[]|Collection
     */
    public function list(array $filters = []);

    /**
     * Create a new entry resource
     *
     * @return EloquentModel|MongodbModel|null
     *
     * @throws OccupationRepositoryException
     */
    public function create(array $attributes = []);

    /**
     * find and update a resource attributes
     *
     * @return EloquentModel|MongodbModel|null
     *
     * @throws OccupationRepositoryException
     */
    public function update(int|string $id, array $attributes = []);

    /**
     * find and delete a entry from records
     *
     * @param  bool  $onlyTrashed
     * @return EloquentModel|MongodbModel|null
     *
     * @throws OccupationRepositoryException
     */
    public function find(int|string $id, $onlyTrashed = false);

    /**
     * find and delete a entry from records
     *
     * @return bool|null
     *
     * @throws OccupationRepositoryException
     */
    public function delete(int|string $id);

    /**
     * find and restore a entry from records
     *
     * @return bool|null
     *
     * @throws \InvalidArgumentException
     * @throws OccupationRepositoryException
     */
    public function restore(int|string $id);
}
