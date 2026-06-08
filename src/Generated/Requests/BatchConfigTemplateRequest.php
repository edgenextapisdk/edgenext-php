<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class BatchConfigTemplateRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("BatchConfigTemplate", "POST");
    }

    public function setTemplateIds($value)
    {
        return $this->withBody("template_ids", $value);
    }

    public function setDdosConfig($value)
    {
        return $this->withBody("ddos_config", $value);
    }

    public function setPreciseAccessControlConfig($value)
    {
        return $this->withBody("precise_access_control_config", $value);
    }

    public function setWafRuleConfig($value)
    {
        return $this->withBody("waf_rule_config", $value);
    }

    public function setBotManagementConfig($value)
    {
        return $this->withBody("bot_management_config", $value);
    }
}
