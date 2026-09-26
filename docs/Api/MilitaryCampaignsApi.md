# Tkhamez\Eve\API\MilitaryCampaignsApi



All URIs are relative to https://esi.evetech.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersMilitaryCampaignsObjectivesListing()**](MilitaryCampaignsApi.md#getCharactersMilitaryCampaignsObjectivesListing) | **GET** /characters/{character_id}/military-campaigns/objectives | List character participation in military campaigns |
| [**getCharactersMilitaryCampaignsObjectivesParticipation()**](MilitaryCampaignsApi.md#getCharactersMilitaryCampaignsObjectivesParticipation) | **GET** /characters/{character_id}/military-campaigns/objectives/{objective_id} | Get character military campaign objective participation |
| [**getMilitaryCampaignsDetail()**](MilitaryCampaignsApi.md#getMilitaryCampaignsDetail) | **GET** /military-campaigns/{campaign_id} | Get military campaign details |
| [**getMilitaryCampaignsListing()**](MilitaryCampaignsApi.md#getMilitaryCampaignsListing) | **GET** /military-campaigns | List military campaigns |
| [**getMilitaryCampaignsObjectivesDetail()**](MilitaryCampaignsApi.md#getMilitaryCampaignsObjectivesDetail) | **GET** /military-campaigns/{campaign_id}/objectives/{objective_id} | Get military campaign objective details |
| [**getMilitaryCampaignsObjectivesListing()**](MilitaryCampaignsApi.md#getMilitaryCampaignsObjectivesListing) | **GET** /military-campaigns/{campaign_id}/objectives | List military campaign objectives |


## `getCharactersMilitaryCampaignsObjectivesListing()`

```php
getCharactersMilitaryCampaignsObjectivesListing($character_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersMilitaryCampaignsObjectivesListing
```

List character participation in military campaigns

Listing of the military campaign objectives the character has participated in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\MilitaryCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the character
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersMilitaryCampaignsObjectivesListing($character_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilitaryCampaignsApi->getCharactersMilitaryCampaignsObjectivesListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | [**Int**](../Model/.md)| The ID of the character | |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersMilitaryCampaignsObjectivesListing**](../Model/CharactersMilitaryCampaignsObjectivesListing.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersMilitaryCampaignsObjectivesParticipation()`

```php
getCharactersMilitaryCampaignsObjectivesParticipation($character_id, $objective_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\CharactersMilitaryCampaignsObjectivesParticipation
```

Get character military campaign objective participation

Show your participation in a military campaign objective.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Tkhamez\Eve\API\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tkhamez\Eve\API\Api\MilitaryCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = new \Tkhamez\Eve\API\Model\Int(); // Int | The ID of the character
$objective_id = 'objective_id_example'; // string | The ID of the objective
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getCharactersMilitaryCampaignsObjectivesParticipation($character_id, $objective_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilitaryCampaignsApi->getCharactersMilitaryCampaignsObjectivesParticipation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | [**Int**](../Model/.md)| The ID of the character | |
| **objective_id** | [**string**](../Model/.md)| The ID of the objective | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\CharactersMilitaryCampaignsObjectivesParticipation**](../Model/CharactersMilitaryCampaignsObjectivesParticipation.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMilitaryCampaignsDetail()`

```php
getMilitaryCampaignsDetail($campaign_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\MilitaryCampaignsDetail
```

Get military campaign details

Get the details of a military campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\MilitaryCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string | The ID of the military campaign
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getMilitaryCampaignsDetail($campaign_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilitaryCampaignsApi->getMilitaryCampaignsDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | [**string**](../Model/.md)| The ID of the military campaign | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\MilitaryCampaignsDetail**](../Model/MilitaryCampaignsDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMilitaryCampaignsListing()`

```php
getMilitaryCampaignsListing($accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\MilitaryCampaignsListing
```

List military campaigns

Listing of all active military campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\MilitaryCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getMilitaryCampaignsListing($accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilitaryCampaignsApi->getMilitaryCampaignsListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\MilitaryCampaignsListing**](../Model/MilitaryCampaignsListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMilitaryCampaignsObjectivesDetail()`

```php
getMilitaryCampaignsObjectivesDetail($campaign_id, $objective_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\MilitaryCampaignsObjectivesDetail
```

Get military campaign objective details

Get the details of an objective of a military campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\MilitaryCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string | The ID of the military campaign
$objective_id = 'objective_id_example'; // string | The ID of the objective
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getMilitaryCampaignsObjectivesDetail($campaign_id, $objective_id, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilitaryCampaignsApi->getMilitaryCampaignsObjectivesDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | [**string**](../Model/.md)| The ID of the military campaign | |
| **objective_id** | [**string**](../Model/.md)| The ID of the objective | |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\MilitaryCampaignsObjectivesDetail**](../Model/MilitaryCampaignsObjectivesDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMilitaryCampaignsObjectivesListing()`

```php
getMilitaryCampaignsObjectivesListing($campaign_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since): \Tkhamez\Eve\API\Model\MilitaryCampaignsObjectivesListing
```

List military campaign objectives

Listing of all active, completed or expired objectives of a military campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Tkhamez\Eve\API\Api\MilitaryCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 'campaign_id_example'; // string | The ID of the military campaign
$after = 'after_example'; // string | Return records from after this cursor (mutual exclusive with 'before'). '0' to start from the beginning.
$before = 'before_example'; // string | Return records from before this cursor (mutual exclusive with 'after'). '0' to start from the end.
$limit = 10; // int | The amount of records to retrieve per request.
$accept_language = 'en'; // string | The language to use for the response.
$if_none_match = 'if_none_match_example'; // string | The ETag of the previous request. A 304 will be returned if this matches the current ETag.
$x_compatibility_date = '2026-08-18'; // string | The compatibility date for the request.
$x_tenant = ; // string | The tenant ID for the request.
$if_modified_since = 'if_modified_since_example'; // string | The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date.

try {
    $result = $apiInstance->getMilitaryCampaignsObjectivesListing($campaign_id, $after, $before, $limit, $accept_language, $if_none_match, $x_compatibility_date, $x_tenant, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilitaryCampaignsApi->getMilitaryCampaignsObjectivesListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | [**string**](../Model/.md)| The ID of the military campaign | |
| **after** | **string**| Return records from after this cursor (mutual exclusive with &#39;before&#39;). &#39;0&#39; to start from the beginning. | [optional] |
| **before** | **string**| Return records from before this cursor (mutual exclusive with &#39;after&#39;). &#39;0&#39; to start from the end. | [optional] |
| **limit** | **int**| The amount of records to retrieve per request. | [optional] [default to 10] |
| **accept_language** | **string**| The language to use for the response. | [optional] [default to &#39;en&#39;] |
| **if_none_match** | **string**| The ETag of the previous request. A 304 will be returned if this matches the current ETag. | [optional] |
| **x_compatibility_date** | **string**| The compatibility date for the request. | [optional] [default to &#39;2026-08-18&#39;] |
| **x_tenant** | **string**| The tenant ID for the request. | [optional] [default to &#39;tranquility&#39;] |
| **if_modified_since** | **string**| The date the resource was last modified. A 304 will be returned if the resource has not been modified since this date. | [optional] |

### Return type

[**\Tkhamez\Eve\API\Model\MilitaryCampaignsObjectivesListing**](../Model/MilitaryCampaignsObjectivesListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
