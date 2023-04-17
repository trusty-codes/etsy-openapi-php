# PaymentAdjustment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_adjustment_id** | **int** | The numeric ID for a payment adjustment. | [optional] 
**payment_id** | **int** | A unique numeric ID for a payment to a specific Etsy [shop](/documentation/reference#tag/Shop). | [optional] 
**status** | **string** | The status string of the payment adjustment. | [optional] 
**is_success** | **bool** | When true, the payment adjustment was or is likely to complete successfully. | [optional] 
**user_id** | **int** | The numeric ID for the [user](/documentation/reference#tag/User) (seller) fulfilling the purchase. | [optional] 
**reason_code** | **string** | A human-readable string describing the reason for the refund. | [optional] 
**total_adjustment_amount** | **int** | The total numeric amount of the refund in the payment currency. | [optional] 
**shop_total_adjustment_amount** | **int** | The numeric amount of the refund in the shop currency. | [optional] 
**buyer_total_adjustment_amount** | **int** | The numeric amount of the refund in the buyer currency. | [optional] 
**total_fee_adjustment_amount** | **int** | The numeric amount of card processing fees associated with a payment adjustment. | [optional] 
**create_timestamp** | **int** | The transaction\\&#x27;s creation date and time, in epoch seconds. | [optional] 
**created_timestamp** | **int** | The transaction\\&#x27;s creation date and time, in epoch seconds. | [optional] 
**update_timestamp** | **int** | The date and time of the last change to the payment adjustment in epoch seconds. | [optional] 
**updated_timestamp** | **int** | The date and time of the last change to the payment adjustment in epoch seconds. | [optional] 
**payment_adjustment_items** | [**\Swagger\Client\Model\AllOfPaymentAdjustmentPaymentAdjustmentItemsItems[]**](.md) | List of payment adjustment line items. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

