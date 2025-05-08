# Swagger\Client\Eve\FleetsApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFleetsFleetIdMembersMemberId()**](FleetsApi.md#deleteFleetsFleetIdMembersMemberId) | **DELETE** /v1/fleets/{fleet_id}/members/{member_id}/ | Kick fleet member |
| [**deleteFleetsFleetIdSquadsSquadId()**](FleetsApi.md#deleteFleetsFleetIdSquadsSquadId) | **DELETE** /v1/fleets/{fleet_id}/squads/{squad_id}/ | Delete fleet squad |
| [**deleteFleetsFleetIdWingsWingId()**](FleetsApi.md#deleteFleetsFleetIdWingsWingId) | **DELETE** /v1/fleets/{fleet_id}/wings/{wing_id}/ | Delete fleet wing |
| [**getCharactersCharacterIdFleet()**](FleetsApi.md#getCharactersCharacterIdFleet) | **GET** /v1/characters/{character_id}/fleet/ | Get character fleet info |
| [**getFleetsFleetId()**](FleetsApi.md#getFleetsFleetId) | **GET** /v1/fleets/{fleet_id}/ | Get fleet information |
| [**getFleetsFleetIdMembers()**](FleetsApi.md#getFleetsFleetIdMembers) | **GET** /v1/fleets/{fleet_id}/members/ | Get fleet members |
| [**getFleetsFleetIdWings()**](FleetsApi.md#getFleetsFleetIdWings) | **GET** /v1/fleets/{fleet_id}/wings/ | Get fleet wings |
| [**postFleetsFleetIdMembers()**](FleetsApi.md#postFleetsFleetIdMembers) | **POST** /v1/fleets/{fleet_id}/members/ | Create fleet invitation |
| [**postFleetsFleetIdWings()**](FleetsApi.md#postFleetsFleetIdWings) | **POST** /v1/fleets/{fleet_id}/wings/ | Create fleet wing |
| [**postFleetsFleetIdWingsWingIdSquads()**](FleetsApi.md#postFleetsFleetIdWingsWingIdSquads) | **POST** /v1/fleets/{fleet_id}/wings/{wing_id}/squads/ | Create fleet squad |
| [**putFleetsFleetId()**](FleetsApi.md#putFleetsFleetId) | **PUT** /v1/fleets/{fleet_id}/ | Update fleet |
| [**putFleetsFleetIdMembersMemberId()**](FleetsApi.md#putFleetsFleetIdMembersMemberId) | **PUT** /v1/fleets/{fleet_id}/members/{member_id}/ | Move fleet member |
| [**putFleetsFleetIdSquadsSquadId()**](FleetsApi.md#putFleetsFleetIdSquadsSquadId) | **PUT** /v1/fleets/{fleet_id}/squads/{squad_id}/ | Rename fleet squad |
| [**putFleetsFleetIdWingsWingId()**](FleetsApi.md#putFleetsFleetIdWingsWingId) | **PUT** /v1/fleets/{fleet_id}/wings/{wing_id}/ | Rename fleet wing |


## `deleteFleetsFleetIdMembersMemberId()`

```php
deleteFleetsFleetIdMembersMemberId($fleet_id, $member_id, $datasource, $token)
```

Kick fleet member

Kick a fleet member  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$member_id = 56; // int | The character ID of a member in this fleet
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteFleetsFleetIdMembersMemberId($fleet_id, $member_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **member_id** | **int**| The character ID of a member in this fleet | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFleetsFleetIdSquadsSquadId()`

```php
deleteFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $datasource, $token)
```

Delete fleet squad

Delete a fleet squad, only empty squads can be deleted  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$squad_id = 56; // int | The squad to delete
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdSquadsSquadId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **squad_id** | **int**| The squad to delete | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFleetsFleetIdWingsWingId()`

```php
deleteFleetsFleetIdWingsWingId($fleet_id, $wing_id, $datasource, $token)
```

Delete fleet wing

Delete a fleet wing, only empty wings can be deleted. The wing may contain squads, but the squads must be empty  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$wing_id = 56; // int | The wing to delete
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->deleteFleetsFleetIdWingsWingId($fleet_id, $wing_id, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->deleteFleetsFleetIdWingsWingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **wing_id** | **int**| The wing to delete | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdFleet()`

```php
getCharactersCharacterIdFleet($character_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdFleetOk
```

Get character fleet info

Return the fleet ID the character is in, if any.  ---  This route is cached for up to 60 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdFleet($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getCharactersCharacterIdFleet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| An EVE character ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdFleetOk**](../Model/GetCharactersCharacterIdFleetOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFleetsFleetId()`

```php
getFleetsFleetId($fleet_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetFleetsFleetIdOk
```

Get fleet information

Return details about a fleet  ---  This route is cached for up to 5 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getFleetsFleetId($fleet_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetFleetsFleetIdOk**](../Model/GetFleetsFleetIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFleetsFleetIdMembers()`

```php
getFleetsFleetIdMembers($fleet_id, $accept_language, $datasource, $if_none_match, $language, $token): \Swagger\Client\Eve\Model\GetFleetsFleetIdMembers200Ok[]
```

Get fleet members

Return information about fleet members  ---  This route is cached for up to 5 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getFleetsFleetIdMembers($fleet_id, $accept_language, $datasource, $if_none_match, $language, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;] |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetFleetsFleetIdMembers200Ok[]**](../Model/GetFleetsFleetIdMembers200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFleetsFleetIdWings()`

```php
getFleetsFleetIdWings($fleet_id, $accept_language, $datasource, $if_none_match, $language, $token): \Swagger\Client\Eve\Model\GetFleetsFleetIdWings200Ok[]
```

Get fleet wings

Return information about wings in a fleet  ---  This route is cached for up to 5 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$accept_language = 'en'; // string | Language to use in the response
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$language = 'en'; // string | Language to use in the response, takes precedence over Accept-Language
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getFleetsFleetIdWings($fleet_id, $accept_language, $datasource, $if_none_match, $language, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->getFleetsFleetIdWings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **accept_language** | **string**| Language to use in the response | [optional] [default to &#39;en&#39;] |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **language** | **string**| Language to use in the response, takes precedence over Accept-Language | [optional] [default to &#39;en&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetFleetsFleetIdWings200Ok[]**](../Model/GetFleetsFleetIdWings200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFleetsFleetIdMembers()`

```php
postFleetsFleetIdMembers($fleet_id, $invitation, $datasource, $token)
```

Create fleet invitation

Invite a character into the fleet. If a character has a CSPA charge set it is not possible to invite them to the fleet using ESI  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$invitation = new \Swagger\Client\Eve\Model\PostFleetsFleetIdMembersInvitation(); // \Swagger\Client\Eve\Model\PostFleetsFleetIdMembersInvitation | Details of the invitation
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->postFleetsFleetIdMembers($fleet_id, $invitation, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **invitation** | [**\Swagger\Client\Eve\Model\PostFleetsFleetIdMembersInvitation**](../Model/PostFleetsFleetIdMembersInvitation.md)| Details of the invitation | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFleetsFleetIdWings()`

```php
postFleetsFleetIdWings($fleet_id, $datasource, $token): \Swagger\Client\Eve\Model\PostFleetsFleetIdWingsCreated
```

Create fleet wing

Create a new wing in a fleet  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->postFleetsFleetIdWings($fleet_id, $datasource, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdWings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\PostFleetsFleetIdWingsCreated**](../Model/PostFleetsFleetIdWingsCreated.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFleetsFleetIdWingsWingIdSquads()`

```php
postFleetsFleetIdWingsWingIdSquads($fleet_id, $wing_id, $datasource, $token): \Swagger\Client\Eve\Model\PostFleetsFleetIdWingsWingIdSquadsCreated
```

Create fleet squad

Create a new squad in a fleet  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$wing_id = 56; // int | The wing_id to create squad in
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->postFleetsFleetIdWingsWingIdSquads($fleet_id, $wing_id, $datasource, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->postFleetsFleetIdWingsWingIdSquads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **wing_id** | **int**| The wing_id to create squad in | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\PostFleetsFleetIdWingsWingIdSquadsCreated**](../Model/PostFleetsFleetIdWingsWingIdSquadsCreated.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFleetsFleetId()`

```php
putFleetsFleetId($fleet_id, $new_settings, $datasource, $token)
```

Update fleet

Update settings about a fleet  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$new_settings = new \Swagger\Client\Eve\Model\PutFleetsFleetIdNewSettings(); // \Swagger\Client\Eve\Model\PutFleetsFleetIdNewSettings | What to update for this fleet
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->putFleetsFleetId($fleet_id, $new_settings, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **new_settings** | [**\Swagger\Client\Eve\Model\PutFleetsFleetIdNewSettings**](../Model/PutFleetsFleetIdNewSettings.md)| What to update for this fleet | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFleetsFleetIdMembersMemberId()`

```php
putFleetsFleetIdMembersMemberId($fleet_id, $member_id, $movement, $datasource, $token)
```

Move fleet member

Move a fleet member around  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$member_id = 56; // int | The character ID of a member in this fleet
$movement = new \Swagger\Client\Eve\Model\PutFleetsFleetIdMembersMemberIdMovement(); // \Swagger\Client\Eve\Model\PutFleetsFleetIdMembersMemberIdMovement | Details of the invitation
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->putFleetsFleetIdMembersMemberId($fleet_id, $member_id, $movement, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **member_id** | **int**| The character ID of a member in this fleet | |
| **movement** | [**\Swagger\Client\Eve\Model\PutFleetsFleetIdMembersMemberIdMovement**](../Model/PutFleetsFleetIdMembersMemberIdMovement.md)| Details of the invitation | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFleetsFleetIdSquadsSquadId()`

```php
putFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $naming, $datasource, $token)
```

Rename fleet squad

Rename a fleet squad  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$squad_id = 56; // int | The squad to rename
$naming = new \Swagger\Client\Eve\Model\PutFleetsFleetIdSquadsSquadIdNaming(); // \Swagger\Client\Eve\Model\PutFleetsFleetIdSquadsSquadIdNaming | New name of the squad
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->putFleetsFleetIdSquadsSquadId($fleet_id, $squad_id, $naming, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdSquadsSquadId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **squad_id** | **int**| The squad to rename | |
| **naming** | [**\Swagger\Client\Eve\Model\PutFleetsFleetIdSquadsSquadIdNaming**](../Model/PutFleetsFleetIdSquadsSquadIdNaming.md)| New name of the squad | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFleetsFleetIdWingsWingId()`

```php
putFleetsFleetIdWingsWingId($fleet_id, $wing_id, $naming, $datasource, $token)
```

Rename fleet wing

Rename a fleet wing  ---

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\FleetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fleet_id = 56; // int | ID for a fleet
$wing_id = 56; // int | The wing to rename
$naming = new \Swagger\Client\Eve\Model\PutFleetsFleetIdWingsWingIdNaming(); // \Swagger\Client\Eve\Model\PutFleetsFleetIdWingsWingIdNaming | New name of the wing
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $apiInstance->putFleetsFleetIdWingsWingId($fleet_id, $wing_id, $naming, $datasource, $token);
} catch (Exception $e) {
    echo 'Exception when calling FleetsApi->putFleetsFleetIdWingsWingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fleet_id** | **int**| ID for a fleet | |
| **wing_id** | **int**| The wing to rename | |
| **naming** | [**\Swagger\Client\Eve\Model\PutFleetsFleetIdWingsWingIdNaming**](../Model/PutFleetsFleetIdWingsWingIdNaming.md)| New name of the wing | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
