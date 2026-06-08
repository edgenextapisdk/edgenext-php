<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class OriginGroupBindOriginGroupToDomainsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("OriginGroup_bindOriginGroupToDomains", "POST");
    }

    public function setOriginGroupId($value)
    {
        return $this->withBody("origin_group_id", $value);
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setDomainGroupIds($value)
    {
        return $this->withBody("domain_group_ids", $value);
    }

    public function setDomains($value)
    {
        return $this->withBody("domains", $value);
    }
}
