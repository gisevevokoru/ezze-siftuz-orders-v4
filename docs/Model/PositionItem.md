# PositionItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**position_item_id** | **string** | The unique id of the position item | 
**fulfillment_status** | **string** | The fulfillment status of the position item | 
**delivery_service_hes** | **bool** | Position item has delivery service HES | [optional] 
**item_value_gross_price** | [**\EzzeSiftuz\OrdersV4\Model\Amount**](Amount.md) |  | 
**item_value_reduced_gross_price** | [**\EzzeSiftuz\OrdersV4\Model\Amount**](Amount.md) |  | [optional] 
**item_value_discount** | [**\EzzeSiftuz\OrdersV4\Model\Amount**](Amount.md) |  | [optional] 
**product** | [**\EzzeSiftuz\OrdersV4\Model\Product**](Product.md) |  | 
**tracking_info** | [**\EzzeSiftuz\OrdersV4\Model\TrackingInfo**](TrackingInfo.md) |  | [optional] 
**expected_delivery_date** | [**\DateTime**](\DateTime.md) | The date the position item should be delivered | [optional] 
**sent_date** | [**\DateTime**](\DateTime.md) | Date the position item was sent | [optional] 
**returned_date** | [**\DateTime**](\DateTime.md) | Date the position item was returned | [optional] 
**cancellation_date** | [**\DateTime**](\DateTime.md) | Date the position item was cancelled | [optional] 
**processable_date** | [**\DateTime**](\DateTime.md) | Date the position item has reached PROCESSABLE fulfillment status | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

