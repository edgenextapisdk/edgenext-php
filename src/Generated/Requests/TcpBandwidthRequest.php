<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TcpBandwidthRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("tcp_bandwidth", "POST");
    }

    public function setPackageIds($value)
    {
        return $this->withBody("package_ids", $value);
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
