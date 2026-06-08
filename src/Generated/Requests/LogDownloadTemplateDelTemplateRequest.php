<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTemplateDelTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTemplate_delTemplate", "DELETE");
    }

    public function setTemplateId($value)
    {
        return $this->withBody("template_id", $value);
    }
}
