# Swagger\Client\ShopListingApi

All URIs are relative to *https://openapi.etsy.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDraftListing**](ShopListingApi.md#createdraftlisting) | **POST** /v3/application/shops/{shop_id}/listings | 
[**deleteListing**](ShopListingApi.md#deletelisting) | **DELETE** /v3/application/listings/{listing_id} | 
[**deleteListingProperty**](ShopListingApi.md#deletelistingproperty) | **DELETE** /v3/application/shops/{shop_id}/listings/{listing_id}/properties/{property_id} | 
[**findAllActiveListingsByShop**](ShopListingApi.md#findallactivelistingsbyshop) | **GET** /v3/application/shops/{shop_id}/listings/active | 
[**findAllListingsActive**](ShopListingApi.md#findalllistingsactive) | **GET** /v3/application/listings/active | 
[**getFeaturedListingsByShop**](ShopListingApi.md#getfeaturedlistingsbyshop) | **GET** /v3/application/shops/{shop_id}/listings/featured | 
[**getListing**](ShopListingApi.md#getlisting) | **GET** /v3/application/listings/{listing_id} | 
[**getListingProperties**](ShopListingApi.md#getlistingproperties) | **GET** /v3/application/shops/{shop_id}/listings/{listing_id}/properties | 
[**getListingProperty**](ShopListingApi.md#getlistingproperty) | **GET** /v3/application/listings/{listing_id}/properties/{property_id} | 
[**getListingsByListingIds**](ShopListingApi.md#getlistingsbylistingids) | **GET** /v3/application/listings/batch | 
[**getListingsByShop**](ShopListingApi.md#getlistingsbyshop) | **GET** /v3/application/shops/{shop_id}/listings | 
[**getListingsByShopReceipt**](ShopListingApi.md#getlistingsbyshopreceipt) | **GET** /v3/application/shops/{shop_id}/receipts/{receipt_id}/listings | 
[**getListingsByShopReturnPolicy**](ShopListingApi.md#getlistingsbyshopreturnpolicy) | **GET** /v3/application/shops/{shop_id}/policies/return/{return_policy_id}/listings | 
[**getListingsByShopSectionId**](ShopListingApi.md#getlistingsbyshopsectionid) | **GET** /v3/application/shops/{shop_id}/shop-sections/listings | 
[**updateListing**](ShopListingApi.md#updatelisting) | **PATCH** /v3/application/shops/{shop_id}/listings/{listing_id} | 
[**updateListingDeprecated**](ShopListingApi.md#updatelistingdeprecated) | **PUT** /v3/application/shops/{shop_id}/listings/{listing_id} | 
[**updateListingProperty**](ShopListingApi.md#updatelistingproperty) | **PUT** /v3/application/shops/{shop_id}/listings/{listing_id}/properties/{property_id} | 

# **createDraftListing**
> \Swagger\Client\Model\ShopListing createDraftListing($shop_id, $quantity, $title, $description, $price, $who_made, $when_made, $taxonomy_id, $shipping_profile_id, $return_policy_id, $materials, $shop_section_id, $processing_min, $processing_max, $tags, $styles, $item_weight, $item_length, $item_width, $item_height, $item_weight_unit, $item_dimensions_unit, $is_personalizable, $personalization_is_required, $personalization_char_count_max, $personalization_instructions, $production_partner_ids, $image_ids, $is_supply, $is_customizable, $should_auto_renew, $is_taxable, $type)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Creates a physical draft [listing](/documentation/reference#tag/ShopListing) product in a shop on the Etsy channel.

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$quantity = 56; // int | 
$title = "title_example"; // string | 
$description = "description_example"; // string | 
$price = 3.4; // float | 
$who_made = "who_made_example"; // string | 
$when_made = "when_made_example"; // string | 
$taxonomy_id = 56; // int | 
$shipping_profile_id = 56; // int | 
$return_policy_id = 56; // int | 
$materials = array("materials_example"); // string[] | 
$shop_section_id = 56; // int | 
$processing_min = 56; // int | 
$processing_max = 56; // int | 
$tags = array("tags_example"); // string[] | 
$styles = array("styles_example"); // string[] | 
$item_weight = 3.4; // float | 
$item_length = 3.4; // float | 
$item_width = 3.4; // float | 
$item_height = 3.4; // float | 
$item_weight_unit = "item_weight_unit_example"; // string | 
$item_dimensions_unit = "item_dimensions_unit_example"; // string | 
$is_personalizable = true; // bool | 
$personalization_is_required = true; // bool | 
$personalization_char_count_max = 56; // int | 
$personalization_instructions = "personalization_instructions_example"; // string | 
$production_partner_ids = array(56); // int[] | 
$image_ids = array(56); // int[] | 
$is_supply = true; // bool | 
$is_customizable = true; // bool | 
$should_auto_renew = true; // bool | 
$is_taxable = true; // bool | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->createDraftListing($shop_id, $quantity, $title, $description, $price, $who_made, $when_made, $taxonomy_id, $shipping_profile_id, $return_policy_id, $materials, $shop_section_id, $processing_min, $processing_max, $tags, $styles, $item_weight, $item_length, $item_width, $item_height, $item_weight_unit, $item_dimensions_unit, $is_personalizable, $personalization_is_required, $personalization_char_count_max, $personalization_instructions, $production_partner_ids, $image_ids, $is_supply, $is_customizable, $should_auto_renew, $is_taxable, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->createDraftListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **quantity** | **int**|  | [optional]
 **title** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **price** | **float**|  | [optional]
 **who_made** | **string**|  | [optional]
 **when_made** | **string**|  | [optional]
 **taxonomy_id** | **int**|  | [optional]
 **shipping_profile_id** | **int**|  | [optional]
 **return_policy_id** | **int**|  | [optional]
 **materials** | [**string[]**](../Model/string.md)|  | [optional]
 **shop_section_id** | **int**|  | [optional]
 **processing_min** | **int**|  | [optional]
 **processing_max** | **int**|  | [optional]
 **tags** | [**string[]**](../Model/string.md)|  | [optional]
 **styles** | [**string[]**](../Model/string.md)|  | [optional]
 **item_weight** | **float**|  | [optional]
 **item_length** | **float**|  | [optional]
 **item_width** | **float**|  | [optional]
 **item_height** | **float**|  | [optional]
 **item_weight_unit** | **string**|  | [optional]
 **item_dimensions_unit** | **string**|  | [optional]
 **is_personalizable** | **bool**|  | [optional]
 **personalization_is_required** | **bool**|  | [optional]
 **personalization_char_count_max** | **int**|  | [optional]
 **personalization_instructions** | **string**|  | [optional]
 **production_partner_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **image_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **is_supply** | **bool**|  | [optional]
 **is_customizable** | **bool**|  | [optional]
 **should_auto_renew** | **bool**|  | [optional]
 **is_taxable** | **bool**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopListing**](../Model/ShopListing.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListing**
> deleteListing($listing_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Open API V3 endpoint to delete a ShopListing. A ShopListing can be deleted only if the state is one of the following:  SOLD_OUT, DRAFT, EXPIRED, INACTIVE, ACTIVE and is_available or ACTIVE and has seller flags:  SUPRESSED (frozen), VACATION, CUSTOM_SHOPS (pattern), SELL_ON_FACEBOOK

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.

try {
    $apiInstance->deleteListing($listing_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->deleteListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListingProperty**
> deleteListingProperty($shop_id, $listing_id, $property_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Deletes a property for a Listing.

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$property_id = 56; // int | The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties).

try {
    $apiInstance->deleteListingProperty($shop_id, $listing_id, $property_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->deleteListingProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **property_id** | **int**| The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties). |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllActiveListingsByShop**
> \Swagger\Client\Model\ShopListings findAllActiveListingsByShop($shop_id, $limit, $sort_on, $sort_order, $offset, $keywords)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves a list of all active listings on Etsy in a specific shop, paginated by listing creation date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$limit = 25; // int | The maximum number of results to return.
$sort_on = "created"; // string | The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
$sort_order = "desc"; // string | The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
$offset = 0; // int | The number of records to skip before selecting the first result.
$keywords = "keywords_example"; // string | Search term or phrase that must appear in all results.

try {
    $result = $apiInstance->findAllActiveListingsByShop($shop_id, $limit, $sort_on, $sort_order, $offset, $keywords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->findAllActiveListingsByShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **sort_on** | **string**| The value to sort a search result of listings on. NOTES: a) &#x60;sort_on&#x60; only works when combined with one of the search options (keywords, region, etc.). b) when using &#x60;score&#x60; the returned results will always be in _descending_ order, regardless of the &#x60;sort_order&#x60; parameter. | [optional] [default to created]
 **sort_order** | **string**| The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.). | [optional] [default to desc]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]
 **keywords** | **string**| Search term or phrase that must appear in all results. | [optional]

### Return type

[**\Swagger\Client\Model\ShopListings**](../Model/ShopListings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllListingsActive**
> \Swagger\Client\Model\ShopListings findAllListingsActive($limit, $offset, $keywords, $sort_on, $sort_order, $min_price, $max_price, $taxonomy_id, $shop_location)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  A list of all active listings on Etsy paginated by their creation date. Without sort_order listings will be returned newest-first by default.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.
$keywords = "keywords_example"; // string | Search term or phrase that must appear in all results.
$sort_on = "created"; // string | The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
$sort_order = "desc"; // string | The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
$min_price = 3.4; // float | The minimum price of listings to be returned by a search result.
$max_price = 3.4; // float | The maximum price of listings to be returned by a search result.
$taxonomy_id = 56; // int | The numerical taxonomy ID of the listing. See [SellerTaxonomy](/documentation/reference#tag/SellerTaxonomy) and [BuyerTaxonomy](/documentation/reference#tag/BuyerTaxonomy) for more information.
$shop_location = "shop_location_example"; // string | Filters by shop location. If location cannot be parsed, Etsy responds with an error.

try {
    $result = $apiInstance->findAllListingsActive($limit, $offset, $keywords, $sort_on, $sort_order, $min_price, $max_price, $taxonomy_id, $shop_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->findAllListingsActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]
 **keywords** | **string**| Search term or phrase that must appear in all results. | [optional]
 **sort_on** | **string**| The value to sort a search result of listings on. NOTES: a) &#x60;sort_on&#x60; only works when combined with one of the search options (keywords, region, etc.). b) when using &#x60;score&#x60; the returned results will always be in _descending_ order, regardless of the &#x60;sort_order&#x60; parameter. | [optional] [default to created]
 **sort_order** | **string**| The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.). | [optional] [default to desc]
 **min_price** | **float**| The minimum price of listings to be returned by a search result. | [optional]
 **max_price** | **float**| The maximum price of listings to be returned by a search result. | [optional]
 **taxonomy_id** | **int**| The numerical taxonomy ID of the listing. See [SellerTaxonomy](/documentation/reference#tag/SellerTaxonomy) and [BuyerTaxonomy](/documentation/reference#tag/BuyerTaxonomy) for more information. | [optional]
 **shop_location** | **string**| Filters by shop location. If location cannot be parsed, Etsy responds with an error. | [optional]

### Return type

[**\Swagger\Client\Model\ShopListings**](../Model/ShopListings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeaturedListingsByShop**
> \Swagger\Client\Model\ShopListings getFeaturedListingsByShop($shop_id, $limit, $offset)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves Listings associated to a Shop that are featured.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.

try {
    $result = $apiInstance->getFeaturedListingsByShop($shop_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getFeaturedListingsByShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\ShopListings**](../Model/ShopListings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListing**
> \Swagger\Client\Model\ShopListingWithAssociations getListing($listing_id, $includes, $language)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves a listing record by listing ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$includes = array("includes_example"); // string[] | An enumerated string that attaches a valid association. Acceptable inputs are 'Shipping', 'Shop', 'Images', 'User', 'Translations' and 'Inventory'.
$language = "language_example"; // string | The IETF language tag for the language of this translation. Ex: `de`, `en`, `es`, `fr`, `it`, `ja`, `nl`, `pl`, `pt`.

try {
    $result = $apiInstance->getListing($listing_id, $includes, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **includes** | [**string[]**](../Model/string.md)| An enumerated string that attaches a valid association. Acceptable inputs are &#x27;Shipping&#x27;, &#x27;Shop&#x27;, &#x27;Images&#x27;, &#x27;User&#x27;, &#x27;Translations&#x27; and &#x27;Inventory&#x27;. | [optional]
 **language** | **string**| The IETF language tag for the language of this translation. Ex: &#x60;de&#x60;, &#x60;en&#x60;, &#x60;es&#x60;, &#x60;fr&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;nl&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\ShopListingWithAssociations**](../Model/ShopListingWithAssociations.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingProperties**
> \Swagger\Client\Model\ListingPropertyValues getListingProperties($shop_id, $listing_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Get a listing's properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.

try {
    $result = $apiInstance->getListingProperties($shop_id, $listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getListingProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |

### Return type

[**\Swagger\Client\Model\ListingPropertyValues**](../Model/ListingPropertyValues.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingProperty**
> \Swagger\Client\Model\ListingPropertyValue getListingProperty($listing_id, $property_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-01 wt-mr-xs-2\"> Feedback only </span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Give feedback</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">Development for this endpoint is in progress. It will only return a 501 response.</p></div>  Retrieves a listing's property

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$property_id = 56; // int | The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties).

try {
    $result = $apiInstance->getListingProperty($listing_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getListingProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **property_id** | **int**| The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties). |

### Return type

[**\Swagger\Client\Model\ListingPropertyValue**](../Model/ListingPropertyValue.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingsByListingIds**
> \Swagger\Client\Model\ShopListingsWithAssociations getListingsByListingIds($listing_ids, $includes)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Allows to query multiple listing ids at once. Limit 100 ids maximum per query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_ids = array(56); // int[] | The list of numeric IDS for the listings in a specific Etsy shop.
$includes = array("includes_example"); // string[] | An enumerated string that attaches a valid association. Acceptable inputs are 'Shipping', 'Shop', 'Images', 'User', 'Translations' and 'Inventory'.

try {
    $result = $apiInstance->getListingsByListingIds($listing_ids, $includes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getListingsByListingIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_ids** | [**int[]**](../Model/int.md)| The list of numeric IDS for the listings in a specific Etsy shop. |
 **includes** | [**string[]**](../Model/string.md)| An enumerated string that attaches a valid association. Acceptable inputs are &#x27;Shipping&#x27;, &#x27;Shop&#x27;, &#x27;Images&#x27;, &#x27;User&#x27;, &#x27;Translations&#x27; and &#x27;Inventory&#x27;. | [optional]

### Return type

[**\Swagger\Client\Model\ShopListingsWithAssociations**](../Model/ShopListingsWithAssociations.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingsByShop**
> \Swagger\Client\Model\ShopListingsWithAssociations getListingsByShop($shop_id, $state, $limit, $offset, $sort_on, $sort_order, $includes)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Endpoint to list Listings that belong to a Shop. Listings can be filtered using the 'state' param.

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$state = "active"; // string | When _updating_ a listing, this value can be either `active` or `inactive`. Note: Setting a `draft` listing to `active` will also publish the listing on etsy.com and requires that the listing have an image set. Setting a `sold_out` listing to active will update the quantity to 1 and renew the listing on etsy.com.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.
$sort_on = "created"; // string | The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
$sort_order = "desc"; // string | The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
$includes = array("includes_example"); // string[] | An enumerated string that attaches a valid association. Acceptable inputs are 'Shipping', 'Shop', 'Images', 'User', 'Translations' and 'Inventory'.

try {
    $result = $apiInstance->getListingsByShop($shop_id, $state, $limit, $offset, $sort_on, $sort_order, $includes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getListingsByShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **state** | **string**| When _updating_ a listing, this value can be either &#x60;active&#x60; or &#x60;inactive&#x60;. Note: Setting a &#x60;draft&#x60; listing to &#x60;active&#x60; will also publish the listing on etsy.com and requires that the listing have an image set. Setting a &#x60;sold_out&#x60; listing to active will update the quantity to 1 and renew the listing on etsy.com. | [optional] [default to active]
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]
 **sort_on** | **string**| The value to sort a search result of listings on. NOTES: a) &#x60;sort_on&#x60; only works when combined with one of the search options (keywords, region, etc.). b) when using &#x60;score&#x60; the returned results will always be in _descending_ order, regardless of the &#x60;sort_order&#x60; parameter. | [optional] [default to created]
 **sort_order** | **string**| The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.). | [optional] [default to desc]
 **includes** | [**string[]**](../Model/string.md)| An enumerated string that attaches a valid association. Acceptable inputs are &#x27;Shipping&#x27;, &#x27;Shop&#x27;, &#x27;Images&#x27;, &#x27;User&#x27;, &#x27;Translations&#x27; and &#x27;Inventory&#x27;. | [optional]

### Return type

[**\Swagger\Client\Model\ShopListingsWithAssociations**](../Model/ShopListingsWithAssociations.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingsByShopReceipt**
> \Swagger\Client\Model\ShopListings getListingsByShopReceipt($receipt_id, $shop_id, $limit, $offset)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Gets all listings associated with a receipt.

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_id = 56; // int | The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.

try {
    $result = $apiInstance->getListingsByShopReceipt($receipt_id, $shop_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getListingsByShopReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_id** | **int**| The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction. |
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\ShopListings**](../Model/ShopListings.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingsByShopReturnPolicy**
> \Swagger\Client\Model\ShopListings getListingsByShopReturnPolicy($return_policy_id, $shop_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Gets all listings associated with a Return Policy.

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = 56; // int | The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies).
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.

try {
    $result = $apiInstance->getListingsByShopReturnPolicy($return_policy_id, $shop_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getListingsByShopReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_policy_id** | **int**| The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies). |
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |

### Return type

[**\Swagger\Client\Model\ShopListings**](../Model/ShopListings.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingsByShopSectionId**
> \Swagger\Client\Model\ShopListings getListingsByShopSectionId($shop_id, $shop_section_ids, $limit, $offset, $sort_on, $sort_order)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves all the listings from the section of a specific shop.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shop_section_ids = array(56); // int[] | A list of numeric IDS for all sections in a specific Etsy shop.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.
$sort_on = "created"; // string | The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
$sort_order = "desc"; // string | The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).

try {
    $result = $apiInstance->getListingsByShopSectionId($shop_id, $shop_section_ids, $limit, $offset, $sort_on, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->getListingsByShopSectionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shop_section_ids** | [**int[]**](../Model/int.md)| A list of numeric IDS for all sections in a specific Etsy shop. |
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]
 **sort_on** | **string**| The value to sort a search result of listings on. NOTES: a) &#x60;sort_on&#x60; only works when combined with one of the search options (keywords, region, etc.). b) when using &#x60;score&#x60; the returned results will always be in _descending_ order, regardless of the &#x60;sort_order&#x60; parameter. | [optional] [default to created]
 **sort_order** | **string**| The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.). | [optional] [default to desc]

### Return type

[**\Swagger\Client\Model\ShopListings**](../Model/ShopListings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateListing**
> \Swagger\Client\Model\ShopListing updateListing($shop_id, $listing_id, $image_ids, $title, $description, $materials, $should_auto_renew, $shipping_profile_id, $return_policy_id, $shop_section_id, $item_weight, $item_length, $item_width, $item_height, $item_weight_unit, $item_dimensions_unit, $is_taxable, $taxonomy_id, $tags, $who_made, $when_made, $featured_rank, $is_personalizable, $personalization_is_required, $personalization_char_count_max, $personalization_instructions, $state, $is_supply, $production_partner_ids, $type)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Updates a listing, identified by a listing ID, for a specific shop identified by a shop ID. Note that this is a PATCH method type.

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$image_ids = array(56); // int[] | 
$title = "title_example"; // string | 
$description = "description_example"; // string | 
$materials = array("materials_example"); // string[] | 
$should_auto_renew = true; // bool | 
$shipping_profile_id = 56; // int | 
$return_policy_id = 56; // int | 
$shop_section_id = 56; // int | 
$item_weight = 3.4; // float | 
$item_length = 3.4; // float | 
$item_width = 3.4; // float | 
$item_height = 3.4; // float | 
$item_weight_unit = "item_weight_unit_example"; // string | 
$item_dimensions_unit = "item_dimensions_unit_example"; // string | 
$is_taxable = true; // bool | 
$taxonomy_id = 56; // int | 
$tags = array("tags_example"); // string[] | 
$who_made = "who_made_example"; // string | 
$when_made = "when_made_example"; // string | 
$featured_rank = 56; // int | 
$is_personalizable = true; // bool | 
$personalization_is_required = true; // bool | 
$personalization_char_count_max = 56; // int | 
$personalization_instructions = "personalization_instructions_example"; // string | 
$state = "state_example"; // string | 
$is_supply = true; // bool | 
$production_partner_ids = array(56); // int[] | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->updateListing($shop_id, $listing_id, $image_ids, $title, $description, $materials, $should_auto_renew, $shipping_profile_id, $return_policy_id, $shop_section_id, $item_weight, $item_length, $item_width, $item_height, $item_weight_unit, $item_dimensions_unit, $is_taxable, $taxonomy_id, $tags, $who_made, $when_made, $featured_rank, $is_personalizable, $personalization_is_required, $personalization_char_count_max, $personalization_instructions, $state, $is_supply, $production_partner_ids, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->updateListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **image_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **title** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **materials** | [**string[]**](../Model/string.md)|  | [optional]
 **should_auto_renew** | **bool**|  | [optional]
 **shipping_profile_id** | **int**|  | [optional]
 **return_policy_id** | **int**|  | [optional]
 **shop_section_id** | **int**|  | [optional]
 **item_weight** | **float**|  | [optional]
 **item_length** | **float**|  | [optional]
 **item_width** | **float**|  | [optional]
 **item_height** | **float**|  | [optional]
 **item_weight_unit** | **string**|  | [optional]
 **item_dimensions_unit** | **string**|  | [optional]
 **is_taxable** | **bool**|  | [optional]
 **taxonomy_id** | **int**|  | [optional]
 **tags** | [**string[]**](../Model/string.md)|  | [optional]
 **who_made** | **string**|  | [optional]
 **when_made** | **string**|  | [optional]
 **featured_rank** | **int**|  | [optional]
 **is_personalizable** | **bool**|  | [optional]
 **personalization_is_required** | **bool**|  | [optional]
 **personalization_char_count_max** | **int**|  | [optional]
 **personalization_instructions** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **is_supply** | **bool**|  | [optional]
 **production_partner_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopListing**](../Model/ShopListing.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateListingDeprecated**
> \Swagger\Client\Model\ShopListing updateListingDeprecated($shop_id, $listing_id, $image_ids, $title, $description, $materials, $should_auto_renew, $shipping_profile_id, $shop_section_id, $item_weight, $item_length, $item_width, $item_height, $item_weight_unit, $item_dimensions_unit, $is_taxable, $taxonomy_id, $tags, $who_made, $when_made, $featured_rank, $is_personalizable, $personalization_is_required, $personalization_char_count_max, $personalization_instructions, $state, $is_supply, $production_partner_ids, $type)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Updates a listing, identified by a listing ID, for a specific shop identified by a shop ID. This endpoint will be removed in the near future in favor of `updateListing` PATCH version.

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$image_ids = array(56); // int[] | 
$title = "title_example"; // string | 
$description = "description_example"; // string | 
$materials = array("materials_example"); // string[] | 
$should_auto_renew = true; // bool | 
$shipping_profile_id = 56; // int | 
$shop_section_id = 56; // int | 
$item_weight = 3.4; // float | 
$item_length = 3.4; // float | 
$item_width = 3.4; // float | 
$item_height = 3.4; // float | 
$item_weight_unit = "item_weight_unit_example"; // string | 
$item_dimensions_unit = "item_dimensions_unit_example"; // string | 
$is_taxable = true; // bool | 
$taxonomy_id = 56; // int | 
$tags = array("tags_example"); // string[] | 
$who_made = "who_made_example"; // string | 
$when_made = "when_made_example"; // string | 
$featured_rank = 56; // int | 
$is_personalizable = true; // bool | 
$personalization_is_required = true; // bool | 
$personalization_char_count_max = 56; // int | 
$personalization_instructions = "personalization_instructions_example"; // string | 
$state = "state_example"; // string | 
$is_supply = true; // bool | 
$production_partner_ids = array(56); // int[] | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->updateListingDeprecated($shop_id, $listing_id, $image_ids, $title, $description, $materials, $should_auto_renew, $shipping_profile_id, $shop_section_id, $item_weight, $item_length, $item_width, $item_height, $item_weight_unit, $item_dimensions_unit, $is_taxable, $taxonomy_id, $tags, $who_made, $when_made, $featured_rank, $is_personalizable, $personalization_is_required, $personalization_char_count_max, $personalization_instructions, $state, $is_supply, $production_partner_ids, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->updateListingDeprecated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **image_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **title** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **materials** | [**string[]**](../Model/string.md)|  | [optional]
 **should_auto_renew** | **bool**|  | [optional]
 **shipping_profile_id** | **int**|  | [optional]
 **shop_section_id** | **int**|  | [optional]
 **item_weight** | **float**|  | [optional]
 **item_length** | **float**|  | [optional]
 **item_width** | **float**|  | [optional]
 **item_height** | **float**|  | [optional]
 **item_weight_unit** | **string**|  | [optional]
 **item_dimensions_unit** | **string**|  | [optional]
 **is_taxable** | **bool**|  | [optional]
 **taxonomy_id** | **int**|  | [optional]
 **tags** | [**string[]**](../Model/string.md)|  | [optional]
 **who_made** | **string**|  | [optional]
 **when_made** | **string**|  | [optional]
 **featured_rank** | **int**|  | [optional]
 **is_personalizable** | **bool**|  | [optional]
 **personalization_is_required** | **bool**|  | [optional]
 **personalization_char_count_max** | **int**|  | [optional]
 **personalization_instructions** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **is_supply** | **bool**|  | [optional]
 **production_partner_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopListing**](../Model/ShopListing.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateListingProperty**
> \Swagger\Client\Model\ListingPropertyValue updateListingProperty($shop_id, $listing_id, $property_id, $value_ids, $values, $scale_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Updates or populates the properties list defining product offerings for a listing. Each offering requires both a `value` and a `value_id` that are valid for a `scale_id` assigned to the listing or that you assign to the listing with this request.

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

$apiInstance = new Swagger\Client\Api\ShopListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$listing_id = 56; // int | The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
$property_id = 56; // int | The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties).
$value_ids = array(56); // int[] | 
$values = array("values_example"); // string[] | 
$scale_id = 56; // int | 

try {
    $result = $apiInstance->updateListingProperty($shop_id, $listing_id, $property_id, $value_ids, $values, $scale_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopListingApi->updateListingProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **listing_id** | **int**| The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction. |
 **property_id** | **int**| The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties). |
 **value_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **values** | [**string[]**](../Model/string.md)|  | [optional]
 **scale_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListingPropertyValue**](../Model/ListingPropertyValue.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

