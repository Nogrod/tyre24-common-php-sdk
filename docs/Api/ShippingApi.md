# Tyre24\Common\ShippingApi

All URIs are relative to https://api-b2b.alzura.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getShippingCompaniesByCountry()**](ShippingApi.md#getShippingCompaniesByCountry) | **GET** /common/shipping-companies | Get a list of shipping companies in a given country. |


## `getShippingCompaniesByCountry()`

```php
getShippingCompaniesByCountry($country, $filter, $sort): \Tyre24\Common\Model\GetShippingCompaniesByCountry200Response
```

Get a list of shipping companies in a given country.

With this endpoint you can retrieve a list of all supported shipping companies for a given country. The response will contain an internal id, the name of the shipping company and a url that can be used to compose a tracking url. In the tracking url is a placeholder that must be replaced with a given tracking number

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


$apiInstance = new Tyre24\Common\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = de; // string | country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code).
$filter = array(new \Tyre24\Common\Model\\Tyre24\Common\Model\GetShippingCompaniesByCountryFilterParameterInner()); // \Tyre24\Common\Model\GetShippingCompaniesByCountryFilterParameterInner[]
$sort = -id,-name; // string | Sort the result of your search.  _If the key to sort starts with a **-**, then the result is sorted in descending order._ _If the sort key starts with a **+** or only the key is specified, the result is sorted in ascending order._  Available sorters:  | name | description | example | | ------ | ----------- | ------- | | id | Sort the result by id | -id | | name | Sort the result by name | -name |

try {
    $result = $apiInstance->getShippingCompaniesByCountry($country, $filter, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getShippingCompaniesByCountry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code). | |
| **filter** | [**\Tyre24\Common\Model\GetShippingCompaniesByCountryFilterParameterInner[]**](../Model/\Tyre24\Common\Model\GetShippingCompaniesByCountryFilterParameterInner.md)|  | [optional] |
| **sort** | **string**| Sort the result of your search.  _If the key to sort starts with a **-**, then the result is sorted in descending order._ _If the sort key starts with a **+** or only the key is specified, the result is sorted in ascending order._  Available sorters:  | name | description | example | | ------ | ----------- | ------- | | id | Sort the result by id | -id | | name | Sort the result by name | -name | | [optional] |

### Return type

[**\Tyre24\Common\Model\GetShippingCompaniesByCountry200Response**](../Model/GetShippingCompaniesByCountry200Response.md)

### Authorization

[OAuthAccessToken](../../README.md#OAuthAccessToken), [X-AUTH-TOKEN](../../README.md#X-AUTH-TOKEN)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
