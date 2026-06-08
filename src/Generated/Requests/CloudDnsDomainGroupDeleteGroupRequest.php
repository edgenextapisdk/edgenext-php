<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CloudDnsDomainGroupDeleteGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CloudDns_DomainGroup_deleteGroup", "DELETE");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }
}
