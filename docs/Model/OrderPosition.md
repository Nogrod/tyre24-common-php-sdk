# # OrderPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The position id |
**article_type** | **string** | Product type of the position |
**alzura_id** | **string** | The internal alzura id of the position article |
**status** | **int** | Status id of the position |
**can_be_cancelled** | **bool** | Describes if the order can be cancelled. This field will only be in the response, if authenticated as a retailer. | [optional]
**quantity** | **int** | Quantity of the position |
**attributes** | [**\Tyre24\Common\Model\Attribute[]**](Attribute.md) | List of associated attributes | [optional]
**price** | [**\Tyre24\Common\Model\PositionPrice**](.md) | The unit price of the position |
**supplier_item_number** | **string** | Supplier item number of the article |
**position_name** | **string** | The name of the article |
**position_description** | **string** | Additional description for the position |
**check_options** | [**\Tyre24\Common\Model\CheckOption[]**](CheckOption.md) | List of check options of the position | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
