<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DomainGroupDelGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DomainGroup_delGroup", "POST");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }
}
