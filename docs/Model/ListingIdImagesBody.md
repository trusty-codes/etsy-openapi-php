# ListingIdImagesBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image** | **string** | The file name string of a file to upload | [optional] 
**listing_image_id** | **int** | The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction. | [optional] 
**rank** | **int** | The positive non-zero numeric position in the images displayed in a listing, with rank 1 images appearing in the left-most position in a listing. | [optional] [default to 1]
**overwrite** | **bool** | When true, this request replaces the existing image at a given rank. | [optional] [default to false]
**is_watermarked** | **bool** | When true, indicates that the uploaded image has a watermark. | [optional] [default to false]
**alt_text** | **string** | Alt text for the listing image. | [optional] [default to '']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

