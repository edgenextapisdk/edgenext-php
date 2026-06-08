<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class FirewallSortGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("Firewall_sortGroup", "POST");
    }

    public function setNewSorts($value)
    {
        return $this->withBody("new_sorts", $value);
    }
}
