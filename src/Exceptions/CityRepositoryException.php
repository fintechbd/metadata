<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class CityRepositoryException
 * @package Fintech\MetaData\Exceptions
 */
class CityRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
