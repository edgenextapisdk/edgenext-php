<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class EditRuleRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("editRule", "POST");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
    }

    public function setPackageId($value)
    {
        return $this->withBody("package_id", $value);
    }

    public function setProtocol($value)
    {
        return $this->withBody("protocol", $value);
    }

    public function setDomain($value)
    {
        return $this->withBody("domain", $value);
    }

    public function setPort($value)
    {
        return $this->withBody("port", $value);
    }

    public function setLoading($value)
    {
        return $this->withBody("loading", $value);
    }

    public function setSourceType($value)
    {
        return $this->withBody("source_type", $value);
    }

    public function setSourceList($value)
    {
        return $this->withBody("source_list", $value);
    }

    public function setChannelStatus($value)
    {
        return $this->withBody("channel_status", $value);
    }

    public function setChannelLoading($value)
    {
        return $this->withBody("channel_loading", $value);
    }

    public function setChannelSourceList($value)
    {
        return $this->withBody("channel_source_list", $value);
    }
}
