<?php
/**
 * InitialDeliveryFee
 *
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\OrdersV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Orders
 *
 * This API documentation describes all endpoints for orders - version 4
 *
 * OpenAPI spec version: v4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\OrdersV4\Model;

use \ArrayAccess;
use \EzzeSiftuz\OrdersV4\ObjectSerializer;

/**
 * InitialDeliveryFee Class Doc Comment
 *
 * @category Class
 * @description InitialDeliveryFee
 * @package  EzzeSiftuz\OrdersV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InitialDeliveryFee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InitialDeliveryFee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'delivery_fee_amount' => '\EzzeSiftuz\OrdersV4\Model\Amount',
'position_item_ids' => 'string[]',
'vat_rate' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'delivery_fee_amount' => null,
'position_item_ids' => null,
'vat_rate' => null    ];

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
        'name' => 'name',
'delivery_fee_amount' => 'deliveryFeeAmount',
'position_item_ids' => 'positionItemIds',
'vat_rate' => 'vatRate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'delivery_fee_amount' => 'setDeliveryFeeAmount',
'position_item_ids' => 'setPositionItemIds',
'vat_rate' => 'setVatRate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'delivery_fee_amount' => 'getDeliveryFeeAmount',
'position_item_ids' => 'getPositionItemIds',
'vat_rate' => 'getVatRate'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['delivery_fee_amount'] = isset($data['delivery_fee_amount']) ? $data['delivery_fee_amount'] : null;
        $this->container['position_item_ids'] = isset($data['position_item_ids']) ? $data['position_item_ids'] : null;
        $this->container['vat_rate'] = isset($data['vat_rate']) ? $data['vat_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['delivery_fee_amount'] === null) {
            $invalidProperties[] = "'delivery_fee_amount' can't be null";
        }
        if ($this->container['position_item_ids'] === null) {
            $invalidProperties[] = "'position_item_ids' can't be null";
        }
        if ($this->container['vat_rate'] === null) {
            $invalidProperties[] = "'vat_rate' can't be null";
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
     * @param string $name The type of this delivery fee
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets delivery_fee_amount
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Amount
     */
    public function getDeliveryFeeAmount()
    {
        return $this->container['delivery_fee_amount'];
    }

    /**
     * Sets delivery_fee_amount
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Amount $delivery_fee_amount delivery_fee_amount
     *
     * @return $this
     */
    public function setDeliveryFeeAmount($delivery_fee_amount)
    {
        $this->container['delivery_fee_amount'] = $delivery_fee_amount;

        return $this;
    }

    /**
     * Gets position_item_ids
     *
     * @return string[]
     */
    public function getPositionItemIds()
    {
        return $this->container['position_item_ids'];
    }

    /**
     * Sets position_item_ids
     *
     * @param string[] $position_item_ids The position item ids to which this delivery fee applies
     *
     * @return $this
     */
    public function setPositionItemIds($position_item_ids)
    {
        $this->container['position_item_ids'] = $position_item_ids;

        return $this;
    }

    /**
     * Gets vat_rate
     *
     * @return float
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float $vat_rate The VAT rate for this delivery fee
     *
     * @return $this
     */
    public function setVatRate($vat_rate)
    {
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
