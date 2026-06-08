<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CreateDomainTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CreateDomainTemplate", "POST");
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setTemplateSourceId($value)
    {
        return $this->withBody("template_source_id", $value);
    }
}
