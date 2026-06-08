<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdappopenFirewallPolicyRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdappopenFirewallPolicy", "POST");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }
}
