<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainRecordsDeleteRecordRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomainRecords_deleteRecord", "DELETE");
    }

    public function setRecordId($value)
    {
        return $this->withBody("record_id", $value);
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }
}
