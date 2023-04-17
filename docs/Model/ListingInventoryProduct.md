# ListingInventoryProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **int** | The numeric ID for a specific [product](/documentation/reference#tag/ShopListing-Product) purchased from a listing. | [optional] 
**sku** | **string** | The SKU string for the product | [optional] 
**is_deleted** | **bool** | When true, someone deleted this product. | [optional] 
**offerings** | [**\Swagger\Client\Model\AllOfListingInventoryProductOfferingsItems[]**](.md) | A list of product offering entries for this product. | [optional] 
**property_values** | [**\Swagger\Client\Model\AllOfListingInventoryProductPropertyValuesItems[]**](.md) | A list of property value entries for this product. Note: parenthesis characters (&#x60;(&#x60; and &#x60;)&#x60;) are not allowed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

