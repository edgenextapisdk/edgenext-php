<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UserIpUpdateUserIpItemRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UserIp_UpdateUserIpItem", "PUT");
    }

    public function setId($value)
    {
        return $this->withBody("_id", $value);
    }

    public function setUserIpId($value)
    {
        return $this->withBody("user_ip_id", $value);
    }

    public function setIp($value)
    {
        return $this->withBody("ip", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }
}
