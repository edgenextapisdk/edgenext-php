<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainRecordsAddRecordGroupRelationsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomainRecords_addRecordGroupRelations", "POST");
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setRecordIds($value)
    {
        return $this->withBody("record_ids", $value);
    }
}
