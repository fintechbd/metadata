<?php

namespace Fintech\MetaData\Services;


use Fintech\MetaData\Interfaces\FundSourceRepository;

/**
 * Class FundSourceService
 * @package Fintech\MetaData\Services
 *
 * @property-read FundSourceRepository $fundSourceRepository
 */
class FundSourceService
{
    /**
     * FundSourceService constructor.
     * @param FundSourceRepository $fundSourceRepository
     */
    public function __construct(private FundSourceRepository $fundSourceRepository) { }

    /**
     * @param array $filters
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

    public function read($id)
    {
        return $this->fundSourceRepository->read($id);
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
