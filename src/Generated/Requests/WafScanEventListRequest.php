<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class WafScanEventListRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("waf_scan_event_list", "POST");
    }

    public function setAcctId($value)
    {
        return $this->withBody("acct_id", $value);
    }

    public function setSubDomains($value)
    {
        return $this->withBody("sub_domains", $value);
    }

    public function setStartTime($value)
    {
        return $this->withBody("start_time", $value);
    }

    public function setEndTime($value)
    {
        return $this->withBody("end_time", $value);
    }

    public function setPage($value)
    {
        return $this->withBody("page", $value);
    }

    public function setPerPage($value)
    {
        return $this->withBody("per_page", $value);
    }
}
