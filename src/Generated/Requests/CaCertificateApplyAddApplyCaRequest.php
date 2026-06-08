<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CaCertificateApplyAddApplyCaRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CaCertificateApply_addApplyCa", "POST");
        $this->withBody("type", "1");
        $this->withBody("ca_type", "2");
    }

    public function setDomain($value)
    {
        return $this->withBody("domain", $value);
    }

    public function setType($value)
    {
        return $this->withBody("type", $value);
    }

    public function setCaType($value)
    {
        return $this->withBody("ca_type", $value);
    }
}
