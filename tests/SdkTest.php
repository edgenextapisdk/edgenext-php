<?php

namespace edgenextapisdk\Tests;

use edgenextapisdk\Sdk;
use PHPUnit\Framework\TestCase;

class SdkTest extends TestCase
{

    public function testGet()
    {
        try {
            $api = 'Web.Domain.Info';
            $request = [
                'url' => $api,
                'query' => [
                    "page" => 1,
                    "pagesize" => 10,
                    "domain" => "101153",
                ],
                'body' => [],
            ];
            $sdk = $this->getSdk();
            $result = $sdk->get($request);
            //var_dump($result);
            $result = json_decode($result, 1);
            var_dump($result);
            $this->assertNotNull($result);
            $this->assertEquals($result['status']['code'], 1);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function getSdk()
    {
        $config = [
            'app_id' => "ENAK195892d9c30371985983",
            'app_secret' => "57dbcb07eb4e1d5aa531afee2c4d8f26",
            'base_api_url' => "http://172.20.114.102:60041/api/V4/",
            //'log'          => true,           //是否记录sdk相关日志
            //'logfileLinux' => '/tmp/sdk.log', //linux日志路径
        ];
        return new Sdk($config);
    }

    public function testGet2()
    {
        try {
            $api = 'test.sdk.get';
            $request = [
                'url' => $api,
                'query' => [
                    "page" => 1,
                    "pagesize" => 10,
                    "data" => [
                        "name" => "name名称",
                        "domain" => "baidu.com",
                    ],
                ],
                'body' => [],
            ];
            $sdk = $this->getSdk();
            $result = $sdk->get($request);
            //var_dump($result);
            $result = json_decode($result, 1);
            $this->assertNotNull($result);
            $this->assertEquals($result['status']['code'], 1);
        } catch (\Exception $e) {
            var_dump("code: " + $e->getCode() + " message: " + $e->getMessage());
        }
    }

    public function testPost()
    {
        try {
            $api = 'Web.Domain.batch.domain.add';
            $request = [
                'url' => $api,
                'body' => [
                    "domains" => ["www.example22.com", "example234.com", "example123.com", "example2323.com"],
                    "group_id" => 0,
                    "biz_type" => 1,
                    "sets" => [
                        ["protocol" => 0,
                            "listen_port" => 80,
                            "get_source_protocol" => 0,
                            "load_balance" => 1,
                            "back_source_type" => 1,
                            "source_ips" => [
                                [
                                    "value" => "www.google.com",
                                    "port" => 80,
                                    "view" => "primary",
                                    "priority" => 1,
                                    "type" =>"CNAME"
                                ]
                            ]
                        ],
                    ]
                ],
            ];
            $sdk = $this->getSdk();
            $result = $sdk->post($request);
            //var_dump($result);
            $result = json_decode($result, 1);
            var_dump($result);
            $this->assertNotNull($result);
            $this->assertEquals($result['status']['code'], 1);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
