<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedGetTemplateConfigRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedGetTemplateConfig", "POST");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setBusinessType($value)
    {
        return $this->withBody("business_type", $value);
    }

    public function setConfigGroups($value)
    {
        return $this->withBody("config_groups", $value);
    }

    public function setUpstreamCheck($value)
    {
        return $this->withBody("upstream_check", $value);
    }
}
