<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class LogDownloadTaskAddTaskRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("LogDownloadTask_addTask", "POST");
        $this->withBody("lang", "zh_CN");
    }

    public function setTaskName($value)
    {
        return $this->withBody("task_name", $value);
    }

    public function setIsUseTemplate($value)
    {
        return $this->withBody("is_use_template", $value);
    }

    public function setTemplateId($value)
    {
        return $this->withBody("template_id", $value);
    }

    public function setDataSource($value)
    {
        return $this->withBody("data_source", $value);
    }

    public function setDownloadFields($value)
    {
        return $this->withBody("download_fields", $value);
    }

    public function setSearchTerms($value)
    {
        return $this->withBody("search_terms", $value);
    }

    public function setFileType($value)
    {
        return $this->withBody("file_type", $value);
    }

    public function setStartTime($value)
    {
        return $this->withBody("start_time", $value);
    }

    public function setEndTime($value)
    {
        return $this->withBody("end_time", $value);
    }

    public function setLang($value)
    {
        return $this->withBody("lang", $value);
    }
}
