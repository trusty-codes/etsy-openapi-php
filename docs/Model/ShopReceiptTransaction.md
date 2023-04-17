# ShopReceiptTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **int** | The unique numeric ID for a transaction. | [optional] 
**title** | **string** | The title string of the [listing](/documentation/reference#tag/ShopListing) purchased in this transaction. | [optional] 
**description** | **string** | The description string of the [listing](/documentation/reference#tag/ShopListing) purchased in this transaction. | [optional] 
**seller_user_id** | **int** | The numeric user ID for the seller in this transaction. | [optional] 
**buyer_user_id** | **int** | The numeric user ID for the buyer in this transaction. | [optional] 
**create_timestamp** | **int** | The transaction\\&#x27;s creation date and time, in epoch seconds. | [optional] 
**created_timestamp** | **int** | The transaction\\&#x27;s creation date and time, in epoch seconds. | [optional] 
**paid_timestamp** | **int** | The transaction\\&#x27;s paid date and time, in epoch seconds. | [optional] 
**shipped_timestamp** | **int** | The transaction\\&#x27;s shipping date and time, in epoch seconds. | [optional] 
**quantity** | **int** | The numeric quantity of products purchased in this transaction. | [optional] 
**listing_image_id** | **int** | The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction. | [optional] 
**receipt_id** | **int** | The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction. | [optional] 
**is_digital** | **bool** | When true, the transaction recorded the purchase of a digital listing. | [optional] 
**file_data** | **string** | A string describing the files purchased in this transaction. | [optional] 
**listing_id** | **int** | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. | [optional] 
**transaction_type** | **string** | The type string for the transaction, usually \&quot;listing\&quot;. | [optional] 
**product_id** | **int** | The numeric ID for a specific [product](/documentation/reference#tag/ShopListing-Product) purchased from a listing. | [optional] 
**sku** | **string** | The SKU string for the product | [optional] 
**price** | [**AllOfShopReceiptTransactionPrice**](AllOfShopReceiptTransactionPrice.md) | A money object representing the price recorded the transaction. | [optional] 
**shipping_cost** | [**AllOfShopReceiptTransactionShippingCost**](AllOfShopReceiptTransactionShippingCost.md) | A money object representing the shipping cost for this transaction. | [optional] 
**variations** | [**\Swagger\Client\Model\AllOfShopReceiptTransactionVariationsItems[]**](.md) | Array of variations and personalizations the buyer chose. | [optional] 
**product_data** | [**\Swagger\Client\Model\AllOfShopReceiptTransactionProductDataItems[]**](.md) | A list of property value entries for this product. Note: parenthesis characters (&#x60;(&#x60; and &#x60;)&#x60;) are not allowed. | [optional] 
**shipping_profile_id** | **int** | The ID of the shipping profile selected for this listing. | [optional] 
**min_processing_days** | **int** | The minimum number of days for processing the listing. | [optional] 
**max_processing_days** | **int** | The maximum number of days for processing the listing. | [optional] 
**shipping_method** | **string** | Name of the selected shipping method. | [optional] 
**shipping_upgrade** | **string** | The name of the shipping upgrade selected for this listing. Default value is null. | [optional] 
**expected_ship_date** | **int** | The date &amp; time of the expected ship date, in epoch seconds. | [optional] 
**buyer_coupon** | **float** | The amount of the buyer coupon that was discounted in the shop&#x27;s currency. | [optional] [default to 0]
**shop_coupon** | **float** | The amount of the shop coupon that was discounted in the shop&#x27;s currency. | [optional] [default to 0]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

