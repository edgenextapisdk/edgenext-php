<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdPlusDomainDelTjkdPlusDomainRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdPlusDomain_delTjkdPlusDomain", "DELETE");
    }

    public function setPackageDomainIds($value)
    {
        return $this->withBody("package_domain_ids", $value);
    }

    public function setPackageDomains($value)
    {
        return $this->withBody("package_domains", $value);
    }

    public function setIgnoreNotExistsDomain($value)
    {
        return $this->withBody("ignore_not_exists_domain", $value);
    }
}
