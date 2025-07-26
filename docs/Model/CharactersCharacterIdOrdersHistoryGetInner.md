# # CharactersCharacterIdOrdersHistoryGetInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | **int** | Number of days the order was valid for (starting from the issued date). An order expires at time issued + duration |
**escrow** | **float** | For buy orders, the amount of ISK in escrow | [optional]
**is_buy_order** | **bool** | True if the order is a bid (buy) order | [optional]
**is_corporation** | **bool** | Signifies whether the buy/sell order was placed on behalf of a corporation. |
**issued** | **\DateTime** | Date and time when this order was issued |
**location_id** | **int** | ID of the location where order was placed |
**min_volume** | **int** | For buy orders, the minimum quantity that will be accepted in a matching sell order | [optional]
**order_id** | **int** | Unique order ID |
**price** | **float** | Cost per unit for this order |
**range** | **string** | Valid order range, numbers are ranges in jumps |
**region_id** | **int** | ID of the region where order was placed |
**state** | **string** | Current order state |
**type_id** | **int** | The type ID of the item transacted in this order |
**volume_remain** | **int** | Quantity of items still required or offered |
**volume_total** | **int** | Quantity of items required or offered at time order was placed |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
