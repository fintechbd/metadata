<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\RegionRepository;

/**
 * Class RegionService
 *
 */
class RegionService
{
    /**
     * RegionService constructor.
     * @param RegionRepository $regionRepository
     */
    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $regionList = $this->regionRepository->list($filters);

        //Do Business Stuff

        return $regionList;

    }

    public function create(array $inputs = [])
    {
        return $this->regionRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->regionRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->regionRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->regionRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->regionRepository->restore($id);
    }
}
