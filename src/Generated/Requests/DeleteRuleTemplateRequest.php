<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DeleteRuleTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DeleteRuleTemplate", "DELETE");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
    }
}
