<?php

namespace edgenextapisdk\Generated;

// Code generated from apidoc metadata. DO NOT EDIT.
class ApiException extends \RuntimeException
{
    private $response;

    public function __construct($code = 0, $message = 'api error', $response = null)
    {
        $this->response = $response;
        parent::__construct($message ?: 'api error', (int)$code);
    }

    public function getResponse()
    {
        return $this->response;
    }
}
