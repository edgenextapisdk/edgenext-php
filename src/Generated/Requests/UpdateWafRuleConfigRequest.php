<?php

namespace edgenextapisdk\Generated\Requests;

use edgenextapisdk\Generated\BaseRequest;

// Code generated from apidoc metadata. DO NOT EDIT.
class UpdateWafRuleConfigRequest extends BaseRequest
{
    public function __construct()
    {
        parent::__construct("UpdateWafRuleConfig", "PUT");
    }

    public function setBusinessId($value)
    {
        return $this->withBody("business_id", $value);
    }

    public function setWafRuleConfig($value)
    {
        return $this->withBody("waf_rule_config", $value);
    }

    public function setWafInterceptPage($value)
    {
        return $this->withBody("waf_intercept_page", $value);
    }

    public function setReplayAttackProtection($value)
    {
        return $this->withBody("replay_attack_protection", $value);
    }

    public function setCsrfProtection($value)
    {
        return $this->withBody("csrf_protection", $value);
    }

    public function setWebShellProtection($value)
    {
        return $this->withBody("web_shell_protection", $value);
    }
}
