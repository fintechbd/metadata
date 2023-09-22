<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class BankRepositoryException
 * @package Fintech\MetaData\Exceptions
 */
class BankRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
