<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CreateTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CreateTemplate", "POST");
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }

    public function setTemplateSourceId($value)
    {
        return $this->withBody("template_source_id", $value);
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setGroupIds($value)
    {
        return $this->withBody("group_ids", $value);
    }

    public function setDomains($value)
    {
        return $this->withBody("domains", $value);
    }

    public function setBindAll($value)
    {
        return $this->withBody("bind_all", $value);
    }
}
