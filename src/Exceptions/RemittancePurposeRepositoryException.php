<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class RemittancePurposeRepositoryException
 */
class RemittancePurposeRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
