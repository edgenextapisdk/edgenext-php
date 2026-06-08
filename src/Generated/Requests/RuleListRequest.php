<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class RuleListRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("ruleList", "GET");
    }

    public function setPage($value)
    {
        return $this->withQuery("page", $value);
    }

    public function setPrePage($value)
    {
        return $this->withQuery("pre_page", $value);
    }

    public function setOrder($value)
    {
        return $this->withQuery("order", $value);
    }

    public function setPackageId($value)
    {
        return $this->withQuery("package_id", $value);
    }
}
