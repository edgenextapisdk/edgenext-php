<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UnbindRuleTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UnbindRuleTemplate", "PUT");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }
}
