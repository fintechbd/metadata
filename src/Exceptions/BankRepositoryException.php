<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class BankRepositoryException
 */
class BankRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
