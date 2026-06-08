<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainRecordsDeleteRecordGroupRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomainRecords_deleteRecordGroup", "DELETE");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }
}
