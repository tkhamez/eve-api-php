# Tkhamez\Eve\API\ContactsApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCharactersCharacterIdContacts()**](ContactsApi.md#deleteCharactersCharacterIdContacts) | **DELETE** /characters/{character_id}/contacts | Delete contacts |
| [**getAlliancesAllianceIdContacts()**](ContactsApi.md#getAlliancesAllianceIdContacts) | **GET** /alliances/{alliance_id}/contacts | Get alliance contacts |
| [**getAlliancesAllianceIdContactsLabels()**](ContactsApi.md#getAlliancesAllianceIdContactsLabels) | **GET** /alliances/{alliance_id}/contacts/labels | Get alliance contact labels |
| [**getCharactersCharacterIdContacts()**](ContactsApi.md#getCharactersCharacterIdContacts) | **GET** /characters/{character_id}/contacts | Get contacts |
| [**getCharactersCharacterIdContactsLabels()**](ContactsApi.md#getCharactersCharacterIdContactsLabels) | **GET** /characters/{character_id}/contacts/labels | Get contact labels |
| [**getCorporationsCorporationIdContacts()**](ContactsApi.md#getCorporationsCorporationIdContacts) | **GET** /corporations/{corporation_id}/contacts | Get corporation contacts |
| [**getCorporationsCorporationIdContactsLabels()**](ContactsApi.md#getCorporationsCorporationIdContactsLabels) | **GET** /corporations/{corporation_id}/contacts/labels | Get corporation contact labels |
| [**postCharactersCharacterIdContacts()**](ContactsApi.md#postCharactersCharacterIdContacts) | **POST** /characters/{character_id}/contacts | Add contacts |
| [**putCharactersCharacterIdContacts()**](ContactsApi.md#putCharactersCharacterIdContacts) | **PUT** /characters/{character_id}/contacts | Edit contacts |


## `deleteCharactersCharacterIdContacts()`

```php
deleteCharactersCharacterIdContacts($character_id, $contact_ids, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): mixed
```

Delete contacts

Bulk delete contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$contact_ids = array(56); // int[]
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->deleteCharactersCharacterIdContacts($character_id, $contact_ids, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **contact_ids** | [**int[]**](../Model/int.md)|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

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

## `getAlliancesAllianceIdContacts()`

```php
getAlliancesAllianceIdContacts($alliance_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\AlliancesAllianceIdContactsGetInner[]
```

Get alliance contacts

Return contacts of an alliance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alliance_id = 56; // int | The ID of the alliance
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getAlliancesAllianceIdContacts($alliance_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAlliancesAllianceIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alliance_id** | **int**| The ID of the alliance | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\AlliancesAllianceIdContactsGetInner[]**](../Model/AlliancesAllianceIdContactsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAlliancesAllianceIdContactsLabels()`

```php
getAlliancesAllianceIdContactsLabels($alliance_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\AlliancesAllianceIdContactsLabelsGetInner[]
```

Get alliance contact labels

Return custom labels for an alliance's contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alliance_id = 56; // int | The ID of the alliance
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getAlliancesAllianceIdContactsLabels($alliance_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAlliancesAllianceIdContactsLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alliance_id** | **int**| The ID of the alliance | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\AlliancesAllianceIdContactsLabelsGetInner[]**](../Model/AlliancesAllianceIdContactsLabelsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdContacts()`

```php
getCharactersCharacterIdContacts($character_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdContactsGetInner[]
```

Get contacts

Return contacts of a character

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
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
    $result = $apiInstance->getCharactersCharacterIdContacts($character_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
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

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdContactsGetInner[]**](../Model/CharactersCharacterIdContactsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdContactsLabels()`

```php
getCharactersCharacterIdContactsLabels($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\AlliancesAllianceIdContactsLabelsGetInner[]
```

Get contact labels

Return custom labels for a character's contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCharactersCharacterIdContactsLabels($character_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCharactersCharacterIdContactsLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\AlliancesAllianceIdContactsLabelsGetInner[]**](../Model/AlliancesAllianceIdContactsLabelsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContacts()`

```php
getCorporationsCorporationIdContacts($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdContactsGetInner[]
```

Get corporation contacts

Return contacts of a corporation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
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
    $result = $apiInstance->getCorporationsCorporationIdContacts($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCorporationsCorporationIdContacts: ', $e->getMessage(), PHP_EOL;
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

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdContactsGetInner[]**](../Model/CorporationsCorporationIdContactsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContactsLabels()`

```php
getCorporationsCorporationIdContactsLabels($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\AlliancesAllianceIdContactsLabelsGetInner[]
```

Get corporation contact labels

Return custom labels for a corporation's contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsCorporationIdContactsLabels($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCorporationsCorporationIdContactsLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\AlliancesAllianceIdContactsLabelsGetInner[]**](../Model/AlliancesAllianceIdContactsLabelsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCharactersCharacterIdContacts()`

```php
postCharactersCharacterIdContacts($character_id, $standing, $x_compatibility_date, $label_ids, $watched, $accept_language, $if_none_match, $x_tenant, $request_body): int[]
```

Add contacts

Bulk add contacts with same settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$standing = 3.4; // float
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$label_ids = array(56); // int[]
$watched = false; // bool
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->postCharactersCharacterIdContacts($character_id, $standing, $x_compatibility_date, $label_ids, $watched, $accept_language, $if_none_match, $x_tenant, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->postCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **standing** | **float**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **label_ids** | [**int[]**](../Model/int.md)|  | [optional] |
| **watched** | **bool**|  | [optional] [default to false] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **request_body** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

**int[]**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCharactersCharacterIdContacts()`

```php
putCharactersCharacterIdContacts($character_id, $standing, $x_compatibility_date, $label_ids, $watched, $accept_language, $if_none_match, $x_tenant, $request_body): mixed
```

Edit contacts

Bulk edit contacts with same settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$standing = 3.4; // float
$x_compatibility_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The compatibility date for the request.
$label_ids = array(56); // int[]
$watched = false; // bool
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = ; // string | The tenant ID for the request.
$request_body = array(56); // int[]

try {
    $result = $apiInstance->putCharactersCharacterIdContacts($character_id, $standing, $x_compatibility_date, $label_ids, $watched, $accept_language, $if_none_match, $x_tenant, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->putCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **standing** | **float**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **label_ids** | [**int[]**](../Model/int.md)|  | [optional] |
| **watched** | **bool**|  | [optional] [default to false] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **request_body** | [**int[]**](../Model/int.md)|  | [optional] |

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
