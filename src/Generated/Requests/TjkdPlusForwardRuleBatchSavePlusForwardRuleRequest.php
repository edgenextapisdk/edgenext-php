<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdPlusForwardRuleBatchSavePlusForwardRuleRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdPlusForwardRule_batchSavePlusForwardRule", "POST");
    }

    public function setPackageId($value)
    {
        return $this->withBody("package_id", $value);
    }

    public function setProtocol($value)
    {
        return $this->withBody("protocol", $value);
    }

    public function setSourceType($value)
    {
        return $this->withBody("source_type", $value);
    }

    public function setProtocolPort($value)
    {
        return $this->withBody("protocol_port", $value);
    }

    public function setLoading($value)
    {
        return $this->withBody("loading", $value);
    }

    public function setSourceIp($value)
    {
        return $this->withBody("source_ip", $value);
    }

    public function setBackup($value)
    {
        return $this->withBody("backup", $value);
    }

    public function setProtocolPortOld($value)
    {
        return $this->withBody("protocol_port_old", $value);
    }

    public function setRemark($value)
    {
        return $this->withBody("remark", $value);
    }
}
