<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\BankRepository;

/**
 * Class BankService
 *
 */
class BankService
{
    /**
     * @var BankRepository
     */
    private BankRepository $bankRepository;

    /**
     * BankService constructor.
     * @param BankRepository $bankRepository
     */
    public function __construct(BankRepository $bankRepository)
    {
        $this->bankRepository = $bankRepository;
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->bankRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->bankRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->bankRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->bankRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->bankRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->bankRepository->restore($id);
    }
}
