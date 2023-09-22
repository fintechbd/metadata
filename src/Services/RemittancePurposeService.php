<?php

namespace Fintech\MetaData\Services;


use Fintech\MetaData\Interfaces\RemittancePurposeRepository;

/**
 * Class RemittancePurposeService
 * @package Fintech\MetaData\Services
 *
 * @property-read RemittancePurposeRepository $remittancePurposeRepository
 */
class RemittancePurposeService
{
    /**
     * RemittancePurposeService constructor.
     * @param RemittancePurposeRepository $remittancePurposeRepository
     */
    public function __construct(private RemittancePurposeRepository $remittancePurposeRepository) { }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->remittancePurposeRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->remittancePurposeRepository->create($inputs);
    }

    public function read($id)
    {
        return $this->remittancePurposeRepository->read($id);
    }

    public function update($id, array $inputs = [])
    {
        return $this->remittancePurposeRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->remittancePurposeRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->remittancePurposeRepository->restore($id);
    }
}
