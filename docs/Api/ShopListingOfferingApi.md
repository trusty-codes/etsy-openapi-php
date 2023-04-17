# Swagger\Client\ShopListingOfferingApi

All URIs are relative to *https://openapi.etsy.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListingOffering**](ShopListingOfferingApi.md#getlistingoffering) | **GET** /v3/application/listings/{listing_id}/products/{product_id}/offerings/{product_offering_id} | 

# **getListingOffering**
> \Swagger\Client\Model\ListingInventoryProductOffering getListingOffering($listing_id, $product_id, $product_offering_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Get an Offering for a Listing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingOfferingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | 
$product_id = 56; // int | 
$product_offering_id = 56; // int | 

try {
    $result = $apiInstance->getListingOffering($listing_id, $product_id, $product_offering_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingOfferingApi->getListingOffering: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**|  |
 **product_id** | **int**|  |
 **product_offering_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ListingInventoryProductOffering**](../Model/ListingInventoryProductOffering.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

