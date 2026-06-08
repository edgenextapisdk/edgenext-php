<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class RefreshDomainsAccessRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("RefreshDomainsAccess", "POST");
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }
}
