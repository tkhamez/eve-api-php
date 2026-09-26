# Tkhamez\Eve\API\ParagonHubApi



All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersParagonHubSkinr()**](ParagonHubApi.md#getCharactersParagonHubSkinr) | **GET** /characters/{character_id}/paragon-hub/skinr | List a character&#39;s Paragon Hub SKINR listings |
| [**getParagonHubSkinr()**](ParagonHubApi.md#getParagonHubSkinr) | **GET** /paragon-hub/skinr | List public Paragon Hub SKINR listings |
| [**getParagonHubSkinrAlliances()**](ParagonHubApi.md#getParagonHubSkinrAlliances) | **GET** /paragon-hub/skinr/alliances/{alliance_id} | List Paragon Hub SKINR listings targeted at an alliance |
| [**getParagonHubSkinrCharacters()**](ParagonHubApi.md#getParagonHubSkinrCharacters) | **GET** /paragon-hub/skinr/characters/{character_id} | List Paragon Hub SKINR listings targeted at a character |
| [**getParagonHubSkinrCorporations()**](ParagonHubApi.md#getParagonHubSkinrCorporations) | **GET** /paragon-hub/skinr/corporations/{corporation_id} | List Paragon Hub SKINR listings targeted at a corporation |


## `getCharactersParagonHubSkinr()`

```php
getCharactersParagonHubSkinr($character_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersParagonHubSkinr
```

List a character's Paragon Hub SKINR listings

List the SKINR listings a character has posted on the Paragon Hub.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ParagonHubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the character whose listings to return
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersParagonHubSkinr($character_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParagonHubApi->getCharactersParagonHubSkinr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | [**Int**](../Model/.md)| The ID of the character whose listings to return | |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersParagonHubSkinr**](../Model/CharactersParagonHubSkinr.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParagonHubSkinr()`

```php
getParagonHubSkinr($after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\ParagonHubSkinr
```

List public Paragon Hub SKINR listings

Browse the SKINR listings publicly available on the Paragon Hub.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\ParagonHubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getParagonHubSkinr($after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParagonHubApi->getParagonHubSkinr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\ParagonHubSkinr**](../Model/ParagonHubSkinr.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParagonHubSkinrAlliances()`

```php
getParagonHubSkinrAlliances($alliance_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\ParagonHubSkinrAlliances
```

List Paragon Hub SKINR listings targeted at an alliance

Browse the SKINR listings on the Paragon Hub that are visible to the given alliance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ParagonHubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alliance_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the alliance the listings are targeted at
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getParagonHubSkinrAlliances($alliance_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParagonHubApi->getParagonHubSkinrAlliances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alliance_id** | [**Int**](../Model/.md)| The ID of the alliance the listings are targeted at | |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\ParagonHubSkinrAlliances**](../Model/ParagonHubSkinrAlliances.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParagonHubSkinrCharacters()`

```php
getParagonHubSkinrCharacters($character_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\ParagonHubSkinrCharacters
```

List Paragon Hub SKINR listings targeted at a character

Browse the SKINR listings on the Paragon Hub that are visible to the given character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ParagonHubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the character the listings are targeted at
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getParagonHubSkinrCharacters($character_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParagonHubApi->getParagonHubSkinrCharacters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | [**Int**](../Model/.md)| The ID of the character the listings are targeted at | |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\ParagonHubSkinrCharacters**](../Model/ParagonHubSkinrCharacters.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParagonHubSkinrCorporations()`

```php
getParagonHubSkinrCorporations($corporation_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\ParagonHubSkinrCorporations
```

List Paragon Hub SKINR listings targeted at a corporation

Browse the SKINR listings on the Paragon Hub that are visible to the given corporation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ParagonHubApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the corporation the listings are targeted at
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getParagonHubSkinrCorporations($corporation_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParagonHubApi->getParagonHubSkinrCorporations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | [**Int**](../Model/.md)| The ID of the corporation the listings are targeted at | |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\ParagonHubSkinrCorporations**](../Model/ParagonHubSkinrCorporations.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
