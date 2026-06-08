<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class AddOriginsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("AddOrigins", "POST");
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setOrigins($value)
    {
        return $this->withBody("origins", $value);
    }
}
