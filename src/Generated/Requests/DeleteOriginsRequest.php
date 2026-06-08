<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DeleteOriginsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DeleteOrigins", "DELETE");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }
}
