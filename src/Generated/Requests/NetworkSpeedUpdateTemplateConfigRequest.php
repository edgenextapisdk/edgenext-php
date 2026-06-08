<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class NetworkSpeedUpdateTemplateConfigRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("NetworkSpeedUpdateTemplateConfig", "PUT");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setBusinessType($value)
    {
        return $this->withBody("business_type", $value);
    }

    public function setDomainProxyConf($value)
    {
        return $this->withBody("domain_proxy_conf", $value);
    }

    public function setUpstreamRedirect($value)
    {
        return $this->withBody("upstream_redirect", $value);
    }

    public function setCustomizedReqHeaders($value)
    {
        return $this->withBody("customized_req_headers", $value);
    }

    public function setSourceSiteProtect($value)
    {
        return $this->withBody("source_site_protect", $value);
    }

    public function setSlice($value)
    {
        return $this->withBody("slice", $value);
    }

    public function setHttps($value)
    {
        return $this->withBody("https", $value);
    }

    public function setPageGzip($value)
    {
        return $this->withBody("page_gzip", $value);
    }

    public function setWebp($value)
    {
        return $this->withBody("webp", $value);
    }

    public function setUploadFile($value)
    {
        return $this->withBody("upload_file", $value);
    }

    public function setWebsocket($value)
    {
        return $this->withBody("websocket", $value);
    }

    public function setMobileJump($value)
    {
        return $this->withBody("mobile_jump", $value);
    }

    public function setCustomPage($value)
    {
        return $this->withBody("custom_page", $value);
    }

    public function setUpstreamUriChange($value)
    {
        return $this->withBody("upstream_uri_change", $value);
    }

    public function setRespHeaders($value)
    {
        return $this->withBody("resp_headers", $value);
    }

    public function setUpstreamCheck($value)
    {
        return $this->withBody("upstream_check", $value);
    }
}
