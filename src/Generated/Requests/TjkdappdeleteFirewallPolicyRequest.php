<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdappdeleteFirewallPolicyRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdappdeleteFirewallPolicy", "POST");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }
}
