<?php

namespace Fintech\MetaData\Interfaces;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use MongoDB\Laravel\Eloquent\Model as MongodbModel;
use Fintech\MetaData\Exceptions\CityRepositoryException;

/**
 * Interface CityRepository
 * @package Fintech\MetaData\Interfaces
 */
interface CityRepository
{
    /**
     * return a list or pagination of items from
     * filtered options
     *
     * @param array $filters
     * @return LengthAwarePaginator|Builder[]|Collection
     */
    public function list(array $filters = []);

    /**
     * Create a new entry resource
     *
     * @param array $attributes
     * @return EloquentModel|MongodbModel|null
     * @throws CityRepositoryException
     */
    public function create(array $attributes = []);

    /**
     * find and update a resource attributes
     *
     * @param int|string $id
     * @param array $attributes
     * @return EloquentModel|MongodbModel|null
     * @throws CityRepositoryException
     */
    public function update(int|string $id, array $attributes = []);

    /**
     * find and delete a entry from records
     *
     * @param string|int $id
     * @param bool $onlyTrashed
     * @return EloquentModel|MongodbModel|null
     * @throws CityRepositoryException
     */
    public function read(int|string $id, $onlyTrashed = false);

    /**
     * find and delete a entry from records
     *
     * @param string|int $id
     * @return bool|null
     * @throws CityRepositoryException
     */
    public function delete(int|string $id):?bool;

    /**
     * find and restore a entry from records
     *
     * @param string|int $id
     * @return bool|null
     * @throws \InvalidArgumentException
     * @throws CityRepositoryException
     */
    public function restore(int|string $id):?bool;
}
