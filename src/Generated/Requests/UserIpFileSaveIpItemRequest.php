<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UserIpFileSaveIpItemRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UserIp_FileSaveIpItem", "POST");
    }

    public function setContentType($value)
    {
        return $this->withHeader("Content-Type", $value);
    }

    public function setXToken($value)
    {
        return $this->withHeader("x-token", $value);
    }

    public function setAcceptLanguage($value)
    {
        return $this->withHeader("Accept-Language", $value);
    }

    public function setFile($value)
    {
        return $this->withBody("file", $value);
    }

    public function setUserIpId($value)
    {
        return $this->withBody("user_ip_id", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }
}
