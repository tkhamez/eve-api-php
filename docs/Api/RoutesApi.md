# Tkhamez\Eve\API\RoutesApi



All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postRoute()**](RoutesApi.md#postRoute) | **POST** /route/{origin_system_id}/{destination_system_id} | Get route between two systems |


## `postRoute()`

```php
postRoute($origin_system_id, $destination_system_id, $route_request_body, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\Route
```

Get route between two systems

Calculate the systems between the given origin and destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$origin_system_id = 56; // int | Origin system
$destination_system_id = 56; // int | Destination system
$route_request_body = new \Tkhamez\Eve\API\Model\RouteRequestBody(); // \Tkhamez\Eve\API\Model\RouteRequestBody
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->postRoute($origin_system_id, $destination_system_id, $route_request_body, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->postRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **origin_system_id** | **int**| Origin system | |
| **destination_system_id** | **int**| Destination system | |
| **route_request_body** | [**\Tkhamez\Eve\API\Model\RouteRequestBody**](../Model/RouteRequestBody.md)|  | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\Route**](../Model/Route.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
