# Swagger\Client\Eve\PlanetaryInteractionApi

All URIs are relative to https://esi.evetech.net/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCharactersCharacterIdPlanets()**](PlanetaryInteractionApi.md#getCharactersCharacterIdPlanets) | **GET** /characters/{character_id}/planets/ | Get colonies |
| [**getCharactersCharacterIdPlanetsPlanetId()**](PlanetaryInteractionApi.md#getCharactersCharacterIdPlanetsPlanetId) | **GET** /characters/{character_id}/planets/{planet_id}/ | Get colony layout |
| [**getCorporationsCorporationIdCustomsOffices()**](PlanetaryInteractionApi.md#getCorporationsCorporationIdCustomsOffices) | **GET** /corporations/{corporation_id}/customs_offices/ | List corporation customs offices |
| [**getUniverseSchematicsSchematicId()**](PlanetaryInteractionApi.md#getUniverseSchematicsSchematicId) | **GET** /universe/schematics/{schematic_id}/ | Get schematic information |


## `getCharactersCharacterIdPlanets()`

```php
getCharactersCharacterIdPlanets($character_id, $datasource, $if_none_match, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanets200Ok[]
```

Get colonies

Returns a list of all planetary colonies owned by a character.  --- Alternate route: `/dev/characters/{character_id}/planets/`  Alternate route: `/legacy/characters/{character_id}/planets/`  Alternate route: `/v1/characters/{character_id}/planets/`  --- This route is cached for up to 600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\PlanetaryInteractionApi(
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
    $result = $apiInstance->getCharactersCharacterIdPlanets($character_id, $datasource, $if_none_match, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getCharactersCharacterIdPlanets: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanets200Ok[]**](../Model/GetCharactersCharacterIdPlanets200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharactersCharacterIdPlanetsPlanetId()`

```php
getCharactersCharacterIdPlanetsPlanetId($character_id, $planet_id, $datasource, $token): \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdOk
```

Get colony layout

Returns full details on the layout of a single planetary colony, including links, pins and routes. Note: Planetary information is only recalculated when the colony is viewed through the client. Information will not update until this criteria is met.  --- Alternate route: `/dev/characters/{character_id}/planets/{planet_id}/`  Alternate route: `/v3/characters/{character_id}/planets/{planet_id}/`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\PlanetaryInteractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$character_id = 56; // int | An EVE character ID
$planet_id = 56; // int | Planet id of the target planet
$datasource = 'tranquility'; // string | The server name you would like data from
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCharactersCharacterIdPlanetsPlanetId($character_id, $planet_id, $datasource, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getCharactersCharacterIdPlanetsPlanetId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **character_id** | **int**| An EVE character ID | |
| **planet_id** | **int**| Planet id of the target planet | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdOk**](../Model/GetCharactersCharacterIdPlanetsPlanetIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporationsCorporationIdCustomsOffices()`

```php
getCorporationsCorporationIdCustomsOffices($corporation_id, $datasource, $if_none_match, $page, $token): \Swagger\Client\Eve\Model\GetCorporationsCorporationIdCustomsOffices200Ok[]
```

List corporation customs offices

List customs offices owned by a corporation  --- Alternate route: `/dev/corporations/{corporation_id}/customs_offices/`  Alternate route: `/legacy/corporations/{corporation_id}/customs_offices/`  Alternate route: `/v1/corporations/{corporation_id}/customs_offices/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: evesso
$config = Swagger\Client\Eve\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Eve\Api\PlanetaryInteractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporation_id = 56; // int | An EVE corporation ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag
$page = 1; // int | Which page of results to return
$token = 'token_example'; // string | Access token to use if unable to set a header

try {
    $result = $apiInstance->getCorporationsCorporationIdCustomsOffices($corporation_id, $datasource, $if_none_match, $page, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getCorporationsCorporationIdCustomsOffices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **corporation_id** | **int**| An EVE corporation ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |
| **page** | **int**| Which page of results to return | [optional] [default to 1] |
| **token** | **string**| Access token to use if unable to set a header | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetCorporationsCorporationIdCustomsOffices200Ok[]**](../Model/GetCorporationsCorporationIdCustomsOffices200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUniverseSchematicsSchematicId()`

```php
getUniverseSchematicsSchematicId($schematic_id, $datasource, $if_none_match): \Swagger\Client\Eve\Model\GetUniverseSchematicsSchematicIdOk
```

Get schematic information

Get information on a planetary factory schematic  --- Alternate route: `/dev/universe/schematics/{schematic_id}/`  Alternate route: `/legacy/universe/schematics/{schematic_id}/`  Alternate route: `/v1/universe/schematics/{schematic_id}/`  --- This route is cached for up to 3600 seconds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Swagger\Client\Eve\Api\PlanetaryInteractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schematic_id = 56; // int | A PI schematic ID
$datasource = 'tranquility'; // string | The server name you would like data from
$if_none_match = 'if_none_match_example'; // string | ETag from a previous request. A 304 will be returned if this matches the current ETag

try {
    $result = $apiInstance->getUniverseSchematicsSchematicId($schematic_id, $datasource, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getUniverseSchematicsSchematicId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schematic_id** | **int**| A PI schematic ID | |
| **datasource** | **string**| The server name you would like data from | [optional] [default to &#39;tranquility&#39;] |
| **if_none_match** | **string**| ETag from a previous request. A 304 will be returned if this matches the current ETag | [optional] |

### Return type

[**\Swagger\Client\Eve\Model\GetUniverseSchematicsSchematicIdOk**](../Model/GetUniverseSchematicsSchematicIdOk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
