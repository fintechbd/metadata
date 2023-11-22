<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\RelationRepository;

/**
 * Class RelationService
 *
 */
class RelationService
{
    /**
     * RelationService constructor.
     * @param RelationRepository $relationRepository
     */
    public function __construct(private readonly RelationRepository $relationRepository)
    {
    }

    /**
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

    public function find($id, $onlyTrashed = false)
    {
        return $this->relationRepository->find($id, $onlyTrashed);
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
