<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class BindTemplateDomainRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("BindTemplateDomain", "POST");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setBindBusinessIds($value)
    {
        return $this->withBody("bind_business_ids", $value);
    }
}
