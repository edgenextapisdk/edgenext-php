<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CaCertificateSelfEditCaInfoRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CaCertificateSelf_editCaInfo", "POST");
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

    public function setCaCert($value)
    {
        return $this->withBody("ca_cert", $value);
    }

    public function setCaKey($value)
    {
        return $this->withBody("ca_key", $value);
    }
}
