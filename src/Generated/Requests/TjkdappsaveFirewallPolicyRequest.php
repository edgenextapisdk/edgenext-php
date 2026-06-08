<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdappsaveFirewallPolicyRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdappsaveFirewallPolicy", "POST");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
    }

    public function setTjkdAppId($value)
    {
        return $this->withBody("tjkd_app_id", $value);
    }

    public function setType($value)
    {
        return $this->withBody("type", $value);
    }

    public function setRules($value)
    {
        return $this->withBody("rules", $value);
    }

    public function setAction($value)
    {
        return $this->withBody("action", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }

    public function setStatus($value)
    {
        return $this->withBody("status", $value);
    }
}
