<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class ListOriginsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("ListOrigins", "GET");
    }

    public function setDomainId($value)
    {
        return $this->withQuery("domain_id", $value);
    }
}
