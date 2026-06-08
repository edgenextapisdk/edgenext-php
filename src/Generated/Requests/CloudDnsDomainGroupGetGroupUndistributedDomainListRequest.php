<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CloudDnsDomainGroupGetGroupUndistributedDomainListRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CloudDns_DomainGroup_getGroupUndistributedDomainList", "POST");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setDomain($value)
    {
        return $this->withBody("domain", $value);
    }
}
