<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\OccupationRepository;

/**
 * Class OccupationService
 *
 */
class OccupationService
{
    /**
     * OccupationService constructor.
     * @param OccupationRepository $occupationRepository
     */
    public function __construct(private readonly OccupationRepository $occupationRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->occupationRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->occupationRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->occupationRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->occupationRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->occupationRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->occupationRepository->restore($id);
    }
}
