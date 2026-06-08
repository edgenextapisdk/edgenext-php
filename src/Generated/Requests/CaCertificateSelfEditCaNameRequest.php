<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CaCertificateSelfEditCaNameRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CaCertificateSelf_editCaName", "POST");
    }

    public function setId($value)
    {
        return $this->withBody("id", $value);
    }

    public function setCaName($value)
    {
        return $this->withBody("ca_name", $value);
    }

    public function setProductFlag($value)
    {
        return $this->withBody("product_flag", $value);
    }
}
