<?php
/**
 * PaymentAdjustmentItem
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
 * PaymentAdjustmentItem Class Doc Comment
 *
 * @category Class
 * @description A payemnt adjustment line item for a payment adjustment.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentAdjustmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentAdjustmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_adjustment_id' => 'int',
'payment_adjustment_item_id' => 'int',
'adjustment_type' => 'string',
'amount' => 'int',
'shop_amount' => 'int',
'transaction_id' => 'int',
'bill_payment_id' => 'int',
'created_timestamp' => 'int',
'updated_timestamp' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_adjustment_id' => null,
'payment_adjustment_item_id' => null,
'adjustment_type' => null,
'amount' => null,
'shop_amount' => null,
'transaction_id' => null,
'bill_payment_id' => null,
'created_timestamp' => null,
'updated_timestamp' => null    ];

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
        'payment_adjustment_id' => 'payment_adjustment_id',
'payment_adjustment_item_id' => 'payment_adjustment_item_id',
'adjustment_type' => 'adjustment_type',
'amount' => 'amount',
'shop_amount' => 'shop_amount',
'transaction_id' => 'transaction_id',
'bill_payment_id' => 'bill_payment_id',
'created_timestamp' => 'created_timestamp',
'updated_timestamp' => 'updated_timestamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_adjustment_id' => 'setPaymentAdjustmentId',
'payment_adjustment_item_id' => 'setPaymentAdjustmentItemId',
'adjustment_type' => 'setAdjustmentType',
'amount' => 'setAmount',
'shop_amount' => 'setShopAmount',
'transaction_id' => 'setTransactionId',
'bill_payment_id' => 'setBillPaymentId',
'created_timestamp' => 'setCreatedTimestamp',
'updated_timestamp' => 'setUpdatedTimestamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_adjustment_id' => 'getPaymentAdjustmentId',
'payment_adjustment_item_id' => 'getPaymentAdjustmentItemId',
'adjustment_type' => 'getAdjustmentType',
'amount' => 'getAmount',
'shop_amount' => 'getShopAmount',
'transaction_id' => 'getTransactionId',
'bill_payment_id' => 'getBillPaymentId',
'created_timestamp' => 'getCreatedTimestamp',
'updated_timestamp' => 'getUpdatedTimestamp'    ];

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
        $this->container['payment_adjustment_id'] = isset($data['payment_adjustment_id']) ? $data['payment_adjustment_id'] : null;
        $this->container['payment_adjustment_item_id'] = isset($data['payment_adjustment_item_id']) ? $data['payment_adjustment_item_id'] : null;
        $this->container['adjustment_type'] = isset($data['adjustment_type']) ? $data['adjustment_type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : 0;
        $this->container['shop_amount'] = isset($data['shop_amount']) ? $data['shop_amount'] : 0;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['bill_payment_id'] = isset($data['bill_payment_id']) ? $data['bill_payment_id'] : null;
        $this->container['created_timestamp'] = isset($data['created_timestamp']) ? $data['created_timestamp'] : null;
        $this->container['updated_timestamp'] = isset($data['updated_timestamp']) ? $data['updated_timestamp'] : null;
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
     * Gets payment_adjustment_id
     *
     * @return int
     */
    public function getPaymentAdjustmentId()
    {
        return $this->container['payment_adjustment_id'];
    }

    /**
     * Sets payment_adjustment_id
     *
     * @param int $payment_adjustment_id The numeric ID for a payment adjustment.
     *
     * @return $this
     */
    public function setPaymentAdjustmentId($payment_adjustment_id)
    {
        $this->container['payment_adjustment_id'] = $payment_adjustment_id;

        return $this;
    }

    /**
     * Gets payment_adjustment_item_id
     *
     * @return int
     */
    public function getPaymentAdjustmentItemId()
    {
        return $this->container['payment_adjustment_item_id'];
    }

    /**
     * Sets payment_adjustment_item_id
     *
     * @param int $payment_adjustment_item_id Unique ID for the adjustment line item.
     *
     * @return $this
     */
    public function setPaymentAdjustmentItemId($payment_adjustment_item_id)
    {
        $this->container['payment_adjustment_item_id'] = $payment_adjustment_item_id;

        return $this;
    }

    /**
     * Gets adjustment_type
     *
     * @return string
     */
    public function getAdjustmentType()
    {
        return $this->container['adjustment_type'];
    }

    /**
     * Sets adjustment_type
     *
     * @param string $adjustment_type String indicating the type of adjustment for this line item.
     *
     * @return $this
     */
    public function setAdjustmentType($adjustment_type)
    {
        $this->container['adjustment_type'] = $adjustment_type;

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
     * @param int $amount Integer value for the amount of the adjustment in original currency.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets shop_amount
     *
     * @return int
     */
    public function getShopAmount()
    {
        return $this->container['shop_amount'];
    }

    /**
     * Sets shop_amount
     *
     * @param int $shop_amount Integer value for the amount of the adjustment in currency for the shop.
     *
     * @return $this
     */
    public function setShopAmount($shop_amount)
    {
        $this->container['shop_amount'] = $shop_amount;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param int $transaction_id The unique numeric ID for a transaction.
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets bill_payment_id
     *
     * @return int
     */
    public function getBillPaymentId()
    {
        return $this->container['bill_payment_id'];
    }

    /**
     * Sets bill_payment_id
     *
     * @param int $bill_payment_id Unique ID for the bill payment adjustment.
     *
     * @return $this
     */
    public function setBillPaymentId($bill_payment_id)
    {
        $this->container['bill_payment_id'] = $bill_payment_id;

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
     * @param int $created_timestamp The transaction\\'s creation date and time, in epoch seconds.
     *
     * @return $this
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets updated_timestamp
     *
     * @return int
     */
    public function getUpdatedTimestamp()
    {
        return $this->container['updated_timestamp'];
    }

    /**
     * Sets updated_timestamp
     *
     * @param int $updated_timestamp The update date and time the payment adjustment in epoch seconds.
     *
     * @return $this
     */
    public function setUpdatedTimestamp($updated_timestamp)
    {
        $this->container['updated_timestamp'] = $updated_timestamp;

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
