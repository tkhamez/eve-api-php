# Tkhamez\Eve\API\CorporationApi

All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCorporationsCorporationId()**](CorporationApi.md#getCorporationsCorporationId) | **GET** /corporations/{corporation_id} | Get corporation information |
| [**getCorporationsCorporationIdAlliancehistory()**](CorporationApi.md#getCorporationsCorporationIdAlliancehistory) | **GET** /corporations/{corporation_id}/alliancehistory | Get alliance history |
| [**getCorporationsCorporationIdBlueprints()**](CorporationApi.md#getCorporationsCorporationIdBlueprints) | **GET** /corporations/{corporation_id}/blueprints | Get corporation blueprints |
| [**getCorporationsCorporationIdContainersLogs()**](CorporationApi.md#getCorporationsCorporationIdContainersLogs) | **GET** /corporations/{corporation_id}/containers/logs | Get all corporation ALSC logs |
| [**getCorporationsCorporationIdDivisions()**](CorporationApi.md#getCorporationsCorporationIdDivisions) | **GET** /corporations/{corporation_id}/divisions | Get corporation divisions |
| [**getCorporationsCorporationIdFacilities()**](CorporationApi.md#getCorporationsCorporationIdFacilities) | **GET** /corporations/{corporation_id}/facilities | Get corporation facilities |
| [**getCorporationsCorporationIdIcons()**](CorporationApi.md#getCorporationsCorporationIdIcons) | **GET** /corporations/{corporation_id}/icons | Get corporation icon |
| [**getCorporationsCorporationIdMedals()**](CorporationApi.md#getCorporationsCorporationIdMedals) | **GET** /corporations/{corporation_id}/medals | Get corporation medals |
| [**getCorporationsCorporationIdMedalsIssued()**](CorporationApi.md#getCorporationsCorporationIdMedalsIssued) | **GET** /corporations/{corporation_id}/medals/issued | Get corporation issued medals |
| [**getCorporationsCorporationIdMembers()**](CorporationApi.md#getCorporationsCorporationIdMembers) | **GET** /corporations/{corporation_id}/members | Get corporation members |
| [**getCorporationsCorporationIdMembersLimit()**](CorporationApi.md#getCorporationsCorporationIdMembersLimit) | **GET** /corporations/{corporation_id}/members/limit | Get corporation member limit |
| [**getCorporationsCorporationIdMembersTitles()**](CorporationApi.md#getCorporationsCorporationIdMembersTitles) | **GET** /corporations/{corporation_id}/members/titles | Get corporation&#39;s members&#39; titles |
| [**getCorporationsCorporationIdMembertracking()**](CorporationApi.md#getCorporationsCorporationIdMembertracking) | **GET** /corporations/{corporation_id}/membertracking | Track corporation members |
| [**getCorporationsCorporationIdRoles()**](CorporationApi.md#getCorporationsCorporationIdRoles) | **GET** /corporations/{corporation_id}/roles | Get corporation member roles |
| [**getCorporationsCorporationIdRolesHistory()**](CorporationApi.md#getCorporationsCorporationIdRolesHistory) | **GET** /corporations/{corporation_id}/roles/history | Get corporation member roles history |
| [**getCorporationsCorporationIdShareholders()**](CorporationApi.md#getCorporationsCorporationIdShareholders) | **GET** /corporations/{corporation_id}/shareholders | Get corporation shareholders |
| [**getCorporationsCorporationIdStandings()**](CorporationApi.md#getCorporationsCorporationIdStandings) | **GET** /corporations/{corporation_id}/standings | Get corporation standings |
| [**getCorporationsCorporationIdStarbases()**](CorporationApi.md#getCorporationsCorporationIdStarbases) | **GET** /corporations/{corporation_id}/starbases | Get corporation starbases (POSes) |
| [**getCorporationsCorporationIdStarbasesStarbaseId()**](CorporationApi.md#getCorporationsCorporationIdStarbasesStarbaseId) | **GET** /corporations/{corporation_id}/starbases/{starbase_id} | Get starbase (POS) detail |
| [**getCorporationsCorporationIdStructures()**](CorporationApi.md#getCorporationsCorporationIdStructures) | **GET** /corporations/{corporation_id}/structures | Get corporation structures |
| [**getCorporationsCorporationIdTitles()**](CorporationApi.md#getCorporationsCorporationIdTitles) | **GET** /corporations/{corporation_id}/titles | Get corporation titles |
| [**getCorporationsNpccorps()**](CorporationApi.md#getCorporationsNpccorps) | **GET** /corporations/npccorps | Get npc corporations |


## `getCorporationsCorporationId()`

```php
getCorporationsCorporationId($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdGet
```

Get corporation information

Public information about a corporation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationId($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdGet**](../Model/CorporationsCorporationIdGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdAlliancehistory()`

```php
getCorporationsCorporationIdAlliancehistory($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdAlliancehistoryGetInner[]
```

Get alliance history

Get a list of all the alliances a corporation has been a member of

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdAlliancehistory($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdAlliancehistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdAlliancehistoryGetInner[]**](../Model/CorporationsCorporationIdAlliancehistoryGetInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdBlueprints()`

```php
getCorporationsCorporationIdBlueprints($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdBlueprintsGetInner[]
```

Get corporation blueprints

Returns a list of blueprints the corporation owns  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdBlueprints($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdBlueprints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdBlueprintsGetInner[]**](../Model/CorporationsCorporationIdBlueprintsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContainersLogs()`

```php
getCorporationsCorporationIdContainersLogs($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdContainersLogsGetInner[]
```

Get all corporation ALSC logs

Returns logs recorded in the past seven days from all audit log secure containers (ALSC) owned by a given corporation  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdContainersLogs($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdContainersLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdContainersLogsGetInner[]**](../Model/CorporationsCorporationIdContainersLogsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdDivisions()`

```php
getCorporationsCorporationIdDivisions($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdDivisionsGet
```

Get corporation divisions

Return corporation hangar and wallet division names, only show if a division is not using the default name  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdDivisions($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdDivisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdDivisionsGet**](../Model/CorporationsCorporationIdDivisionsGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdFacilities()`

```php
getCorporationsCorporationIdFacilities($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdFacilitiesGetInner[]
```

Get corporation facilities

Return a corporation's facilities  Requires one of the following EVE corporation role(s): Factory_Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdFacilities($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdFacilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdFacilitiesGetInner[]**](../Model/CorporationsCorporationIdFacilitiesGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdIcons()`

```php
getCorporationsCorporationIdIcons($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdIconsGet
```

Get corporation icon

Get the icon urls for a corporation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdIcons($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdIcons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdIconsGet**](../Model/CorporationsCorporationIdIconsGet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMedals()`

```php
getCorporationsCorporationIdMedals($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdMedalsGetInner[]
```

Get corporation medals

Returns a corporation's medals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdMedals($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMedals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdMedalsGetInner[]**](../Model/CorporationsCorporationIdMedalsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMedalsIssued()`

```php
getCorporationsCorporationIdMedalsIssued($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdMedalsIssuedGetInner[]
```

Get corporation issued medals

Returns medals issued by a corporation  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdMedalsIssued($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMedalsIssued: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdMedalsIssuedGetInner[]**](../Model/CorporationsCorporationIdMedalsIssuedGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMembers()`

```php
getCorporationsCorporationIdMembers($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): int[]
```

Get corporation members

Return the current member list of a corporation, the token's character need to be a member of the corporation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdMembers($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
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

## `getCorporationsCorporationIdMembersLimit()`

```php
getCorporationsCorporationIdMembersLimit($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): int
```

Get corporation member limit

Return a corporation's member limit, not including CEO himself  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdMembersLimit($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembersLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMembersTitles()`

```php
getCorporationsCorporationIdMembersTitles($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdMembersTitlesGetInner[]
```

Get corporation's members' titles

Returns a corporation's members' titles  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdMembersTitles($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembersTitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdMembersTitlesGetInner[]**](../Model/CorporationsCorporationIdMembersTitlesGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdMembertracking()`

```php
getCorporationsCorporationIdMembertracking($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdMembertrackingGetInner[]
```

Track corporation members

Returns additional information about a corporation's members which helps tracking their activities  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdMembertracking($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembertracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdMembertrackingGetInner[]**](../Model/CorporationsCorporationIdMembertrackingGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdRoles()`

```php
getCorporationsCorporationIdRoles($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdRolesGetInner[]
```

Get corporation member roles

Return the roles of all members if the character has the personnel manager role or any grantable role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdRoles($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdRolesGetInner[]**](../Model/CorporationsCorporationIdRolesGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdRolesHistory()`

```php
getCorporationsCorporationIdRolesHistory($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdRolesHistoryGetInner[]
```

Get corporation member roles history

Return how roles have changed for a coporation's members, up to a month  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdRolesHistory($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdRolesHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdRolesHistoryGetInner[]**](../Model/CorporationsCorporationIdRolesHistoryGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdShareholders()`

```php
getCorporationsCorporationIdShareholders($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdShareholdersGetInner[]
```

Get corporation shareholders

Return the current shareholders of a corporation.  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdShareholders($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdShareholders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdShareholdersGetInner[]**](../Model/CorporationsCorporationIdShareholdersGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdStandings()`

```php
getCorporationsCorporationIdStandings($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdStandingsGetInner[]
```

Get corporation standings

Return corporation standings from agents, NPC corporations, and factions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdStandings($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStandings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdStandingsGetInner[]**](../Model/CharactersCharacterIdStandingsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdStarbases()`

```php
getCorporationsCorporationIdStarbases($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdStarbasesGetInner[]
```

Get corporation starbases (POSes)

Returns list of corporation starbases (POSes)  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdStarbases($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStarbases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdStarbasesGetInner[]**](../Model/CorporationsCorporationIdStarbasesGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdStarbasesStarbaseId()`

```php
getCorporationsCorporationIdStarbasesStarbaseId($corporation_id, $starbase_id, $system_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdStarbasesStarbaseIdGet
```

Get starbase (POS) detail

Returns various settings and fuels of a starbase (POS)  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$starbase_id = 56; // int
$system_id = 56; // int
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdStarbasesStarbaseId($corporation_id, $starbase_id, $system_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStarbasesStarbaseId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **starbase_id** | **int**|  | |
| **system_id** | **int**|  | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdStarbasesStarbaseIdGet**](../Model/CorporationsCorporationIdStarbasesStarbaseIdGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdStructures()`

```php
getCorporationsCorporationIdStructures($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdStructuresGetInner[]
```

Get corporation structures

Get a list of corporation structures. This route's version includes the changes to structures detailed in this blog: https://www.eveonline.com/article/upwell-2.0-structures-changes-coming-on-february-13th  Requires one of the following EVE corporation role(s): Station_Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$page = 56; // int
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdStructures($corporation_id, $x_compatibility_date, $page, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStructures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdStructuresGetInner[]**](../Model/CorporationsCorporationIdStructuresGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdTitles()`

```php
getCorporationsCorporationIdTitles($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdTitlesGetInner[]
```

Get corporation titles

Returns a corporation's titles  Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsCorporationIdTitles($corporation_id, $x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdTitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **x_compatibility_date** | **\DateTime**| The compatibility date for the request. | |
| **accept_language** | **string**| The language to use for the response. Defaults to &#39;en&#39;. | [optional] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_tenant** | **string**| The tenant ID for the request. Defaults to &#39;tranquility&#39;. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdTitlesGetInner[]**](../Model/CorporationsCorporationIdTitlesGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsNpccorps()`

```php
getCorporationsNpccorps($x_compatibility_date, $accept_language, $if_none_match, $x_tenant): int[]
```

Get npc corporations

Get a list of npc corporations  This route expires daily at 11:05

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_compatibility_date = 2020-01-01; // \DateTime | The compatibility date for the request.
$accept_language = en; // string | The language to use for the response. Defaults to 'en'.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_tenant = tranquility; // string | The tenant ID for the request. Defaults to 'tranquility'.

try {
    $result = $apiInstance->getCorporationsNpccorps($x_compatibility_date, $accept_language, $if_none_match, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsNpccorps: ', $e->getMessage(), PHP_EOL;
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
