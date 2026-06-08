<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainRecordsEditRecordRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomainRecords_editRecord", "PUT");
        $this->withBody("record_mx", "0");
        $this->withBody("record_ttl", "600");
    }

    public function setRecordId($value)
    {
        return $this->withBody("record_id", $value);
    }

    public function setDomainId($value)
    {
        return $this->withBody("domain_id", $value);
    }

    public function setRecordName($value)
    {
        return $this->withBody("record_name", $value);
    }

    public function setRecordType($value)
    {
        return $this->withBody("record_type", $value);
    }

    public function setRecordView($value)
    {
        return $this->withBody("record_view", $value);
    }

    public function setRecordValue($value)
    {
        return $this->withBody("record_value", $value);
    }

    public function setRecordMx($value)
    {
        return $this->withBody("record_mx", $value);
    }

    public function setRecordTtl($value)
    {
        return $this->withBody("record_ttl", $value);
    }

    public function setRecordRemark($value)
    {
        return $this->withBody("record_remark", $value);
    }
}
