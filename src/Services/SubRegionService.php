<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\SubRegionRepository;

/**
 * Class SubRegionService
 *
 */
class SubRegionService
{
    /**
     * SubRegionService constructor.
     */
    public function __construct(private readonly SubRegionRepository $subRegionRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $subRegionList = $this->subRegionRepository->list($filters);

        //Do Business Stuff

        return $subRegionList;

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
