<?php

/**
 * Message
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
 * Generator version: 7.14.0
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
 * Message Class Doc Comment
 *
 * @package  Tyre24\Common
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Message implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'from' => 'string',
        'to' => 'string',
        'subject' => 'string',
        'text' => 'string',
        'date' => 'string',
        'status' => 'string',
        'has_file' => 'bool',
        'author' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'from' => null,
        'to' => null,
        'subject' => null,
        'text' => null,
        'date' => null,
        'status' => null,
        'has_file' => null,
        'author' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'from' => false,
        'to' => false,
        'subject' => false,
        'text' => false,
        'date' => false,
        'status' => false,
        'has_file' => false,
        'author' => false
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
        'id' => 'id',
        'from' => 'from',
        'to' => 'to',
        'subject' => 'subject',
        'text' => 'text',
        'date' => 'date',
        'status' => 'status',
        'has_file' => 'has_file',
        'author' => 'author'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'from' => 'setFrom',
        'to' => 'setTo',
        'subject' => 'setSubject',
        'text' => 'setText',
        'date' => 'setDate',
        'status' => 'setStatus',
        'has_file' => 'setHasFile',
        'author' => 'setAuthor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'from' => 'getFrom',
        'to' => 'getTo',
        'subject' => 'getSubject',
        'text' => 'getText',
        'date' => 'getDate',
        'status' => 'getStatus',
        'has_file' => 'getHasFile',
        'author' => 'getAuthor'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('has_file', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['has_file'] === null) {
            $invalidProperties[] = "'has_file' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The id of the message
     *
     * @return $this
     */
    public function setId(int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from Customer id from whom the messages was send
     *
     * @return $this
     */
    public function setFrom(string $from): static
    {
        if (is_null($from)) {
            throw new InvalidArgumentException('non-nullable from cannot be null');
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to Customer id of the recipient
     *
     * @return $this
     */
    public function setTo(string $to): static
    {
        if (is_null($to)) {
            throw new InvalidArgumentException('non-nullable to cannot be null');
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject The message subject
     *
     * @return $this
     */
    public function setSubject(string $subject): static
    {
        if (is_null($subject)) {
            throw new InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The message text itself
     *
     * @return $this
     */
    public function setText(string $text): static
    {
        if (is_null($text)) {
            throw new InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

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
     * @param string $date Message date (time zone Europe/Berlin)
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the message (can be 'new' or 'open')
     *
     * @return $this
     */
    public function setStatus(string $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets has_file
     *
     * @return bool
     */
    public function getHasFile(): bool
    {
        return $this->container['has_file'];
    }

    /**
     * Sets has_file
     *
     * @param bool $has_file Indicates if the message has a file
     *
     * @return $this
     */
    public function setHasFile(bool $has_file): static
    {
        if (is_null($has_file)) {
            throw new InvalidArgumentException('non-nullable has_file cannot be null');
        }
        $this->container['has_file'] = $has_file;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author Stores the Name of the author who creates a message
     *
     * @return $this
     */
    public function setAuthor(?string $author): static
    {
        if (is_null($author)) {
            throw new InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

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


