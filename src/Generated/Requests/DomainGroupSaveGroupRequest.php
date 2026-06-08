<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DomainGroupSaveGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DomainGroup_saveGroup", "POST");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setGroupName($value)
    {
        return $this->withBody("group_name", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }
}
