<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UpdateRuleTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UpdateRuleTemplate", "PUT");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
    }

    public function setName($value)
    {
        return $this->withBody("name", $value);
    }

    public function setDescription($value)
    {
        return $this->withBody("description", $value);
    }
}
