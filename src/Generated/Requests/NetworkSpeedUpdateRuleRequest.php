<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedUpdateRuleRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedUpdateRule", "PUT");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
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
