# # BusinessPartnerLatest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\Tyre24\Common\Model\ContactLatest**](.md) | Contact information | [optional]
**buyer_invoice_route_id** | **string** | e-invoice buyer route ID | [optional]
**id** | **int** | Tyre24 id of the customer |
**status_name** | **string** | Status name of the customer | [optional]
**recipient_code** | **string** | Recipient code (required in italy) |
**address** | [**\Tyre24\Common\Model\Address**](.md) | Address | [optional]
**tax** | [**\Tyre24\Common\Model\Tax**](.md) | Tax information | [optional]
**bank** | [**\Tyre24\Common\Model\Bank**](.md) | Bank account information | [optional]
**credit_reform** | [**\Tyre24\Common\Model\CreditReform**](.md) | Credit reform information | [optional]
**cooperation** | [**\Tyre24\Common\Model\Organisation**](.md) | Information about cooperation | [optional]
**rating** | **int** | The rating of the supplier, where 1 is good and 0 is bad. If this point is not given the rating is neutral. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
