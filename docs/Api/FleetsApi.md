# Tkhamez\Eve\API\FleetsApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFleetsFleetIdMembersMemberId()**](FleetsApi.md#deleteFleetsFleetIdMembersMemberId) | **DELETE** /fleets/{fleet_id}/members/{member_id} | Kick fleet member |
| [**deleteFleetsFleetIdSquadsSquadId()**](FleetsApi.md#deleteFleetsFleetIdSquadsSquadId) | **DELETE** /fleets/{fleet_id}/squads/{squad_id} | Delete fleet squad |
| [**deleteFleetsFleetIdWingsWingId()**](FleetsApi.md#deleteFleetsFleetIdWingsWingId) | **DELETE** /fleets/{fleet_id}/wings/{wing_id} | Delete fleet wing |
| [**getCharactersCharacterIdFleet()**](FleetsApi.md#getCharactersCharacterIdFleet) | **GET** /characters/{character_id}/fleet | Get character fleet info |
| [**getFleetsFleetId()**](FleetsApi.md#getFleetsFleetId) | **GET** /fleets/{fleet_id} | Get fleet information |
| [**getFleetsFleetIdMembers()**](FleetsApi.md#getFleetsFleetIdMembers) | **GET** /fleets/{fleet_id}/members | Get fleet members |
| [**getFleetsFleetIdWings()**](FleetsApi.md#getFleetsFleetIdWings) | **GET** /fleets/{fleet_id}/wings | Get fleet wings |
| [**postFleetsFleetIdMembers()**](FleetsApi.md#postFleetsFleetIdMembers) | **POST** /fleets/{fleet_id}/members | Create fleet invitation |
| [**postFleetsFleetIdWings()**](FleetsApi.md#postFleetsFleetIdWings) | **POST** /fleets/{fleet_id}/wings | Create fleet wing |
| [**postFleetsFleetIdWingsWingIdSquads()**](FleetsApi.md#postFleetsFleetIdWingsWingIdSquads) | **POST** /fleets/{fleet_id}/wings/{wing_id}/squads | Create fleet squad |
| [**putFleetsFleetId()**](FleetsApi.md#putFleetsFleetId) | **PUT** /fleets/{fleet_id} | Update fleet |
| [**putFleetsFleetIdMembersMemberId()**](FleetsApi.md#putFleetsFleetIdMembersMemberId) | **PUT** /fleets/{fleet_id}/members/{member_id} | Move fleet member |
| [**putFleetsFleetIdSquadsSquadId()**](FleetsApi.md#putFleetsFleetIdSquadsSquadId) | **PUT** /fleets/{fleet_id}/squads/{squad_id} | Rename fleet squad |
| [**putFleetsFleetIdWingsWingId()**](FleetsApi.md#putFleetsFleetIdWingsWingId) | **PUT** /fleets/{fleet_id}/wings/{wing_id} | Rename fleet wing |


## `deleteFleetsFleetIdMembersMemberId()`

```php
deleteFleetsFleetIdMembersMemberId($fleet_id, $member_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): mixed
```

Kick fleet member

Kick a fleet member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$member_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->deleteFleetsFleetIdMembersMemberId($fleet_id, $member_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **member_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFleetsFleetIdSquadsSquadId()`

```php
deleteFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): mixed
```

Delete fleet squad

Delete a fleet squad, only empty squads can be deleted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$squad_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->deleteFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdSquadsSquadId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **squad_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFleetsFleetIdWingsWingId()`

```php
deleteFleetsFleetIdWingsWingId($fleet_id, $wing_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): mixed
```

Delete fleet wing

Delete a fleet wing, only empty wings can be deleted. The wing may contain squads, but the squads must be empty

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$wing_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->deleteFleetsFleetIdWingsWingId($fleet_id, $wing_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdWingsWingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **wing_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdFleet()`

```php
getCharactersCharacterIdFleet($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdFleetGet
```

Get character fleet info

Return the fleet ID the character is in, if any.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
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
    $result = $apiInstance->getCharactersCharacterIdFleet($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getCharactersCharacterIdFleet: ', $e->getMessage(), PHP_EOL;
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

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdFleetGet**](../Model/CharactersCharacterIdFleetGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFleetsFleetId()`

```php
getFleetsFleetId($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\FleetsFleetIdGet
```

Get fleet information

Return details about a fleet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getFleetsFleetId($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\FleetsFleetIdGet**](../Model/FleetsFleetIdGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFleetsFleetIdMembers()`

```php
getFleetsFleetIdMembers($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\FleetsFleetIdMembersGetInner[]
```

Get fleet members

Return information about fleet members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getFleetsFleetIdMembers($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\FleetsFleetIdMembersGetInner[]**](../Model/FleetsFleetIdMembersGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFleetsFleetIdWings()`

```php
getFleetsFleetIdWings($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\FleetsFleetIdWingsGetInner[]
```

Get fleet wings

Return information about wings in a fleet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getFleetsFleetIdWings($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetIdWings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\FleetsFleetIdWingsGetInner[]**](../Model/FleetsFleetIdWingsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFleetsFleetIdMembers()`

```php
postFleetsFleetIdMembers($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $post_fleets_fleet_id_members_request): mixed
```

Create fleet invitation

Invite a character into the fleet. If a character has a CSPA charge set it is not possible to invite them to the fleet using ESI

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$post_fleets_fleet_id_members_request = new \Tkhamez\Eve\API\Model\PostFleetsFleetIdMembersRequest(); // \Tkhamez\Eve\API\Model\PostFleetsFleetIdMembersRequest

try {
    $result = $apiInstance->postFleetsFleetIdMembers($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $post_fleets_fleet_id_members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **post_fleets_fleet_id_members_request** | [**\Tkhamez\Eve\API\Model\PostFleetsFleetIdMembersRequest**](../Model/PostFleetsFleetIdMembersRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFleetsFleetIdWings()`

```php
postFleetsFleetIdWings($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\FleetsFleetIdWingsPost
```

Create fleet wing

Create a new wing in a fleet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->postFleetsFleetIdWings($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdWings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\FleetsFleetIdWingsPost**](../Model/FleetsFleetIdWingsPost.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFleetsFleetIdWingsWingIdSquads()`

```php
postFleetsFleetIdWingsWingIdSquads($fleet_id, $wing_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\FleetsFleetIdWingsWingIdSquadsPost
```

Create fleet squad

Create a new squad in a fleet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$wing_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->postFleetsFleetIdWingsWingIdSquads($fleet_id, $wing_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdWingsWingIdSquads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **wing_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\FleetsFleetIdWingsWingIdSquadsPost**](../Model/FleetsFleetIdWingsWingIdSquadsPost.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFleetsFleetId()`

```php
putFleetsFleetId($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $put_fleets_fleet_id_request): mixed
```

Update fleet

Update settings about a fleet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$put_fleets_fleet_id_request = new \Tkhamez\Eve\API\Model\PutFleetsFleetIdRequest(); // \Tkhamez\Eve\API\Model\PutFleetsFleetIdRequest

try {
    $result = $apiInstance->putFleetsFleetId($fleet_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $put_fleets_fleet_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **put_fleets_fleet_id_request** | [**\Tkhamez\Eve\API\Model\PutFleetsFleetIdRequest**](../Model/PutFleetsFleetIdRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFleetsFleetIdMembersMemberId()`

```php
putFleetsFleetIdMembersMemberId($fleet_id, $member_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $put_fleets_fleet_id_members_member_id_request): mixed
```

Move fleet member

Move a fleet member around

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$member_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$put_fleets_fleet_id_members_member_id_request = new \Tkhamez\Eve\API\Model\PutFleetsFleetIdMembersMemberIdRequest(); // \Tkhamez\Eve\API\Model\PutFleetsFleetIdMembersMemberIdRequest

try {
    $result = $apiInstance->putFleetsFleetIdMembersMemberId($fleet_id, $member_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $put_fleets_fleet_id_members_member_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **member_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **put_fleets_fleet_id_members_member_id_request** | [**\Tkhamez\Eve\API\Model\PutFleetsFleetIdMembersMemberIdRequest**](../Model/PutFleetsFleetIdMembersMemberIdRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFleetsFleetIdSquadsSquadId()`

```php
putFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $put_fleets_fleet_id_squads_squad_id_request): mixed
```

Rename fleet squad

Rename a fleet squad

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$squad_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$put_fleets_fleet_id_squads_squad_id_request = new \Tkhamez\Eve\API\Model\PutFleetsFleetIdSquadsSquadIdRequest(); // \Tkhamez\Eve\API\Model\PutFleetsFleetIdSquadsSquadIdRequest

try {
    $result = $apiInstance->putFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $put_fleets_fleet_id_squads_squad_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdSquadsSquadId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **squad_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **put_fleets_fleet_id_squads_squad_id_request** | [**\Tkhamez\Eve\API\Model\PutFleetsFleetIdSquadsSquadIdRequest**](../Model/PutFleetsFleetIdSquadsSquadIdRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFleetsFleetIdWingsWingId()`

```php
putFleetsFleetIdWingsWingId($fleet_id, $wing_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $put_fleets_fleet_id_squads_squad_id_request): mixed
```

Rename fleet wing

Rename a fleet wing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int
$wing_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.
$put_fleets_fleet_id_squads_squad_id_request = new \Tkhamez\Eve\API\Model\PutFleetsFleetIdSquadsSquadIdRequest(); // \Tkhamez\Eve\API\Model\PutFleetsFleetIdSquadsSquadIdRequest

try {
    $result = $apiInstance->putFleetsFleetIdWingsWingId($fleet_id, $wing_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant, $put_fleets_fleet_id_squads_squad_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdWingsWingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**|  | |
| **wing_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |
| **put_fleets_fleet_id_squads_squad_id_request** | [**\Tkhamez\Eve\API\Model\PutFleetsFleetIdSquadsSquadIdRequest**](../Model/PutFleetsFleetIdSquadsSquadIdRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
