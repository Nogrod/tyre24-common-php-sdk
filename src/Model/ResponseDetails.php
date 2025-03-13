<?php
/**
 * ResponseDetails
 *
 * PHP version 8.1
 *
 * @package  Tyre24\Common
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API-B2B Common
 *
 * ## API Versioning We're constantly updating and improving the API, and while we try to ensure backwards compatibility, there's always a chance that we'll introduce a change that affects the way your app works.  To get around any problems that this might cause, we recommend that you include the Accept header with every API request that you make. This header enables you to target your request to a particular version of the API. It looks like this in HTTP:  ```text Accept: application/vnd.saitowag.api+json;version={version_number} ```  Normally, you set the value of the placeholder to the current version of the API. But if you're troubleshooting your app, and you know that an older version of the API works perfectly, say version 1.0, you'd substitute 1.0 for the placeholder value. The API then handles the request as if it were for version 1.0, and your app goes back to working properly.  ### Example of an error with invalid `ACCEPT` header. The `HTTP status code` in case of an invalid `ACCEPT` header will be `400 Bad Request` and the following response will be returned. ```json   {     \"data\": [       {         \"error_code\": \"ERR_ACCEPT_HEADER_NOT_VALID\",         \"error_message\": \"Accept header is not valid or not set.\"       }     ]   } ```  ### Unexpected Error If an unexpected error occours, a so called Error General will be returned. The `HTTP status code` in case of an invalid `ACCEPT` header will be `500` and the following response will be returned. ```json {   \"data\": [     {       \"error_code\": \"ERR_GENERAL\",       \"error_message\": \"An unexpected error has occurred. If this problem persists, please contact our support.\"     }   ] } ```  ### Invalid Endpoint Error Any call to a non-existing API endpoint (i.e. wrong route) will return a response with `HTTP status code` `404` and the following response body: ```json {   \"data\": [     {       \"error_code\": \"ERR_GENERAL_INVALID_ENDPOINT\",       \"error_message\": \"The requested endpoint does not exist.\"     }   ] } ```  Please, note that this error is returned also when a request parameter, part of a valid route, is not well formed. For example, a call to a route that contains a wrong order id (i.e. it does not meet the accepted order id pattern - e.g. 123456789PAC instead of PAC123456789) will return the error just mentioned, as the route is considered as badly formed.  In conclusion, please pay special attention to all those routes that have request parameters with specific pattern requirements.  ### Shipping Method IDs These ids may not be available in all the countries.  | ID | Name | | --- | --- | | 1 | Standard `Standard` | | 2 | Self-collection `Selbstabholung`  | | 3 | Express morning (truck) `Express-Morgen (LKW)` | | 4 | Express Today (Truck)  `Express-Heute (LKW)` | | 5 | Express morning (package forwarding) `Express-Morgen (Packet Spedition)` | | 7 | Express-now |  ### Payment Method IDs These ids may not be available in all the countries.  | ID | Name | | --- | --- | | 1 | SEPA Direct Debit `SEPA-Lastschrift` | | 2 | Prepayment `Vorkasse` | | 3 | Cash on delivery `Nachnahme` | | 4 | PayPal/Credit Card `PayPal/Kreditkarte` | | 5 | open payment method `offene Zahlungsart` | | 7 | Invoice(8 days payment term) `Rechnung(8 Tage Zahlungsziel)` | | 8 | open payment method (SEPA) `offene Zahlungsart (SEPA)` |  ## Query String Filters      <details> <summary><strong id=\"query-string-filters\">Query String Filters</strong></summary>  | Operator | Full Name | Description | Example | | ------ | ------ | ------ | ------ | | eq | Equal | Used to narrow down the result of a query to some specific value, for specified field. It adds the \"**=**\" symbol to the SQL query. Eg. `{url}?filter[{alias_name}]=eq;11` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} = 11` | integer: `{url}?filter[id]=eq;21`<br>float: `{url}?filter[average]=eq;3.7`<br>string: `{url}?filter[free_text]=eq;apple`<br>Date: `{url}?filter[birthday]=eq;2020-06-03`<br>DateTime: `{url}?filter[created_at]=eq;2020-06-03 14:32:32`<br>boolean: `{url}?filter[is_active]=eq;1`<br> | | neq | Not equal | Used to exclude the value from a query result. It adds the \"**<>**\" symbol to the SQL query. Eg. `{url}?filter[{alias_name}]=neq;11` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} <> 11` | integer: `{url}?filter[id]=neq;21`<br>float: `{url}?filter[average]=neq;3.7`<br>string: `{url}?filter[free_text]=neq;apple`<br>Date: `{url}?filter[birthday]=neq;2020-06-03`<br>DateTime: `{url}?filter[created_at]=neq;2020-06-03 14:32:32`<br>boolean: `{url}?filter[is_active]=neq;1`<br> | | gt | Greater than | Used to reduce fetched values to those greater than the one provided in a query string. It adds the \"**>**\" symbol to the SQL query. Eg. `{url}?filter[{alias_name}]=gt;11` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} > 11` | integer: `{url}?filter[id]=gt;21`<br>float: `{url}?filter[average]=gt;3.7`<br>Date: `{url}?filter[birthday]=gt;2020-06-03`<br>DateTime: `{url}?filter[created_at]=gt;2020-06-03 14:32:32`<br> | | gte | Greater than or equal | Used to reduce fetched values to those greater than or equal to the one provided in a query string. It adds the \"**>=**\" symbol to the SQL query. Eg. `{url}?filter[{alias_name}]=gte;11` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} >= 11` | integer: `{url}?filter[id]=gte;21`<br>float: `{url}?filter[average]=gte;3.7`<br>Date: `{url}?filter[birthday]=gte;2020-06-03`<br>DateTime: `{url}?filter[created_at]=gte;2020-06-03 14:32:32`<br> | | lt | Less than | Used to reduce fetched values to those less than provided in a query string. It adds the \"**<**\" symbol to the SQL query. Eg. `{url}?filter[{alias_name}]=lt;11` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} < 11` | integer: `{url}?filter[id]=lt;21`<br>float: `{url}?filter[average]=lt;3.7`<br>Date: `{url}?filter[birthday]=lt;2020-06-03`<br>DateTime: `{url}?filter[created_at]=lt;2020-06-03 14:32:32`<br> | | lte | Less than or equal | Used to reduce fetched values to those less than or equal to the one provided in a query string. It adds the \"**<=**\" symbol to the SQL query. Eg. `{url}?filter[{alias_name}]=lte;11` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} <= 11` | integer: `{url}?filter[id]=lte;21`<br>float: `{url}?filter[average]=lte;3.7`<br>Date: `{url}?filter[birthday]=lte;2020-06-03`<br>DateTime: `{url}?filter[created_at]=lte;2020-06-03 14:32:32`<br> | | in | In | Used to narrow down the query result to multiple, specific entries. It adds the **IN** keyword to the SQL query. Eg. `{url}?filter[{alias_name}]=in;1,2,3,4` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} IN (1, 2, 3, 4)` | integer: `{url}?filter[id]=in;21,55,76`<br>float: `{url}?filter[average]=in;3.7,6.5,9.9`<br>string: `{url}?filter[free_text]=in;apple,pear,watermelon`<br>Date: `{url}?filter[birthday]=in;2020-06-03,2021-10-13,2021-10-14`<br>DateTime: `{url}?filter[created_at]=in;2020-06-03 14:32:32,2020-09-12 17:35:32,2021-06-04 15:36:32`<br> | | nin | Not in | Used to exclude multiple values from query result. It adds the **NOT IN** keyword to the SQL query. Eg. `{url}?filter[{alias_name}]=nin;1,2,3,4` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} NOT IN (1, 2, 3, 4)` | integer: `{url}?filter[id]=nin;21,55,76`<br>float: `{url}?filter[average]=nin;3.7,6.5,9.9`<br>string: `{url}?filter[free_text]=nin;apple,pear,watermelon`<br>Date: `{url}?filter[birthday]=nin;2020-06-03,2021-10-13,2021-10-14`<br>DateTime: `{url}?filter[created_at]=nin;2020-06-03 14:32:32,2020-09-12 17:35:32,2021-06-04 15:36:32`<br> | | wc | Like | Used to find specified pattern. It adds the **LIKE** keyword to the SQL query. Eg. `{url}?filter[{alias_name}]=wc;j**n** doe` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} LIKE 'j%n% doe'` | string: `{url}?filter[free_text]=wc;j**n** doe`<br> | | nwc | Not like | Used to find everything but the specified pattern. It adds the **NOT LIKE** keyword to the SQL query. Eg. `{url}?filter[{alias_name}]=nwc;j**n** doe` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} NOT LIKE 'j%n% doe'` | string: `{url}?filter[free_text]=nwc;j**n** doe`<br> | | btw | Between | Used to find results containing values between two, specified values. It adds the **BETWEEN** keyword to the SQL query. Eg. `{url}?filter[{alias_name}]=btw;10,20` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} BETWEEN 10 AND 20` | integer: `{url}?filter[id]=btw;21,55`<br>float: `{url}?filter[average]=btw;3.7,6.5`<br>Date: `{url}?filter[birthday]=btw;2020-06-03,2021-10-13`<br>DateTime: `{url}?filter[created_at]=btw;2020-06-03 14:32:32,2020-09-12 17:35:32`<br> | | rxp | Regular expression | Used to find results matching the regular expression. It adds the **REGEXP** keyword to the SQL query. Eg. `{url}?filter[{alias_name}]=rxp;j(oh\\|a)ne` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} REGEXP 'j(oh\\|a)ne?'` | string: `{url}?filter[free_text]=rxp;j(oh\\|a)ne?`<br> | | null | Is null | Used to find results that values of specified column are set to null. It adds the **IS NULL** keyword to the SQL query. Eg. `{url}?filter[{alias_name}]=null;` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} IS NULL` | integer: `{url}?filter[id]=null;`<br>float: `{url}?filter[average]=null;`<br>string: `{url}?filter[free_text]=null;`<br>Date: `{url}?filter[birthday]=null;`<br>DateTime: `{url}?filter[created_at]=null;`<br>boolean: `{url}?filter[is_active]=null;`<br> | | nnull | Is not null | Used to find results that values of specified column are not set to null. It adds the **IS NOT NULL** keyword to the SQL query. Eg. `{url}?filter[{alias_name}]=nnull;` will result in the following sql: `SELECT {field_name} AS {alias_name} FROM {table_name} WHERE {alias_name} IS NOT NULL` | integer: `{url}?filter[id]=nnull;`<br>float: `{url}?filter[average]=nnull;`<br>string: `{url}?filter[free_text]=nnull;`<br>Date: `{url}?filter[birthday]=nnull;`<br>DateTime: `{url}?filter[created_at]=nnull;`<br>boolean: `{url}?filter[is_active]=nnull;`<br> | </details>      ### Additional information If you want to filter by multiple columns, you can do that, so `{url}?filter[id]=gt;3&filter[email]=like;**@gmail.com&filter[is_active]=eq;1` is a valid query string.  <strong>However you are not allowed to use one operator multiple times, for the same column.</strong> So `{url}?filter[id]=gte;3&filter[id]=lte;5` is not going to work and might result in unexpected behavior. You can achieve similar result using `{url}?filter[id]=btw;3,5`.  # Changelog  ## Added endpoints  - `PATCH /common/message/read`
 *
 * The version of the OpenAPI document: 1.1
 * Contact: info@alzura.com
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Tyre24\Common\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Tyre24\Common\ObjectSerializer;

/**
 * ResponseDetails Class Doc Comment
 *
 * @package  Tyre24\Common
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ResponseDetails implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ResponseDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'buyer' => '\Tyre24\Common\Model\BusinessPartner',
        'seller' => '\Tyre24\Common\Model\BusinessPartner',
        'child_branch' => '\Tyre24\Common\Model\ChildBranch',
        'has_coupon' => 'bool',
        'coupon_status' => 'int',
        'is_payed' => 'bool',
        'can_be_cancelled' => 'bool',
        'is_partially_cancelled' => 'bool',
        'can_request_tracking' => 'bool',
        'request_tracking_interval' => 'int',
        'can_request_invoice' => 'bool',
        'request_invoice_interval' => 'int',
        'can_request_refund' => 'bool',
        'request_refund_interval' => 'int',
        'can_request_delivery_note' => 'bool',
        'request_delivery_note_interval' => 'int',
        'reference_number' => 'string',
        'country' => 'string',
        'comment' => 'string',
        'currency' => '\Tyre24\Common\Model\Currency',
        'shipping' => '\Tyre24\Common\Model\Shipping',
        'assurance' => '\Tyre24\Common\Model\Assurance',
        'payment' => '\Tyre24\Common\Model\Payment',
        'invoice' => '\Tyre24\Common\Model\Invoice',
        'messages' => '\Tyre24\Common\Model\Message[]',
        'documents' => '\Tyre24\Common\Model\Document[]',
        'status_comment' => 'string',
        'tagging_counter' => 'int',
        'cart_order_id' => 'int',
        'order' => 'string',
        'date' => 'string',
        'status' => 'int',
        'is_marketplace' => 'bool',
        'positions' => '\Tyre24\Common\Model\OrderPosition[]',
        'sum' => '\Tyre24\Common\Model\Price',
        'total_sum' => '\Tyre24\Common\Model\Price',
        'deposit' => '\Tyre24\Common\Model\Price'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'buyer' => null,
        'seller' => null,
        'child_branch' => null,
        'has_coupon' => null,
        'coupon_status' => null,
        'is_payed' => null,
        'can_be_cancelled' => null,
        'is_partially_cancelled' => null,
        'can_request_tracking' => null,
        'request_tracking_interval' => null,
        'can_request_invoice' => null,
        'request_invoice_interval' => null,
        'can_request_refund' => null,
        'request_refund_interval' => null,
        'can_request_delivery_note' => null,
        'request_delivery_note_interval' => null,
        'reference_number' => null,
        'country' => null,
        'comment' => null,
        'currency' => null,
        'shipping' => null,
        'assurance' => null,
        'payment' => null,
        'invoice' => null,
        'messages' => null,
        'documents' => null,
        'status_comment' => null,
        'tagging_counter' => null,
        'cart_order_id' => null,
        'order' => null,
        'date' => null,
        'status' => null,
        'is_marketplace' => null,
        'positions' => null,
        'sum' => null,
        'total_sum' => null,
        'deposit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'buyer' => false,
        'seller' => false,
        'child_branch' => false,
        'has_coupon' => false,
        'coupon_status' => false,
        'is_payed' => false,
        'can_be_cancelled' => false,
        'is_partially_cancelled' => false,
        'can_request_tracking' => false,
        'request_tracking_interval' => false,
        'can_request_invoice' => false,
        'request_invoice_interval' => false,
        'can_request_refund' => false,
        'request_refund_interval' => false,
        'can_request_delivery_note' => false,
        'request_delivery_note_interval' => false,
        'reference_number' => false,
        'country' => false,
        'comment' => false,
        'currency' => false,
        'shipping' => false,
        'assurance' => false,
        'payment' => false,
        'invoice' => false,
        'messages' => false,
        'documents' => false,
        'status_comment' => false,
        'tagging_counter' => false,
        'cart_order_id' => false,
        'order' => false,
        'date' => false,
        'status' => false,
        'is_marketplace' => false,
        'positions' => false,
        'sum' => false,
        'total_sum' => false,
        'deposit' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'buyer' => 'buyer',
        'seller' => 'seller',
        'child_branch' => 'child_branch',
        'has_coupon' => 'has_coupon',
        'coupon_status' => 'coupon_status',
        'is_payed' => 'is_payed',
        'can_be_cancelled' => 'can_be_cancelled',
        'is_partially_cancelled' => 'is_partially_cancelled',
        'can_request_tracking' => 'can_request_tracking',
        'request_tracking_interval' => 'request_tracking_interval',
        'can_request_invoice' => 'can_request_invoice',
        'request_invoice_interval' => 'request_invoice_interval',
        'can_request_refund' => 'can_request_refund',
        'request_refund_interval' => 'request_refund_interval',
        'can_request_delivery_note' => 'can_request_delivery_note',
        'request_delivery_note_interval' => 'request_delivery_note_interval',
        'reference_number' => 'reference_number',
        'country' => 'country',
        'comment' => 'comment',
        'currency' => 'currency',
        'shipping' => 'shipping',
        'assurance' => 'assurance',
        'payment' => 'payment',
        'invoice' => 'invoice',
        'messages' => 'messages',
        'documents' => 'documents',
        'status_comment' => 'status_comment',
        'tagging_counter' => 'tagging_counter',
        'cart_order_id' => 'cart_order_id',
        'order' => 'order',
        'date' => 'date',
        'status' => 'status',
        'is_marketplace' => 'is_marketplace',
        'positions' => 'positions',
        'sum' => 'sum',
        'total_sum' => 'total_sum',
        'deposit' => 'deposit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'buyer' => 'setBuyer',
        'seller' => 'setSeller',
        'child_branch' => 'setChildBranch',
        'has_coupon' => 'setHasCoupon',
        'coupon_status' => 'setCouponStatus',
        'is_payed' => 'setIsPayed',
        'can_be_cancelled' => 'setCanBeCancelled',
        'is_partially_cancelled' => 'setIsPartiallyCancelled',
        'can_request_tracking' => 'setCanRequestTracking',
        'request_tracking_interval' => 'setRequestTrackingInterval',
        'can_request_invoice' => 'setCanRequestInvoice',
        'request_invoice_interval' => 'setRequestInvoiceInterval',
        'can_request_refund' => 'setCanRequestRefund',
        'request_refund_interval' => 'setRequestRefundInterval',
        'can_request_delivery_note' => 'setCanRequestDeliveryNote',
        'request_delivery_note_interval' => 'setRequestDeliveryNoteInterval',
        'reference_number' => 'setReferenceNumber',
        'country' => 'setCountry',
        'comment' => 'setComment',
        'currency' => 'setCurrency',
        'shipping' => 'setShipping',
        'assurance' => 'setAssurance',
        'payment' => 'setPayment',
        'invoice' => 'setInvoice',
        'messages' => 'setMessages',
        'documents' => 'setDocuments',
        'status_comment' => 'setStatusComment',
        'tagging_counter' => 'setTaggingCounter',
        'cart_order_id' => 'setCartOrderId',
        'order' => 'setOrder',
        'date' => 'setDate',
        'status' => 'setStatus',
        'is_marketplace' => 'setIsMarketplace',
        'positions' => 'setPositions',
        'sum' => 'setSum',
        'total_sum' => 'setTotalSum',
        'deposit' => 'setDeposit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'buyer' => 'getBuyer',
        'seller' => 'getSeller',
        'child_branch' => 'getChildBranch',
        'has_coupon' => 'getHasCoupon',
        'coupon_status' => 'getCouponStatus',
        'is_payed' => 'getIsPayed',
        'can_be_cancelled' => 'getCanBeCancelled',
        'is_partially_cancelled' => 'getIsPartiallyCancelled',
        'can_request_tracking' => 'getCanRequestTracking',
        'request_tracking_interval' => 'getRequestTrackingInterval',
        'can_request_invoice' => 'getCanRequestInvoice',
        'request_invoice_interval' => 'getRequestInvoiceInterval',
        'can_request_refund' => 'getCanRequestRefund',
        'request_refund_interval' => 'getRequestRefundInterval',
        'can_request_delivery_note' => 'getCanRequestDeliveryNote',
        'request_delivery_note_interval' => 'getRequestDeliveryNoteInterval',
        'reference_number' => 'getReferenceNumber',
        'country' => 'getCountry',
        'comment' => 'getComment',
        'currency' => 'getCurrency',
        'shipping' => 'getShipping',
        'assurance' => 'getAssurance',
        'payment' => 'getPayment',
        'invoice' => 'getInvoice',
        'messages' => 'getMessages',
        'documents' => 'getDocuments',
        'status_comment' => 'getStatusComment',
        'tagging_counter' => 'getTaggingCounter',
        'cart_order_id' => 'getCartOrderId',
        'order' => 'getOrder',
        'date' => 'getDate',
        'status' => 'getStatus',
        'is_marketplace' => 'getIsMarketplace',
        'positions' => 'getPositions',
        'sum' => 'getSum',
        'total_sum' => 'getTotalSum',
        'deposit' => 'getDeposit'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('seller', $data ?? [], null);
        $this->setIfExists('child_branch', $data ?? [], null);
        $this->setIfExists('has_coupon', $data ?? [], null);
        $this->setIfExists('coupon_status', $data ?? [], null);
        $this->setIfExists('is_payed', $data ?? [], null);
        $this->setIfExists('can_be_cancelled', $data ?? [], null);
        $this->setIfExists('is_partially_cancelled', $data ?? [], null);
        $this->setIfExists('can_request_tracking', $data ?? [], null);
        $this->setIfExists('request_tracking_interval', $data ?? [], null);
        $this->setIfExists('can_request_invoice', $data ?? [], null);
        $this->setIfExists('request_invoice_interval', $data ?? [], null);
        $this->setIfExists('can_request_refund', $data ?? [], null);
        $this->setIfExists('request_refund_interval', $data ?? [], null);
        $this->setIfExists('can_request_delivery_note', $data ?? [], null);
        $this->setIfExists('request_delivery_note_interval', $data ?? [], null);
        $this->setIfExists('reference_number', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('shipping', $data ?? [], null);
        $this->setIfExists('assurance', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('invoice', $data ?? [], null);
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('status_comment', $data ?? [], null);
        $this->setIfExists('tagging_counter', $data ?? [], null);
        $this->setIfExists('cart_order_id', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('is_marketplace', $data ?? [], null);
        $this->setIfExists('positions', $data ?? [], null);
        $this->setIfExists('sum', $data ?? [], null);
        $this->setIfExists('total_sum', $data ?? [], null);
        $this->setIfExists('deposit', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        if ($this->container['has_coupon'] === null) {
            $invalidProperties[] = "'has_coupon' can't be null";
        }
        if ($this->container['coupon_status'] === null) {
            $invalidProperties[] = "'coupon_status' can't be null";
        }
        if ($this->container['is_payed'] === null) {
            $invalidProperties[] = "'is_payed' can't be null";
        }
        if ($this->container['is_partially_cancelled'] === null) {
            $invalidProperties[] = "'is_partially_cancelled' can't be null";
        }
        if ($this->container['can_request_tracking'] === null) {
            $invalidProperties[] = "'can_request_tracking' can't be null";
        }
        if ($this->container['request_tracking_interval'] === null) {
            $invalidProperties[] = "'request_tracking_interval' can't be null";
        }
        if ($this->container['can_request_invoice'] === null) {
            $invalidProperties[] = "'can_request_invoice' can't be null";
        }
        if ($this->container['request_invoice_interval'] === null) {
            $invalidProperties[] = "'request_invoice_interval' can't be null";
        }
        if ($this->container['can_request_refund'] === null) {
            $invalidProperties[] = "'can_request_refund' can't be null";
        }
        if ($this->container['request_refund_interval'] === null) {
            $invalidProperties[] = "'request_refund_interval' can't be null";
        }
        if ($this->container['can_request_delivery_note'] === null) {
            $invalidProperties[] = "'can_request_delivery_note' can't be null";
        }
        if ($this->container['request_delivery_note_interval'] === null) {
            $invalidProperties[] = "'request_delivery_note_interval' can't be null";
        }
        if ($this->container['reference_number'] === null) {
            $invalidProperties[] = "'reference_number' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
        }
        if ($this->container['assurance'] === null) {
            $invalidProperties[] = "'assurance' can't be null";
        }
        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if ($this->container['invoice'] === null) {
            $invalidProperties[] = "'invoice' can't be null";
        }
        if ($this->container['messages'] === null) {
            $invalidProperties[] = "'messages' can't be null";
        }
        if ($this->container['documents'] === null) {
            $invalidProperties[] = "'documents' can't be null";
        }
        if ($this->container['status_comment'] === null) {
            $invalidProperties[] = "'status_comment' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets buyer
     *
     * @return \Tyre24\Common\Model\BusinessPartner
     */
    public function getBuyer(): \Tyre24\Common\Model\BusinessPartner
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Tyre24\Common\Model\BusinessPartner $buyer All information of the buyer
     *
     * @return $this
     */
    public function setBuyer(\Tyre24\Common\Model\BusinessPartner $buyer): static
    {
        if (is_null($buyer)) {
            throw new InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \Tyre24\Common\Model\BusinessPartner|null
     */
    public function getSeller(): ?\Tyre24\Common\Model\BusinessPartner
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \Tyre24\Common\Model\BusinessPartner|null $seller All information of the seller. Note: This property is only returned when logged in with a retailer account.
     *
     * @return $this
     */
    public function setSeller(?\Tyre24\Common\Model\BusinessPartner $seller): static
    {
        if (is_null($seller)) {
            throw new InvalidArgumentException('non-nullable seller cannot be null');
        }
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets child_branch
     *
     * @return \Tyre24\Common\Model\ChildBranch|null
     */
    public function getChildBranch(): ?\Tyre24\Common\Model\ChildBranch
    {
        return $this->container['child_branch'];
    }

    /**
     * Sets child_branch
     *
     * @param \Tyre24\Common\Model\ChildBranch|null $child_branch Child branch information
     *
     * @return $this
     */
    public function setChildBranch(?\Tyre24\Common\Model\ChildBranch $child_branch): static
    {
        if (is_null($child_branch)) {
            throw new InvalidArgumentException('non-nullable child_branch cannot be null');
        }
        $this->container['child_branch'] = $child_branch;

        return $this;
    }

    /**
     * Gets has_coupon
     *
     * @return bool
     */
    public function getHasCoupon(): bool
    {
        return $this->container['has_coupon'];
    }

    /**
     * Sets has_coupon
     *
     * @param bool $has_coupon True if the order includes coupon as a gift, otherwise false
     *
     * @return $this
     */
    public function setHasCoupon(bool $has_coupon): static
    {
        if (is_null($has_coupon)) {
            throw new InvalidArgumentException('non-nullable has_coupon cannot be null');
        }
        $this->container['has_coupon'] = $has_coupon;

        return $this;
    }

    /**
     * Gets coupon_status
     *
     * @return int
     */
    public function getCouponStatus(): int
    {
        return $this->container['coupon_status'];
    }

    /**
     * Sets coupon_status
     *
     * @param int $coupon_status Coupon status. 0 = not printed, 1 = printed, 2 = used for 800 eur coupon
     *
     * @return $this
     */
    public function setCouponStatus(int $coupon_status): static
    {
        if (is_null($coupon_status)) {
            throw new InvalidArgumentException('non-nullable coupon_status cannot be null');
        }
        $this->container['coupon_status'] = $coupon_status;

        return $this;
    }

    /**
     * Gets is_payed
     *
     * @return bool
     */
    public function getIsPayed(): bool
    {
        return $this->container['is_payed'];
    }

    /**
     * Sets is_payed
     *
     * @param bool $is_payed True if the order was payed for, otherwise false
     *
     * @return $this
     */
    public function setIsPayed(bool $is_payed): static
    {
        if (is_null($is_payed)) {
            throw new InvalidArgumentException('non-nullable is_payed cannot be null');
        }
        $this->container['is_payed'] = $is_payed;

        return $this;
    }

    /**
     * Gets can_be_cancelled
     *
     * @return bool|null
     */
    public function getCanBeCancelled(): ?bool
    {
        return $this->container['can_be_cancelled'];
    }

    /**
     * Sets can_be_cancelled
     *
     * @param bool|null $can_be_cancelled Describes if the order can be cancelled. This field will only be in the response, if authenticated as a retailer.
     *
     * @return $this
     */
    public function setCanBeCancelled(?bool $can_be_cancelled): static
    {
        if (is_null($can_be_cancelled)) {
            throw new InvalidArgumentException('non-nullable can_be_cancelled cannot be null');
        }
        $this->container['can_be_cancelled'] = $can_be_cancelled;

        return $this;
    }

    /**
     * Gets is_partially_cancelled
     *
     * @return bool
     */
    public function getIsPartiallyCancelled(): bool
    {
        return $this->container['is_partially_cancelled'];
    }

    /**
     * Sets is_partially_cancelled
     *
     * @param bool $is_partially_cancelled Describes if the order is partially cancelled
     *
     * @return $this
     */
    public function setIsPartiallyCancelled(bool $is_partially_cancelled): static
    {
        if (is_null($is_partially_cancelled)) {
            throw new InvalidArgumentException('non-nullable is_partially_cancelled cannot be null');
        }
        $this->container['is_partially_cancelled'] = $is_partially_cancelled;

        return $this;
    }

    /**
     * Gets can_request_tracking
     *
     * @return bool
     */
    public function getCanRequestTracking(): bool
    {
        return $this->container['can_request_tracking'];
    }

    /**
     * Sets can_request_tracking
     *
     * @param bool $can_request_tracking Whether or not a tracking information can be requested. A tracking information can be requested if no other requests were sent in the tracking-request time interval.
     *
     * @return $this
     */
    public function setCanRequestTracking(bool $can_request_tracking): static
    {
        if (is_null($can_request_tracking)) {
            throw new InvalidArgumentException('non-nullable can_request_tracking cannot be null');
        }
        $this->container['can_request_tracking'] = $can_request_tracking;

        return $this;
    }

    /**
     * Gets request_tracking_interval
     *
     * @return int
     */
    public function getRequestTrackingInterval(): int
    {
        return $this->container['request_tracking_interval'];
    }

    /**
     * Sets request_tracking_interval
     *
     * @param int $request_tracking_interval Request tracking interval in minutes: The request can be made only once per interval.
     *
     * @return $this
     */
    public function setRequestTrackingInterval(int $request_tracking_interval): static
    {
        if (is_null($request_tracking_interval)) {
            throw new InvalidArgumentException('non-nullable request_tracking_interval cannot be null');
        }
        $this->container['request_tracking_interval'] = $request_tracking_interval;

        return $this;
    }

    /**
     * Gets can_request_invoice
     *
     * @return bool
     */
    public function getCanRequestInvoice(): bool
    {
        return $this->container['can_request_invoice'];
    }

    /**
     * Sets can_request_invoice
     *
     * @param bool $can_request_invoice Whether or not an invoice can be requested. An invoice can be requested if no invoice is uploaded or if no other invoice requests were sent in the invoice-request time interval.
     *
     * @return $this
     */
    public function setCanRequestInvoice(bool $can_request_invoice): static
    {
        if (is_null($can_request_invoice)) {
            throw new InvalidArgumentException('non-nullable can_request_invoice cannot be null');
        }
        $this->container['can_request_invoice'] = $can_request_invoice;

        return $this;
    }

    /**
     * Gets request_invoice_interval
     *
     * @return int
     */
    public function getRequestInvoiceInterval(): int
    {
        return $this->container['request_invoice_interval'];
    }

    /**
     * Sets request_invoice_interval
     *
     * @param int $request_invoice_interval Request invoice interval in minutes: The request can be made only once per interval.
     *
     * @return $this
     */
    public function setRequestInvoiceInterval(int $request_invoice_interval): static
    {
        if (is_null($request_invoice_interval)) {
            throw new InvalidArgumentException('non-nullable request_invoice_interval cannot be null');
        }
        $this->container['request_invoice_interval'] = $request_invoice_interval;

        return $this;
    }

    /**
     * Gets can_request_refund
     *
     * @return bool
     */
    public function getCanRequestRefund(): bool
    {
        return $this->container['can_request_refund'];
    }

    /**
     * Sets can_request_refund
     *
     * @param bool $can_request_refund Whether or not a refund can be requested. An refund can be requested if an invoice is uploaded or if no other refund requests were sent in the invoice-request time interval.
     *
     * @return $this
     */
    public function setCanRequestRefund(bool $can_request_refund): static
    {
        if (is_null($can_request_refund)) {
            throw new InvalidArgumentException('non-nullable can_request_refund cannot be null');
        }
        $this->container['can_request_refund'] = $can_request_refund;

        return $this;
    }

    /**
     * Gets request_refund_interval
     *
     * @return int
     */
    public function getRequestRefundInterval(): int
    {
        return $this->container['request_refund_interval'];
    }

    /**
     * Sets request_refund_interval
     *
     * @param int $request_refund_interval Request refund interval in minutes: The request can be made only once per interval.
     *
     * @return $this
     */
    public function setRequestRefundInterval(int $request_refund_interval): static
    {
        if (is_null($request_refund_interval)) {
            throw new InvalidArgumentException('non-nullable request_refund_interval cannot be null');
        }
        $this->container['request_refund_interval'] = $request_refund_interval;

        return $this;
    }

    /**
     * Gets can_request_delivery_note
     *
     * @return bool
     */
    public function getCanRequestDeliveryNote(): bool
    {
        return $this->container['can_request_delivery_note'];
    }

    /**
     * Sets can_request_delivery_note
     *
     * @param bool $can_request_delivery_note Whether or not a delivery note can be requested. A delivery note can be requested if no invoice and/or delivery note is already uploaded or if no other delivery note requests were sent in the delivery-note-request time interval.
     *
     * @return $this
     */
    public function setCanRequestDeliveryNote(bool $can_request_delivery_note): static
    {
        if (is_null($can_request_delivery_note)) {
            throw new InvalidArgumentException('non-nullable can_request_delivery_note cannot be null');
        }
        $this->container['can_request_delivery_note'] = $can_request_delivery_note;

        return $this;
    }

    /**
     * Gets request_delivery_note_interval
     *
     * @return int
     */
    public function getRequestDeliveryNoteInterval(): int
    {
        return $this->container['request_delivery_note_interval'];
    }

    /**
     * Sets request_delivery_note_interval
     *
     * @param int $request_delivery_note_interval Request delivery note interval in minutes: The request can be made only once per interval
     *
     * @return $this
     */
    public function setRequestDeliveryNoteInterval(int $request_delivery_note_interval): static
    {
        if (is_null($request_delivery_note_interval)) {
            throw new InvalidArgumentException('non-nullable request_delivery_note_interval cannot be null');
        }
        $this->container['request_delivery_note_interval'] = $request_delivery_note_interval;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string $reference_number Reference number of an order, if given
     *
     * @return $this
     */
    public function setReferenceNumber(string $reference_number): static
    {
        if (is_null($reference_number)) {
            throw new InvalidArgumentException('non-nullable reference_number cannot be null');
        }
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The country of the order, 2 letter iso-code lower case
     *
     * @return $this
     */
    public function setCountry(string $country): static
    {
        if (is_null($country)) {
            throw new InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment A comment for the order
     *
     * @return $this
     */
    public function setComment(string $comment): static
    {
        if (is_null($comment)) {
            throw new InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Tyre24\Common\Model\Currency|null
     */
    public function getCurrency(): ?\Tyre24\Common\Model\Currency
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Tyre24\Common\Model\Currency|null $currency Currency information for this order
     *
     * @return $this
     */
    public function setCurrency(?\Tyre24\Common\Model\Currency $currency): static
    {
        if (is_null($currency)) {
            throw new InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Tyre24\Common\Model\Shipping
     */
    public function getShipping(): \Tyre24\Common\Model\Shipping
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Tyre24\Common\Model\Shipping $shipping Shipping information
     *
     * @return $this
     */
    public function setShipping(\Tyre24\Common\Model\Shipping $shipping): static
    {
        if (is_null($shipping)) {
            throw new InvalidArgumentException('non-nullable shipping cannot be null');
        }
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets assurance
     *
     * @return \Tyre24\Common\Model\Assurance
     */
    public function getAssurance(): \Tyre24\Common\Model\Assurance
    {
        return $this->container['assurance'];
    }

    /**
     * Sets assurance
     *
     * @param \Tyre24\Common\Model\Assurance $assurance Insurance information
     *
     * @return $this
     */
    public function setAssurance(\Tyre24\Common\Model\Assurance $assurance): static
    {
        if (is_null($assurance)) {
            throw new InvalidArgumentException('non-nullable assurance cannot be null');
        }
        $this->container['assurance'] = $assurance;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Tyre24\Common\Model\Payment
     */
    public function getPayment(): \Tyre24\Common\Model\Payment
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Tyre24\Common\Model\Payment $payment Payment information
     *
     * @return $this
     */
    public function setPayment(\Tyre24\Common\Model\Payment $payment): static
    {
        if (is_null($payment)) {
            throw new InvalidArgumentException('non-nullable payment cannot be null');
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return \Tyre24\Common\Model\Invoice
     */
    public function getInvoice(): \Tyre24\Common\Model\Invoice
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param \Tyre24\Common\Model\Invoice $invoice Contains seller invoice information
     *
     * @return $this
     */
    public function setInvoice(\Tyre24\Common\Model\Invoice $invoice): static
    {
        if (is_null($invoice)) {
            throw new InvalidArgumentException('non-nullable invoice cannot be null');
        }
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \Tyre24\Common\Model\Message[]
     */
    public function getMessages(): array
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Tyre24\Common\Model\Message[] $messages List of chat messages for this order
     *
     * @return $this
     */
    public function setMessages(array $messages): static
    {
        if (is_null($messages)) {
            throw new InvalidArgumentException('non-nullable messages cannot be null');
        }
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Tyre24\Common\Model\Document[]
     */
    public function getDocuments(): array
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Tyre24\Common\Model\Document[] $documents List of documents for this order
     *
     * @return $this
     */
    public function setDocuments(array $documents): static
    {
        if (is_null($documents)) {
            throw new InvalidArgumentException('non-nullable documents cannot be null');
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets status_comment
     *
     * @return string
     */
    public function getStatusComment(): string
    {
        return $this->container['status_comment'];
    }

    /**
     * Sets status_comment
     *
     * @param string $status_comment Comment to the current oder status
     *
     * @return $this
     */
    public function setStatusComment(string $status_comment): static
    {
        if (is_null($status_comment)) {
            throw new InvalidArgumentException('non-nullable status_comment cannot be null');
        }
        $this->container['status_comment'] = $status_comment;

        return $this;
    }

    /**
     * Gets tagging_counter
     *
     * @return int|null
     */
    public function getTaggingCounter(): ?int
    {
        return $this->container['tagging_counter'];
    }

    /**
     * Sets tagging_counter
     *
     * @param int|null $tagging_counter Tagging count
     *
     * @return $this
     */
    public function setTaggingCounter(?int $tagging_counter): static
    {
        if (is_null($tagging_counter)) {
            throw new InvalidArgumentException('non-nullable tagging_counter cannot be null');
        }
        $this->container['tagging_counter'] = $tagging_counter;

        return $this;
    }

    /**
     * Gets cart_order_id
     *
     * @return int|null
     */
    public function getCartOrderId(): ?int
    {
        return $this->container['cart_order_id'];
    }

    /**
     * Sets cart_order_id
     *
     * @param int|null $cart_order_id Contains the cart order id of this order if it is a cart order.
     *
     * @return $this
     */
    public function setCartOrderId(?int $cart_order_id): static
    {
        if (is_null($cart_order_id)) {
            throw new InvalidArgumentException('non-nullable cart_order_id cannot be null');
        }
        $this->container['cart_order_id'] = $cart_order_id;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder(): string
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order The identifier of an order
     *
     * @return $this
     */
    public function setOrder(string $order): static
    {
        if (is_null($order)) {
            throw new InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Date of an order (time zone Europe/Berlin)
     *
     * @return $this
     */
    public function setDate(string $date): static
    {
        if (is_null($date)) {
            throw new InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Status of the order
     *
     * @return $this
     */
    public function setStatus(int $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets is_marketplace
     *
     * @return bool|null
     */
    public function getIsMarketplace(): ?bool
    {
        return $this->container['is_marketplace'];
    }

    /**
     * Sets is_marketplace
     *
     * @param bool|null $is_marketplace True if marketplace order otherwise false
     *
     * @return $this
     */
    public function setIsMarketplace(?bool $is_marketplace): static
    {
        if (is_null($is_marketplace)) {
            throw new InvalidArgumentException('non-nullable is_marketplace cannot be null');
        }
        $this->container['is_marketplace'] = $is_marketplace;

        return $this;
    }

    /**
     * Gets positions
     *
     * @return \Tyre24\Common\Model\OrderPosition[]|null
     */
    public function getPositions(): ?array
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param \Tyre24\Common\Model\OrderPosition[]|null $positions List of associated positions of the order
     *
     * @return $this
     */
    public function setPositions(?array $positions): static
    {
        if (is_null($positions)) {
            throw new InvalidArgumentException('non-nullable positions cannot be null');
        }
        $this->container['positions'] = $positions;

        return $this;
    }

    /**
     * Gets sum
     *
     * @return \Tyre24\Common\Model\Price|null
     */
    public function getSum(): ?\Tyre24\Common\Model\Price
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     *
     * @param \Tyre24\Common\Model\Price|null $sum The summed up price of all product positions of the given order
     *
     * @return $this
     */
    public function setSum(?\Tyre24\Common\Model\Price $sum): static
    {
        if (is_null($sum)) {
            throw new InvalidArgumentException('non-nullable sum cannot be null');
        }
        $this->container['sum'] = $sum;

        return $this;
    }

    /**
     * Gets total_sum
     *
     * @return \Tyre24\Common\Model\Price|null
     */
    public function getTotalSum(): ?\Tyre24\Common\Model\Price
    {
        return $this->container['total_sum'];
    }

    /**
     * Sets total_sum
     *
     * @param \Tyre24\Common\Model\Price|null $total_sum The final price that has to be paid by the retailer (except for any possible `deposit`). This price includes, among other things, the item total (`sum`), costs of the payment method (`payment.method.price`), costs for alternative delivery address (`shipping.delivery_address.price`), shipping costs (`shipping.method.price`) and possible discounts (`shipping.handling_fee`).
     *
     * @return $this
     */
    public function setTotalSum(?\Tyre24\Common\Model\Price $total_sum): static
    {
        if (is_null($total_sum)) {
            throw new InvalidArgumentException('non-nullable total_sum cannot be null');
        }
        $this->container['total_sum'] = $total_sum;

        return $this;
    }

    /**
     * Gets deposit
     *
     * @return \Tyre24\Common\Model\Price|null
     */
    public function getDeposit(): ?\Tyre24\Common\Model\Price
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param \Tyre24\Common\Model\Price|null $deposit Summed up deposit price for the order
     *
     * @return $this
     */
    public function setDeposit(?\Tyre24\Common\Model\Price $deposit): static
    {
        if (is_null($deposit)) {
            throw new InvalidArgumentException('non-nullable deposit cannot be null');
        }
        $this->container['deposit'] = $deposit;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


