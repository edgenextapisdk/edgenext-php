<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTaskBatchCancelTaskRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTask_batchCancelTask", "DELETE");
    }

    public function setTaskIds($value)
    {
        return $this->withBody("task_ids", $value);
    }
}
