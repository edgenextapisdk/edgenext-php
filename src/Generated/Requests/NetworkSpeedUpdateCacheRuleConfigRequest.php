<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedUpdateCacheRuleConfigRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedUpdateCacheRuleConfig", "PUT");
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

    public function setExpr($value)
    {
        return $this->withBody("expr", $value);
    }

    public function setConf($value)
    {
        return $this->withBody("conf", $value);
    }
}
