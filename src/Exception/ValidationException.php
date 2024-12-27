<?php

namespace Mlabfactory\WordPress\Exception;

use Exception;

class ValidationException extends Exception
{
    private $responseObject;

    public function __construct($response, $code = 1, Exception $previous = null)
    {
        parent::__construct(null, $code, $previous);
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
