<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTaskDeleteTaskRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTask_deleteTask", "DELETE");
    }

    public function setTaskId($value)
    {
        return $this->withBody("task_id", $value);
    }
}
