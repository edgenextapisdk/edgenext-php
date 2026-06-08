<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class SwitchDomainAccessModeRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("SwitchDomainAccessMode", "POST");
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setAccessMode($value)
    {
        return $this->withBody("access_mode", $value);
    }
}
