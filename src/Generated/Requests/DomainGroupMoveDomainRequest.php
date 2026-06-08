<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DomainGroupMoveDomainRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DomainGroup_moveDomain", "POST");
    }

    public function setFromGroupId($value)
    {
        return $this->withBody("from_group_id", $value);
    }

    public function setToGroupId($value)
    {
        return $this->withBody("to_group_id", $value);
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }
}
