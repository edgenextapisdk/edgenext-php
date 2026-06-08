<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainRecordsBatchEnableRecordsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomainRecords_batchEnableRecords", "POST");
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setRecordIds($value)
    {
        return $this->withBody("record_ids", $value);
    }
}
