<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CdnDomainNodeFlowBandwidthRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("cdn_domain_node_flow_bandwidth", "POST");
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

    public function setInterval($value)
    {
        return $this->withBody("interval", $value);
    }
}
