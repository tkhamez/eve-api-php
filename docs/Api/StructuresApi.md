# Tkhamez\Eve\API\StructuresApi



All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersStructuresMercenaryDensDetail()**](StructuresApi.md#getCharactersStructuresMercenaryDensDetail) | **GET** /characters/{character_id}/structures/mercenary-dens/{mercenary_den_id} | Get Mercenary Den details |
| [**getCharactersStructuresMercenaryDensListing()**](StructuresApi.md#getCharactersStructuresMercenaryDensListing) | **GET** /characters/{character_id}/structures/mercenary-dens | List Mercenary Dens |
| [**getCorporationsStructuresSkyhooksDetail()**](StructuresApi.md#getCorporationsStructuresSkyhooksDetail) | **GET** /corporations/{corporation_id}/structures/skyhooks/{skyhook_id} | Get Skyhook details |
| [**getCorporationsStructuresSkyhooksListing()**](StructuresApi.md#getCorporationsStructuresSkyhooksListing) | **GET** /corporations/{corporation_id}/structures/skyhooks | List Skyhooks |
| [**getCorporationsStructuresSovereigntyHubsDetail()**](StructuresApi.md#getCorporationsStructuresSovereigntyHubsDetail) | **GET** /corporations/{corporation_id}/structures/sovereignty-hubs/{sovereignty_hub_id} | Get Sovereignty Hub details |
| [**getCorporationsStructuresSovereigntyHubsListing()**](StructuresApi.md#getCorporationsStructuresSovereigntyHubsListing) | **GET** /corporations/{corporation_id}/structures/sovereignty-hubs | List Sovereignty Hubs |


## `getCharactersStructuresMercenaryDensDetail()`

```php
getCharactersStructuresMercenaryDensDetail($mercenary_den_id, $character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersStructuresMercenaryDensDetail
```

Get Mercenary Den details

Get the details of a Mercenary Den.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\StructuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mercenary_den_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the Mercenary Den
$character_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the character
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-05-19'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersStructuresMercenaryDensDetail($mercenary_den_id, $character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StructuresApi->getCharactersStructuresMercenaryDensDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mercenary_den_id** | [**Int**](../Model/.md)| The ID of the Mercenary Den | |
| **character_id** | [**Int**](../Model/.md)| The ID of the character | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-05-19&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersStructuresMercenaryDensDetail**](../Model/CharactersStructuresMercenaryDensDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersStructuresMercenaryDensListing()`

```php
getCharactersStructuresMercenaryDensListing($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersStructuresMercenaryDensListing
```

List Mercenary Dens

Listing of all Mercenary Dens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\StructuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the character
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-05-19'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersStructuresMercenaryDensListing($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StructuresApi->getCharactersStructuresMercenaryDensListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | [**Int**](../Model/.md)| The ID of the character | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-05-19&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersStructuresMercenaryDensListing**](../Model/CharactersStructuresMercenaryDensListing.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsStructuresSkyhooksDetail()`

```php
getCorporationsStructuresSkyhooksDetail($skyhook_id, $corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CorporationsStructuresSkyhooksDetail
```

Get Skyhook details

Get the details of a Skyhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\StructuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skyhook_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the Skyhook
$corporation_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the corporation
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-05-19'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCorporationsStructuresSkyhooksDetail($skyhook_id, $corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StructuresApi->getCorporationsStructuresSkyhooksDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skyhook_id** | [**Int**](../Model/.md)| The ID of the Skyhook | |
| **corporation_id** | [**Int**](../Model/.md)| The ID of the corporation | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-05-19&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsStructuresSkyhooksDetail**](../Model/CorporationsStructuresSkyhooksDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsStructuresSkyhooksListing()`

```php
getCorporationsStructuresSkyhooksListing($corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CorporationsStructuresSkyhooksListing
```

List Skyhooks

Listing of all Skyhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\StructuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the corporation
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-05-19'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCorporationsStructuresSkyhooksListing($corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StructuresApi->getCorporationsStructuresSkyhooksListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | [**Int**](../Model/.md)| The ID of the corporation | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-05-19&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsStructuresSkyhooksListing**](../Model/CorporationsStructuresSkyhooksListing.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsStructuresSovereigntyHubsDetail()`

```php
getCorporationsStructuresSovereigntyHubsDetail($sovereignty_hub_id, $corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CorporationsStructuresSovereigntyHubsDetail
```

Get Sovereignty Hub details

Get the details of a Sovereignty Hub.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\StructuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sovereignty_hub_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the Sovereignty Hub
$corporation_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the corporation
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-05-19'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCorporationsStructuresSovereigntyHubsDetail($sovereignty_hub_id, $corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StructuresApi->getCorporationsStructuresSovereigntyHubsDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sovereignty_hub_id** | [**Int**](../Model/.md)| The ID of the Sovereignty Hub | |
| **corporation_id** | [**Int**](../Model/.md)| The ID of the corporation | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-05-19&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsStructuresSovereigntyHubsDetail**](../Model/CorporationsStructuresSovereigntyHubsDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsStructuresSovereigntyHubsListing()`

```php
getCorporationsStructuresSovereigntyHubsListing($corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CorporationsStructuresSovereigntyHubsListing
```

List Sovereignty Hubs

Listing of all Sovereignty Hubs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\StructuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the corporation
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-05-19'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCorporationsStructuresSovereigntyHubsListing($corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StructuresApi->getCorporationsStructuresSovereigntyHubsListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | [**Int**](../Model/.md)| The ID of the corporation | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-05-19&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsStructuresSovereigntyHubsListing**](../Model/CorporationsStructuresSovereigntyHubsListing.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
