<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class ListBriefDomainsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("ListBriefDomains", "POST");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }
}
