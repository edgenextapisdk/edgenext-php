<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UserIpDeleteAllUserIpItemRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UserIp_DeleteAllUserIpItem", "POST");
    }

    public function setUserIpId($value)
    {
        return $this->withBody("user_ip_id", $value);
    }
}
