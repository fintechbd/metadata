<?php

namespace Fintech\MetaData\Services;


use Fintech\MetaData\Interfaces\RelationRepository;

/**
 * Class RelationService
 * @package Fintech\MetaData\Services
 *
 * @property-read RelationRepository $relationRepository
 */
class RelationService
{
    /**
     * RelationService constructor.
     * @param RelationRepository $relationRepository
     */
    public function __construct(private RelationRepository $relationRepository) { }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->relationRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->relationRepository->create($inputs);
    }

    public function read($id)
    {
        return $this->relationRepository->read($id);
    }

    public function update($id, array $inputs = [])
    {
        return $this->relationRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->relationRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->relationRepository->restore($id);
    }
}
