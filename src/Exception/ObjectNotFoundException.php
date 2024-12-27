<?php

namespace Mlabfactory\WordPress\Exception;

use Exception;

class ObjectNotFoundException extends Exception
{
    public function __construct($code = 0, Exception $previous = null)
    {
        parent::__construct('Object not found.', $code, $previous);
    }
}
