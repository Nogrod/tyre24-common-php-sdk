# # Shipping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_date** | **string** | Estimated delivery date | [optional]
**priority** | **bool** | True if shipping has priority, otherwise false |
**neutral** | **bool** | True if neutral shipping was selected, otherwise false |
**handling_fee** | [**\Tyre24\Common\Model\Price**](Price.md) | Any discounts that may apply to the order. |
**delivery_address** | [**\Tyre24\Common\Model\DeliveryAddress**](DeliveryAddress.md) | Delivery address |
**method** | [**\Tyre24\Common\Model\ShippingMethod**](ShippingMethod.md) | Shipping method information |
**tracking** | [**\Tyre24\Common\Model\TrackingNumber[]**](TrackingNumber.md) | A list of tracking numbers |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
