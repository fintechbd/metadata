<?php

namespace Fintech\MetaData\Services;


use Fintech\MetaData\Interfaces\StateRepository;

/**
 * Class StateService
 * @package Fintech\MetaData\Services
 *
 * @property-read StateRepository $stateRepository
 */
class StateService
{
    /**
     * StateService constructor.
     * @param StateRepository $stateRepository
     */
    public function __construct(private StateRepository $stateRepository) { }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->stateRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->stateRepository->create($inputs);
    }

    public function read($id)
    {
        return $this->stateRepository->read($id);
    }

    public function update($id, array $inputs = [])
    {
        return $this->stateRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->stateRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->stateRepository->restore($id);
    }
}
