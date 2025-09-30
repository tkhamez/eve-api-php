# # RouteRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**avoid_systems** | **int[]** | Systems to avoid | [optional]
**connections** | [**\Tkhamez\Eve\API\Model\RouteConnection[]**](RouteConnection.md) | Additional one-way connections (like Jump Bridges) between systems | [optional]
**preference** | **string** | Preference for the route | [optional] [default to 'Shorter']
**security_penalty** | **int** | Strictness of the path preference | [optional] [default to 50]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
