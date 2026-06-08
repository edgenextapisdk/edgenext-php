<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainBatchDeleteDomainsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomain_batchDeleteDomains", "DELETE");
    }

    public function setDomainIds($value)
    {
        return $this->withBody("domain_ids", $value);
    }
}
