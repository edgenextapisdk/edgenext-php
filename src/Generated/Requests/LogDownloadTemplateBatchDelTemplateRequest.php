<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTemplateBatchDelTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTemplate_batchDelTemplate", "DELETE");
    }

    public function setTemplateIds($value)
    {
        return $this->withBody("template_ids", $value);
    }
}
