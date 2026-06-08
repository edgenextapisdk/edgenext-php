<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class FirewallSavePolicyRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("Firewall_savePolicy", "POST");
        $this->withBody("product_flag", "plus");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setPackageId($value)
    {
        return $this->withBody("package_id", $value);
    }

    public function setProductFlag($value)
    {
        return $this->withBody("product_flag", $value);
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setTjkdAppId($value)
    {
        return $this->withBody("tjkd_app_id", $value);
    }

    public function setFrom($value)
    {
        return $this->withBody("from", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }

    public function setType($value)
    {
        return $this->withBody("type", $value);
    }

    public function setUseType($value)
    {
        return $this->withBody("use_type", $value);
    }

    public function setAction($value)
    {
        return $this->withBody("action", $value);
    }

    public function setActionData($value)
    {
        return $this->withBody("action_data", $value);
    }

    public function setRules($value)
    {
        return $this->withBody("rules", $value);
    }
}
