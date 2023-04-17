# Swagger\Client\ReviewApi

All URIs are relative to *https://openapi.etsy.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReviewsByListing**](ReviewApi.md#getreviewsbylisting) | **GET** /v3/application/listings/{listing_id}/reviews | 
[**getReviewsByShop**](ReviewApi.md#getreviewsbyshop) | **GET** /v3/application/shops/{shop_id}/reviews | 

# **getReviewsByListing**
> \Swagger\Client\Model\ListingReviews getReviewsByListing($listing_id, $limit, $offset, $min_created, $max_created)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Open API V3 to retrieve the reviews for a listing given its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.
$min_created = 56; // int | The earliest unix timestamp for when a record was created.
$max_created = 56; // int | The latest unix timestamp for when a record was created.

try {
    $result = $apiInstance->getReviewsByListing($listing_id, $limit, $offset, $min_created, $max_created);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->getReviewsByListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]
 **min_created** | **int**| The earliest unix timestamp for when a record was created. | [optional]
 **max_created** | **int**| The latest unix timestamp for when a record was created. | [optional]

### Return type

[**\Swagger\Client\Model\ListingReviews**](../Model/ListingReviews.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReviewsByShop**
> \Swagger\Client\Model\TransactionReviews getReviewsByShop($shop_id, $limit, $offset, $min_created, $max_created)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Open API V3 to retrieve the reviews from a shop given its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.
$min_created = 56; // int | The earliest unix timestamp for when a record was created.
$max_created = 56; // int | The latest unix timestamp for when a record was created.

try {
    $result = $apiInstance->getReviewsByShop($shop_id, $limit, $offset, $min_created, $max_created);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewApi->getReviewsByShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]
 **min_created** | **int**| The earliest unix timestamp for when a record was created. | [optional]
 **max_created** | **int**| The latest unix timestamp for when a record was created. | [optional]

### Return type

[**\Swagger\Client\Model\TransactionReviews**](../Model/TransactionReviews.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

