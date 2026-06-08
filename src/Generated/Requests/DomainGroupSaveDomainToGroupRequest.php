<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DomainGroupSaveDomainToGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DomainGroup_saveDomainToGroup", "POST");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setDomains($value)
    {
        return $this->withBody("domains", $value);
    }

    public function setOnlyUnbindTplDomainGroup($value)
    {
        return $this->withBody("only_unbind_tpl_domain_group", $value);
    }

    public function setAction($value)
    {
        return $this->withBody("action", $value);
    }
}
