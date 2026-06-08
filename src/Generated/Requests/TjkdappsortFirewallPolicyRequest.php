<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdappsortFirewallPolicyRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdappsortFirewallPolicy", "POST");
    }

    public function setNewSorts($value)
    {
        return $this->withBody("new_sorts", $value);
    }
}
