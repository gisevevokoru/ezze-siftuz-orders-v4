# EzzeSiftuz\OrdersV4\PositionItemsApi

All URIs are relative to *https://live.api.otto.market*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPartnerOrderPositionItems**](PositionItemsApi.md#cancelpartnerorderpositionitems) | **POST** /v4/orders/{salesOrderId}/positionItems/{positionItemId}/cancellation | Cancel specific position items of an order

# **cancelPartnerOrderPositionItems**
> cancelPartnerOrderPositionItems($sales_order_id, $position_item_id)

Cancel specific position items of an order

Allows to cancel specific position items of an order by salesOrderId and positionItemIds.<br>Note: Only position items in state PROCESSABLE can be cancelled. Position items in state CANCELLED_BY_PARTNER will be ignored. If any position item is in a different state the operation will leave the whole order unchanged and respond with a conflict error message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\OrdersV4\Api\PositionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sales_order_id = "sales_order_id_example"; // string | The salesOrderId of the order
$position_item_id = array("position_item_id_example"); // string[] | The positionItemIds of the order to cancel

try {
    $apiInstance->cancelPartnerOrderPositionItems($sales_order_id, $position_item_id);
} catch (Exception $e) {
    echo 'Exception when calling PositionItemsApi->cancelPartnerOrderPositionItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sales_order_id** | **string**| The salesOrderId of the order |
 **position_item_id** | [**string[]**](../Model/string.md)| The positionItemIds of the order to cancel |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

