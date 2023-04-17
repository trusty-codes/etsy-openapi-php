<?php
/**
 * PaymentAccountLedgerEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Etsy Open API v3
 *
 * <div class=\"wt-text-body-01\"><p class=\"wt-pt-xs-2 wt-pb-xs-2\">Etsy's Open API provides a simple RESTful interface for various Etsy.com features. The API endpoints are meant to replace Etsy's Open API v2, which is scheduled to end service in 2022.</p><p class=\"wt-pb-xs-2\">All of the endpoints are callable and the majority of the API endpoints are now in a beta phase. This means we do not expect to make any breaking changes before our general release. A handful of endpoints are currently interface stubs (labeled “Feedback Only”) and returns a \"501 Not Implemented\" response code when called.</p><p class=\"wt-pb-xs-2\">If you'd like to report an issue or provide feedback on the API design, <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://github.com/etsy/open-api/discussions\">please add an issue in Github</a>.</p></div>&copy; 2021-2023 Etsy, Inc. All Rights Reserved. Use of this code is subject to Etsy's <a class='wt-text-link wt-p-xs-0' target='_blank' href='https://www.etsy.com/legal/api'>API Developer Terms of Use</a>.
 *
 * OpenAPI spec version: 3.0.0
 * Contact: developers@etsy.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PaymentAccountLedgerEntry Class Doc Comment
 *
 * @category Class
 * @description Represents an entry in a shop&#x27;s ledger.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentAccountLedgerEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentAccountLedgerEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entry_id' => 'int',
'ledger_id' => 'int',
'sequence_number' => 'int',
'amount' => 'int',
'currency' => 'string',
'description' => 'string',
'balance' => 'int',
'create_date' => 'int',
'created_timestamp' => 'int',
'ledger_type' => 'string',
'reference_type' => 'string',
'reference_id' => 'string',
'payment_adjustments' => '\Swagger\Client\Model\AllOfPaymentAccountLedgerEntryPaymentAdjustmentsItems[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entry_id' => null,
'ledger_id' => null,
'sequence_number' => null,
'amount' => null,
'currency' => null,
'description' => null,
'balance' => null,
'create_date' => null,
'created_timestamp' => null,
'ledger_type' => null,
'reference_type' => null,
'reference_id' => null,
'payment_adjustments' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'entry_id' => 'entry_id',
'ledger_id' => 'ledger_id',
'sequence_number' => 'sequence_number',
'amount' => 'amount',
'currency' => 'currency',
'description' => 'description',
'balance' => 'balance',
'create_date' => 'create_date',
'created_timestamp' => 'created_timestamp',
'ledger_type' => 'ledger_type',
'reference_type' => 'reference_type',
'reference_id' => 'reference_id',
'payment_adjustments' => 'payment_adjustments'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entry_id' => 'setEntryId',
'ledger_id' => 'setLedgerId',
'sequence_number' => 'setSequenceNumber',
'amount' => 'setAmount',
'currency' => 'setCurrency',
'description' => 'setDescription',
'balance' => 'setBalance',
'create_date' => 'setCreateDate',
'created_timestamp' => 'setCreatedTimestamp',
'ledger_type' => 'setLedgerType',
'reference_type' => 'setReferenceType',
'reference_id' => 'setReferenceId',
'payment_adjustments' => 'setPaymentAdjustments'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entry_id' => 'getEntryId',
'ledger_id' => 'getLedgerId',
'sequence_number' => 'getSequenceNumber',
'amount' => 'getAmount',
'currency' => 'getCurrency',
'description' => 'getDescription',
'balance' => 'getBalance',
'create_date' => 'getCreateDate',
'created_timestamp' => 'getCreatedTimestamp',
'ledger_type' => 'getLedgerType',
'reference_type' => 'getReferenceType',
'reference_id' => 'getReferenceId',
'payment_adjustments' => 'getPaymentAdjustments'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['entry_id'] = isset($data['entry_id']) ? $data['entry_id'] : null;
        $this->container['ledger_id'] = isset($data['ledger_id']) ? $data['ledger_id'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['created_timestamp'] = isset($data['created_timestamp']) ? $data['created_timestamp'] : null;
        $this->container['ledger_type'] = isset($data['ledger_type']) ? $data['ledger_type'] : null;
        $this->container['reference_type'] = isset($data['reference_type']) ? $data['reference_type'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['payment_adjustments'] = isset($data['payment_adjustments']) ? $data['payment_adjustments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets entry_id
     *
     * @return int
     */
    public function getEntryId()
    {
        return $this->container['entry_id'];
    }

    /**
     * Sets entry_id
     *
     * @param int $entry_id The ledger entry's numeric ID.
     *
     * @return $this
     */
    public function setEntryId($entry_id)
    {
        $this->container['entry_id'] = $entry_id;

        return $this;
    }

    /**
     * Gets ledger_id
     *
     * @return int
     */
    public function getLedgerId()
    {
        return $this->container['ledger_id'];
    }

    /**
     * Sets ledger_id
     *
     * @param int $ledger_id The ledger's numeric ID.
     *
     * @return $this
     */
    public function setLedgerId($ledger_id)
    {
        $this->container['ledger_id'] = $ledger_id;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param int $sequence_number The sequence allows ledger entries to be sorted chronologically. The higher the sequence, the more recent the entry.
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The amount of money credited to the ledger.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency of the entry on the ledger.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Details what kind of ledger entry this is: a payment, refund, reversal of a failed refund, disbursement, returned disbursement, recoupment, miscellaneous credit, miscellaneous debit, or bill payment.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int $balance The amount of money in the shop's ledger the moment after this entry was applied.
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return int
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param int $create_date The date and time the ledger entry was created in Epoch seconds.
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets created_timestamp
     *
     * @return int
     */
    public function getCreatedTimestamp()
    {
        return $this->container['created_timestamp'];
    }

    /**
     * Sets created_timestamp
     *
     * @param int $created_timestamp The date and time the ledger entry was created in Epoch seconds.
     *
     * @return $this
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets ledger_type
     *
     * @return string
     */
    public function getLedgerType()
    {
        return $this->container['ledger_type'];
    }

    /**
     * Sets ledger_type
     *
     * @param string $ledger_type The original reference type for the ledger entry.
     *
     * @return $this
     */
    public function setLedgerType($ledger_type)
    {
        $this->container['ledger_type'] = $ledger_type;

        return $this;
    }

    /**
     * Gets reference_type
     *
     * @return string
     */
    public function getReferenceType()
    {
        return $this->container['reference_type'];
    }

    /**
     * Sets reference_type
     *
     * @param string $reference_type The object type the ledger entry refers to.
     *
     * @return $this
     */
    public function setReferenceType($reference_type)
    {
        $this->container['reference_type'] = $reference_type;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string $reference_id The object id the ledger entry refers to.
     *
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets payment_adjustments
     *
     * @return \Swagger\Client\Model\AllOfPaymentAccountLedgerEntryPaymentAdjustmentsItems[]
     */
    public function getPaymentAdjustments()
    {
        return $this->container['payment_adjustments'];
    }

    /**
     * Sets payment_adjustments
     *
     * @param \Swagger\Client\Model\AllOfPaymentAccountLedgerEntryPaymentAdjustmentsItems[] $payment_adjustments List of refund objects on an Etsy Payments transaction. All monetary amounts are in USD pennies unless otherwise specified.
     *
     * @return $this
     */
    public function setPaymentAdjustments($payment_adjustments)
    {
        $this->container['payment_adjustments'] = $payment_adjustments;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
