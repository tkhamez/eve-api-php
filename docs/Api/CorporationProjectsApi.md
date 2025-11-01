# Tkhamez\Eve\API\CorporationProjectsApi



All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCorporationsProjectsContribution()**](CorporationProjectsApi.md#getCorporationsProjectsContribution) | **GET** /corporations/{corporation_id}/projects/{project_id}/contribution/{character_id} | Get your project contribution |
| [**getCorporationsProjectsContributors()**](CorporationProjectsApi.md#getCorporationsProjectsContributors) | **GET** /corporations/{corporation_id}/projects/{project_id}/contributors | List project contributors |
| [**getCorporationsProjectsDetail()**](CorporationProjectsApi.md#getCorporationsProjectsDetail) | **GET** /corporations/{corporation_id}/projects/{project_id} | Get project details |
| [**getCorporationsProjectsListing()**](CorporationProjectsApi.md#getCorporationsProjectsListing) | **GET** /corporations/{corporation_id}/projects | List corporation projects |


## `getCorporationsProjectsContribution()`

```php
getCorporationsProjectsContribution($corporation_id, $project_id, $character_id, $if_modified_since, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsProjectsContribution
```

Get your project contribution

Show your contribution to a corporation project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$project_id = 'project_id_example'; // string | The ID of the project
$character_id = 56; // int | The ID of the character
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsProjectsContribution($corporation_id, $project_id, $character_id, $if_modified_since, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationProjectsApi->getCorporationsProjectsContribution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **project_id** | **string**| The ID of the project | |
| **character_id** | **int**| The ID of the character | |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsProjectsContribution**](../Model/CorporationsProjectsContribution.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsProjectsContributors()`

```php
getCorporationsProjectsContributors($corporation_id, $project_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsProjectsContributors
```

List project contributors

Listing of all contributors to a corporation project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$project_id = 'project_id_example'; // string | The ID of the project
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsProjectsContributors($corporation_id, $project_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationProjectsApi->getCorporationsProjectsContributors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **project_id** | **string**| The ID of the project | |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsProjectsContributors**](../Model/CorporationsProjectsContributors.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsProjectsDetail()`

```php
getCorporationsProjectsDetail($corporation_id, $project_id, $if_modified_since, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsProjectsDetail
```

Get project details

Get the details of a corporation project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$project_id = 'project_id_example'; // string | The ID of the project
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsProjectsDetail($corporation_id, $project_id, $if_modified_since, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationProjectsApi->getCorporationsProjectsDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **project_id** | **string**| The ID of the project | |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsProjectsDetail**](../Model/CorporationsProjectsDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsProjectsListing()`

```php
getCorporationsProjectsListing($corporation_id, $after, $before, $limit, $state, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsProjectsListing
```

List corporation projects

Listing of all (active) corporation projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$state = 'Active'; // string | Filter by state
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsProjectsListing($corporation_id, $after, $before, $limit, $state, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationProjectsApi->getCorporationsProjectsListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **state** | **string**| Filter by state | [optional] [default to &#39;Active&#39;] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsProjectsListing**](../Model/CorporationsProjectsListing.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
