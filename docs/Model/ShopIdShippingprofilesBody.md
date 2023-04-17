# ShopIdShippingprofilesBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The name string of this shipping profile. | 
**origin_country_iso** | **string** | The ISO code of the country from which the listing ships. | 
**primary_cost** | **float** | The cost of shipping to this country/region alone, measured in the store&#x27;s default currency. | 
**secondary_cost** | **float** | The cost of shipping to this country/region with another item, measured in the store&#x27;s default currency. | 
**min_processing_time** | **int** | The minimum time required to process to ship listings with this shipping profile. | 
**max_processing_time** | **int** | The maximum processing time the listing needs to ship. | 
**processing_time_unit** | **string** | The unit used to represent how long a processing time is. A week is equivalent to 5 business days. If none is provided, the unit is set to \&quot;business_days\&quot;. | [optional] [default to 'business_days']
**destination_country_iso** | **string** | The ISO code of the country to which the listing ships. If null, request sets destination to destination_region. Required if destination_region is null or not provided. | [optional] 
**destination_region** | **string** | The code of the region to which the listing ships. A region represents a set of countries. Supported regions are Europe Union and Non-Europe Union (countries in Europe not in EU). If &#x60;none&#x60;, request sets destination to destination_country_iso. Required if destination_country_iso is null or not provided. | [optional] [default to 'none']
**origin_postal_code** | **string** | The postal code string (not necessarily a number) for the location from which the listing ships. Required if the &#x60;origin_country_iso&#x60; is &#x60;US&#x60; or &#x60;CA&#x60;. | [optional] [default to '']
**shipping_carrier_id** | **int** | The unique ID of a supported shipping carrier, which is used to calculate an Estimated Delivery Date. **Required with &#x60;mail_class&#x60;** if &#x60;min_delivery_days&#x60; and &#x60;max_delivery_days&#x60; are null. | [optional] [default to 0]
**mail_class** | **string** | The unique ID string of a shipping carrier&#x27;s mail class, which is used to calculate an estimated delivery date. **Required with &#x60;shipping_carrier_id&#x60;** if &#x60;min_delivery_days&#x60; and &#x60;max_delivery_days&#x60; are null. | [optional] 
**min_delivery_days** | **int** | The minimum number of business days a buyer can expect to wait to receive their purchased item once it has shipped. **Required with &#x60;max_delivery_days&#x60;** if &#x60;mail_class&#x60; is null. | [optional] 
**max_delivery_days** | **int** | The maximum number of business days a buyer can expect to wait to receive their purchased item once it has shipped. **Required with &#x60;min_delivery_days&#x60;** if &#x60;mail_class&#x60; is null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

