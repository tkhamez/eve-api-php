# Tkhamez\Eve\API\ActivitiesApi



All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersMercenaryTacticalOperationsDetail()**](ActivitiesApi.md#getCharactersMercenaryTacticalOperationsDetail) | **GET** /characters/{character_id}/mercenary-tactical-operations/{operation_id} | Get Mercenary Tactical Operation details |
| [**getCharactersMercenaryTacticalOperationsListing()**](ActivitiesApi.md#getCharactersMercenaryTacticalOperationsListing) | **GET** /characters/{character_id}/mercenary-tactical-operations | List Mercenary Tactical Operations |
| [**getSkyhooksRaidable()**](ActivitiesApi.md#getSkyhooksRaidable) | **GET** /skyhooks/raidable | List (upcoming) raidable Skyhooks |


## `getCharactersMercenaryTacticalOperationsDetail()`

```php
getCharactersMercenaryTacticalOperationsDetail($operation_id, $character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersMercenaryTacticalOperationsDetail
```

Get Mercenary Tactical Operation details

Get the details of a Mercenary Tactical Operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_id = 'operation_id_example'; // string | The ID of the operation
$character_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the character
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-05-19'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersMercenaryTacticalOperationsDetail($operation_id, $character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getCharactersMercenaryTacticalOperationsDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_id** | [**string**](../Model/.md)| The ID of the operation | |
| **character_id** | [**Int**](../Model/.md)| The ID of the character | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-05-19&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersMercenaryTacticalOperationsDetail**](../Model/CharactersMercenaryTacticalOperationsDetail.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersMercenaryTacticalOperationsListing()`

```php
getCharactersMercenaryTacticalOperationsListing($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersMercenaryTacticalOperationsListing
```

List Mercenary Tactical Operations

Listing of all Mercenary Tactical Operations for the character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ActivitiesApi(
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
    $result = $apiInstance->getCharactersMercenaryTacticalOperationsListing($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getCharactersMercenaryTacticalOperationsListing: ', $e->getMessage(), PHP_EOL;
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

[**\Tkhamez\Eve\API\Model\CharactersMercenaryTacticalOperationsListing**](../Model/CharactersMercenaryTacticalOperationsListing.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSkyhooksRaidable()`

```php
getSkyhooksRaidable($accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\SkyhooksRaidable
```

List (upcoming) raidable Skyhooks

Listing of all Skyhooks that currently or will shortly be raidable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-05-19'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getSkyhooksRaidable($accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getSkyhooksRaidable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-05-19&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\SkyhooksRaidable**](../Model/SkyhooksRaidable.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
