<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedSortCacheRulesRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedSortCacheRules", "PUT");
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
}
