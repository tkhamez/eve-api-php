# Tkhamez\Eve\API\KillmailsApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersCharacterIdKillmailsRecent()**](KillmailsApi.md#getCharactersCharacterIdKillmailsRecent) | **GET** /characters/{character_id}/killmails/recent | Get a character&#39;s recent kills and losses |
| [**getCorporationsCorporationIdKillmailsRecent()**](KillmailsApi.md#getCorporationsCorporationIdKillmailsRecent) | **GET** /corporations/{corporation_id}/killmails/recent | Get a corporation&#39;s recent kills and losses |
| [**getKillmailsKillmailIdKillmailHash()**](KillmailsApi.md#getKillmailsKillmailIdKillmailHash) | **GET** /killmails/{killmail_id}/{killmail_hash} | Get a single killmail |


## `getCharactersCharacterIdKillmailsRecent()`

```php
getCharactersCharacterIdKillmailsRecent($character_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdKillmailsRecentGetInner[]
```

Get a character's recent kills and losses

Return a list of a character's kills and losses going back 90 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\KillmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCharactersCharacterIdKillmailsRecent($character_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KillmailsApi->getCharactersCharacterIdKillmailsRecent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdKillmailsRecentGetInner[]**](../Model/CharactersCharacterIdKillmailsRecentGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdKillmailsRecent()`

```php
getCorporationsCorporationIdKillmailsRecent($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdKillmailsRecentGetInner[]
```

Get a corporation's recent kills and losses

Get a list of a corporation's kills and losses going back 90 days  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\KillmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsCorporationIdKillmailsRecent($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KillmailsApi->getCorporationsCorporationIdKillmailsRecent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdKillmailsRecentGetInner[]**](../Model/CharactersCharacterIdKillmailsRecentGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKillmailsKillmailIdKillmailHash()`

```php
getKillmailsKillmailIdKillmailHash($killmail_hash, $killmail_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\KillmailsKillmailIdKillmailHashGet
```

Get a single killmail

Return a single killmail from its ID and hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\KillmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$killmail_hash = 'killmail_hash_example'; // string
$killmail_id = 56; // int
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getKillmailsKillmailIdKillmailHash($killmail_hash, $killmail_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KillmailsApi->getKillmailsKillmailIdKillmailHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **killmail_hash** | **string**|  | |
| **killmail_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\KillmailsKillmailIdKillmailHashGet**](../Model/KillmailsKillmailIdKillmailHashGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
