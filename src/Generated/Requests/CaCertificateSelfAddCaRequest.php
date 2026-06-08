<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CaCertificateSelfAddCaRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CaCertificateSelf_addCa", "POST");
    }

    public function setCaName($value)
    {
        return $this->withBody("ca_name", $value);
    }

    public function setProductFlag($value)
    {
        return $this->withBody("product_flag", $value);
    }

    public function setCaCrt($value)
    {
        return $this->withBody("ca_crt", $value);
    }

    public function setCaKey($value)
    {
        return $this->withBody("ca_key", $value);
    }
}
