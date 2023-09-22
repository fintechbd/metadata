<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class FundSourceRepositoryException
 * @package Fintech\MetaData\Exceptions
 */
class FundSourceRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
