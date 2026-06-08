<?php

spl_autoload_register(function ($class) {
    $prefix = 'edgenextapisdk\\Generated\\';
    if (strpos($class, $prefix) !== 0) {
        return;
    }
    $relative = substr($class, strlen($prefix));
    $path = __DIR__ . '/../src/Generated/' . str_replace('\\', '/', $relative) . '.php';
    if (is_file($path)) {
        require_once $path;
    }
});

use edgenextapisdk\Generated\ApiException;
use edgenextapisdk\Generated\EdgeNextClient;
use edgenextapisdk\Generated\Requests\AddDomainsRequest;
use edgenextapisdk\Generated\Requests\ListDomainsRequest;
use edgenextapisdk\Generated\Requests\UpdateDomainsRequest;

class CapturingSdk
{
    public $method;
    public $payload;
    public $response;

    public function __construct()
    {
        $this->response = ['status' => ['code' => 1, 'message' => 'ok'], 'data' => ['ok' => true]];
    }

    public function getBaseApiUrl()
    {
        return 'https://api.edgenextscdn.com/api/v5';
    }

    public function get($payload)
    {
        return $this->capture('GET', $payload);
    }

    public function post($payload)
    {
        return $this->capture('POST', $payload);
    }

    public function put($payload)
    {
        return $this->capture('PUT', $payload);
    }

    public function patch($payload)
    {
        return $this->capture('PATCH', $payload);
    }

    public function delete($payload)
    {
        return $this->capture('DELETE', $payload);
    }

    private function capture($method, $payload)
    {
        $this->method = $method;
        $this->payload = $payload;
        return $this->response;
    }
}

function assertSameValue($expected, $actual, $message)
{
    if ($expected !== $actual) {
        throw new RuntimeException($message . ': expected ' . var_export($expected, true) . ', got ' . var_export($actual, true));
    }
}

function assertThrows($class, $fn, $message)
{
    try {
        $fn();
    } catch (Exception $e) {
        if ($e instanceof $class) {
            return $e;
        }
        throw new RuntimeException($message . ': expected ' . $class . ', got ' . get_class($e));
    }
    throw new RuntimeException($message . ': no exception thrown');
}

assertSameValue('domains', EdgeNextClient::apiPathToSdkApi('/api/v5/domains', 'https://api.edgenextscdn.com/api/v5'), 'versioned API prefix is stripped');
assertSameValue('api/v5/domains', EdgeNextClient::apiPathToSdkApi('/api/v5/domains', 'https://api.edgenextscdn.com'), 'host-only API prefix is preserved');
assertSameValue('v5/Web.ca.self.list', EdgeNextClient::apiPathToSdkApi('api/v5/Web.ca.self.list', 'https://api.edgenextscdn.com/api'), 'plain API prefix is stripped');

$sdk = new CapturingSdk();
$client = (new EdgeNextClient($sdk))->withLanguage('zh');
$client->listDomains((new ListDomainsRequest())->setPage(1)->withHeader('X-Lang', 'en'));
assertSameValue('GET', $sdk->method, 'GET request method');
assertSameValue('domains', $sdk->payload['url'], 'GET request path');
assertSameValue(1, $sdk->payload['query']['page'], 'GET request query');
assertSameValue('en', $sdk->payload['headers']['X-Lang'], 'request header overrides default header');

$sdk = new CapturingSdk();
$client = new EdgeNextClient($sdk);
$client->addDomains((new AddDomainsRequest())->setDomain('example.com')->setGroupId(1));
assertSameValue('POST', $sdk->method, 'POST request method');
assertSameValue('domains', $sdk->payload['url'], 'POST request path');
assertSameValue('example.com', $sdk->payload['body']['domain'], 'POST request body');
assertSameValue(1, $sdk->payload['body']['group_id'], 'POST request body group');

$sdk = new CapturingSdk();
(new EdgeNextClient($sdk))->callApi('LogDownloadTask_taskList', null, ['page' => 1], [], [], 'GET');
assertSameValue('GET', $sdk->method, 'method override');
assertSameValue('soc.log.download.task.list', $sdk->payload['url'], 'method override path');
assertSameValue(1, $sdk->payload['query']['page'], 'method override query');

$client = new EdgeNextClient(new CapturingSdk());
assertThrows('InvalidArgumentException', function () use ($client) {
    $client->addDomains(new UpdateDomainsRequest());
}, 'wrong request object is rejected');

$sdk = new CapturingSdk();
$sdk->response = ['status' => ['code' => 401, 'message' => 'denied'], 'data' => []];
$error = assertThrows('edgenextapisdk\\Generated\\ApiException', function () use ($sdk) {
    (new EdgeNextClient($sdk))->listDomains(new ListDomainsRequest());
}, 'business error raises ApiException');
assertSameValue(401, $error->getCode(), 'business error code');
assertSameValue('denied', $error->getMessage(), 'business error message');

echo "Generated EdgeNext client contract tests passed\n";
