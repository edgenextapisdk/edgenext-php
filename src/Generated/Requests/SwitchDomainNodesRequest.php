<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class SwitchDomainNodesRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("SwitchDomainNodes", "POST");
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setProtectStatus($value)
    {
        return $this->withBody("protect_status", $value);
    }

    public function setExclusiveResourceId($value)
    {
        return $this->withBody("exclusive_resource_id", $value);
    }
}
