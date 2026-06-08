<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class BatchCaListRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("Batch_caList", "POST");
    }

    public function setDomains($value)
    {
        return $this->withBody("domains", $value);
    }
}
