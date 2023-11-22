<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\FundSourceRepository;

/**
 * Class FundSourceService
 *
 */
class FundSourceService
{
    /**
     * FundSourceService constructor.
     * @param FundSourceRepository $fundSourceRepository
     */
    public function __construct(private readonly FundSourceRepository $fundSourceRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->fundSourceRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->fundSourceRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->fundSourceRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->fundSourceRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->fundSourceRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->fundSourceRepository->restore($id);
    }
}
