# Tyre24\Common\DocumentsApi

All URIs are relative to https://api-b2b.alzura.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDocumentsByTypeAndId()**](DocumentsApi.md#getDocumentsByTypeAndId) | **GET** /common/document | Get base64 encoded documents. |


## `getDocumentsByTypeAndId()`

```php
getDocumentsByTypeAndId($country, $order, $type, $filter, $limit, $offset): \Tyre24\Common\Model\GetDocumentsByTypeAndId200Response
```

Get base64 encoded documents.

Get one or more base64 encoded documents defined by type and id. For example, if no id is given and the type is DEBIT_AGREEMENT, the endpoint returns all your debit agreements.  Possible document types:  | Document type | | ------ | | DEBIT_AGREEMENT | | BUSINESS_REGISTRATION | | SELLER_INVOICE | | DELIVERY_NOTE | | TRAVEL_COUPON | | REFUND | | PRODUCT_{product_area_abbreviation}_AGREEMENT ({product_area_abbreviation} is a two-letter id, that identifies an area that requires a product agreement; e.g. AC) |

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


$apiInstance = new Tyre24\Common\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = de; // string | country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code).
$order = PAC123456; // string | Filter documents by order id.
$type = DEBIT_AGREEMENT; // string | Filter documents by type.
$filter = array(new \Tyre24\Common\Model\\Tyre24\Common\Model\GetDocumentsByTypeAndIdFilterParameterInner()); // \Tyre24\Common\Model\GetDocumentsByTypeAndIdFilterParameterInner[]
$limit = 10; // int | Limit your search to list only a specific amount of records.  If you leave the field blank, all records will be returned.
$offset = 0; // int | Paginate the result of your search.  _If **limit** is not being passed, the value passed to offset will be ignored._

try {
    $result = $apiInstance->getDocumentsByTypeAndId($country, $order, $type, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocumentsByTypeAndId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code). | |
| **order** | **string**| Filter documents by order id. | |
| **type** | **string**| Filter documents by type. | |
| **filter** | [**\Tyre24\Common\Model\GetDocumentsByTypeAndIdFilterParameterInner[]**](../Model/\Tyre24\Common\Model\GetDocumentsByTypeAndIdFilterParameterInner.md)|  | [optional] |
| **limit** | **int**| Limit your search to list only a specific amount of records.  If you leave the field blank, all records will be returned. | [optional] |
| **offset** | **int**| Paginate the result of your search.  _If **limit** is not being passed, the value passed to offset will be ignored._ | [optional] |

### Return type

[**\Tyre24\Common\Model\GetDocumentsByTypeAndId200Response**](../Model/GetDocumentsByTypeAndId200Response.md)

### Authorization

[OAuthAccessToken](../../README.md#OAuthAccessToken), [X-AUTH-TOKEN](../../README.md#X-AUTH-TOKEN)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
