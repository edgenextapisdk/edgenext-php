<?php
namespace edgenextapisdk\Tests;

use edgenextapisdk\Sdk;
use PHPUnit\Framework\TestCase;

class SdkTest extends TestCase {
    private $domainID;
    public function getSdk() {
        $config = [
            'app_id'       => getenv('SDK_APP_ID'),
            'app_secret'   => getenv('SDK_APP_SECERT'),
            'base_api_url' => getenv('SDK_API_PRE'),
            //'log'          => true,           //是否记录sdk相关日志
            //'logfileLinux' => '/tmp/sdk.log', //linux日志路径
        ];
        $this->domainID = getenv('SDK_DOMAIN_ID');
        return new Sdk($config);
    }
    // 增加精准访问控制规则集 example
    public function testCreatePolicyGroup() {
        try {
            $api = 'firewall.policyGroup.save';
            $request = [
                'url' => $api,
                'body' => [
                    "name" => "example",          // 规则集名称
                    "remark" => "example",        // 备注
                    "from" => "diy",              // 规则集来源，支持diy(用户自定义规则集)/system(系统内置规则集)/quote(引用规则集)
                    "domain_id" => $this->domainID,     // 用户名ID
                ],
            ];
            $sdk = $this->getSdk();
            $result = $sdk->post($request);
            //var_dump($result);
            $result = json_decode($result, 1);
            $this->assertNotNull($result);
            $this->assertEquals($result['status']['code'], 1);
            $fwPolicyGroupId = $result['data']['id'];
            var_dump("添加精准访问控制规则集成功: ".$fwPolicyGroupId);
        } catch(\Exception $e) {
            var_dump("添加精准访问控制规则集失败: " + $e->getMessage());
        }
    }

    // 为规则集 example, 增加 请求类型 和 单IP单URL请求频率 规则
    public function testCreatePolicy1() {
        $fwPolicyGroupId = 0; // 由testCreatePolicyGroup创建获取
        try {
            $api = 'firewall.policy.save';
            $request = [
                'url' => $api,
                'body' => array(
                    // "id" => 0, // 如果指定ID，则是编辑已有的规则
                    "group_id" => $fwPolicyGroupId, // 规则集ID
                    "domain_id" => $this->domainID, // 域名ID
                    "remark" => "", // 备注
                    "type" => "plus", // scdn域名专属的类型plus
                    "action" => "block", // 封禁
                    "action_data" => array( // 封禁10分钟
                        "time_unit" => "minute", // 支持: second, minute, hour, day(最大7天)
                        "interval" => 10
                    ),
                    "rules" => array(
                        array(
                            "rule_type" => "url_type", // 请求类型
                            "logic" => "belongs", // 属于
                            "data" => array("dynamic") // 动态
                        ),
                        array(
                            "rule_type" => "ip_url_rate_limit", // 单IP单URL请求频率
                            "logic" => "greater_than", // 大于
                            "data" => array( // 10 秒内频率大于 100 次
                                "interval" => 10, // 计数时间间隔，单位秒
                                "reqs" => 100 // 时间间隔内，请求次数
                            )
                        )
                    ),
                ),
            ];
            $sdk = $this->getSdk();
            $result = $sdk->post($request);
            //var_dump($result);
            $result = json_decode($result, 1);
            $this->assertNotNull($result);
            $this->assertEquals($result['status']['code'], 1);
            $fwPolicyId = $result['data']['id'];
            var_dump("为规则集".$fwPolicyGroupId."添加 请求类型 和 单IP单URL请求频率 规则成功: ".$fwPolicyId);
        } catch(\Exception $e) {
            var_dump("为规则集".$fwPolicyGroupId."添加 请求类型 和 单IP单URL请求频率 规则失败: " + $e->getMessage());
        }
    }
    
    //为规则集 example, 增加 IP类型 和 IP请求频率 规则
    public function testCreatePolicy2() {
        $fwPolicyGroupId = 0; // 由testCreatePolicyGroup创建获取
        try {
            $api = 'firewall.policy.save';
            $request = [
                'url' => $api,
                'body' => array(
                    // "id" => 0, // 如果指定ID，则是编辑已有的规则
                    "group_id" => $fwPolicyGroupId, // 规则集ID
                    "domain_id" => $this->domainID, // 域名ID
                    "remark" => "", // 备注
                    "type" => "plus", // scdn域名专属的类型plus
                    "action" => "verification", // 人机验证
                    "action_data" => array(
                        "next_rules" => 1, // 继续执行下一规则集 0/1
                        "cc" => 1, // 继续执行CC防护 0/1
                        "waf" => 0, // 继续执行漏洞攻击防护 0/1
                        "type" => "cookie" // 人机验证方式：cookie(Cookie验证), js(JS验证), captcha(智能验证码)
                    ),
                    "rules" => array(
                        array(
                            "rule_type" => "ip_type", // IP类型
                            "logic" => "equals", // 等于
                            "data" => array( // 支持的IP类型
                                "botnet", // 僵尸网络
                                "Tor", // 洋葱路由
                                "Proxy", // 代理池IP
                                "IpBlackList", // IP信誉库黑名单
                                "FakeUA", // 伪造搜索引擎
                                // "spider", // 搜索引擎
                                // "partner", // 合作伙伴
                                // "monitor", // 监控
                                // "aggregator", // 聚合器
                                // "Social", // 社交网络
                                // "ad", // 广告网络
                                // "BackLinkWatch", // 反向链接检测
                                // "IDC", // IDC数据
                                // "MaliciousUA", // 恶意UA
                                // "Export", // 公共出口
                            )
                        ),
                        array(
                            "rule_type" => "ip_rate_limit", // IP请求频率
                            "logic" => "greater_than", // 大于
                            "data" => array(
                                "interval" => 20, // 20秒，单位：秒
                                "reqs" => 3 // 请求3次
                            )
                        )
                    ),
                ),
            ];
            $sdk = $this->getSdk();
            $result = $sdk->post($request);
            //var_dump($result);
            $result = json_decode($result, 1);
            $this->assertNotNull($result);
            $this->assertEquals($result['status']['code'], 1);
            $fwPolicyId = $result['data']['id'];
            var_dump("为规则集".$fwPolicyGroupId."添加 IP类型 和 IP请求频率 规则成功: ".$fwPolicyId);
        } catch(\Exception $e) {
            var_dump("为规则集".$fwPolicyGroupId."添加 IP类型 和 IP请求频率 规则失败: " + $e->getMessage());
        }
    }

    // 为规则集 example, 增加 URL 和 单IP单URL请求频率 规则
    public function testCreatePolicy3() {
        $fwPolicyGroupId = 0; // 由testCreatePolicyGroup创建获取
        try {
            $api = 'firewall.policy.save';
            $request = [
                'url' => $api,
                'body' => array(
                    // "id" => 0, // 如果指定ID，则是编辑已有的规则
                    "group_id" => $fwPolicyGroupId, // 规则集ID
                    "domain_id" => $this->domainID, // 域名ID
                    "remark" => "", // 备注
                    "type" => "plus", // scdn域名专属的类型plus
                    "action" => "block", // 封禁
                    "action_data" => array( // 封禁10分钟
                        "time_unit" => "minute", // 支持: second, minute, hour, day(最大7天)
                        "interval" => 10
                    ),
                    "rules" => array(
                        array(
                            "rule_type" => "url", // URL规则
                            "logic" => "contains", // 包含
                            "data" => array("/login", "/register") // 规则值，必须以/开头
                        ),
                        array(
                            "rule_type" => "ip_url_rate_limit", // 单IP单URL请求频率
                            "logic" => "greater_than", // 大于
                            "data" => array( // 10秒25次请求
                                "interval" => 10, // 计数时间间隔，单位秒
                                "reqs" => 25 // 时间间隔内，请求次数
                            )
                        )
                    ),
                ),
            ];
            $sdk = $this->getSdk();
            $result = $sdk->post($request);
            //var_dump($result);
            $result = json_decode($result, 1);
            $this->assertNotNull($result);
            $this->assertEquals($result['status']['code'], 1);
            $fwPolicyId = $result['data']['id'];
            var_dump("为规则集".$fwPolicyGroupId."添加 URL 和 单IP单URL请求频率 规则成功: ".$fwPolicyId);
        } catch(\Exception $e) {
            var_dump("为规则集".$fwPolicyGroupId."添加 URL 和 单IP单URL请求频率 规则失败: " + $e->getMessage());
        }
    }
}
