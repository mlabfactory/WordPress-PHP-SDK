<?php

namespace Mlabfactory\WordPress\Exception;

use Exception;

class ServerErrorException extends Exception
{
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
