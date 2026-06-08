<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class WebCdnCleanCacheSaveCacheRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("WebCdnCleanCache_saveCache", "PUT");
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

    public function setWholesite($value)
    {
        return $this->withBody("wholesite", $value);
    }

    public function setSpecialurl($value)
    {
        return $this->withBody("specialurl", $value);
    }

    public function setSpecialdir($value)
    {
        return $this->withBody("specialdir", $value);
    }
}
