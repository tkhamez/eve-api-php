# Tkhamez\Eve\API\IncursionsApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getIncursions()**](IncursionsApi.md#getIncursions) | **GET** /incursions | List incursions |


## `getIncursions()`

```php
getIncursions($x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\IncursionsGetInner[]
```

List incursions

Return a list of current incursions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\IncursionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getIncursions($x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncursionsApi->getIncursions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\IncursionsGetInner[]**](../Model/IncursionsGetInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
