<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\RegionRepository;

/**
 * Class RegionService
 *
 * @property-read RegionRepository $regionRepository
 */
class RegionService
{
    /**
     * RegionService constructor.
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

    public function read($id)
    {
        return $this->regionRepository->read($id);
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
