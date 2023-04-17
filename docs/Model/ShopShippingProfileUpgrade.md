# ShopShippingProfileUpgrade

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_profile_id** | **int** | The numeric ID of the base shipping profile. | [optional] 
**upgrade_id** | **int** | The numeric ID that is associated with a shipping upgrade | [optional] 
**upgrade_name** | **string** | Name for the shipping upgrade shown to shoppers at checkout, e.g. USPS Priority. | [optional] 
**type** | **string** | The type of the shipping upgrade. Domestic (0) or international (1). | [optional] 
**rank** | **int** | The positive non-zero numeric position in the images displayed in a listing, with rank 1 images appearing in the left-most position in a listing. | [optional] 
**language** | **string** | The IETF language tag for the language of the shipping profile. Ex: &#x60;de&#x60;, &#x60;en&#x60;, &#x60;es&#x60;, &#x60;fr&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;nl&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60; | [optional] 
**price** | [**AllOfShopShippingProfileUpgradePrice**](AllOfShopShippingProfileUpgradePrice.md) | Additional cost of adding the shipping upgrade. | [optional] 
**secondary_price** | [**AllOfShopShippingProfileUpgradeSecondaryPrice**](AllOfShopShippingProfileUpgradeSecondaryPrice.md) | Additional cost of adding the shipping upgrade for each additional item. | [optional] 
**shipping_carrier_id** | **int** | The unique ID of a supported shipping carrier, which is used to calculate an Estimated Delivery Date. **Required with &#x60;mail_class&#x60;** if &#x60;min_delivery_days&#x60; and &#x60;max_delivery_days&#x60; are null. | [optional] 
**mail_class** | **string** | The unique ID string of a shipping carrier&#x27;s mail class, which is used to calculate an estimated delivery date. **Required with &#x60;shipping_carrier_id&#x60;** if &#x60;min_delivery_days&#x60; and &#x60;max_delivery_days&#x60; are null. | [optional] 
**min_delivery_days** | **int** | The minimum number of business days a buyer can expect to wait to receive their purchased item once it has shipped. **Required with &#x60;max_delivery_days&#x60;** if &#x60;mail_class&#x60; is null. | [optional] 
**max_delivery_days** | **int** | The maximum number of business days a buyer can expect to wait to receive their purchased item once it has shipped. **Required with &#x60;min_delivery_days&#x60;** if &#x60;mail_class&#x60; is null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

