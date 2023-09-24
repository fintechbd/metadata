<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\SubRegionRepository;

/**
 * Class SubRegionService
 *
 * @property-read SubRegionRepository $subRegionRepository
 */
class SubRegionService
{
    private $subRegionRepository;
    /**
     * SubRegionService constructor.
     * @param SubRegionRepository $subRegionRepository
     */
    public function __construct(SubRegionRepository $subRegionRepository)
    {
        $this->subRegionRepository = $subRegionRepository;
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

    public function read($id)
    {
        return $this->subRegionRepository->read($id);
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
