<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CcReportStatsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("cc_report_stats", "POST");
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
}
