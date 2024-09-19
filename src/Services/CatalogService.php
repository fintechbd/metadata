<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\CatalogRepository;

/**
 * Class CatalogService
 * @package Fintech\MetaData\Services
 *
 */
class CatalogService
{
    use \Fintech\Core\Traits\HasFindWhereSearch;

    /**
     * CatalogService constructor.
     * @param CatalogRepository $catalogRepository
     */
    public function __construct(private readonly CatalogRepository $catalogRepository)
    {
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->catalogRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->catalogRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->catalogRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->catalogRepository->restore($id);
    }

    public function export(array $filters)
    {
        return $this->catalogRepository->list($filters);
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->catalogRepository->list($filters);

    }

    public function import(array $filters)
    {
        return $this->catalogRepository->create($filters);
    }

    public function create(array $inputs = [])
    {
        return $this->catalogRepository->create($inputs);
    }
}
