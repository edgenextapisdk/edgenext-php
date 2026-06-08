<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class ExportDomainsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("ExportDomains", "POST");
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setAccessProgress($value)
    {
        return $this->withBody("access_progress", $value);
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setDomain($value)
    {
        return $this->withBody("domain", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }

    public function setOriginIp($value)
    {
        return $this->withBody("origin_ip", $value);
    }

    public function setCaStatus($value)
    {
        return $this->withBody("ca_status", $value);
    }

    public function setAccessMode($value)
    {
        return $this->withBody("access_mode", $value);
    }

    public function setProtectStatus($value)
    {
        return $this->withBody("protect_status", $value);
    }

    public function setExclusiveResourceId($value)
    {
        return $this->withBody("exclusive_resource_id", $value);
    }
}
