# Swagger\Client\LedgerEntryApi

All URIs are relative to *https://openapi.etsy.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShopPaymentAccountLedgerEntries**](LedgerEntryApi.md#getshoppaymentaccountledgerentries) | **GET** /v3/application/shops/{shop_id}/payment-account/ledger-entries | 
[**getShopPaymentAccountLedgerEntry**](LedgerEntryApi.md#getshoppaymentaccountledgerentry) | **GET** /v3/application/shops/{shop_id}/payment-account/ledger-entries/{ledger_entry_id} | 

# **getShopPaymentAccountLedgerEntries**
> \Swagger\Client\Model\PaymentAccountLedgerEntries getShopPaymentAccountLedgerEntries($shop_id, $min_created, $max_created, $limit, $offset)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Get a Shop Payment Account Ledger's Entries

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

$apiInstance = new Swagger\Client\Api\LedgerEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$min_created = 56; // int | The earliest unix timestamp for when a record was created.
$max_created = 56; // int | The latest unix timestamp for when a record was created.
$limit = 25; // int | The maximum number of results to return.
$offset = 0; // int | The number of records to skip before selecting the first result.

try {
    $result = $apiInstance->getShopPaymentAccountLedgerEntries($shop_id, $min_created, $max_created, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerEntryApi->getShopPaymentAccountLedgerEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **min_created** | **int**| The earliest unix timestamp for when a record was created. |
 **max_created** | **int**| The latest unix timestamp for when a record was created. |
 **limit** | **int**| The maximum number of results to return. | [optional] [default to 25]
 **offset** | **int**| The number of records to skip before selecting the first result. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\PaymentAccountLedgerEntries**](../Model/PaymentAccountLedgerEntries.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShopPaymentAccountLedgerEntry**
> \Swagger\Client\Model\PaymentAccountLedgerEntry getShopPaymentAccountLedgerEntry($shop_id, $ledger_entry_id)



<div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><span class=\"wt-badge wt-badge--notification-03 wt-bg-slime-tint wt-mr-xs-2\">General Release</span><a class=\"wt-text-link\" href=\"https://github.com/etsy/open-api/discussions\" target=\"_blank\" rel=\"noopener noreferrer\">Report bug</a></div><div class=\"wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3\"><p class=\"wt-text-body-01 banner-text\">This endpoint is ready for production use.</p></div>  Get a single Shop Payment Account Ledger's Entry

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

$apiInstance = new Swagger\Client\Api\LedgerEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_id = 56; // int | The unique positive non-zero numeric ID for an Etsy Shop.
$ledger_entry_id = 56; // int | The unique ID of the shop owner ledger entry.

try {
    $result = $apiInstance->getShopPaymentAccountLedgerEntry($shop_id, $ledger_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerEntryApi->getShopPaymentAccountLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_id** | **int**| The unique positive non-zero numeric ID for an Etsy Shop. |
 **ledger_entry_id** | **int**| The unique ID of the shop owner ledger entry. |

### Return type

[**\Swagger\Client\Model\PaymentAccountLedgerEntry**](../Model/PaymentAccountLedgerEntry.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

