<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DomainGroupAddGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DomainGroup_addGroup", "POST");
    }

    public function setGroupName($value)
    {
        return $this->withBody("group_name", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }
}
