# Tyre24\Common\PingApi

All URIs are relative to https://api-b2b.alzura.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ping()**](PingApi.md#ping) | **GET** /ping | Ping. |


## `ping()`

```php
ping(): \Tyre24\Common\Model\Ping200Response
```

Ping.

Endpoint just returns pong. If you get any response, your connection is working and the API itself is up and running.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tyre24\Common\Api\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tyre24\Common\Model\Ping200Response**](../Model/Ping200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
