# Tyre24\Common\MessagesApi

All URIs are relative to https://api-b2b.alzura.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**markMessagesReadByMessageIds()**](MessagesApi.md#markMessagesReadByMessageIds) | **PATCH** /common/message/read | Mark messages as read |


## `markMessagesReadByMessageIds()`

```php
markMessagesReadByMessageIds($content_type, $message_ids)
```

Mark messages as read

Mark messages as read by specifying the message ids in the request body.

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


$apiInstance = new Tyre24\Common\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'content_type_example'; // string | The content type for all json requests. If not specified, errors related to missing required request body parameters will be returned.
$message_ids = new \Tyre24\Common\Model\MessageIds(); // \Tyre24\Common\Model\MessageIds

try {
    $apiInstance->markMessagesReadByMessageIds($content_type, $message_ids);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->markMessagesReadByMessageIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type for all json requests. If not specified, errors related to missing required request body parameters will be returned. | [optional] |
| **message_ids** | [**\Tyre24\Common\Model\MessageIds**](../Model/MessageIds.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuthAccessToken](../../README.md#OAuthAccessToken), [X-AUTH-TOKEN](../../README.md#X-AUTH-TOKEN)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
