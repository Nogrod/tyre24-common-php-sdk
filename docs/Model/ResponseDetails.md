# # ResponseDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer** | [**\Tyre24\Common\Model\BusinessPartner**](.md) | All information of the buyer |
**order_contact** | [**\Tyre24\Common\Model\OrderContact**](.md) | The contact person who placed the order. | [optional]
**seller** | [**\Tyre24\Common\Model\BusinessPartner**](.md) | All information of the seller. Note: This property is only returned when logged in with a retailer account. | [optional]
**child_branch** | [**\Tyre24\Common\Model\ChildBranch**](.md) | Child branch information | [optional]
**has_coupon** | **bool** | True if the order includes coupon as a gift, otherwise false |
**coupon_status** | **int** | Coupon status. 0 &#x3D; not printed, 1 &#x3D; printed, 2 &#x3D; used for 800 eur coupon |
**alzura_pay_invoice_id** | **string** | The ALZURA PAY invoice id, if given. | [optional]
**is_payed** | **bool** | True if the order was payed for, otherwise false |
**can_be_cancelled** | **bool** | Describes if the order can be cancelled. This field will only be in the response, if authenticated as a retailer. | [optional]
**is_partially_cancelled** | **bool** | Describes if the order is partially cancelled |
**can_request_tracking** | **bool** | Whether or not a tracking information can be requested. A tracking information can be requested if no other requests were sent in the tracking-request time interval. |
**request_tracking_interval** | **int** | Request tracking interval in minutes: The request can be made only once per interval. |
**can_request_invoice** | **bool** | Whether or not an invoice can be requested. An invoice can be requested if no invoice is uploaded or if no other invoice requests were sent in the invoice-request time interval. |
**request_invoice_interval** | **int** | Request invoice interval in minutes: The request can be made only once per interval. |
**can_request_refund** | **bool** | Whether or not a refund can be requested. An refund can be requested if an invoice is uploaded or if no other refund requests were sent in the invoice-request time interval. |
**request_refund_interval** | **int** | Request refund interval in minutes: The request can be made only once per interval. |
**can_request_delivery_note** | **bool** | Whether or not a delivery note can be requested. A delivery note can be requested if no invoice and/or delivery note is already uploaded or if no other delivery note requests were sent in the delivery-note-request time interval. |
**request_delivery_note_interval** | **int** | Request delivery note interval in minutes: The request can be made only once per interval |
**reference_number** | **string** | Reference number of an order, if given |
**country** | **string** | The country of the order, 2 letter iso-code lower case |
**comment** | **string** | A comment for the order |
**currency** | [**\Tyre24\Common\Model\Currency**](.md) | Currency information for this order | [optional]
**shipping** | [**\Tyre24\Common\Model\Shipping**](.md) | Shipping information |
**assurance** | [**\Tyre24\Common\Model\Assurance**](.md) | Insurance information |
**payment** | [**\Tyre24\Common\Model\Payment**](.md) | Payment information |
**invoice** | [**\Tyre24\Common\Model\Invoice**](.md) | Contains seller invoice information |
**messages** | [**\Tyre24\Common\Model\Message[]**](Message.md) | List of chat messages for this order |
**documents** | [**\Tyre24\Common\Model\Document[]**](Document.md) | List of documents for this order |
**status_comment** | **string** | Comment to the current oder status |
**tagging_counter** | **int** | Tagging count | [optional]
**cart_order_id** | **int** | Contains the cart order id of this order if it is a cart order. | [optional]
**order** | **string** | The identifier of an order |
**date** | **string** | Date of an order (time zone Europe/Berlin) |
**status** | **int** | Status of the order |
**is_marketplace** | **bool** | True if marketplace order otherwise false | [optional]
**positions** | [**\Tyre24\Common\Model\OrderPosition[]**](OrderPosition.md) | List of associated positions of the order | [optional]
**sum** | [**\Tyre24\Common\Model\Price**](.md) | The summed up price of all product positions of the given order | [optional]
**total_sum** | [**\Tyre24\Common\Model\Price**](.md) | The final price that has to be paid by the retailer (except for any possible &#x60;deposit&#x60;). This price includes, among other things, the item total (&#x60;sum&#x60;), costs of the payment method (&#x60;payment.method.price&#x60;), costs for alternative delivery address (&#x60;shipping.delivery_address.price&#x60;), shipping costs (&#x60;shipping.method.price&#x60;) and possible discounts (&#x60;shipping.handling_fee&#x60;). | [optional]
**deposit** | [**\Tyre24\Common\Model\Price**](.md) | Summed up deposit price for the order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
