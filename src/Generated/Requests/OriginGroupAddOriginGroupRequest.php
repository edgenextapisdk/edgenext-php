<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class OriginGroupAddOriginGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("OriginGroup_addOriginGroup", "POST");
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }

    public function setOrigins($value)
    {
        return $this->withBody("origins", $value);
    }
}
