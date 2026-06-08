<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class EditTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("EditTemplate", "PUT");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }
}
