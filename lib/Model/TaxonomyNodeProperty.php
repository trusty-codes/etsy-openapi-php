<?php
/**
 * TaxonomyNodeProperty
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
 * TaxonomyNodeProperty Class Doc Comment
 *
 * @category Class
 * @description A product property definition.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxonomyNodeProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxonomyNodeProperty';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'property_id' => 'int',
'name' => 'string',
'display_name' => 'string',
'scales' => '\Swagger\Client\Model\AllOfTaxonomyNodePropertyScalesItems[]',
'is_required' => 'bool',
'supports_attributes' => 'bool',
'supports_variations' => 'bool',
'is_multivalued' => 'bool',
'max_values_allowed' => 'int',
'possible_values' => '\Swagger\Client\Model\AllOfTaxonomyNodePropertyPossibleValuesItems[]',
'selected_values' => '\Swagger\Client\Model\AllOfTaxonomyNodePropertySelectedValuesItems[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'property_id' => null,
'name' => null,
'display_name' => null,
'scales' => null,
'is_required' => null,
'supports_attributes' => null,
'supports_variations' => null,
'is_multivalued' => null,
'max_values_allowed' => null,
'possible_values' => null,
'selected_values' => null    ];

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
        'property_id' => 'property_id',
'name' => 'name',
'display_name' => 'display_name',
'scales' => 'scales',
'is_required' => 'is_required',
'supports_attributes' => 'supports_attributes',
'supports_variations' => 'supports_variations',
'is_multivalued' => 'is_multivalued',
'max_values_allowed' => 'max_values_allowed',
'possible_values' => 'possible_values',
'selected_values' => 'selected_values'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_id' => 'setPropertyId',
'name' => 'setName',
'display_name' => 'setDisplayName',
'scales' => 'setScales',
'is_required' => 'setIsRequired',
'supports_attributes' => 'setSupportsAttributes',
'supports_variations' => 'setSupportsVariations',
'is_multivalued' => 'setIsMultivalued',
'max_values_allowed' => 'setMaxValuesAllowed',
'possible_values' => 'setPossibleValues',
'selected_values' => 'setSelectedValues'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_id' => 'getPropertyId',
'name' => 'getName',
'display_name' => 'getDisplayName',
'scales' => 'getScales',
'is_required' => 'getIsRequired',
'supports_attributes' => 'getSupportsAttributes',
'supports_variations' => 'getSupportsVariations',
'is_multivalued' => 'getIsMultivalued',
'max_values_allowed' => 'getMaxValuesAllowed',
'possible_values' => 'getPossibleValues',
'selected_values' => 'getSelectedValues'    ];

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
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['scales'] = isset($data['scales']) ? $data['scales'] : null;
        $this->container['is_required'] = isset($data['is_required']) ? $data['is_required'] : null;
        $this->container['supports_attributes'] = isset($data['supports_attributes']) ? $data['supports_attributes'] : null;
        $this->container['supports_variations'] = isset($data['supports_variations']) ? $data['supports_variations'] : null;
        $this->container['is_multivalued'] = isset($data['is_multivalued']) ? $data['is_multivalued'] : null;
        $this->container['max_values_allowed'] = isset($data['max_values_allowed']) ? $data['max_values_allowed'] : null;
        $this->container['possible_values'] = isset($data['possible_values']) ? $data['possible_values'] : null;
        $this->container['selected_values'] = isset($data['selected_values']) ? $data['selected_values'] : null;
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
     * Gets property_id
     *
     * @return int
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param int $property_id The unique numeric ID of this product property.
     *
     * @return $this
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

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
     * @param string $name The name string for this taxonomy node.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The human-readable product property name string.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets scales
     *
     * @return \Swagger\Client\Model\AllOfTaxonomyNodePropertyScalesItems[]
     */
    public function getScales()
    {
        return $this->container['scales'];
    }

    /**
     * Sets scales
     *
     * @param \Swagger\Client\Model\AllOfTaxonomyNodePropertyScalesItems[] $scales A list of available scales.
     *
     * @return $this
     */
    public function setScales($scales)
    {
        $this->container['scales'] = $scales;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool $is_required When true, listings assigned eligible taxonomy IDs require this property.
     *
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets supports_attributes
     *
     * @return bool
     */
    public function getSupportsAttributes()
    {
        return $this->container['supports_attributes'];
    }

    /**
     * Sets supports_attributes
     *
     * @param bool $supports_attributes When true, you can use this property in listing attributes.
     *
     * @return $this
     */
    public function setSupportsAttributes($supports_attributes)
    {
        $this->container['supports_attributes'] = $supports_attributes;

        return $this;
    }

    /**
     * Gets supports_variations
     *
     * @return bool
     */
    public function getSupportsVariations()
    {
        return $this->container['supports_variations'];
    }

    /**
     * Sets supports_variations
     *
     * @param bool $supports_variations When true, you can use this property in listing variations.
     *
     * @return $this
     */
    public function setSupportsVariations($supports_variations)
    {
        $this->container['supports_variations'] = $supports_variations;

        return $this;
    }

    /**
     * Gets is_multivalued
     *
     * @return bool
     */
    public function getIsMultivalued()
    {
        return $this->container['is_multivalued'];
    }

    /**
     * Sets is_multivalued
     *
     * @param bool $is_multivalued When true, you can assign multiple property values to this property
     *
     * @return $this
     */
    public function setIsMultivalued($is_multivalued)
    {
        $this->container['is_multivalued'] = $is_multivalued;

        return $this;
    }

    /**
     * Gets max_values_allowed
     *
     * @return int
     */
    public function getMaxValuesAllowed()
    {
        return $this->container['max_values_allowed'];
    }

    /**
     * Sets max_values_allowed
     *
     * @param int $max_values_allowed When true, you can assign multiple property values to this property
     *
     * @return $this
     */
    public function setMaxValuesAllowed($max_values_allowed)
    {
        $this->container['max_values_allowed'] = $max_values_allowed;

        return $this;
    }

    /**
     * Gets possible_values
     *
     * @return \Swagger\Client\Model\AllOfTaxonomyNodePropertyPossibleValuesItems[]
     */
    public function getPossibleValues()
    {
        return $this->container['possible_values'];
    }

    /**
     * Sets possible_values
     *
     * @param \Swagger\Client\Model\AllOfTaxonomyNodePropertyPossibleValuesItems[] $possible_values A list of supported property value strings for this property.
     *
     * @return $this
     */
    public function setPossibleValues($possible_values)
    {
        $this->container['possible_values'] = $possible_values;

        return $this;
    }

    /**
     * Gets selected_values
     *
     * @return \Swagger\Client\Model\AllOfTaxonomyNodePropertySelectedValuesItems[]
     */
    public function getSelectedValues()
    {
        return $this->container['selected_values'];
    }

    /**
     * Sets selected_values
     *
     * @param \Swagger\Client\Model\AllOfTaxonomyNodePropertySelectedValuesItems[] $selected_values A list of property value strings automatically and always selected for the given property.
     *
     * @return $this
     */
    public function setSelectedValues($selected_values)
    {
        $this->container['selected_values'] = $selected_values;

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
