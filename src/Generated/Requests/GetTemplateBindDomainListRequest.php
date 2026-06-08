<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class GetTemplateBindDomainListRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("GetTemplateBindDomainList", "POST");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setPage($value)
    {
        return $this->withBody("page", $value);
    }

    public function setPageSize($value)
    {
        return $this->withBody("page_size", $value);
    }

    public function setDomain($value)
    {
        return $this->withBody("domain", $value);
    }

    public function setTplType($value)
    {
        return $this->withBody("tpl_type", $value);
    }
}
