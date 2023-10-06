<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\BankBranchRepository;

/**
 * Class BankBranchService
 *
 */
class BankBranchService
{
    /**
     * @var BankBranchRepository
     */
    private BankBranchRepository $bankBranchRepository;

    /**
     * BankBranchService constructor.
     * @param BankBranchRepository $bankBranchRepository
     */
    public function __construct(BankBranchRepository $bankBranchRepository)
    {
        $this->bankBranchRepository = $bankBranchRepository;
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

    public function find($id, $onlyTrashed = false)
    {
        return $this->bankBranchRepository->find($id, $onlyTrashed);
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
