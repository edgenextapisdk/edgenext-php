<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTemplateBatchChangeStatusRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTemplate_batchChangeStatus", "POST");
    }

    public function setTemplateIds($value)
    {
        return $this->withBody("template_ids", $value);
    }

    public function setStatus($value)
    {
        return $this->withBody("status", $value);
    }
}
