# Swagger\Client\ShopShippingProfileApi

All URIs are relative to *https://openapi.etsy.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShopShippingProfile**](ShopShippingProfileApi.md#createshopshippingprofile) | **POST** /v3/application/shops/{shop_id}/shipping-profiles | 
[**createShopShippingProfileDestination**](ShopShippingProfileApi.md#createshopshippingprofiledestination) | **POST** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id}/destinations | 
[**createShopShippingProfileUpgrade**](ShopShippingProfileApi.md#createshopshippingprofileupgrade) | **POST** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id}/upgrades | 
[**deleteShopShippingProfile**](ShopShippingProfileApi.md#deleteshopshippingprofile) | **DELETE** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id} | 
[**deleteShopShippingProfileDestination**](ShopShippingProfileApi.md#deleteshopshippingprofiledestination) | **DELETE** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id}/destinations/{shipping_profile_destination_id} | 
[**deleteShopShippingProfileUpgrade**](ShopShippingProfileApi.md#deleteshopshippingprofileupgrade) | **DELETE** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id}/upgrades/{upgrade_id} | 
[**getShippingCarriers**](ShopShippingProfileApi.md#getshippingcarriers) | **GET** /v3/application/shipping-carriers | 
[**getShopShippingProfile**](ShopShippingProfileApi.md#getshopshippingprofile) | **GET** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id} | 
[**getShopShippingProfileDestinationsByShippingProfile**](ShopShippingProfileApi.md#getshopshippingprofiledestinationsbyshippingprofile) | **GET** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id}/destinations | 
[**getShopShippingProfileUpgrades**](ShopShippingProfileApi.md#getshopshippingprofileupgrades) | **GET** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id}/upgrades | 
[**getShopShippingProfiles**](ShopShippingProfileApi.md#getshopshippingprofiles) | **GET** /v3/application/shops/{shop_id}/shipping-profiles | 
[**updateShopShippingProfile**](ShopShippingProfileApi.md#updateshopshippingprofile) | **PUT** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id} | 
[**updateShopShippingProfileDestination**](ShopShippingProfileApi.md#updateshopshippingprofiledestination) | **PUT** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id}/destinations/{shipping_profile_destination_id} | 
[**updateShopShippingProfileUpgrade**](ShopShippingProfileApi.md#updateshopshippingprofileupgrade) | **PUT** /v3/application/shops/{shop_id}/shipping-profiles/{shipping_profile_id}/upgrades/{upgrade_id} | 

# **createShopShippingProfile**
> \Swagger\Client\Model\ShopShippingProfile createShopShippingProfile($shop_id, $title, $origin_country_iso, $primary_cost, $secondary_cost, $min_processing_time, $max_processing_time, $processing_time_unit, $destination_country_iso, $destination_region, $origin_postal_code, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Creates a new ShippingProfile. You can pass a country iso code or a region when creating a ShippingProfile, but not both. Only one is required. You must pass either a shipping_carrier_id AND mail_class, or both min and max_delivery_days.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$title = "title_example"; // string | 
$origin_country_iso = "origin_country_iso_example"; // string | 
$primary_cost = 3.4; // float | 
$secondary_cost = 3.4; // float | 
$min_processing_time = 56; // int | 
$max_processing_time = 56; // int | 
$processing_time_unit = "processing_time_unit_example"; // string | 
$destination_country_iso = "destination_country_iso_example"; // string | 
$destination_region = "destination_region_example"; // string | 
$origin_postal_code = "origin_postal_code_example"; // string | 
$shipping_carrier_id = 56; // int | 
$mail_class = "mail_class_example"; // string | 
$min_delivery_days = 56; // int | 
$max_delivery_days = 56; // int | 

try {
    $result = $apiInstance->createShopShippingProfile($shop_id, $title, $origin_country_iso, $primary_cost, $secondary_cost, $min_processing_time, $max_processing_time, $processing_time_unit, $destination_country_iso, $destination_region, $origin_postal_code, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->createShopShippingProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **title** | **string**|  | [optional]
 **origin_country_iso** | **string**|  | [optional]
 **primary_cost** | **float**|  | [optional]
 **secondary_cost** | **float**|  | [optional]
 **min_processing_time** | **int**|  | [optional]
 **max_processing_time** | **int**|  | [optional]
 **processing_time_unit** | **string**|  | [optional]
 **destination_country_iso** | **string**|  | [optional]
 **destination_region** | **string**|  | [optional]
 **origin_postal_code** | **string**|  | [optional]
 **shipping_carrier_id** | **int**|  | [optional]
 **mail_class** | **string**|  | [optional]
 **min_delivery_days** | **int**|  | [optional]
 **max_delivery_days** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopShippingProfile**](../Model/ShopShippingProfile.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShopShippingProfileDestination**
> \Swagger\Client\Model\ShopShippingProfileDestination createShopShippingProfileDestination($shop_id, $shipping_profile_id, $primary_cost, $secondary_cost, $destination_country_iso, $destination_region, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Creates a new shipping destination, which sets the shipping cost, carrier, and class for a destination in a [shipping profile](/documentation/reference/#tag/Shop-ShippingProfile). createShopShippingProfileDestination assigns costs using the currency of the associated shop. Set the destination using either `destination_country_iso` or `destination_region`; `destination_country_iso` and `destination_region` are mutually exclusive — set one or the other. Setting both triggers error 400. If the request sets neither `destination_country_iso` nor `destination_region`, the default destination is \"everywhere\". You must also either assign both a `shipping_carrier_id` AND `mail_class` or both `min_delivery_days` AND `max_delivery_days`.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
$primary_cost = 3.4; // float | 
$secondary_cost = 3.4; // float | 
$destination_country_iso = "destination_country_iso_example"; // string | 
$destination_region = "destination_region_example"; // string | 
$shipping_carrier_id = 56; // int | 
$mail_class = "mail_class_example"; // string | 
$min_delivery_days = 56; // int | 
$max_delivery_days = 56; // int | 

try {
    $result = $apiInstance->createShopShippingProfileDestination($shop_id, $shipping_profile_id, $primary_cost, $secondary_cost, $destination_country_iso, $destination_region, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->createShopShippingProfileDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |
 **primary_cost** | **float**|  | [optional]
 **secondary_cost** | **float**|  | [optional]
 **destination_country_iso** | **string**|  | [optional]
 **destination_region** | **string**|  | [optional]
 **shipping_carrier_id** | **int**|  | [optional]
 **mail_class** | **string**|  | [optional]
 **min_delivery_days** | **int**|  | [optional]
 **max_delivery_days** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopShippingProfileDestination**](../Model/ShopShippingProfileDestination.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShopShippingProfileUpgrade**
> \Swagger\Client\Model\ShopShippingProfileUpgrade createShopShippingProfileUpgrade($shop_id, $shipping_profile_id, $type, $upgrade_name, $price, $secondary_price, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Creates a new shipping profile upgrade, which can establish a price for a shipping option, such as an alternate carrier or faster delivery.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
$type = "type_example"; // string | 
$upgrade_name = "upgrade_name_example"; // string | 
$price = 3.4; // float | 
$secondary_price = 3.4; // float | 
$shipping_carrier_id = 56; // int | 
$mail_class = "mail_class_example"; // string | 
$min_delivery_days = 56; // int | 
$max_delivery_days = 56; // int | 

try {
    $result = $apiInstance->createShopShippingProfileUpgrade($shop_id, $shipping_profile_id, $type, $upgrade_name, $price, $secondary_price, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->createShopShippingProfileUpgrade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |
 **type** | **string**|  | [optional]
 **upgrade_name** | **string**|  | [optional]
 **price** | **float**|  | [optional]
 **secondary_price** | **float**|  | [optional]
 **shipping_carrier_id** | **int**|  | [optional]
 **mail_class** | **string**|  | [optional]
 **min_delivery_days** | **int**|  | [optional]
 **max_delivery_days** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopShippingProfileUpgrade**](../Model/ShopShippingProfileUpgrade.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShopShippingProfile**
> deleteShopShippingProfile($shop_id, $shipping_profile_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Deletes a ShippingProfile by given id.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.

try {
    $apiInstance->deleteShopShippingProfile($shop_id, $shipping_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->deleteShopShippingProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShopShippingProfileDestination**
> deleteShopShippingProfileDestination($shop_id, $shipping_profile_id, $shipping_profile_destination_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Deletes a shipping destination and removes the destination option from every listing that uses the associated shipping profile. A shipping profile requires at least one shipping destination, so this endpoint cannot delete the final shipping destination for any shipping profile. To delete the final shipping destination from a shipping profile, you must [delete the entire shipping profile](/documentation/reference/#operation/deleteShopShippingProfile).

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
$shipping_profile_destination_id = 56; // int | The numeric ID of the shipping profile destination in the [shipping profile](/documentation/reference#tag/Shop-ShippingProfile) associated with the listing.

try {
    $apiInstance->deleteShopShippingProfileDestination($shop_id, $shipping_profile_id, $shipping_profile_destination_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->deleteShopShippingProfileDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |
 **shipping_profile_destination_id** | **int**| The numeric ID of the shipping profile destination in the [shipping profile](/documentation/reference#tag/Shop-ShippingProfile) associated with the listing. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShopShippingProfileUpgrade**
> deleteShopShippingProfileUpgrade($shop_id, $shipping_profile_id, $upgrade_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Deletes a shipping profile upgrade and removes the upgrade option from every listing that uses the associated shipping profile.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the shipping profile.
$upgrade_id = 56; // int | The numeric ID that is associated with a shipping upgrade

try {
    $apiInstance->deleteShopShippingProfileUpgrade($shop_id, $shipping_profile_id, $upgrade_id);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->deleteShopShippingProfileUpgrade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the shipping profile. |
 **upgrade_id** | **int**| The numeric ID that is associated with a shipping upgrade |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingCarriers**
> \Swagger\Client\Model\ShippingCarriers getShippingCarriers($origin_country_iso)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves a list of available shipping carriers and the mail classes associated with them for a given country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$origin_country_iso = "origin_country_iso_example"; // string | The ISO code of the country from which the listing ships.

try {
    $result = $apiInstance->getShippingCarriers($origin_country_iso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->getShippingCarriers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **origin_country_iso** | **string**| The ISO code of the country from which the listing ships. |

### Return type

[**\Swagger\Client\Model\ShippingCarriers**](../Model/ShippingCarriers.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopShippingProfile**
> \Swagger\Client\Model\ShopShippingProfile getShopShippingProfile($shop_id, $shipping_profile_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves a Shipping Profile referenced by shipping profile ID.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.

try {
    $result = $apiInstance->getShopShippingProfile($shop_id, $shipping_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->getShopShippingProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |

### Return type

[**\Swagger\Client\Model\ShopShippingProfile**](../Model/ShopShippingProfile.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopShippingProfileDestinationsByShippingProfile**
> \Swagger\Client\Model\ShopShippingProfileDestinations getShopShippingProfileDestinationsByShippingProfile($shop_id, $shipping_profile_id, $limit, $offset)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves a list of shipping destination objects associated with a shipping profile.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.

try {
    $result = $apiInstance->getShopShippingProfileDestinationsByShippingProfile($shop_id, $shipping_profile_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->getShopShippingProfileDestinationsByShippingProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\ShopShippingProfileDestinations**](../Model/ShopShippingProfileDestinations.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopShippingProfileUpgrades**
> \Swagger\Client\Model\ShopShippingProfileUpgrades getShopShippingProfileUpgrades($shop_id, $shipping_profile_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves the list of shipping profile upgrades assigned to a specific shipping profile.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.

try {
    $result = $apiInstance->getShopShippingProfileUpgrades($shop_id, $shipping_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->getShopShippingProfileUpgrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |

### Return type

[**\Swagger\Client\Model\ShopShippingProfileUpgrades**](../Model/ShopShippingProfileUpgrades.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopShippingProfiles**
> \Swagger\Client\Model\ShopShippingProfiles getShopShippingProfiles($shop_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves a list of shipping profiles available in the specific Etsy shop identified by its shop ID.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.

try {
    $result = $apiInstance->getShopShippingProfiles($shop_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->getShopShippingProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |

### Return type

[**\Swagger\Client\Model\ShopShippingProfiles**](../Model/ShopShippingProfiles.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShopShippingProfile**
> \Swagger\Client\Model\ShopShippingProfile updateShopShippingProfile($shop_id, $shipping_profile_id, $title, $origin_country_iso, $min_processing_time, $max_processing_time, $processing_time_unit, $origin_postal_code)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Changes the settings in a shipping profile. You can pass a country iso code or a region when updating a ShippingProfile, but not both. Only one is required. You must pass either a shipping_carrier_id AND mail_class, or both min and max_delivery_days.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
$title = "title_example"; // string | 
$origin_country_iso = "origin_country_iso_example"; // string | 
$min_processing_time = 56; // int | 
$max_processing_time = 56; // int | 
$processing_time_unit = "processing_time_unit_example"; // string | 
$origin_postal_code = "origin_postal_code_example"; // string | 

try {
    $result = $apiInstance->updateShopShippingProfile($shop_id, $shipping_profile_id, $title, $origin_country_iso, $min_processing_time, $max_processing_time, $processing_time_unit, $origin_postal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->updateShopShippingProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |
 **title** | **string**|  | [optional]
 **origin_country_iso** | **string**|  | [optional]
 **min_processing_time** | **int**|  | [optional]
 **max_processing_time** | **int**|  | [optional]
 **processing_time_unit** | **string**|  | [optional]
 **origin_postal_code** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopShippingProfile**](../Model/ShopShippingProfile.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShopShippingProfileDestination**
> \Swagger\Client\Model\ShopShippingProfileDestination updateShopShippingProfileDestination($shop_id, $shipping_profile_id, $shipping_profile_destination_id, $primary_cost, $secondary_cost, $destination_country_iso, $destination_region, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Updates an existing shipping destination, which can set or reassign the shipping cost, carrier, and class for a destination.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
$shipping_profile_destination_id = 56; // int | The numeric ID of the shipping profile destination in the [shipping profile](/documentation/reference#tag/Shop-ShippingProfile) associated with the listing.
$primary_cost = 3.4; // float | 
$secondary_cost = 3.4; // float | 
$destination_country_iso = "destination_country_iso_example"; // string | 
$destination_region = "destination_region_example"; // string | 
$shipping_carrier_id = 56; // int | 
$mail_class = "mail_class_example"; // string | 
$min_delivery_days = 56; // int | 
$max_delivery_days = 56; // int | 

try {
    $result = $apiInstance->updateShopShippingProfileDestination($shop_id, $shipping_profile_id, $shipping_profile_destination_id, $primary_cost, $secondary_cost, $destination_country_iso, $destination_region, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->updateShopShippingProfileDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |
 **shipping_profile_destination_id** | **int**| The numeric ID of the shipping profile destination in the [shipping profile](/documentation/reference#tag/Shop-ShippingProfile) associated with the listing. |
 **primary_cost** | **float**|  | [optional]
 **secondary_cost** | **float**|  | [optional]
 **destination_country_iso** | **string**|  | [optional]
 **destination_region** | **string**|  | [optional]
 **shipping_carrier_id** | **int**|  | [optional]
 **mail_class** | **string**|  | [optional]
 **min_delivery_days** | **int**|  | [optional]
 **max_delivery_days** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopShippingProfileDestination**](../Model/ShopShippingProfileDestination.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShopShippingProfileUpgrade**
> \Swagger\Client\Model\ShopShippingProfileUpgrade updateShopShippingProfileUpgrade($shop_id, $shipping_profile_id, $upgrade_id, $upgrade_name, $type, $price, $secondary_price, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Updates a shipping profile upgrade and updates any listings that use the shipping profile.

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

$apiInstance = new Swagger\Client\Api\ShopShippingProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$shipping_profile_id = 56; // int | The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
$upgrade_id = 56; // int | The numeric ID that is associated with a shipping upgrade
$upgrade_name = "upgrade_name_example"; // string | 
$type = "type_example"; // string | 
$price = 3.4; // float | 
$secondary_price = 3.4; // float | 
$shipping_carrier_id = 56; // int | 
$mail_class = "mail_class_example"; // string | 
$min_delivery_days = 56; // int | 
$max_delivery_days = 56; // int | 

try {
    $result = $apiInstance->updateShopShippingProfileUpgrade($shop_id, $shipping_profile_id, $upgrade_id, $upgrade_name, $type, $price, $secondary_price, $shipping_carrier_id, $mail_class, $min_delivery_days, $max_delivery_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopShippingProfileApi->updateShopShippingProfileUpgrade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **shipping_profile_id** | **int**| The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is &#x60;physical&#x60;. |
 **upgrade_id** | **int**| The numeric ID that is associated with a shipping upgrade |
 **upgrade_name** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **price** | **float**|  | [optional]
 **secondary_price** | **float**|  | [optional]
 **shipping_carrier_id** | **int**|  | [optional]
 **mail_class** | **string**|  | [optional]
 **min_delivery_days** | **int**|  | [optional]
 **max_delivery_days** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopShippingProfileUpgrade**](../Model/ShopShippingProfileUpgrade.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

