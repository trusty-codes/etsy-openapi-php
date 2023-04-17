# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **int** | A unique numeric ID for a payment to a specific Etsy [shop](/documentation/reference#tag/Shop). | [optional] 
**buyer_user_id** | **int** | The numeric ID for the [user](/documentation/reference#tag/User) who paid the purchase. | [optional] 
**shop_id** | **int** | The unique positive non-zero numeric ID for an Etsy Shop. | [optional] 
**receipt_id** | **int** | The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction. | [optional] 
**amount_gross** | [**AllOfPaymentAmountGross**](AllOfPaymentAmountGross.md) | An integer equal to gross amount of the order, in pennies, including shipping and taxes. | [optional] 
**amount_fees** | [**AllOfPaymentAmountFees**](AllOfPaymentAmountFees.md) | An integer equal to the original card processing fee of the order in pennies. | [optional] 
**amount_net** | [**AllOfPaymentAmountNet**](AllOfPaymentAmountNet.md) | An integer equal to the payment value, in pennies, less fees (&#x60;amount_gross&#x60; - &#x60;amount_fees&#x60;). | [optional] 
**posted_gross** | [**AllOfPaymentPostedGross**](AllOfPaymentPostedGross.md) | The total gross value of the payment posted once the purchase ships. This is equal to the &#x60;amount_gross&#x60; UNLESS the seller issues a refund prior to shipping. We consider \&quot;shipping\&quot; to be the event which \&quot;posts\&quot; to the ledger. Therefore, if the seller refunds first, we reduce the &#x60;amount_gross&#x60; first and post then that amount. The seller never sees the refunded amount in their ledger. This is equal to the \&quot;Credit\&quot; amount in the ledger entry. | [optional] 
**posted_fees** | [**AllOfPaymentPostedFees**](AllOfPaymentPostedFees.md) | The total value of the fees posted once the purchase ships. Etsy refunds a proportional amount of the fees when a seller refunds a buyer. When the seller issues a refund prior to shipping, the posted amount is less then the original. | [optional] 
**posted_net** | [**AllOfPaymentPostedNet**](AllOfPaymentPostedNet.md) | The total value of the payment at the time of posting, less fees. (&#x60;posted_gross&#x60; - &#x60;posted_fees&#x60;) | [optional] 
**adjusted_gross** | [**AllOfPaymentAdjustedGross**](AllOfPaymentAdjustedGross.md) | The gross payment amount after the seller refunds a payment, partially or fully. | [optional] 
**adjusted_fees** | [**AllOfPaymentAdjustedFees**](AllOfPaymentAdjustedFees.md) | The new fee amount after a seller refunds a payment, partially or fully. | [optional] 
**adjusted_net** | [**AllOfPaymentAdjustedNet**](AllOfPaymentAdjustedNet.md) | The total value of the payment after refunds, less fees (&#x60;adjusted_gross&#x60; - &#x60;adjusted_fees&#x60;). | [optional] 
**currency** | **string** | The ISO (alphabetic) code string for the payment&#x27;s currency. | [optional] 
**shop_currency** | **string** | The ISO (alphabetic) code for the shop&#x27;s currency. The shop displays all prices in this currency by default. | [optional] 
**buyer_currency** | **string** | The currency string of the buyer. | [optional] 
**shipping_user_id** | **int** | The numeric ID of the user to which the seller ships the order. | [optional] 
**shipping_address_id** | **int** | The numeric id identifying the shipping address. | [optional] 
**billing_address_id** | **int** | The numeric ID identifying the billing address of the buyer. | [optional] 
**status** | **string** | A string indicating the current status of the payment, most commonly \&quot;settled\&quot; or \&quot;authed\&quot;. | [optional] 
**shipped_timestamp** | **int** | The transaction\\&#x27;s shipping date and time, in epoch seconds. | [optional] 
**create_timestamp** | **int** | The transaction\\&#x27;s creation date and time, in epoch seconds. | [optional] 
**created_timestamp** | **int** | The transaction\\&#x27;s creation date and time, in epoch seconds. | [optional] 
**update_timestamp** | **int** | The date and time of the last change to the payment adjustment in epoch seconds. | [optional] 
**updated_timestamp** | **int** | The date and time of the last change to the payment adjustment in epoch seconds. | [optional] 
**payment_adjustments** | [**\Swagger\Client\Model\AllOfPaymentPaymentAdjustmentsItems[]**](.md) | List of refund objects on an Etsy Payments transaction. All monetary amounts are in USD pennies unless otherwise specified. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

