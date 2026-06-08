<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class FirewallSortRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("Firewall_sort", "POST");
    }

    public function setNewSorts($value)
    {
        return $this->withBody("new_sorts", $value);
    }
}
