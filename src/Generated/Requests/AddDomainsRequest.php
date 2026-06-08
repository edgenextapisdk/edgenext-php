<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class AddDomainsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("AddDomains", "POST");
    }

    public function setDomain($value)
    {
        return $this->withBody("domain", $value);
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setExclusiveResourceId($value)
    {
        return $this->withBody("exclusive_resource_id", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }

    public function setTplId($value)
    {
        return $this->withBody("tpl_id", $value);
    }

    public function setOrigins($value)
    {
        return $this->withBody("origins", $value);
    }

    public function setProtectStatus($value)
    {
        return $this->withBody("protect_status", $value);
    }

    public function setTplRecommend($value)
    {
        return $this->withBody("tpl_recommend", $value);
    }
}
