<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class WebCdnPreheatCacheSavePreheatCacheRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("WebCdnPreheatCache_savePreheatCache", "POST");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setProtocol($value)
    {
        return $this->withBody("protocol", $value);
    }

    public function setPort($value)
    {
        return $this->withBody("port", $value);
    }

    public function setPreheatUrl($value)
    {
        return $this->withBody("preheat_url", $value);
    }
}
