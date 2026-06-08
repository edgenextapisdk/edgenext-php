<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class OriginGroupDelOriginGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("OriginGroup_delOriginGroup", "DELETE");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }
}
