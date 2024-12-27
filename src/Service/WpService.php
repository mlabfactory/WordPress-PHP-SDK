<?php

namespace Mlabfactory\WordPress\Service;

class WpService
{
    protected \Mlabfactory\WordPress\WordPress $wordpress;

    /**
     * Construct WordPress.
     *
     * @param $wordpressSdk
     */
    public function __construct($wordPressSdk)
    {
        $this->wordpress = $wordPressSdk;
    }

    public function setWordPressInstance($wordPressSdk)
    {
        $this->wordpress = $wordPressSdk;
    }

    public function getWordPressInstance()
    {
        return $this->wordpress;
    }

    /**
     * Makes a POST request to the specified WordPress API endpoint with the given data.
     *
     * @param string $endPoint The API endpoint to which the POST request will be made.
     * @param array $data The data to be sent in the POST request.
     * @return mixed The response from the API call.
     */
    public function getCall($endPoint)
    {
        return $this->wordpress->getCall($endPoint);
    }
}
