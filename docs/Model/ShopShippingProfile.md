# ShopShippingProfile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_profile_id** | **int** | The numeric ID of the shipping profile. | [optional] 
**title** | **string** | The name string of this shipping profile. | [optional] 
**user_id** | **int** | The numeric ID for the [user](/documentation/reference#tag/User) who owns the shipping profile. | [optional] 
**min_processing_days** | **int** | The minimum number of days for processing the listing. | [optional] 
**max_processing_days** | **int** | The maximum number of days for processing the listing. | [optional] 
**processing_days_display_label** | **string** | Translated display label string for processing days. | [optional] 
**origin_country_iso** | **string** | The ISO code of the country from which the listing ships. | [optional] 
**is_deleted** | **bool** | When true, someone deleted this shipping profile. | [optional] 
**shipping_profile_destinations** | [**\Swagger\Client\Model\AllOfShopShippingProfileShippingProfileDestinationsItems[]**](.md) | A list of [shipping profile destinations](/documentation/reference/#operation/createShopShippingProfileDestination) available for this shipping profile. | [optional] 
**shipping_profile_upgrades** | [**\Swagger\Client\Model\AllOfShopShippingProfileShippingProfileUpgradesItems[]**](.md) | A list of [shipping profile upgrades](/documentation/reference/#operation/createShopShippingProfileUpgrade) available for this shipping profile. | [optional] 
**origin_postal_code** | **string** | The postal code string (not necessarily a number) for the location from which the listing ships. Required if the &#x60;origin_country_iso&#x60; is &#x60;US&#x60; or &#x60;CA&#x60;. | [optional] 
**profile_type** | **string** |  | [optional] 
**domestic_handling_fee** | **float** | The domestic handling fee added to buyer&#x27;s shipping total - only available for calculated shipping profiles. | [optional] [default to 0]
**international_handling_fee** | **float** | The international handling fee added to buyer&#x27;s shipping total - only available for calculated shipping profiles. | [optional] [default to 0]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

