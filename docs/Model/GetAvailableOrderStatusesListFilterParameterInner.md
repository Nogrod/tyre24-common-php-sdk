# # GetAvailableOrderStatusesListFilterParameterInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Filter the result set by status id.  Allowed operators are:  | operator | example | | ------ | ------ | | &#x60;eq&#x60; | &#x60;eq;1337&#x60; | | [optional]
**send_mail** | **bool** | Filter the result set by send-email flag.  Allowed operators are:  | operator | example | | ------ | ------ | | &#x60;eq&#x60; | &#x60;eq;1&#x60; | | [optional]
**key** | **string** | Filter the result set by key.  Allowed operators are:  | operator | example | | ------ | ------ | | &#x60;eq&#x60; | &#x60;eq;john doe&#x60; | | [optional]
**settable_by_buyer** | **string** | All order statuses that can be set by the buyer  Allowed operators are:  | operator | example | | ------ | ------ | | &#x60;eq&#x60; | &#x60;eq;1337&#x60; | | [optional]
**settable_by_seller** | **string** | All order statuses that can be set by the seller  Allowed operators are:  | operator | example | | ------ | ------ | | &#x60;eq&#x60; | &#x60;eq;1337&#x60; | | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
