<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTaskBatchDeleteTaskRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTask_batchDeleteTask", "DELETE");
    }

    public function setTaskIds($value)
    {
        return $this->withBody("task_ids", $value);
    }
}
