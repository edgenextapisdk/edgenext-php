<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DeleteTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DeleteTemplate", "DELETE");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }
}
