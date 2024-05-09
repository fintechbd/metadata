<?php

namespace Fintech\MetaData\Services;

use Fintech\Core\Enums\MetaData\CatalogType;
use Fintech\MetaData\Interfaces\CatalogRepository;

/**
 * Class RemittancePurposeService
 *
 */
class RemittancePurposeService
{
    /**
     * RemittancePurposeService constructor.
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
        $inputs['type'] = CatalogType::RemittancePurpose->value;

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
        $filters['type'] = CatalogType::RemittancePurpose->value;

        return $this->catalogRepository->list($filters);
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $filters['type'] = CatalogType::RemittancePurpose->value;

        return $this->catalogRepository->list($filters);

    }

    public function import(array $filters)
    {
        $filters['type'] = CatalogType::RemittancePurpose->value;

        return $this->catalogRepository->create($filters);
    }

    public function create(array $inputs = [])
    {
        $inputs['type'] = CatalogType::RemittancePurpose->value;

        return $this->catalogRepository->create($inputs);
    }
}
