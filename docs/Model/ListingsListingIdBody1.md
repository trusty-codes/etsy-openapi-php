# ListingsListingIdBody1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_ids** | **int[]** | An array of numeric image IDs of the images in a listing, which can include up to 10 images. | [optional] 
**title** | **string** | The listing&#x27;s title string. When creating or updating a listing, valid title strings contain only letters, numbers, punctuation marks, mathematical symbols, whitespace characters, ™, ©, and ®. (regex: /[^\\p{L}\\p{Nd}\\p{P}\\p{Sm}\\p{Zs}™©®]/u) You can only use the %, :, &amp; and + characters once each. | [optional] 
**description** | **string** | A description string of the product for sale in the listing. | [optional] 
**materials** | **string[]** | A list of material strings for materials used in the product. Valid materials strings contain only letters, numbers, and whitespace characters. (regex: /[^\\p{L}\\p{Nd}\\p{Zs}]/u) Default value is null. | [optional] 
**should_auto_renew** | **bool** | When true, renews a listing for four months upon expiration. | [optional] 
**shipping_profile_id** | **int** | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. | [optional] 
**return_policy_id** | **int** | The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies). Required for active physical listings. This requirement does not apply to listings of EU-based shops. | [optional] 
**shop_section_id** | **int** | The numeric ID of the [shop section](/documentation/reference#tag/Shop-Section) for this listing. Default value is null. | [optional] 
**item_weight** | **float** | The numeric weight of the product measured in units set in &#x27;item_weight_unit&#x27;. Default value is null. If set, the value must be greater than 0. | [optional] 
**item_length** | **float** | The numeric length of the product measured in units set in &#x27;item_dimensions_unit&#x27;. Default value is null. If set, the value must be greater than 0. | [optional] 
**item_width** | **float** | The numeric width of the product measured in units set in &#x27;item_dimensions_unit&#x27;. Default value is null. If set, the value must be greater than 0. | [optional] 
**item_height** | **float** | The numeric height of the product measured in units set in &#x27;item_dimensions_unit&#x27;. Default value is null. If set, the value must be greater than 0. | [optional] 
**item_weight_unit** | **string** | A string defining the units used to measure the weight of the product. Default value is null. | [optional] 
**item_dimensions_unit** | **string** | A string defining the units used to measure the dimensions of the product. Default value is null. | [optional] 
**is_taxable** | **bool** | When true, applicable [shop](/documentation/reference#tag/Shop) tax rates apply to this listing at checkout. | [optional] 
**taxonomy_id** | **int** | The numerical taxonomy ID of the listing. See [SellerTaxonomy](/documentation/reference#tag/SellerTaxonomy) and [BuyerTaxonomy](/documentation/reference#tag/BuyerTaxonomy) for more information. | [optional] 
**tags** | **string[]** | A comma-separated list of tag strings for the listing. When creating or updating a listing, valid tag strings contain only letters, numbers, whitespace characters, -, &#x27;, ™, ©, and ®. (regex: /[^\\p{L}\\p{Nd}\\p{Zs}\\-&#x27;™©®]/u) Default value is null. | [optional] 
**who_made** | **string** | An enumerated string indicating who made the product. Helps buyers locate the listing under the Handmade heading. Requires &#x27;is_supply&#x27; and &#x27;when_made&#x27;. | [optional] 
**when_made** | **string** | An enumerated string for the era in which the maker made the product in this listing. Helps buyers locate the listing under the Vintage heading. Requires &#x27;is_supply&#x27; and &#x27;who_made&#x27;. | [optional] 
**featured_rank** | **int** | The positive non-zero numeric position in the featured listings of the shop, with rank 1 listings appearing in the left-most position in featured listing on a shop’s home page. | [optional] 
**is_personalizable** | **bool** | When true, this listing is personalizable. The default value is null. | [optional] 
**personalization_is_required** | **bool** | When true, this listing requires personalization. The default value is null. Will only change if is_personalizable is &#x27;true&#x27;. | [optional] 
**personalization_char_count_max** | **int** | This is an integer value representing the maximum length for the personalization message entered by the buyer. Will only change if is_personalizable is &#x27;true&#x27;. | [optional] 
**personalization_instructions** | **string** | A string representing instructions for the buyer to enter the personalization. Will only change if is_personalizable is &#x27;true&#x27;. | [optional] 
**state** | **string** | When _updating_ a listing, this value can be either &#x60;active&#x60; or &#x60;inactive&#x60;. Note: Setting a &#x60;draft&#x60; listing to &#x60;active&#x60; will also publish the listing on etsy.com and requires that the listing have an image set. Setting a &#x60;sold_out&#x60; listing to active will update the quantity to 1 and renew the listing on etsy.com. | [optional] 
**is_supply** | **bool** | When true, tags the listing as a supply product, else indicates that it&#x27;s a finished product. Helps buyers locate the listing under the Supplies heading. Requires &#x27;who_made&#x27; and &#x27;when_made&#x27;. | [optional] 
**production_partner_ids** | **int[]** | An array of unique IDs of production partner ids. | [optional] 
**type** | **string** | An enumerated type string that indicates whether the listing is physical or a digital download. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

