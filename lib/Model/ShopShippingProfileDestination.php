<?php
/**
 * ShopShippingProfileDestination
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
 * ShopShippingProfileDestination Class Doc Comment
 *
 * @category Class
 * @description Represents a shipping destination assigned to a shipping profile.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShopShippingProfileDestination implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopShippingProfileDestination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_profile_destination_id' => 'int',
'shipping_profile_id' => 'int',
'origin_country_iso' => 'string',
'destination_country_iso' => 'string',
'destination_region' => 'string',
'primary_cost' => 'AllOfShopShippingProfileDestinationPrimaryCost',
'secondary_cost' => 'AllOfShopShippingProfileDestinationSecondaryCost',
'shipping_carrier_id' => 'int',
'mail_class' => 'string',
'min_delivery_days' => 'int',
'max_delivery_days' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_profile_destination_id' => null,
'shipping_profile_id' => null,
'origin_country_iso' => 'ISO 3166-1 alpha-2',
'destination_country_iso' => null,
'destination_region' => null,
'primary_cost' => null,
'secondary_cost' => null,
'shipping_carrier_id' => null,
'mail_class' => null,
'min_delivery_days' => null,
'max_delivery_days' => null    ];

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
        'shipping_profile_destination_id' => 'shipping_profile_destination_id',
'shipping_profile_id' => 'shipping_profile_id',
'origin_country_iso' => 'origin_country_iso',
'destination_country_iso' => 'destination_country_iso',
'destination_region' => 'destination_region',
'primary_cost' => 'primary_cost',
'secondary_cost' => 'secondary_cost',
'shipping_carrier_id' => 'shipping_carrier_id',
'mail_class' => 'mail_class',
'min_delivery_days' => 'min_delivery_days',
'max_delivery_days' => 'max_delivery_days'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_profile_destination_id' => 'setShippingProfileDestinationId',
'shipping_profile_id' => 'setShippingProfileId',
'origin_country_iso' => 'setOriginCountryIso',
'destination_country_iso' => 'setDestinationCountryIso',
'destination_region' => 'setDestinationRegion',
'primary_cost' => 'setPrimaryCost',
'secondary_cost' => 'setSecondaryCost',
'shipping_carrier_id' => 'setShippingCarrierId',
'mail_class' => 'setMailClass',
'min_delivery_days' => 'setMinDeliveryDays',
'max_delivery_days' => 'setMaxDeliveryDays'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_profile_destination_id' => 'getShippingProfileDestinationId',
'shipping_profile_id' => 'getShippingProfileId',
'origin_country_iso' => 'getOriginCountryIso',
'destination_country_iso' => 'getDestinationCountryIso',
'destination_region' => 'getDestinationRegion',
'primary_cost' => 'getPrimaryCost',
'secondary_cost' => 'getSecondaryCost',
'shipping_carrier_id' => 'getShippingCarrierId',
'mail_class' => 'getMailClass',
'min_delivery_days' => 'getMinDeliveryDays',
'max_delivery_days' => 'getMaxDeliveryDays'    ];

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

    const DESTINATION_REGION_EU = 'eu';
const DESTINATION_REGION_NON_EU = 'non_eu';
const DESTINATION_REGION_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationRegionAllowableValues()
    {
        return [
            self::DESTINATION_REGION_EU,
self::DESTINATION_REGION_NON_EU,
self::DESTINATION_REGION_NONE,        ];
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
        $this->container['shipping_profile_destination_id'] = isset($data['shipping_profile_destination_id']) ? $data['shipping_profile_destination_id'] : null;
        $this->container['shipping_profile_id'] = isset($data['shipping_profile_id']) ? $data['shipping_profile_id'] : null;
        $this->container['origin_country_iso'] = isset($data['origin_country_iso']) ? $data['origin_country_iso'] : null;
        $this->container['destination_country_iso'] = isset($data['destination_country_iso']) ? $data['destination_country_iso'] : null;
        $this->container['destination_region'] = isset($data['destination_region']) ? $data['destination_region'] : null;
        $this->container['primary_cost'] = isset($data['primary_cost']) ? $data['primary_cost'] : null;
        $this->container['secondary_cost'] = isset($data['secondary_cost']) ? $data['secondary_cost'] : null;
        $this->container['shipping_carrier_id'] = isset($data['shipping_carrier_id']) ? $data['shipping_carrier_id'] : null;
        $this->container['mail_class'] = isset($data['mail_class']) ? $data['mail_class'] : null;
        $this->container['min_delivery_days'] = isset($data['min_delivery_days']) ? $data['min_delivery_days'] : null;
        $this->container['max_delivery_days'] = isset($data['max_delivery_days']) ? $data['max_delivery_days'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDestinationRegionAllowableValues();
        if (!is_null($this->container['destination_region']) && !in_array($this->container['destination_region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'destination_region', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets shipping_profile_destination_id
     *
     * @return int
     */
    public function getShippingProfileDestinationId()
    {
        return $this->container['shipping_profile_destination_id'];
    }

    /**
     * Sets shipping_profile_destination_id
     *
     * @param int $shipping_profile_destination_id The numeric ID of the shipping profile destination in the [shipping profile](/documentation/reference#tag/Shop-ShippingProfile) associated with the listing.
     *
     * @return $this
     */
    public function setShippingProfileDestinationId($shipping_profile_destination_id)
    {
        $this->container['shipping_profile_destination_id'] = $shipping_profile_destination_id;

        return $this;
    }

    /**
     * Gets shipping_profile_id
     *
     * @return int
     */
    public function getShippingProfileId()
    {
        return $this->container['shipping_profile_id'];
    }

    /**
     * Sets shipping_profile_id
     *
     * @param int $shipping_profile_id The numeric ID of the shipping profile.
     *
     * @return $this
     */
    public function setShippingProfileId($shipping_profile_id)
    {
        $this->container['shipping_profile_id'] = $shipping_profile_id;

        return $this;
    }

    /**
     * Gets origin_country_iso
     *
     * @return string
     */
    public function getOriginCountryIso()
    {
        return $this->container['origin_country_iso'];
    }

    /**
     * Sets origin_country_iso
     *
     * @param string $origin_country_iso The ISO code of the country from which the listing ships.
     *
     * @return $this
     */
    public function setOriginCountryIso($origin_country_iso)
    {
        $this->container['origin_country_iso'] = $origin_country_iso;

        return $this;
    }

    /**
     * Gets destination_country_iso
     *
     * @return string
     */
    public function getDestinationCountryIso()
    {
        return $this->container['destination_country_iso'];
    }

    /**
     * Sets destination_country_iso
     *
     * @param string $destination_country_iso The ISO code of the country to which the listing ships. If null, request sets destination to destination_region. Required if destination_region is null or not provided.
     *
     * @return $this
     */
    public function setDestinationCountryIso($destination_country_iso)
    {
        $this->container['destination_country_iso'] = $destination_country_iso;

        return $this;
    }

    /**
     * Gets destination_region
     *
     * @return string
     */
    public function getDestinationRegion()
    {
        return $this->container['destination_region'];
    }

    /**
     * Sets destination_region
     *
     * @param string $destination_region The code of the region to which the listing ships. A region represents a set of countries. Supported regions are Europe Union and Non-Europe Union (countries in Europe not in EU). If \\`none\\`, request sets destination to destination_country_iso. Required if destination_country_iso is null or not provided.
     *
     * @return $this
     */
    public function setDestinationRegion($destination_region)
    {
        $allowedValues = $this->getDestinationRegionAllowableValues();
        if (!is_null($destination_region) && !in_array($destination_region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'destination_region', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_region'] = $destination_region;

        return $this;
    }

    /**
     * Gets primary_cost
     *
     * @return AllOfShopShippingProfileDestinationPrimaryCost
     */
    public function getPrimaryCost()
    {
        return $this->container['primary_cost'];
    }

    /**
     * Sets primary_cost
     *
     * @param AllOfShopShippingProfileDestinationPrimaryCost $primary_cost The cost of shipping to this country/region alone, measured in the store's default currency.
     *
     * @return $this
     */
    public function setPrimaryCost($primary_cost)
    {
        $this->container['primary_cost'] = $primary_cost;

        return $this;
    }

    /**
     * Gets secondary_cost
     *
     * @return AllOfShopShippingProfileDestinationSecondaryCost
     */
    public function getSecondaryCost()
    {
        return $this->container['secondary_cost'];
    }

    /**
     * Sets secondary_cost
     *
     * @param AllOfShopShippingProfileDestinationSecondaryCost $secondary_cost The cost of shipping to this country/region with another item, measured in the store's default currency.
     *
     * @return $this
     */
    public function setSecondaryCost($secondary_cost)
    {
        $this->container['secondary_cost'] = $secondary_cost;

        return $this;
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
     * @param int $shipping_carrier_id The unique ID of a supported shipping carrier, which is used to calculate an Estimated Delivery Date. **Required with `mail_class`** if `min_delivery_days` and `max_delivery_days` are null.
     *
     * @return $this
     */
    public function setShippingCarrierId($shipping_carrier_id)
    {
        $this->container['shipping_carrier_id'] = $shipping_carrier_id;

        return $this;
    }

    /**
     * Gets mail_class
     *
     * @return string
     */
    public function getMailClass()
    {
        return $this->container['mail_class'];
    }

    /**
     * Sets mail_class
     *
     * @param string $mail_class The unique ID string of a shipping carrier's mail class, which is used to calculate an estimated delivery date. **Required with `shipping_carrier_id`** if `min_delivery_days` and `max_delivery_days` are null.
     *
     * @return $this
     */
    public function setMailClass($mail_class)
    {
        $this->container['mail_class'] = $mail_class;

        return $this;
    }

    /**
     * Gets min_delivery_days
     *
     * @return int
     */
    public function getMinDeliveryDays()
    {
        return $this->container['min_delivery_days'];
    }

    /**
     * Sets min_delivery_days
     *
     * @param int $min_delivery_days The minimum number of business days a buyer can expect to wait to receive their purchased item once it has shipped. **Required with `max_delivery_days`** if `mail_class` is null.
     *
     * @return $this
     */
    public function setMinDeliveryDays($min_delivery_days)
    {
        $this->container['min_delivery_days'] = $min_delivery_days;

        return $this;
    }

    /**
     * Gets max_delivery_days
     *
     * @return int
     */
    public function getMaxDeliveryDays()
    {
        return $this->container['max_delivery_days'];
    }

    /**
     * Sets max_delivery_days
     *
     * @param int $max_delivery_days The maximum number of business days a buyer can expect to wait to receive their purchased item once it has shipped. **Required with `min_delivery_days`** if `mail_class` is null.
     *
     * @return $this
     */
    public function setMaxDeliveryDays($max_delivery_days)
    {
        $this->container['max_delivery_days'] = $max_delivery_days;

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
