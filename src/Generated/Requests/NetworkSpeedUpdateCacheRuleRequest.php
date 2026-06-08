<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedUpdateCacheRuleRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedUpdateCacheRule", "PUT");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
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
