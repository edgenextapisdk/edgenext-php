<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CaCertificateSelfDelCaRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CaCertificateSelf_delCa", "DELETE");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }

    public function setProductFlag($value)
    {
        return $this->withBody("product_flag", $value);
    }
}
