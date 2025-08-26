# Tkhamez\Eve\API\RoutesApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRouteOriginDestination()**](RoutesApi.md#getRouteOriginDestination) | **GET** /route/{origin}/{destination} | Get route |


## `getRouteOriginDestination()`

```php
getRouteOriginDestination($destination, $origin, $avoid, $connections, $flag, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): int[]
```

Get route

Get the systems between origin and destination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destination = 56; // int
$origin = 56; // int
$avoid = array(56); // int[]
$connections = array(new \Tkhamez\Eve\API\Model\int[]()); // int[][]
$flag = 'shortest'; // string
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-08-26'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getRouteOriginDestination($destination, $origin, $avoid, $connections, $flag, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->getRouteOriginDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination** | **int**|  | |
| **origin** | **int**|  | |
| **avoid** | [**int[]**](../Model/int.md)|  | [optional] |
| **connections** | [**int[][]**](../Model/int[].md)|  | [optional] |
| **flag** | **string**|  | [optional] [default to &#39;shortest&#39;] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-08-26&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
