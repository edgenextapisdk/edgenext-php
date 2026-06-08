<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class DnsDomainRecordsImportRecordsRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("DnsDomainRecords_importRecords", "POST");
    }

    public function setXlsFile($value)
    {
        return $this->withBody("xls_file", $value);
    }
}
