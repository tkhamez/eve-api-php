# Tkhamez\Eve\API\ContractsApi



All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersCharacterIdContracts()**](ContractsApi.md#getCharactersCharacterIdContracts) | **GET** /characters/{character_id}/contracts | Get contracts |
| [**getCharactersCharacterIdContractsContractIdBids()**](ContractsApi.md#getCharactersCharacterIdContractsContractIdBids) | **GET** /characters/{character_id}/contracts/{contract_id}/bids | Get contract bids |
| [**getCharactersCharacterIdContractsContractIdItems()**](ContractsApi.md#getCharactersCharacterIdContractsContractIdItems) | **GET** /characters/{character_id}/contracts/{contract_id}/items | Get contract items |
| [**getContractsPublicBidsContractId()**](ContractsApi.md#getContractsPublicBidsContractId) | **GET** /contracts/public/bids/{contract_id} | Get public contract bids |
| [**getContractsPublicItemsContractId()**](ContractsApi.md#getContractsPublicItemsContractId) | **GET** /contracts/public/items/{contract_id} | Get public contract items |
| [**getContractsPublicRegionId()**](ContractsApi.md#getContractsPublicRegionId) | **GET** /contracts/public/{region_id} | Get public contracts |
| [**getCorporationsCorporationIdContracts()**](ContractsApi.md#getCorporationsCorporationIdContracts) | **GET** /corporations/{corporation_id}/contracts | Get corporation contracts |
| [**getCorporationsCorporationIdContractsContractIdBids()**](ContractsApi.md#getCorporationsCorporationIdContractsContractIdBids) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/bids | Get corporation contract bids |
| [**getCorporationsCorporationIdContractsContractIdItems()**](ContractsApi.md#getCorporationsCorporationIdContractsContractIdItems) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/items | Get corporation contract items |


## `getCharactersCharacterIdContracts()`

```php
getCharactersCharacterIdContracts($character_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdContractsGetInner[]
```

Get contracts

Returns contracts available to a character, only if the character is issuer, acceptor or assignee. Only returns contracts no older than 30 days, or if the status is \"in_progress\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCharactersCharacterIdContracts($character_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdContractsGetInner[]**](../Model/CharactersCharacterIdContractsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdContractsContractIdBids()`

```php
getCharactersCharacterIdContractsContractIdBids($character_id, $contract_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdContractsContractIdBidsGetInner[]
```

Get contract bids

Lists bids on a particular auction contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$contract_id = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCharactersCharacterIdContractsContractIdBids($character_id, $contract_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContractsContractIdBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **contract_id** | **int**|  | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdContractsContractIdBidsGetInner[]**](../Model/CharactersCharacterIdContractsContractIdBidsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdContractsContractIdItems()`

```php
getCharactersCharacterIdContractsContractIdItems($character_id, $contract_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdContractsContractIdItemsGetInner[]
```

Get contract items

Lists items of a particular contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | The ID of the character
$contract_id = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCharactersCharacterIdContractsContractIdItems($character_id, $contract_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContractsContractIdItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| The ID of the character | |
| **contract_id** | **int**|  | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdContractsContractIdItemsGetInner[]**](../Model/CharactersCharacterIdContractsContractIdItemsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContractsPublicBidsContractId()`

```php
getContractsPublicBidsContractId($contract_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\ContractsPublicBidsContractIdGetInner[]
```

Get public contract bids

Lists bids on a public auction contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 56; // int
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getContractsPublicBidsContractId($contract_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getContractsPublicBidsContractId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **int**|  | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\ContractsPublicBidsContractIdGetInner[]**](../Model/ContractsPublicBidsContractIdGetInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContractsPublicItemsContractId()`

```php
getContractsPublicItemsContractId($contract_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\ContractsPublicItemsContractIdGetInner[]
```

Get public contract items

Lists items of a public contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 56; // int
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getContractsPublicItemsContractId($contract_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getContractsPublicItemsContractId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **int**|  | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\ContractsPublicItemsContractIdGetInner[]**](../Model/ContractsPublicItemsContractIdGetInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContractsPublicRegionId()`

```php
getContractsPublicRegionId($region_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\ContractsPublicRegionIdGetInner[]
```

Get public contracts

Returns a paginated list of all public contracts in the given region

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$region_id = 56; // int
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getContractsPublicRegionId($region_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getContractsPublicRegionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region_id** | **int**|  | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\ContractsPublicRegionIdGetInner[]**](../Model/ContractsPublicRegionIdGetInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContracts()`

```php
getCorporationsCorporationIdContracts($corporation_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CorporationsCorporationIdContractsGetInner[]
```

Get corporation contracts

Returns contracts available to a corporation, only if the corporation is issuer, acceptor or assignee. Only returns contracts no older than 30 days, or if the status is \"in_progress\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | The ID of the corporation
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsCorporationIdContracts($corporation_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| The ID of the corporation | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CorporationsCorporationIdContractsGetInner[]**](../Model/CorporationsCorporationIdContractsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContractsContractIdBids()`

```php
getCorporationsCorporationIdContractsContractIdBids($contract_id, $corporation_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdContractsContractIdBidsGetInner[]
```

Get corporation contract bids

Lists bids on a particular auction contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 56; // int
$corporation_id = 56; // int | The ID of the corporation
$page = 56; // int
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsCorporationIdContractsContractIdBids($contract_id, $corporation_id, $page, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContractsContractIdBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **int**|  | |
| **corporation_id** | **int**| The ID of the corporation | |
| **page** | **int**|  | [optional] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdContractsContractIdBidsGetInner[]**](../Model/CharactersCharacterIdContractsContractIdBidsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdContractsContractIdItems()`

```php
getCorporationsCorporationIdContractsContractIdItems($contract_id, $corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant): \Tkhamez\Eve\API\Model\CharactersCharacterIdContractsContractIdItemsGetInner[]
```

Get corporation contract items

Lists items of a particular contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_id = 56; // int
$corporation_id = 56; // int | The ID of the corporation
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2025-09-30'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.

try {
    $result = $apiInstance->getCorporationsCorporationIdContractsContractIdItems($contract_id, $corporation_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContractsContractIdItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **int**|  | |
| **corporation_id** | **int**| The ID of the corporation | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2025-09-30&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersCharacterIdContractsContractIdItemsGetInner[]**](../Model/CharactersCharacterIdContractsContractIdItemsGetInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
