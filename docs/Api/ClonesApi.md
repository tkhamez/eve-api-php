# Tkhamez\Eve\API\ClonesApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersCharacterIdClones()**](ClonesApi.md#getCharactersCharacterIdClones) | **GET** /characters/{character_id}/clones | Get clones |
| [**getCharactersCharacterIdImplants()**](ClonesApi.md#getCharactersCharacterIdImplants) | **GET** /characters/{character_id}/implants | Get active implants |


## `getCharactersCharacterIdClones()`

```php
getCharactersCharacterIdClones($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdClonesGet
```

Get clones

A list of the character's clones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ClonesApi(
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

try {
    $result = $apiInstance->getCharactersCharacterIdClones($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClonesApi->getCharactersCharacterIdClones: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdClonesGet**](../Model/CharactersCharacterIdClonesGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdImplants()`

```php
getCharactersCharacterIdImplants($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): int[]
```

Get active implants

Return implants on the active clone of a character

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ClonesApi(
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

try {
    $result = $apiInstance->getCharactersCharacterIdImplants($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClonesApi->getCharactersCharacterIdImplants: ', $e->getMessage(), PHP_EOL;
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

### Return type

**int[]**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
