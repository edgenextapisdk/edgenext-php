<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CloudDnsDomainGroupSaveDomainToGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CloudDns_DomainGroup_saveDomainToGroup", "POST");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setAction($value)
    {
        return $this->withBody("action", $value);
    }
}
