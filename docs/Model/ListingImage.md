# ListingImage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listing_id** | **int** | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. | [optional] 
**listing_image_id** | **int** | The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction. | [optional] 
**hex_code** | **string** | The webhex string for the image&#x27;s average color, in webhex notation. | [optional] 
**red** | **int** | The numeric red value equal to the image&#x27;s average red value, from 0-255 (RGB color). | [optional] 
**green** | **int** | The numeric red value equal to the image&#x27;s average red value, from 0-255 (RGB color). | [optional] 
**blue** | **int** | The numeric red value equal to the image&#x27;s average red value, from 0-255 (RGB color). | [optional] 
**hue** | **int** | The numeric hue equal to the image&#x27;s average hue, from 0-360 (HSV color). | [optional] 
**saturation** | **int** | The numeric saturation equal to the image&#x27;s average saturation, from 0-100 (HSV color). | [optional] 
**brightness** | **int** | The numeric brightness equal to the image&#x27;s average brightness, from 0-100 (HSV color). | [optional] 
**is_black_and_white** | **bool** | When true, the image is in black &amp; white. | [optional] 
**creation_tsz** | **int** | The listing image\\&#x27;s creation time, in epoch seconds. | [optional] 
**created_timestamp** | **int** | The listing image\\&#x27;s creation time, in epoch seconds. | [optional] 
**rank** | **int** | The positive non-zero numeric position in the images displayed in a listing, with rank 1 images appearing in the left-most position in a listing. | [optional] 
**url_75x75** | **string** | The url string for a 75x75 pixel thumbnail of the image. | [optional] 
**url_170x135** | **string** | The url string for a 170x135 pixel thumbnail of the image. | [optional] 
**url_570x_n** | **string** | The url string for a thumbnail of the image, no more than 570 pixels wide with variable height. | [optional] 
**url_fullxfull** | **string** | The url string for the full-size image, up to 3000 pixels in each dimension. | [optional] 
**full_height** | **int** | The numeric height, measured in pixels, of the full-sized image referenced in url_fullxfull. | [optional] 
**full_width** | **int** | The numeric width, measured in pixels, of the full-sized image referenced in url_fullxfull. | [optional] 
**alt_text** | **string** | Alt text for the listing image. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

