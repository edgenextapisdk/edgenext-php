<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class FirewallSavePolicyGroupRegionalShieldingRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("Firewall_savePolicyGroupRegionalShielding", "POST");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setFrom($value)
    {
        return $this->withBody("from", $value);
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }
}
