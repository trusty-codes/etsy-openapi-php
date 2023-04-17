# Swagger\Client\ShopReceiptApi

All URIs are relative to *https://openapi.etsy.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReceiptShipment**](ShopReceiptApi.md#createreceiptshipment) | **POST** /v3/application/shops/{shop_id}/receipts/{receipt_id}/tracking | 
[**getShopReceipt**](ShopReceiptApi.md#getshopreceipt) | **GET** /v3/application/shops/{shop_id}/receipts/{receipt_id} | 
[**getShopReceipts**](ShopReceiptApi.md#getshopreceipts) | **GET** /v3/application/shops/{shop_id}/receipts | 
[**updateShopReceipt**](ShopReceiptApi.md#updateshopreceipt) | **PUT** /v3/application/shops/{shop_id}/receipts/{receipt_id} | 

# **createReceiptShipment**
> \Swagger\Client\Model\ShopReceipt createReceiptShipment($shop_id, $receipt_id, $tracking_code, $carrier_name, $send_bcc, $note_to_buyer)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Submits tracking information for a Shop Receipt, which creates a Shop Receipt Shipment entry for the given receipt_id. Each time you successfully submit tracking info, Etsy sends a notification email to the buyer User. When send_bcc is true, Etsy sends shipping notifications to the seller as well. When tracking_code and carrier_name aren't sent, the receipt is marked as shipped only. If the carrier is not supported, you may use `other` as the carrier name so you can provide the tracking code. **NOTE** When shipping within the United States AND the order is over $10 _or_ when shipping to India, tracking code and carrier name ARE required.

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

$apiInstance = new Swagger\Client\Api\ShopReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$receipt_id = 56; // int | The receipt to submit tracking for.
$tracking_code = "tracking_code_example"; // string | 
$carrier_name = "carrier_name_example"; // string | 
$send_bcc = true; // bool | 
$note_to_buyer = "note_to_buyer_example"; // string | 

try {
    $result = $apiInstance->createReceiptShipment($shop_id, $receipt_id, $tracking_code, $carrier_name, $send_bcc, $note_to_buyer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopReceiptApi->createReceiptShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **receipt_id** | **int**| The receipt to submit tracking for. |
 **tracking_code** | **string**|  | [optional]
 **carrier_name** | **string**|  | [optional]
 **send_bcc** | **bool**|  | [optional]
 **note_to_buyer** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopReceipt**](../Model/ShopReceipt.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopReceipt**
> \Swagger\Client\Model\ShopReceipt getShopReceipt($shop_id, $receipt_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Retrieves a receipt, identified by a receipt id, from an Etsy shop

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

$apiInstance = new Swagger\Client\Api\ShopReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$receipt_id = 56; // int | The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.

try {
    $result = $apiInstance->getShopReceipt($shop_id, $receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopReceiptApi->getShopReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **receipt_id** | **int**| The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction. |

### Return type

[**\Swagger\Client\Model\ShopReceipt**](../Model/ShopReceipt.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopReceipts**
> \Swagger\Client\Model\ShopReceipts getShopReceipts($shop_id, $min_created, $max_created, $min_last_modified, $max_last_modified, $limit, $offset, $sort_on, $sort_order, $was_paid, $was_shipped, $was_delivered)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Requests the Shop Receipts from a specific Shop, unfiltered or filtered by receipt id range or offset, date, paid, and/or shipped purchases.

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

$apiInstance = new Swagger\Client\Api\ShopReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$min_created = 56; // int | The earliest unix timestamp for when a record was created.
$max_created = 56; // int | The latest unix timestamp for when a record was created.
$min_last_modified = 56; // int | The earliest unix timestamp for when a record last changed.
$max_last_modified = 56; // int | The latest unix timestamp for when a record last changed.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.
$sort_on = "created"; // string | The value to sort a search result of listings on.
$sort_order = "desc"; // string | The ascending(up) or descending(down) order to sort receipts by.
$was_paid = true; // bool | When `true`, returns receipts where the seller has recieved payment for the receipt. When `false`, returns receipts where payment has not been received.
$was_shipped = true; // bool | When `true`, returns receipts where the seller shipped the product(s) in this receipt. When `false`, returns receipts where shipment has not been set.
$was_delivered = true; // bool | When `true`, returns receipts that have been marked as delivered. When `false`, returns receipts where shipment has not been marked as delivered.

try {
    $result = $apiInstance->getShopReceipts($shop_id, $min_created, $max_created, $min_last_modified, $max_last_modified, $limit, $offset, $sort_on, $sort_order, $was_paid, $was_shipped, $was_delivered);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopReceiptApi->getShopReceipts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **min_created** | **int**| The earliest unix timestamp for when a record was created. | [optional]
 **max_created** | **int**| The latest unix timestamp for when a record was created. | [optional]
 **min_last_modified** | **int**| The earliest unix timestamp for when a record last changed. | [optional]
 **max_last_modified** | **int**| The latest unix timestamp for when a record last changed. | [optional]
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]
 **sort_on** | **string**| The value to sort a search result of listings on. | [optional] [default to created]
 **sort_order** | **string**| The ascending(up) or descending(down) order to sort receipts by. | [optional] [default to desc]
 **was_paid** | **bool**| When &#x60;true&#x60;, returns receipts where the seller has recieved payment for the receipt. When &#x60;false&#x60;, returns receipts where payment has not been received. | [optional]
 **was_shipped** | **bool**| When &#x60;true&#x60;, returns receipts where the seller shipped the product(s) in this receipt. When &#x60;false&#x60;, returns receipts where shipment has not been set. | [optional]
 **was_delivered** | **bool**| When &#x60;true&#x60;, returns receipts that have been marked as delivered. When &#x60;false&#x60;, returns receipts where shipment has not been marked as delivered. | [optional]

### Return type

[**\Swagger\Client\Model\ShopReceipts**](../Model/ShopReceipts.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShopReceipt**
> \Swagger\Client\Model\ShopReceipt updateShopReceipt($shop_id, $receipt_id, $was_shipped, $was_paid)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Updates the status of a receipt, identified by a receipt id, from an Etsy shop

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

$apiInstance = new Swagger\Client\Api\ShopReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$receipt_id = 56; // int | The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
$was_shipped = true; // bool | 
$was_paid = true; // bool | 

try {
    $result = $apiInstance->updateShopReceipt($shop_id, $receipt_id, $was_shipped, $was_paid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopReceiptApi->updateShopReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **receipt_id** | **int**| The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction. |
 **was_shipped** | **bool**|  | [optional]
 **was_paid** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ShopReceipt**](../Model/ShopReceipt.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

