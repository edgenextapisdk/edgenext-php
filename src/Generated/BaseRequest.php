<?php

namespace edgenextapisdk\Generated;

// Code generated from apidoc metadata. DO NOT EDIT.
class BaseRequest
{
    private $apiName;
    private $method;
    private $query = [];
    private $body = [];
    private $headers = [];

    public function __construct($apiName, $method = '')
    {
        $this->apiName = $apiName;
        $this->method = strtoupper($method);
    }

    public static function forApi($apiName)
    {
        $definition = ApiDefinitions::get($apiName);
        if (!$definition) {
            throw new \InvalidArgumentException('unknown EdgeNext API: ' . $apiName);
        }
        return new self($definition['api_name'], $definition['methods'][0]);
    }

    public function getApiName() { return $this->apiName; }
    public function getMethod() { return $this->method; }
    public function getQuery() { return $this->query; }
    public function getBody() { return $this->body; }
    public function getHeaders() { return $this->headers; }

    public function withQuery($key, $value)
    {
        $this->query[$key] = $value;
        return $this;
    }

    public function withBody($key, $value)
    {
        $this->body[$key] = $value;
        return $this;
    }

    public function withHeader($key, $value)
    {
        $this->headers[$key] = $value;
        return $this;
    }
}
