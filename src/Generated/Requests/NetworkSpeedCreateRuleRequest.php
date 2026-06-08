<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedCreateRuleRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedCreateRule", "POST");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setBusinessType($value)
    {
        return $this->withBody("business_type", $value);
    }

    public function setConfigGroup($value)
    {
        return $this->withBody("config_group", $value);
    }

    public function setCustomPage($value)
    {
        return $this->withBody("custom_page", $value);
    }

    public function setUpstreamUriChangeRule($value)
    {
        return $this->withBody("upstream_uri_change_rule", $value);
    }

    public function setRespHeadersRule($value)
    {
        return $this->withBody("resp_headers_rule", $value);
    }

    public function setCustomizedReqHeadersRule($value)
    {
        return $this->withBody("customized_req_headers_rule", $value);
    }
}
