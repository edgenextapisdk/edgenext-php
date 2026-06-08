<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class ListDomainsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("ListDomains", "GET");
    }

    public function setPage($value)
    {
        return $this->withQuery("page", $value);
    }

    public function setPageSize($value)
    {
        return $this->withQuery("page_size", $value);
    }

    public function setAccessProgress($value)
    {
        return $this->withQuery("access_progress", $value);
    }

    public function setGroupId($value)
    {
        return $this->withQuery("group_id", $value);
    }

    public function setDomain($value)
    {
        return $this->withQuery("domain", $value);
    }

    public function setRemark($value)
    {
        return $this->withQuery("remark", $value);
    }

    public function setOriginIp($value)
    {
        return $this->withQuery("origin_ip", $value);
    }

    public function setCaStatus($value)
    {
        return $this->withQuery("ca_status", $value);
    }

    public function setAccessMode($value)
    {
        return $this->withQuery("access_mode", $value);
    }

    public function setProtectStatus($value)
    {
        return $this->withQuery("protect_status", $value);
    }

    public function setExclusiveResourceId($value)
    {
        return $this->withQuery("exclusive_resource_id", $value);
    }
}
