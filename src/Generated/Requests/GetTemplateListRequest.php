<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class GetTemplateListRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("GetTemplateList", "POST");
    }

    public function setTplType($value)
    {
        return $this->withBody("tpl_type", $value);
    }

    public function setSearchType($value)
    {
        return $this->withBody("search_type", $value);
    }

    public function setSearchKey($value)
    {
        return $this->withBody("search_key", $value);
    }

    public function setPage($value)
    {
        return $this->withBody("page", $value);
    }

    public function setPageSize($value)
    {
        return $this->withBody("page_size", $value);
    }
}
