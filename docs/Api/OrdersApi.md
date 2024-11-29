# Tyre24\Common\OrdersApi

All URIs are relative to https://api-b2b.alzura.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAvailableOrderStatusesList()**](OrdersApi.md#getAvailableOrderStatusesList) | **GET** /common/order-status | Get a list of order statuses. |
| [**getLatestOrders()**](OrdersApi.md#getLatestOrders) | **GET** /common/latestorders | Retrieve the latest orders. |
| [**getOrderDetailsByOrderId()**](OrdersApi.md#getOrderDetailsByOrderId) | **GET** /common/order/{order} | Get the details of a given order. |


## `getAvailableOrderStatusesList()`

```php
getAvailableOrderStatusesList($filter, $accept_language): \Tyre24\Common\Model\GetAvailableOrderStatusesList200Response
```

Get a list of order statuses.

Return a list of all available order statuses.  Possible status ids and their meaning are listed here below:  | Status ID | Meaning | | ------ | ------ | | -1 | If the status of an order is -1 this means it has no status. This only can occur in historic orders and will not be delivered in this response. | | 0 | The order is currently in the queue. | | 1 | The order is currently being processed and is not yet dispatched. | | 2 | The order has been processed and is currently being dispatched. | | 3 | The order is completed. The goods are on the way. | | 4 | The order was rejected. | | 5 | Unfortunately the item is out of stock. | | 6 | The order was partially canceled. | | 7 | Customer cancellation by supplier. | | 8 | Customer cancellation. |

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


$apiInstance = new Tyre24\Common\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = array(new \Tyre24\Common\Model\\Tyre24\Common\Model\GetAvailableOrderStatusesListFilterParameterInner()); // \Tyre24\Common\Model\GetAvailableOrderStatusesListFilterParameterInner[]
$accept_language = de_DE; // string | ISO 639-1 standard language codes. As default, even for invalid values, de_DE will be used!

try {
    $result = $apiInstance->getAvailableOrderStatusesList($filter, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getAvailableOrderStatusesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | [**\Tyre24\Common\Model\GetAvailableOrderStatusesListFilterParameterInner[]**](../Model/\Tyre24\Common\Model\GetAvailableOrderStatusesListFilterParameterInner.md)|  | [optional] |
| **accept_language** | **string**| ISO 639-1 standard language codes. As default, even for invalid values, de_DE will be used! | [optional] |

### Return type

[**\Tyre24\Common\Model\GetAvailableOrderStatusesList200Response**](../Model/GetAvailableOrderStatusesList200Response.md)

### Authorization

[OAuthAccessToken](../../README.md#OAuthAccessToken), [X-AUTH-TOKEN](../../README.md#X-AUTH-TOKEN)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLatestOrders()`

```php
getLatestOrders($country, $counter, $no_tagging, $tracking_number, $order_role, $demo): \Tyre24\Common\Model\GetLatestOrders200Response
```

Retrieve the latest orders.

Retrieve the latest orders since the last call to this endpoint of the requesting active customer. As a **supplier** it is possible to support order cancellation by the buyer. In this case every order will only be delivery via this endpoint with a time delay of 5 minutes. The definition of active customer changes according to its type: - a **supplier** is always considered to be active in the request country (country set in the request headers) and the response will include all orders from all active countries, regardless of the request country; - a **retailer** is considered to be active in the request country if:      - its country (i.e. country associated to its profile) is equal to the request country;      - its country is **NOT** equal to the request country, **BUT** the *'include-child-branches'* flag is active **AND** at least one of its child branches's country is equal to the request country;  This endpoint has request limits. Currently, it allows a logged-in user to send 2 request every 300 seconds (5 minutes).

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


$apiInstance = new Tyre24\Common\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = de; // string | country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code).
$counter = 56; // int | Default 0. Data records are combined by the interface into blocks that can be retrieved again.
$no_tagging = True; // bool | 0: the returned orders are set with the next available counter, if not previously retrieved, and marked with access time (the access time will not be changed by subsequent calls with no_tagging=0); 1: the returned orders are set with the next available counter, if not previously retrieved, but no access time will be set.
$tracking_number = 'tracking_number_example'; // string | Valid values are: 0 = all orders, 1 = only orders with tracking, 2 = only orders without tracking
$order_role = 'order_role_example'; // string | Valid values are: SELLER, BUYER, SELLER_OR_BUYER, SELLER_AND_BUYER
$demo = True; // bool | 0: Real data is returned (default), 1: Demo data is returned.

try {
    $result = $apiInstance->getLatestOrders($country, $counter, $no_tagging, $tracking_number, $order_role, $demo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getLatestOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code). | |
| **counter** | **int**| Default 0. Data records are combined by the interface into blocks that can be retrieved again. | [optional] |
| **no_tagging** | **bool**| 0: the returned orders are set with the next available counter, if not previously retrieved, and marked with access time (the access time will not be changed by subsequent calls with no_tagging&#x3D;0); 1: the returned orders are set with the next available counter, if not previously retrieved, but no access time will be set. | [optional] |
| **tracking_number** | **string**| Valid values are: 0 &#x3D; all orders, 1 &#x3D; only orders with tracking, 2 &#x3D; only orders without tracking | [optional] |
| **order_role** | **string**| Valid values are: SELLER, BUYER, SELLER_OR_BUYER, SELLER_AND_BUYER | [optional] |
| **demo** | **bool**| 0: Real data is returned (default), 1: Demo data is returned. | [optional] |

### Return type

[**\Tyre24\Common\Model\GetLatestOrders200Response**](../Model/GetLatestOrders200Response.md)

### Authorization

[OAuthAccessToken](../../README.md#OAuthAccessToken), [X-AUTH-TOKEN](../../README.md#X-AUTH-TOKEN)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderDetailsByOrderId()`

```php
getOrderDetailsByOrderId($country, $order): \Tyre24\Common\Model\GetOrderDetailsByOrderId200Response
```

Get the details of a given order.

Get the details of a given order for the given order id.

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


$apiInstance = new Tyre24\Common\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = de; // string | country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code).
$order = PAC12345670121; // string

try {
    $result = $apiInstance->getOrderDetailsByOrderId($country, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderDetailsByOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| country code in ISO 3166-1 alpha-2 (lowercase 2-letter country code). | |
| **order** | **string**|  | |

### Return type

[**\Tyre24\Common\Model\GetOrderDetailsByOrderId200Response**](../Model/GetOrderDetailsByOrderId200Response.md)

### Authorization

[OAuthAccessToken](../../README.md#OAuthAccessToken), [X-AUTH-TOKEN](../../README.md#X-AUTH-TOKEN)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
