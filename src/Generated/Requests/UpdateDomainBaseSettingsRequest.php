<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UpdateDomainBaseSettingsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UpdateDomainBaseSettings", "PUT");
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setValue($value)
    {
        return $this->withBody("value", $value);
    }
}
