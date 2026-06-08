<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class CaCertificateSelfBatchOperatSslRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("CaCertificateSelf_batchOperatSsl", "GET");
        $this->withQuery("is_confirm", "1");
    }

    public function setId($value)
    {
        return $this->withQuery("id", $value);
    }

    public function setType($value)
    {
        return $this->withQuery("type", $value);
    }

    public function setProductFlag($value)
    {
        return $this->withQuery("product_flag", $value);
    }

    public function setIsConfirm($value)
    {
        return $this->withQuery("is_confirm", $value);
    }

    public function setDelId($value)
    {
        return $this->withQuery("del_id", $value);
    }
}
