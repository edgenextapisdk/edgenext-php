<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdPlusDomainAddTjkdPlusDomainRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdPlusDomain_addTjkdPlusDomain", "POST");
    }

    public function setPackageId($value)
    {
        return $this->withBody("package_id", $value);
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }
}
