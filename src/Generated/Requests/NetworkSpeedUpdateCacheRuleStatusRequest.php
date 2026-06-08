<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedUpdateCacheRuleStatusRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedUpdateCacheRuleStatus", "PUT");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setBusinessType($value)
    {
        return $this->withBody("business_type", $value);
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }

    public function setStatus($value)
    {
        return $this->withBody("status", $value);
    }
}
