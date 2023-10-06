<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\OccupationRepository;

/**
 * Class OccupationService
 *
 * @property-read OccupationRepository $occupationRepository
 */
class OccupationService
{
    /**
     * OccupationService constructor.
     */
    public function __construct(private OccupationRepository $occupationRepository)
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

    public function find($id)
    {
        return $this->occupationRepository->find($id);
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
