<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\RegionRepository;

/**
 * Class RegionService
 *
 */
class RegionService extends \Fintech\Core\Abstracts\Service
{
    /**
     * RegionService constructor.
     * @param RegionRepository $regionRepository
     */
    public function __construct(private readonly RegionRepository $regionRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        //Do Business Stuff

        return $this->regionRepository->list($filters);

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
