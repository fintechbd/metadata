<?php

namespace Fintech\MetaData\Services;


use Fintech\MetaData\Interfaces\LanguageRepository;

/**
 * Class LanguageService
 * @package Fintech\MetaData\Services
 *
 */
class LanguageService
{
    /**
     * LanguageService constructor.
     * @param LanguageRepository $languageRepository
     */
    public function __construct(LanguageRepository $languageRepository) {
        $this->languageRepository = $languageRepository;
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->languageRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->languageRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->languageRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->languageRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->languageRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->languageRepository->restore($id);
    }

    public function export(array $filters)
    {
        return $this->languageRepository->list($filters);
    }

    public function import(array $filters)
    {
        return $this->languageRepository->create($filters);
    }
}
