# # PutFleetsFleetIdMembersMemberIdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role** | **string** | If a character is moved to the &#x60;fleet_commander&#x60; role, neither &#x60;wing_id&#x60; or &#x60;squad_id&#x60; should be specified. If a character is moved to the &#x60;wing_commander&#x60; role, only &#x60;wing_id&#x60; should be specified. If a character is moved to the &#x60;squad_commander&#x60; role, both &#x60;wing_id&#x60; and &#x60;squad_id&#x60; should be specified. If a character is moved to the &#x60;squad_member&#x60; role, both &#x60;wing_id&#x60; and &#x60;squad_id&#x60; should be specified. |
**squad_id** | **int** |  | [optional]
**wing_id** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
