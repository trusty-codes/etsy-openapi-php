# PaymentAdjustmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_adjustment_id** | **int** | The numeric ID for a payment adjustment. | [optional] 
**payment_adjustment_item_id** | **int** | Unique ID for the adjustment line item. | [optional] 
**adjustment_type** | **string** | String indicating the type of adjustment for this line item. | [optional] 
**amount** | **int** | Integer value for the amount of the adjustment in original currency. | [optional] [default to 0]
**shop_amount** | **int** | Integer value for the amount of the adjustment in currency for the shop. | [optional] [default to 0]
**transaction_id** | **int** | The unique numeric ID for a transaction. | [optional] 
**bill_payment_id** | **int** | Unique ID for the bill payment adjustment. | [optional] 
**created_timestamp** | **int** | The transaction\\&#x27;s creation date and time, in epoch seconds. | [optional] 
**updated_timestamp** | **int** | The update date and time the payment adjustment in epoch seconds. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

