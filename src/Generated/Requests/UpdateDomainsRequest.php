<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UpdateDomainsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UpdateDomains", "PUT");
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }
}
