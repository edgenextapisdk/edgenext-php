<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTemplateChangeStatusRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTemplate_changeStatus", "POST");
    }

    public function setTemplateId($value)
    {
        return $this->withBody("template_id", $value);
    }

    public function setStatus($value)
    {
        return $this->withBody("status", $value);
    }
}
