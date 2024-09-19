<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\SubregionRepository;

/**
 * Class SubRegionService
 *
 */
class SubregionService
{
    use \Fintech\Core\Traits\HasFindWhereSearch;

    /**
     * SubRegionService constructor.
     */
    public function __construct(private readonly SubregionRepository $subRegionRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        //Do Business Stuff

        return $this->subRegionRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->subRegionRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->subRegionRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->subRegionRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->subRegionRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->subRegionRepository->restore($id);
    }
}
