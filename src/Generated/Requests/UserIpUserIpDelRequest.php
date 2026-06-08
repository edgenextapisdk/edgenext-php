<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UserIpUserIpDelRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UserIp_userIpDel", "DELETE");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }
}
