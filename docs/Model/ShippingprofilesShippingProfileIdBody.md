# ShippingprofilesShippingProfileIdBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The name string of this shipping profile. | [optional] 
**origin_country_iso** | **string** | The ISO code of the country from which the listing ships. | [optional] 
**min_processing_time** | **int** | The minimum time required to process to ship listings with this shipping profile. | [optional] 
**max_processing_time** | **int** | The maximum processing time the listing needs to ship. | [optional] 
**processing_time_unit** | **string** | The unit used to represent how long a processing time is. A week is equivalent to 5 business days. If none is provided, the unit is set to \&quot;business_days\&quot;. | [optional] [default to 'business_days']
**origin_postal_code** | **string** | The postal code string (not necessarily a number) for the location from which the listing ships. Required if the &#x60;origin_country_iso&#x60; is &#x60;US&#x60; or &#x60;CA&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

