<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\FundSourceRepository;

/**
 * Class FundSourceService
 *
 * @property-read FundSourceRepository $fundSourceRepository
 */
class FundSourceService
{
    /**
     * FundSourceService constructor.
     */
    public function __construct(private FundSourceRepository $fundSourceRepository)
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

    public function find($id)
    {
        return $this->fundSourceRepository->find($id);
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
