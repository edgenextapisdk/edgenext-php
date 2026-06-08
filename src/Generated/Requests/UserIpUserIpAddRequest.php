<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UserIpUserIpAddRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UserIp_userIpAdd", "POST");
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }
}
