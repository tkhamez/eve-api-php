# Tkhamez\Eve\API\SkillsApi



All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersCharacterIdAttributes()**](SkillsApi.md#getCharactersCharacterIdAttributes) | **GET** /characters/{character_id}/attributes | Get character attributes |
| [**getCharactersCharacterIdSkillqueue()**](SkillsApi.md#getCharactersCharacterIdSkillqueue) | **GET** /characters/{character_id}/skillqueue | Get character&#39;s skill queue |
| [**getCharactersCharacterIdSkills()**](SkillsApi.md#getCharactersCharacterIdSkills) | **GET** /characters/{character_id}/skills | Get character skills |


## `getCharactersCharacterIdAttributes()`

```php
getCharactersCharacterIdAttributes($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersCharacterIdAttributesGet
```

Get character attributes

Return attributes of a character

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-12-16'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersCharacterIdAttributes($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->getCharactersCharacterIdAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-12-16&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdAttributesGet**](../Model/CharactersCharacterIdAttributesGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdSkillqueue()`

```php
getCharactersCharacterIdSkillqueue($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersSkillqueueSkill[]
```

Get character's skill queue

List the configured skill queue for the given character.  Entries that have their finish time in the past are completed, but aren't updated in the \"/skills\" route yet. This will happen the next time the character logs in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-12-16'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersCharacterIdSkillqueue($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->getCharactersCharacterIdSkillqueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-12-16&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersSkillqueueSkill[]**](../Model/CharactersSkillqueueSkill.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdSkills()`

```php
getCharactersCharacterIdSkills($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersSkills
```

Get character skills

List all trained skills for the given character.  Skills returned by this route can be out-of-date if the character hasn't logged in since one or more skills completed training. Use the /skillqueue route to check for skills that completed training. Entries that are in the past need to be applied on top of this list to get an accurate view of the character's current skills.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\SkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-12-16'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersCharacterIdSkills($character_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillsApi->getCharactersCharacterIdSkills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-12-16&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersSkills**](../Model/CharactersSkills.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
