<?php

namespace Fintech\MetaData\Repositories\Mongodb;

use Fintech\MetaData\Interfaces\CountryRepository as InterfacesCountryRepository;
use Fintech\MetaData\Models\City;
use Illuminate\Contracts\Pagination\Paginator;
use InvalidArgumentException;
use Throwable;

/**
 * Class CityRepository
 */
class CityRepository implements InterfacesCountryRepository
{
    public function __construct()
    {
        $model = app(config('fintech.metadata.city_model', City::class));

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

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $this->model->getKeyName(), $filters['dir'] ?? 'asc');

        //Prepare Output
        return (isset($filters['paginate']) && $filters['paginate'] == true)
            ? $query->simplePaginate(($filters['per_page'] ?? 20))
            : $query->get();

    }

    /**
     * Create a new entry resource
     *
     * @return Model|null
     *
     * @throws CityRepositoryException
     */
    public function create(array $attributes = [])
    {
        try {
            $this->model->fill($attributes);
            if ($this->model->saveOrFail()) {

                $this->model->refresh();

                return $this->model;
            }
        } catch (Throwable $e) {

            throw new CityRepositoryException($e->getMessage(), 0, $e);
        }

        return null;
    }

    /**
     * find and update a resource attributes
     *
     * @return Model|null
     *
     * @throws CityRepositoryException
     */
    public function update(int|string $id, array $attributes = [])
    {
        try {

            $this->model = $this->model->findOrFail($id);

        } catch (Throwable $exception) {

            throw new ModelNotFoundException($exception->getMessage(), 0, $exception);
        }

        try {
            if ($this->model->updateOrFail($attributes)) {

                $this->model->refresh();

                return $this->model;
            }
        } catch (Throwable $exception) {

            throw new CityRepositoryException($exception->getMessage(), 0, $exception);
        }

        return null;
    }

    /**
     * find and delete a entry from records
     *
     * @param bool $onlyTrashed
     * @return bool|null
     *
     * @throws CityRepositoryException
     */
    public function read(int|string $id, $onlyTrashed = false)
    {
        try {

            $this->model = $this->model->findOrFail($id);

        } catch (Throwable $exception) {

            throw new ModelNotFoundException($exception->getMessage(), 0, $exception);
        }

        try {

            return $this->model->deleteOrFail();

        } catch (Throwable $exception) {

            throw new CityRepositoryException($exception->getMessage(), 0, $exception);
        }

        return null;
    }

    /**
     * find and delete a entry from records
     *
     * @return bool|null
     *
     * @throws CityRepositoryException
     */
    public function delete(int|string $id)
    {
        try {

            $this->model = $this->model->findOrFail($id);

        } catch (Throwable $exception) {

            throw new ModelNotFoundException($exception->getMessage(), 0, $exception);
        }

        try {

            return $this->model->deleteOrFail();

        } catch (Throwable $exception) {

            throw new CityRepositoryException($exception->getMessage(), 0, $exception);
        }

        return null;
    }

    /**
     * find and restore a entry from records
     *
     * @return bool|null
     *
     * @throws CityRepositoryException
     */
    public function restore(int|string $id)
    {
        if (!method_exists($this->model, 'restore')) {
            throw new InvalidArgumentException('This model does not have `Illuminate\Database\Eloquent\SoftDeletes` trait to perform restoration.');
        }

        try {

            $this->model = $this->model->onlyTrashed()->findOrFail($id);

        } catch (Throwable $exception) {

            throw new ModelNotFoundException($exception->getMessage(), 0, $exception);
        }

        try {

            return $this->model->deleteOrFail();

        } catch (Throwable $exception) {

            throw new CityRepositoryException($exception->getMessage(), 0, $exception);
        }

        return null;
    }
}
