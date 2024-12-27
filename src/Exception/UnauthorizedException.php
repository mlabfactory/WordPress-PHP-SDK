<?php

namespace Mlabfactory\WordPress\Exception;

use Exception;

class UnauthorizedException extends Exception
{
    private $responseObject;

    public function __construct($response = null, Exception $previous = null)
    {
        parent::__construct('Unauthorized', 1, $previous);
        $this->responseObject = $response;
    }

    public function getResponseObject()
    {
        return $this->responseObject;
    }

    public function getResponseString()
    {
        return (string) $this->responseObject->getBody();
    }
}
