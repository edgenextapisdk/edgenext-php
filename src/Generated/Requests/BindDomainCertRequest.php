<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class BindDomainCertRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("BindDomainCert", "POST");
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setCaId($value)
    {
        return $this->withBody("ca_id", $value);
    }
}
