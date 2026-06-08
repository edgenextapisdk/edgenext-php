<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainAddDomainRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomain_addDomain", "POST");
    }

    public function setDomain($value)
    {
        return $this->withBody("domain", $value);
    }
}
