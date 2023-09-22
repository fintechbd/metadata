<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class OccupationRepositoryException
 * @package Fintech\MetaData\Exceptions
 */
class OccupationRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
