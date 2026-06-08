<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class AddForwardRuleRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("addForwardRule", "POST");
    }

    public function setPackageId($value)
    {
        return $this->withBody("package_id", $value);
    }

    public function setDomain($value)
    {
        return $this->withBody("domain", $value);
    }

    public function setProtocol($value)
    {
        return $this->withBody("protocol", $value);
    }

    public function setPort($value)
    {
        return $this->withBody("port", $value);
    }

    public function setLoading($value)
    {
        return $this->withBody("loading", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
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
