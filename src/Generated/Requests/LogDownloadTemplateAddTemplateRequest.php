<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTemplateAddTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTemplate_addTemplate", "POST");
    }

    public function setTemplateName($value)
    {
        return $this->withBody("template_name", $value);
    }

    public function setGroupName($value)
    {
        return $this->withBody("group_name", $value);
    }

    public function setGroupId($value)
    {
        return $this->withBody("group_id", $value);
    }

    public function setDataSource($value)
    {
        return $this->withBody("data_source", $value);
    }

    public function setStatus($value)
    {
        return $this->withBody("status", $value);
    }

    public function setDownloadFields($value)
    {
        return $this->withBody("download_fields", $value);
    }

    public function setSearchTerms($value)
    {
        return $this->withBody("search_terms", $value);
    }

    public function setDomainSelectType($value)
    {
        return $this->withBody("domain_select_type", $value);
    }
}
