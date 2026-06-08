<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedCreateCacheRuleRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedCreateCacheRule", "POST");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setBusinessType($value)
    {
        return $this->withBody("business_type", $value);
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }

    public function setExpr($value)
    {
        return $this->withBody("expr", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }

    public function setConf($value)
    {
        return $this->withBody("conf", $value);
    }
}
