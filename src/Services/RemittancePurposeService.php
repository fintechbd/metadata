<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\RemittancePurposeRepository;

/**
 * Class RemittancePurposeService
 *
 * @property-read RemittancePurposeRepository $remittancePurposeRepository
 */
class RemittancePurposeService
{
    /**
     * RemittancePurposeService constructor.
     */
    public function __construct(private RemittancePurposeRepository $remittancePurposeRepository)
    {
    }

    /**
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

    public function find($id)
    {
        return $this->remittancePurposeRepository->find($id);
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
