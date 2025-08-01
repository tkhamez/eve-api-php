# Tkhamez\Eve\API\SearchApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersCharacterIdSearch()**](SearchApi.md#getCharactersCharacterIdSearch) | **GET** /characters/{character_id}/search | Search on a string |


## `getCharactersCharacterIdSearch()`

```php
getCharactersCharacterIdSearch($categories, $character_id, $search, $x_compatibility_date, $strict, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdSearchGet
```

Search on a string

Search for entities that match a given sub-string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categories = array('categories_example'); // string[]
$character_id = 56; // int | The ID of the character
$search = 'search_example'; // string
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$strict = false; // bool
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCharactersCharacterIdSearch($categories, $character_id, $search, $x_compatibility_date, $strict, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getCharactersCharacterIdSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categories** | [**string[]**](../Model/string.md)|  | |
| **character_id** | **int**| The ID of the character | |
| **search** | **string**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **strict** | **bool**|  | [optional] [default to false] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdSearchGet**](../Model/CharactersCharacterIdSearchGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
