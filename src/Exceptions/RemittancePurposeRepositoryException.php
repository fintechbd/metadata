<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class RemittancePurposeRepositoryException
 * @package Fintech\MetaData\Exceptions
 */
class RemittancePurposeRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
