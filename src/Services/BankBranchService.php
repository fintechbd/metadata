<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\BankBranchRepository;

/**
 * Class BankBranchService
 *
 * @property-read BankBranchRepository $bankBranchRepository
 */
class BankBranchService
{
    /**
     * BankBranchService constructor.
     */
    public function __construct(private BankBranchRepository $bankBranchRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->bankBranchRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->bankBranchRepository->create($inputs);
    }

    public function find($id)
    {
        return $this->bankBranchRepository->find($id);
    }

    public function update($id, array $inputs = [])
    {
        return $this->bankBranchRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->bankBranchRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->bankBranchRepository->restore($id);
    }
}
