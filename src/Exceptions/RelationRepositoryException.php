<?php

namespace Fintech\MetaData\Exceptions;

/**
 * Class RelationRepositoryException
 */
class RelationRepositoryException extends \Exception
{
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
