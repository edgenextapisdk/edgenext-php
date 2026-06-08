<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class SwitchDomainTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("SwitchDomainTemplate", "PUT");
        $this->withBody("app_type", "network_speed");
    }

    public function setAppType($value)
    {
        return $this->withBody("app_type", $value);
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setNewTplId($value)
    {
        return $this->withBody("new_tpl_id", $value);
    }

    public function setNewTplType($value)
    {
        return $this->withBody("new_tpl_type", $value);
    }
}
