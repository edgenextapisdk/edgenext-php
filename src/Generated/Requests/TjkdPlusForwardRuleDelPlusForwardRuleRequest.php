<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class TjkdPlusForwardRuleDelPlusForwardRuleRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("TjkdPlusForwardRule_delPlusForwardRule", "DELETE");
    }

    public function setIds($value)
    {
        return $this->withBody("ids", $value);
    }
}
