<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class ApiNameV5Request extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("api_name_v5", "POST");
        $this->withHeader("x-lang", "zh");
    }

    public function setXLang($value)
    {
        return $this->withHeader("x-lang", $value);
    }
}
