# Tkhamez\Eve\API\MetaApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMetaChangelog()**](MetaApi.md#getMetaChangelog) | **GET** /meta/changelog | Get changelog |
| [**getMetaCompatibilityDates()**](MetaApi.md#getMetaCompatibilityDates) | **GET** /meta/compatibility-dates | Get compatibility dates |


## `getMetaChangelog()`

```php
getMetaChangelog($accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\MetaChangelog
```

Get changelog

Get the changelog of this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getMetaChangelog($accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetaChangelog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\MetaChangelog**](../Model/MetaChangelog.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaCompatibilityDates()`

```php
getMetaCompatibilityDates($accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\MetaCompatibilityDates
```

Get compatibility dates

Get a list of compatibility dates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getMetaCompatibilityDates($accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->getMetaCompatibilityDates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\MetaCompatibilityDates**](../Model/MetaCompatibilityDates.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
