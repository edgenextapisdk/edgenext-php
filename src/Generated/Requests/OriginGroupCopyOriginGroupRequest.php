<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class OriginGroupCopyOriginGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("OriginGroup_copyOriginGroup", "POST");
    }

    public function setOriginGroupId($value)
    {
        return $this->withBody("origin_group_id", $value);
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }
}
