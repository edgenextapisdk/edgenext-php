<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class FirewallSavePolicyGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("Firewall_savePolicyGroup", "POST");
        $this->withBody("from", "diy");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setFrom($value)
    {
        return $this->withBody("from", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }
}
