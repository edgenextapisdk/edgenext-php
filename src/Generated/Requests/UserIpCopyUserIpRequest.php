<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UserIpCopyUserIpRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UserIp_CopyUserIp", "POST");
    }

    public function setUserIpId($value)
    {
        return $this->withBody("user_ip_id", $value);
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
