<?php
/**
 * ListingReview
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
 * ListingReview Class Doc Comment
 *
 * @category Class
 * @description A listing review record left by a User.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingReview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListingReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shop_id' => 'int',
'listing_id' => 'int',
'rating' => 'int',
'review' => 'string',
'language' => 'string',
'image_url_fullxfull' => 'string',
'create_timestamp' => 'int',
'created_timestamp' => 'int',
'update_timestamp' => 'int',
'updated_timestamp' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shop_id' => null,
'listing_id' => null,
'rating' => null,
'review' => null,
'language' => null,
'image_url_fullxfull' => null,
'create_timestamp' => null,
'created_timestamp' => null,
'update_timestamp' => null,
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
        'shop_id' => 'shop_id',
'listing_id' => 'listing_id',
'rating' => 'rating',
'review' => 'review',
'language' => 'language',
'image_url_fullxfull' => 'image_url_fullxfull',
'create_timestamp' => 'create_timestamp',
'created_timestamp' => 'created_timestamp',
'update_timestamp' => 'update_timestamp',
'updated_timestamp' => 'updated_timestamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shop_id' => 'setShopId',
'listing_id' => 'setListingId',
'rating' => 'setRating',
'review' => 'setReview',
'language' => 'setLanguage',
'image_url_fullxfull' => 'setImageUrlFullxfull',
'create_timestamp' => 'setCreateTimestamp',
'created_timestamp' => 'setCreatedTimestamp',
'update_timestamp' => 'setUpdateTimestamp',
'updated_timestamp' => 'setUpdatedTimestamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shop_id' => 'getShopId',
'listing_id' => 'getListingId',
'rating' => 'getRating',
'review' => 'getReview',
'language' => 'getLanguage',
'image_url_fullxfull' => 'getImageUrlFullxfull',
'create_timestamp' => 'getCreateTimestamp',
'created_timestamp' => 'getCreatedTimestamp',
'update_timestamp' => 'getUpdateTimestamp',
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
        $this->container['shop_id'] = isset($data['shop_id']) ? $data['shop_id'] : null;
        $this->container['listing_id'] = isset($data['listing_id']) ? $data['listing_id'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['review'] = isset($data['review']) ? $data['review'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['image_url_fullxfull'] = isset($data['image_url_fullxfull']) ? $data['image_url_fullxfull'] : null;
        $this->container['create_timestamp'] = isset($data['create_timestamp']) ? $data['create_timestamp'] : null;
        $this->container['created_timestamp'] = isset($data['created_timestamp']) ? $data['created_timestamp'] : null;
        $this->container['update_timestamp'] = isset($data['update_timestamp']) ? $data['update_timestamp'] : null;
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
     * Gets shop_id
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->container['shop_id'];
    }

    /**
     * Sets shop_id
     *
     * @param int $shop_id The shop's numeric ID.
     *
     * @return $this
     */
    public function setShopId($shop_id)
    {
        $this->container['shop_id'] = $shop_id;

        return $this;
    }

    /**
     * Gets listing_id
     *
     * @return int
     */
    public function getListingId()
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id
     *
     * @param int $listing_id The ID of the ShopListing that the TransactionReview belongs to.
     *
     * @return $this
     */
    public function setListingId($listing_id)
    {
        $this->container['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int $rating Rating value on scale from 1 to 5
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets review
     *
     * @return string
     */
    public function getReview()
    {
        return $this->container['review'];
    }

    /**
     * Sets review
     *
     * @param string $review A message left by the author, explaining the feedback, if provided.
     *
     * @return $this
     */
    public function setReview($review)
    {
        $this->container['review'] = $review;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language of the TransactionReview
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets image_url_fullxfull
     *
     * @return string
     */
    public function getImageUrlFullxfull()
    {
        return $this->container['image_url_fullxfull'];
    }

    /**
     * Sets image_url_fullxfull
     *
     * @param string $image_url_fullxfull The url to a photo provided with the feedback, dimensions fullxfull. Note: This field may be absent, depending on the buyer's privacy settings.
     *
     * @return $this
     */
    public function setImageUrlFullxfull($image_url_fullxfull)
    {
        $this->container['image_url_fullxfull'] = $image_url_fullxfull;

        return $this;
    }

    /**
     * Gets create_timestamp
     *
     * @return int
     */
    public function getCreateTimestamp()
    {
        return $this->container['create_timestamp'];
    }

    /**
     * Sets create_timestamp
     *
     * @param int $create_timestamp The date and time the TransactionReview was created in epoch seconds.
     *
     * @return $this
     */
    public function setCreateTimestamp($create_timestamp)
    {
        $this->container['create_timestamp'] = $create_timestamp;

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
     * @param int $created_timestamp The date and time the TransactionReview was created in epoch seconds.
     *
     * @return $this
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets update_timestamp
     *
     * @return int
     */
    public function getUpdateTimestamp()
    {
        return $this->container['update_timestamp'];
    }

    /**
     * Sets update_timestamp
     *
     * @param int $update_timestamp The date and time the TransactionReview was updated in epoch seconds.
     *
     * @return $this
     */
    public function setUpdateTimestamp($update_timestamp)
    {
        $this->container['update_timestamp'] = $update_timestamp;

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
     * @param int $updated_timestamp The date and time the TransactionReview was updated in epoch seconds.
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
