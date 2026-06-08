<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTaskRegenerateTaskRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTask_regenerateTask", "POST");
    }

    public function setTaskId($value)
    {
        return $this->withBody("task_id", $value);
    }
}
