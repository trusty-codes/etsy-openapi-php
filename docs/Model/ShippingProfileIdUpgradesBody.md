# ShippingProfileIdUpgradesBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the shipping upgrade. Domestic (0) or international (1). | 
**upgrade_name** | **string** | Name for the shipping upgrade shown to shoppers at checkout, e.g. USPS Priority. | 
**price** | **float** | Additional cost of adding the shipping upgrade. | 
**secondary_price** | **float** | Additional cost of adding the shipping upgrade for each additional item. | 
**shipping_carrier_id** | **int** | The unique ID of a supported shipping carrier, which is used to calculate an Estimated Delivery Date. **Required with &#x60;mail_class&#x60;** if &#x60;min_delivery_days&#x60; and &#x60;max_delivery_days&#x60; are null. | [optional] [default to 0]
**mail_class** | **string** | The unique ID string of a shipping carrier&#x27;s mail class, which is used to calculate an estimated delivery date. **Required with &#x60;shipping_carrier_id&#x60;** if &#x60;min_delivery_days&#x60; and &#x60;max_delivery_days&#x60; are null. | [optional] 
**min_delivery_days** | **int** | The minimum number of business days a buyer can expect to wait to receive their purchased item once it has shipped. **Required with &#x60;max_delivery_days&#x60;** if &#x60;mail_class&#x60; is null. | [optional] 
**max_delivery_days** | **int** | The maximum number of business days a buyer can expect to wait to receive their purchased item once it has shipped. **Required with &#x60;min_delivery_days&#x60;** if &#x60;mail_class&#x60; is null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

