<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainRecordsBatchAddRecordsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomainRecords_batchAddRecords", "POST");
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }

    public function setRecords($value)
    {
        return $this->withBody("records", $value);
    }
}
