<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdPlusPackageSavePackageHealthyConfRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdPlusPackage_savePackageHealthyConf", "POST");
    }

    public function setPackageId($value)
    {
        return $this->withBody("package_id", $value);
    }

    public function setFailsTimeout($value)
    {
        return $this->withBody("fails_timeout", $value);
    }

    public function setMaxFails($value)
    {
        return $this->withBody("max_fails", $value);
    }

    public function setKeepNewSrcTime($value)
    {
        return $this->withBody("keep_new_src_time", $value);
    }
}
