<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TcpCcFlawRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("tcp_cc_flaw", "POST");
    }

    public function setPackageId($value)
    {
        return $this->withBody("package_id", $value);
    }

    public function setIp($value)
    {
        return $this->withBody("ip", $value);
    }

    public function setPort($value)
    {
        return $this->withBody("port", $value);
    }

    public function setStartTime($value)
    {
        return $this->withBody("start_time", $value);
    }

    public function setEndTime($value)
    {
        return $this->withBody("end_time", $value);
    }

    public function setInterval($value)
    {
        return $this->withBody("interval", $value);
    }
}
