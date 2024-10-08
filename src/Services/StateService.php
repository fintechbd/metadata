<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\StateRepository;

/**
 * Class StateService
 *
 */
class StateService
{
    use \Fintech\Core\Traits\HasFindWhereSearch;

    /**
     * StateService constructor.
     */
    public function __construct(private readonly StateRepository $stateRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->stateRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->stateRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->stateRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->stateRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->stateRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->stateRepository->restore($id);
    }
}
