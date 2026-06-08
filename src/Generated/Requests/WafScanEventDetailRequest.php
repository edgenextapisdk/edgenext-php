<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class WafScanEventDetailRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("waf_scan_event_detail", "POST");
    }

    public function setRemoteAddr($value)
    {
        return $this->withBody("remote_addr", $value);
    }

    public function setHttpHost($value)
    {
        return $this->withBody("http_host", $value);
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
