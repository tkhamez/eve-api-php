# # ContractsPublicRegionIdGetInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyout** | **float** | Buyout price (for Auctions only) | [optional]
**collateral** | **float** | Collateral price (for Couriers only) | [optional]
**contract_id** | **int** |  |
**date_expired** | **\DateTime** | Expiration date of the contract |
**date_issued** | **\DateTime** | Сreation date of the contract |
**days_to_complete** | **int** | Number of days to perform the contract | [optional]
**end_location_id** | **int** | End location ID (for Couriers contract) | [optional]
**for_corporation** | **bool** | true if the contract was issued on behalf of the issuer&#39;s corporation | [optional]
**issuer_corporation_id** | **int** | Character&#39;s corporation ID for the issuer |
**issuer_id** | **int** | Character ID for the issuer |
**price** | **float** | Price of contract (for ItemsExchange and Auctions) | [optional]
**reward** | **float** | Remuneration for contract (for Couriers only) | [optional]
**start_location_id** | **int** | Start location ID (for Couriers contract) | [optional]
**title** | **string** | Title of the contract | [optional]
**type** | **string** | Type of the contract |
**volume** | **float** | Volume of items in the contract | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
