<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class FirewallStopRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("Firewall_stop", "POST");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }
}
