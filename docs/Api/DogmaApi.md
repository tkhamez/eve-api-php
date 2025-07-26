# Tkhamez\Eve\API\DogmaApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDogmaAttributes()**](DogmaApi.md#getDogmaAttributes) | **GET** /dogma/attributes | Get attributes |
| [**getDogmaAttributesAttributeId()**](DogmaApi.md#getDogmaAttributesAttributeId) | **GET** /dogma/attributes/{attribute_id} | Get attribute information |
| [**getDogmaDynamicItemsTypeIdItemId()**](DogmaApi.md#getDogmaDynamicItemsTypeIdItemId) | **GET** /dogma/dynamic/items/{type_id}/{item_id} | Get dynamic item information |
| [**getDogmaEffects()**](DogmaApi.md#getDogmaEffects) | **GET** /dogma/effects | Get effects |
| [**getDogmaEffectsEffectId()**](DogmaApi.md#getDogmaEffectsEffectId) | **GET** /dogma/effects/{effect_id} | Get effect information |


## `getDogmaAttributes()`

```php
getDogmaAttributes($x_compatibility_date, $accept_language, $if_none_match, $x_tenant): int[]
```

Get attributes

Get a list of dogma attribute ids  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getDogmaAttributes($x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaAttributes: ', $e->getMessage(), PHP_EOL;
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

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDogmaAttributesAttributeId()`

```php
getDogmaAttributesAttributeId($attribute_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\DogmaAttributesAttributeIdGet
```

Get attribute information

Get information on a dogma attribute  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attribute_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getDogmaAttributesAttributeId($attribute_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaAttributesAttributeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\DogmaAttributesAttributeIdGet**](../Model/DogmaAttributesAttributeIdGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDogmaDynamicItemsTypeIdItemId()`

```php
getDogmaDynamicItemsTypeIdItemId($item_id, $type_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\DogmaDynamicItemsTypeIdItemIdGet
```

Get dynamic item information

Returns info about a dynamic item resulting from mutation with a mutaplasmid.  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 56; // int
$type_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getDogmaDynamicItemsTypeIdItemId($item_id, $type_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaDynamicItemsTypeIdItemId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **type_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\DogmaDynamicItemsTypeIdItemIdGet**](../Model/DogmaDynamicItemsTypeIdItemIdGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDogmaEffects()`

```php
getDogmaEffects($x_compatibility_date, $accept_language, $if_none_match, $x_tenant): int[]
```

Get effects

Get a list of dogma effect ids  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getDogmaEffects($x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaEffects: ', $e->getMessage(), PHP_EOL;
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

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDogmaEffectsEffectId()`

```php
getDogmaEffectsEffectId($effect_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\DogmaEffectsEffectIdGet
```

Get effect information

Get information on a dogma effect  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\DogmaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$effect_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getDogmaEffectsEffectId($effect_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DogmaApi->getDogmaEffectsEffectId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **effect_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\DogmaEffectsEffectIdGet**](../Model/DogmaEffectsEffectIdGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
