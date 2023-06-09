<?php
/**
 * ShippingCarrier
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
 * ShippingCarrier Class Doc Comment
 *
 * @category Class
 * @description A supported shipping carrier, which is used to calculate an Estimated Delivery Date.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingCarrier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingCarrier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_carrier_id' => 'int',
'name' => 'string',
'domestic_classes' => '\Swagger\Client\Model\AllOfShippingCarrierDomesticClassesItems[]',
'international_classes' => '\Swagger\Client\Model\AllOfShippingCarrierInternationalClassesItems[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_carrier_id' => null,
'name' => null,
'domestic_classes' => null,
'international_classes' => null    ];

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
        'shipping_carrier_id' => 'shipping_carrier_id',
'name' => 'name',
'domestic_classes' => 'domestic_classes',
'international_classes' => 'international_classes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_carrier_id' => 'setShippingCarrierId',
'name' => 'setName',
'domestic_classes' => 'setDomesticClasses',
'international_classes' => 'setInternationalClasses'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_carrier_id' => 'getShippingCarrierId',
'name' => 'getName',
'domestic_classes' => 'getDomesticClasses',
'international_classes' => 'getInternationalClasses'    ];

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
        $this->container['shipping_carrier_id'] = isset($data['shipping_carrier_id']) ? $data['shipping_carrier_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domestic_classes'] = isset($data['domestic_classes']) ? $data['domestic_classes'] : null;
        $this->container['international_classes'] = isset($data['international_classes']) ? $data['international_classes'] : null;
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
     * Gets shipping_carrier_id
     *
     * @return int
     */
    public function getShippingCarrierId()
    {
        return $this->container['shipping_carrier_id'];
    }

    /**
     * Sets shipping_carrier_id
     *
     * @param int $shipping_carrier_id The numeric ID of this shipping carrier.
     *
     * @return $this
     */
    public function setShippingCarrierId($shipping_carrier_id)
    {
        $this->container['shipping_carrier_id'] = $shipping_carrier_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of this shipping carrier.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets domestic_classes
     *
     * @return \Swagger\Client\Model\AllOfShippingCarrierDomesticClassesItems[]
     */
    public function getDomesticClasses()
    {
        return $this->container['domestic_classes'];
    }

    /**
     * Sets domestic_classes
     *
     * @param \Swagger\Client\Model\AllOfShippingCarrierDomesticClassesItems[] $domestic_classes Set of domestic mail classes of this shipping carrier.
     *
     * @return $this
     */
    public function setDomesticClasses($domestic_classes)
    {
        $this->container['domestic_classes'] = $domestic_classes;

        return $this;
    }

    /**
     * Gets international_classes
     *
     * @return \Swagger\Client\Model\AllOfShippingCarrierInternationalClassesItems[]
     */
    public function getInternationalClasses()
    {
        return $this->container['international_classes'];
    }

    /**
     * Sets international_classes
     *
     * @param \Swagger\Client\Model\AllOfShippingCarrierInternationalClassesItems[] $international_classes Set of international mail classes of this shipping carrier.
     *
     * @return $this
     */
    public function setInternationalClasses($international_classes)
    {
        $this->container['international_classes'] = $international_classes;

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
