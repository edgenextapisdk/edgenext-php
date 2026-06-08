<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainRecordsAddRecordGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomainRecords_addRecordGroup", "POST");
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setGroupName($value)
    {
        return $this->withBody("group_name", $value);
    }
}
