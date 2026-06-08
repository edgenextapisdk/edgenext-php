<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CreateRuleTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CreateRuleTemplate", "POST");
        $this->withBody("app_type", "network_speed");
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }

    public function setDescription($value)
    {
        return $this->withBody("description", $value);
    }

    public function setAppType($value)
    {
        return $this->withBody("app_type", $value);
    }

    public function setTplType($value)
    {
        return $this->withBody("tpl_type", $value);
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setFromTplId($value)
    {
        return $this->withBody("from_tpl_id", $value);
    }

    public function setFromTplType($value)
    {
        return $this->withBody("from_tpl_type", $value);
    }

    public function setBindDomain($value)
    {
        return $this->withBody("bind_domain", $value);
    }
}
