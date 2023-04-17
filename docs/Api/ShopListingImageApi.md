# Swagger\Client\ShopListingImageApi

All URIs are relative to *https://openapi.etsy.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteListingImage**](ShopListingImageApi.md#deletelistingimage) | **DELETE** /v3/application/shops/{shop_id}/listings/{listing_id}/images/{listing_image_id} | 
[**getListingImage**](ShopListingImageApi.md#getlistingimage) | **GET** /v3/application/listings/{listing_id}/images/{listing_image_id} | 
[**getListingImageDeprecated**](ShopListingImageApi.md#getlistingimagedeprecated) | **GET** /v3/application/shops/{shop_id}/listings/{listing_id}/images/{listing_image_id} | 
[**getListingImages**](ShopListingImageApi.md#getlistingimages) | **GET** /v3/application/listings/{listing_id}/images | 
[**getListingImagesDeprecated**](ShopListingImageApi.md#getlistingimagesdeprecated) | **GET** /v3/application/shops/{shop_id}/listings/{listing_id}/images | 
[**uploadListingImage**](ShopListingImageApi.md#uploadlistingimage) | **POST** /v3/application/shops/{shop_id}/listings/{listing_id}/images | 

# **deleteListingImage**
> deleteListingImage($shop_id, $listing_id, $listing_image_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Open API V3 endpoint to delete a listing image. A copy of the file remains on our servers, and so a deleted image may be re-associated with the listing without re-uploading the original image; see uploadListingImage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShopListingImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$listing_image_id = 56; // int | The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction.

try {
    $apiInstance->deleteListingImage($shop_id, $listing_id, $listing_image_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingImageApi->deleteListingImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **listing_image_id** | **int**| The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingImage**
> \Swagger\Client\Model\ListingImage getListingImage($listing_id, $listing_image_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves the references and metadata for a listing image with a specific image ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$listing_image_id = 56; // int | The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction.

try {
    $result = $apiInstance->getListingImage($listing_id, $listing_image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingImageApi->getListingImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **listing_image_id** | **int**| The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction. |

### Return type

[**\Swagger\Client\Model\ListingImage**](../Model/ListingImage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingImageDeprecated**
> \Swagger\Client\Model\ListingImage getListingImageDeprecated($shop_id, $listing_id, $listing_image_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  NOTE: This endpoint is being deprecated in favor of not requiring the shops/:shop_id as part of the URL. Retrieves the references and metadata for a listing image with a specific image ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$listing_image_id = 56; // int | The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction.

try {
    $result = $apiInstance->getListingImageDeprecated($shop_id, $listing_id, $listing_image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingImageApi->getListingImageDeprecated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **listing_image_id** | **int**| The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction. |

### Return type

[**\Swagger\Client\Model\ListingImage**](../Model/ListingImage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingImages**
> \Swagger\Client\Model\ListingImages getListingImages($listing_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves all listing image resources for a listing with a specific listing ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.

try {
    $result = $apiInstance->getListingImages($listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingImageApi->getListingImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |

### Return type

[**\Swagger\Client\Model\ListingImages**](../Model/ListingImages.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingImagesDeprecated**
> \Swagger\Client\Model\ListingImages getListingImagesDeprecated($shop_id, $listing_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  NOTE: This endpoint is being deprecated in favor of not requiring the shops/:shop_id as part of the URL. Retrieves all listing image resources for a listing with a specific listing ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.

try {
    $result = $apiInstance->getListingImagesDeprecated($shop_id, $listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingImageApi->getListingImagesDeprecated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |

### Return type

[**\Swagger\Client\Model\ListingImages**](../Model/ListingImages.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadListingImage**
> \Swagger\Client\Model\ListingImage uploadListingImage($shop_id, $listing_id, $image, $listing_image_id, $rank, $overwrite, $is_watermarked, $alt_text)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Uploads or assigns an image to a listing identified by a shop ID with a listing ID. To upload a new image, set the image file as the value for the `image` parameter. You can assign a previously deleted image to a listing using the deleted image's image ID in the `listing_image_id` parameter. When a request contains both `image` and `listing_image_id` parameter values, the endpoint uploads the image in the `image` parameter only. Note: When uploading a new image, data such as colors and size may return as null values due to asynchronous processing of the image. Use getListingImage endpoint to fetch these values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ShopListingImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$image = "image_example"; // string | 
$listing_image_id = 56; // int | 
$rank = 56; // int | 
$overwrite = true; // bool | 
$is_watermarked = true; // bool | 
$alt_text = "alt_text_example"; // string | 

try {
    $result = $apiInstance->uploadListingImage($shop_id, $listing_id, $image, $listing_image_id, $rank, $overwrite, $is_watermarked, $alt_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingImageApi->uploadListingImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **image** | **string****string**|  | [optional]
 **listing_image_id** | **int**|  | [optional]
 **rank** | **int**|  | [optional]
 **overwrite** | **bool**|  | [optional]
 **is_watermarked** | **bool**|  | [optional]
 **alt_text** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListingImage**](../Model/ListingImage.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

