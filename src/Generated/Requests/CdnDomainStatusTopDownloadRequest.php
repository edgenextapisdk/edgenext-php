<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CdnDomainStatusTopDownloadRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("cdn_domain_status_top_download", "POST");
    }

    public function setSubDomains($value)
    {
        return $this->withBody("sub_domains", $value);
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setResourceIds($value)
    {
        return $this->withBody("resource_ids", $value);
    }

    public function setStartTime($value)
    {
        return $this->withBody("start_time", $value);
    }

    public function setEndTime($value)
    {
        return $this->withBody("end_time", $value);
    }

    public function setTimeZone($value)
    {
        return $this->withBody("time_zone", $value);
    }
}
