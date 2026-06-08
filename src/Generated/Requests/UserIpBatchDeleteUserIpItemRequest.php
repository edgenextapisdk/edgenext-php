<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UserIpBatchDeleteUserIpItemRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UserIp_BatchDeleteUserIpItem", "DELETE");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }

    public function setUserIpId($value)
    {
        return $this->withBody("user_ip_id", $value);
    }
}
