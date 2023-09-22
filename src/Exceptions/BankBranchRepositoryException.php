<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class BankBranchRepositoryException
 * @package Fintech\MetaData\Exceptions
 */
class BankBranchRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
