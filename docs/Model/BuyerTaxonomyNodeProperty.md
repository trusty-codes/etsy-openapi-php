# BuyerTaxonomyNodeProperty

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_id** | **int** | The unique numeric ID of this product property. | [optional] 
**name** | **string** | The name string for this taxonomy node. | [optional] 
**display_name** | **string** | The human-readable product property name string. | [optional] 
**scales** | [**\Swagger\Client\Model\AllOfBuyerTaxonomyNodePropertyScalesItems[]**](.md) | A list of available scales. | [optional] 
**is_required** | **bool** | When true, listings assigned eligible taxonomy IDs require this property. | [optional] 
**supports_attributes** | **bool** | When true, you can use this property in listing attributes. | [optional] 
**supports_variations** | **bool** | When true, you can use this property in listing variations. | [optional] 
**is_multivalued** | **bool** | When true, you can assign multiple property values to this property | [optional] 
**max_values_allowed** | **int** | When true, you can assign multiple property values to this property | [optional] 
**possible_values** | [**\Swagger\Client\Model\AllOfBuyerTaxonomyNodePropertyPossibleValuesItems[]**](.md) | A list of supported property value strings for this property. | [optional] 
**selected_values** | [**\Swagger\Client\Model\AllOfBuyerTaxonomyNodePropertySelectedValuesItems[]**](.md) | A list of property value strings automatically and always selected for the given property. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

