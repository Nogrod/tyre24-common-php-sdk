# Tyre24\Common\PaymentsApi

All URIs are relative to https://api-b2b.alzura.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPaymentMethodsForAuthenticatedUser()**](PaymentsApi.md#getPaymentMethodsForAuthenticatedUser) | **GET** /common/payment-methods | Get all available payment methods for the authenticated user in the given country. |


## `getPaymentMethodsForAuthenticatedUser()`

```php
getPaymentMethodsForAuthenticatedUser($country): \Tyre24\Common\Model\GetPaymentMethodsForAuthenticatedUser200Response
```

Get all available payment methods for the authenticated user in the given country.

With this endpoint you can retrieve a list of all payment methods, available to the authenticated user in the given country.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: OAuthAccessToken
$config = Tyre24\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: X-AUTH-TOKEN
$config = Tyre24\Common\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tyre24\Common\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new Tyre24\Common\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = de; // string | country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code).

try {
    $result = $apiInstance->getPaymentMethodsForAuthenticatedUser($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentMethodsForAuthenticatedUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code). | |

### Return type

[**\Tyre24\Common\Model\GetPaymentMethodsForAuthenticatedUser200Response**](../Model/GetPaymentMethodsForAuthenticatedUser200Response.md)

### Authorization

[OAuthAccessToken](../../README.md#OAuthAccessToken), [X-AUTH-TOKEN](../../README.md#X-AUTH-TOKEN)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
