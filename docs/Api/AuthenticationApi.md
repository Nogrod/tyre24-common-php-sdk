# Tyre24\Common\AuthenticationApi

All URIs are relative to https://api-b2b.alzura.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loginUser()**](AuthenticationApi.md#loginUser) | **GET** /common/login | Get a login token and expire date. |


## `loginUser()`

```php
loginUser(): \Tyre24\Common\Model\LoginUser200Response
```

Get a login token and expire date.

Returns the X-AUTH-TOKEN which is required for authentication of the remaining endpoints. Authentication for this endpoint is basic auth. For authentication, an authentication-header formatted as 'Alzura ID:Password' must be transmitted as a base64-encoded string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Tyre24\Common\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Tyre24\Common\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->loginUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->loginUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tyre24\Common\Model\LoginUser200Response**](../Model/LoginUser200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
