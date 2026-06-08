<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TijkdappSavePackageRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TIJKDAPP_SavePackage", "PUT");
    }

    public function setPackageId($value)
    {
        return $this->withBody("package_id", $value);
    }

    public function setPackageName($value)
    {
        return $this->withBody("package_name", $value);
    }
}
