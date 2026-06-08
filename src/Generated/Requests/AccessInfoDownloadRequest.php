<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class AccessInfoDownloadRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("AccessInfoDownload", "POST");
    }

    public function setDomainInfos($value)
    {
        return $this->withBody("domain_infos", $value);
    }
}
