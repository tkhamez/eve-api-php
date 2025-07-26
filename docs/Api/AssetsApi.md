# Tkhamez\Eve\API\AssetsApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersCharacterIdAssets()**](AssetsApi.md#getCharactersCharacterIdAssets) | **GET** /characters/{character_id}/assets | Get character assets |
| [**getCorporationsCorporationIdAssets()**](AssetsApi.md#getCorporationsCorporationIdAssets) | **GET** /corporations/{corporation_id}/assets | Get corporation assets |
| [**postCharactersCharacterIdAssetsLocations()**](AssetsApi.md#postCharactersCharacterIdAssetsLocations) | **POST** /characters/{character_id}/assets/locations | Get character asset locations |
| [**postCharactersCharacterIdAssetsNames()**](AssetsApi.md#postCharactersCharacterIdAssetsNames) | **POST** /characters/{character_id}/assets/names | Get character asset names |
| [**postCorporationsCorporationIdAssetsLocations()**](AssetsApi.md#postCorporationsCorporationIdAssetsLocations) | **POST** /corporations/{corporation_id}/assets/locations | Get corporation asset locations |
| [**postCorporationsCorporationIdAssetsNames()**](AssetsApi.md#postCorporationsCorporationIdAssetsNames) | **POST** /corporations/{corporation_id}/assets/names | Get corporation asset names |


## `getCharactersCharacterIdAssets()`

```php
getCharactersCharacterIdAssets($character_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsGetInner[]
```

Get character assets

Return a list of the characters assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCharactersCharacterIdAssets($character_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getCharactersCharacterIdAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsGetInner[]**](../Model/CharactersCharacterIdAssetsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdAssets()`

```php
getCorporationsCorporationIdAssets($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdAssetsGetInner[]
```

Get corporation assets

Return a list of the corporation assets  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdAssets($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getCorporationsCorporationIdAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdAssetsGetInner[]**](../Model/CorporationsCorporationIdAssetsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCharactersCharacterIdAssetsLocations()`

```php
postCharactersCharacterIdAssetsLocations($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $request_body): \Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsLocationsPostInner[]
```

Get character asset locations

Return locations for a set of item ids, which you can get from character assets endpoint. Coordinates for items in hangars or stations are set to (0,0,0)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->postCharactersCharacterIdAssetsLocations($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postCharactersCharacterIdAssetsLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **request_body** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsLocationsPostInner[]**](../Model/CharactersCharacterIdAssetsLocationsPostInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCharactersCharacterIdAssetsNames()`

```php
postCharactersCharacterIdAssetsNames($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $request_body): \Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsNamesPostInner[]
```

Get character asset names

Return names for a set of item ids, which you can get from character assets endpoint. Typically used for items that can customize names, like containers or ships.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->postCharactersCharacterIdAssetsNames($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postCharactersCharacterIdAssetsNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **request_body** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsNamesPostInner[]**](../Model/CharactersCharacterIdAssetsNamesPostInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCorporationsCorporationIdAssetsLocations()`

```php
postCorporationsCorporationIdAssetsLocations($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $request_body): \Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsLocationsPostInner[]
```

Get corporation asset locations

Return locations for a set of item ids, which you can get from corporation assets endpoint. Coordinates for items in hangars or stations are set to (0,0,0)  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->postCorporationsCorporationIdAssetsLocations($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postCorporationsCorporationIdAssetsLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **request_body** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsLocationsPostInner[]**](../Model/CharactersCharacterIdAssetsLocationsPostInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCorporationsCorporationIdAssetsNames()`

```php
postCorporationsCorporationIdAssetsNames($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $request_body): \Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsNamesPostInner[]
```

Get corporation asset names

Return names for a set of item ids, which you can get from corporation assets endpoint. Only valid for items that can customize names, like containers or ships  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->postCorporationsCorporationIdAssetsNames($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postCorporationsCorporationIdAssetsNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **request_body** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdAssetsNamesPostInner[]**](../Model/CharactersCharacterIdAssetsNamesPostInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
