<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainBatchAddDomainsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomain_batchAddDomains", "POST");
        $this->withBody("add_record", "0");
    }

    public function setDomains($value)
    {
        return $this->withBody("domains", $value);
    }

    public function setAddRecord($value)
    {
        return $this->withBody("add_record", $value);
    }

    public function setRecordValue($value)
    {
        return $this->withBody("record_value", $value);
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }
}
