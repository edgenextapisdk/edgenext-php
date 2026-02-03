# EdgeNext PHP SDK

A PHP SDK for interacting with the EdgeNext API. This SDK provides a simple and easy-to-use interface for making RESTful API requests with automatic request signing.

## Features

- RESTful API support
- Automatic request signing using HMAC-SHA256
- Support for GET, POST, PUT, PATCH, and DELETE methods
- Support for both synchronous and asynchronous requests
- JSON and form-urlencoded request body support
- Comprehensive error handling

## Requirements

- PHP >= 5.6
- Composer
- Guzzle HTTP Client 6.3.0

## Installation

Install the SDK using Composer:

```bash
composer require edgenextapisdk/sdk
```

## Configuration

Before using the SDK, you need to obtain your API credentials:

- **Base API URL**: The base URL for the API (e.g., `http://api.local.com/V4/`). Contact your operations team for the specific URL.
- **App ID**: Your application ID. Contact technical support to register an account and apply for API credentials.
- **App Secret**: Your application secret key used for request signing.

## Usage

### Basic Setup

```php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require './vendor/autoload.php';

try {
    $config = [
        'app_id'       => getenv('SDK_APP_ID'),
        'app_secret'   => getenv('SDK_APP_SECRET'),
        'base_api_url' => getenv('SDK_API_PRE'),
        // 'log'          => true,              // Enable SDK logging
        // 'logfileLinux' => '/tmp/sdk.log',   // Linux log file path
    ];
    $sdk = new \edgenextapisdk\Sdk($config);
    
    // Your API calls here
} catch(\Exception $e) {
    var_dump("code: " . $e->getCode() . " message: " . $e->getMessage());
}
```

### Making Requests

#### GET Request

```php
$request = [
    'url' => 'test.sdk.get',
    'query' => [
        "page" => 1,
        "pagesize" => 10,
        "data" => [
            "name" => "name",
            "domain" => "baidu.com",
        ],
    ],
    'body' => [],
];
$result = $sdk->get($request);
$jsonData = json_decode($result, true);
print_r("api: " . $request['url'] . "\n");
print_r("raw: " . $result . "\n");
print_r($jsonData);
```

#### POST Request

```php
$request = [
    'url' => 'test.sdk.post',
    'query' => [],
    'body' => [
        "page" => 1,
        "pagesize" => 10,
        "data" => [
            "name" => "name",
            "domain" => "baidu.com",
        ],
    ],
];
$result = $sdk->post($request);
$jsonData = json_decode($result, true);
```

#### PUT Request

```php
$request = [
    'url' => 'test.sdk.put',
    'query' => [],
    'body' => [
        "page" => 1,
        "pagesize" => 10,
    ],
];
$result = $sdk->put($request);
```

#### PATCH Request

```php
$request = [
    'url' => 'test.sdk.patch',
    'query' => [],
    'body' => [
        "page" => 1,
        "pagesize" => 10,
    ],
];
$result = $sdk->patch($request);
```

#### DELETE Request

```php
$request = [
    'url' => 'test.sdk.delete',
    'query' => [],
    'body' => [],
];
$result = $sdk->delete($request);
```

### Asynchronous Requests

The SDK also supports asynchronous requests:

```php
// Async GET
$result = $sdk->getAsync($request);

// Async POST
$result = $sdk->postAsync($request);

// Async PUT
$result = $sdk->putAsync($request);

// Async PATCH
$result = $sdk->patchAsync($request);

// Async DELETE
$result = $sdk->deleteAsync($request);
```

## Request Parameters

### Configuration Options

- `app_id` (required): Your application ID
- `app_secret` (required): Your application secret key used for signing requests
- `base_api_url` (required): The base URL for the API
- `timeout` (optional): Request timeout in seconds (default: 10 seconds)
- `log` (optional): Enable SDK logging (default: true)
- `logfileLinux` (optional): Log file path for Linux systems
- `logfileWin` (optional): Log file path for Windows systems
- `user_id` (optional): User ID (required for proxy requests)
- `client_ip` (optional): Client IP address
- `client_userAgent` (optional): Custom User-Agent string

### Request Structure

Each request should be an array with the following structure:

```php
$request = [
    'url'     => 'endpoint.path',  // API endpoint path
    'query'   => [],               // Query parameters (for GET requests)
    'body'    => [],               // Request body (for POST/PUT/PATCH/DELETE)
    'method'  => 'GET',            // HTTP method (auto-set by method call)
    'headers' => [                 // Custom headers
        'format' => 'json',
    ],
    'timeout' => 10,               // Request timeout
    'options' => [],               // Additional options
];
```

## Important Notes

1. **URI and Query Parameters**: For all requests, the URI and GET parameters are separated. For example, if the URL is `https://api.local.com/V4/version?v=1`, the `v=1` parameter must be passed through the `query` parameter.

2. **Request Signing**: All requests are automatically signed using HMAC-SHA256 algorithm to ensure data integrity during transmission.

3. **Response Format**: Each API call returns a JSON string. You can decode it using `json_decode($result, true)` to get an associative array.

4. **Error Handling**: The SDK includes comprehensive error handling. Exceptions are caught and formatted according to your configuration.

## Signature Algorithm

The SDK uses HMAC-SHA256 for request signing:

- **Client Side**: Parameters are base64 encoded and signed with the app_secret using SHA256. The signature is included in each request.
- **Server Side**: The server uses the same algorithm to sign the parameters and verifies the signature.

## License

See the [LICENSE](LICENSE) file for details.

## Support

For API credentials and support, please contact:
- Technical Support: Contact technical support to register an account and apply for API credentials
- Operations Team: Contact operations team for the specific API base URL
