# Tyre24\Common\ArticlesApi

All URIs are relative to https://api-b2b.alzura.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAvailableArticleTypesList()**](ArticlesApi.md#getAvailableArticleTypesList) | **GET** /common/article-types | Get the article types list. |


## `getAvailableArticleTypesList()`

```php
getAvailableArticleTypesList($country, $filter, $accept_language): \Tyre24\Common\Model\GetAvailableArticleTypesList200Response
```

Get the article types list.

Get a full list of all available article types.

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


$apiInstance = new Tyre24\Common\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = de; // string | country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code).
$filter = array(new \Tyre24\Common\Model\\Tyre24\Common\Model\GetAvailableArticleTypesListFilterParameterInner()); // \Tyre24\Common\Model\GetAvailableArticleTypesListFilterParameterInner[]
$accept_language = de_DE; // string | ISO 639-1 standard language codes. As default, even for invalid values, de_DE will be used!

try {
    $result = $apiInstance->getAvailableArticleTypesList($country, $filter, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->getAvailableArticleTypesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code). | |
| **filter** | [**\Tyre24\Common\Model\GetAvailableArticleTypesListFilterParameterInner[]**](../Model/\Tyre24\Common\Model\GetAvailableArticleTypesListFilterParameterInner.md)|  | [optional] |
| **accept_language** | **string**| ISO 639-1 standard language codes. As default, even for invalid values, de_DE will be used! | [optional] |

### Return type

[**\Tyre24\Common\Model\GetAvailableArticleTypesList200Response**](../Model/GetAvailableArticleTypesList200Response.md)

### Authorization

[OAuthAccessToken](../../README.md#OAuthAccessToken), [X-AUTH-TOKEN](../../README.md#X-AUTH-TOKEN)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
