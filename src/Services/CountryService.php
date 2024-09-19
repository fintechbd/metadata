<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\CountryRepository;

/**
 * Class CountryService
 *
 */
class CountryService extends \Fintech\Core\Abstracts\Service
{
    /**
     * CountryService constructor.
     * @param CountryRepository $countryRepository
     */
    public function __construct(private readonly CountryRepository $countryRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->countryRepository->list($filters);

    }

    public function servingIds(array $filters = []): array
    {
        $filters['enabled'] = true;
        $filters['paginate'] = false;
        $filters['is_serving'] = true;

        return $this->list($filters)?->pluck('id')?->toArray() ?? [];

    }

    public function create(array $inputs = [])
    {
        return $this->countryRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->countryRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->countryRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->countryRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->countryRepository->restore($id);
    }
}
