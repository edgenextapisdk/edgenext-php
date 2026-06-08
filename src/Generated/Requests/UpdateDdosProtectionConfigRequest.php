<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UpdateDdosProtectionConfigRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UpdateDdosProtectionConfig", "PUT");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setApplicationDdosProtection($value)
    {
        return $this->withBody("application_ddos_protection", $value);
    }

    public function setVisitorAuthentication($value)
    {
        return $this->withBody("visitor_authentication", $value);
    }
}
