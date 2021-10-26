<?php
/**
 * PositionItem
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
 * PositionItem Class Doc Comment
 *
 * @category Class
 * @description PositionItem
 * @package  EzzeSiftuz\OrdersV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PositionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PositionItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'position_item_id' => 'string',
'fulfillment_status' => 'string',
'delivery_service_hes' => 'bool',
'item_value_gross_price' => '\EzzeSiftuz\OrdersV4\Model\Amount',
'item_value_reduced_gross_price' => '\EzzeSiftuz\OrdersV4\Model\Amount',
'item_value_discount' => '\EzzeSiftuz\OrdersV4\Model\Amount',
'product' => '\EzzeSiftuz\OrdersV4\Model\Product',
'tracking_info' => '\EzzeSiftuz\OrdersV4\Model\TrackingInfo',
'expected_delivery_date' => '\DateTime',
'sent_date' => '\DateTime',
'returned_date' => '\DateTime',
'cancellation_date' => '\DateTime',
'processable_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'position_item_id' => null,
'fulfillment_status' => null,
'delivery_service_hes' => null,
'item_value_gross_price' => null,
'item_value_reduced_gross_price' => null,
'item_value_discount' => null,
'product' => null,
'tracking_info' => null,
'expected_delivery_date' => 'date-time',
'sent_date' => 'date-time',
'returned_date' => 'date-time',
'cancellation_date' => 'date-time',
'processable_date' => 'date-time'    ];

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
        'position_item_id' => 'positionItemId',
'fulfillment_status' => 'fulfillmentStatus',
'delivery_service_hes' => 'deliveryServiceHes',
'item_value_gross_price' => 'itemValueGrossPrice',
'item_value_reduced_gross_price' => 'itemValueReducedGrossPrice',
'item_value_discount' => 'itemValueDiscount',
'product' => 'product',
'tracking_info' => 'trackingInfo',
'expected_delivery_date' => 'expectedDeliveryDate',
'sent_date' => 'sentDate',
'returned_date' => 'returnedDate',
'cancellation_date' => 'cancellationDate',
'processable_date' => 'processableDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position_item_id' => 'setPositionItemId',
'fulfillment_status' => 'setFulfillmentStatus',
'delivery_service_hes' => 'setDeliveryServiceHes',
'item_value_gross_price' => 'setItemValueGrossPrice',
'item_value_reduced_gross_price' => 'setItemValueReducedGrossPrice',
'item_value_discount' => 'setItemValueDiscount',
'product' => 'setProduct',
'tracking_info' => 'setTrackingInfo',
'expected_delivery_date' => 'setExpectedDeliveryDate',
'sent_date' => 'setSentDate',
'returned_date' => 'setReturnedDate',
'cancellation_date' => 'setCancellationDate',
'processable_date' => 'setProcessableDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position_item_id' => 'getPositionItemId',
'fulfillment_status' => 'getFulfillmentStatus',
'delivery_service_hes' => 'getDeliveryServiceHes',
'item_value_gross_price' => 'getItemValueGrossPrice',
'item_value_reduced_gross_price' => 'getItemValueReducedGrossPrice',
'item_value_discount' => 'getItemValueDiscount',
'product' => 'getProduct',
'tracking_info' => 'getTrackingInfo',
'expected_delivery_date' => 'getExpectedDeliveryDate',
'sent_date' => 'getSentDate',
'returned_date' => 'getReturnedDate',
'cancellation_date' => 'getCancellationDate',
'processable_date' => 'getProcessableDate'    ];

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

    const FULFILLMENT_STATUS_ANNOUNCED = 'ANNOUNCED';
const FULFILLMENT_STATUS_PROCESSABLE = 'PROCESSABLE';
const FULFILLMENT_STATUS_SENT = 'SENT';
const FULFILLMENT_STATUS_RETURNED = 'RETURNED';
const FULFILLMENT_STATUS_CANCELLED_BY_CUSTOMER = 'CANCELLED_BY_CUSTOMER';
const FULFILLMENT_STATUS_CANCELLED_BY_PARTNER = 'CANCELLED_BY_PARTNER';
const FULFILLMENT_STATUS_CANCELLED_BY_MARKETPLACE = 'CANCELLED_BY_MARKETPLACE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentStatusAllowableValues()
    {
        return [
            self::FULFILLMENT_STATUS_ANNOUNCED,
self::FULFILLMENT_STATUS_PROCESSABLE,
self::FULFILLMENT_STATUS_SENT,
self::FULFILLMENT_STATUS_RETURNED,
self::FULFILLMENT_STATUS_CANCELLED_BY_CUSTOMER,
self::FULFILLMENT_STATUS_CANCELLED_BY_PARTNER,
self::FULFILLMENT_STATUS_CANCELLED_BY_MARKETPLACE,        ];
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
        $this->container['position_item_id'] = isset($data['position_item_id']) ? $data['position_item_id'] : null;
        $this->container['fulfillment_status'] = isset($data['fulfillment_status']) ? $data['fulfillment_status'] : null;
        $this->container['delivery_service_hes'] = isset($data['delivery_service_hes']) ? $data['delivery_service_hes'] : null;
        $this->container['item_value_gross_price'] = isset($data['item_value_gross_price']) ? $data['item_value_gross_price'] : null;
        $this->container['item_value_reduced_gross_price'] = isset($data['item_value_reduced_gross_price']) ? $data['item_value_reduced_gross_price'] : null;
        $this->container['item_value_discount'] = isset($data['item_value_discount']) ? $data['item_value_discount'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['tracking_info'] = isset($data['tracking_info']) ? $data['tracking_info'] : null;
        $this->container['expected_delivery_date'] = isset($data['expected_delivery_date']) ? $data['expected_delivery_date'] : null;
        $this->container['sent_date'] = isset($data['sent_date']) ? $data['sent_date'] : null;
        $this->container['returned_date'] = isset($data['returned_date']) ? $data['returned_date'] : null;
        $this->container['cancellation_date'] = isset($data['cancellation_date']) ? $data['cancellation_date'] : null;
        $this->container['processable_date'] = isset($data['processable_date']) ? $data['processable_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['position_item_id'] === null) {
            $invalidProperties[] = "'position_item_id' can't be null";
        }
        if ($this->container['fulfillment_status'] === null) {
            $invalidProperties[] = "'fulfillment_status' can't be null";
        }
        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!is_null($this->container['fulfillment_status']) && !in_array($this->container['fulfillment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fulfillment_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['item_value_gross_price'] === null) {
            $invalidProperties[] = "'item_value_gross_price' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
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
     * Gets position_item_id
     *
     * @return string
     */
    public function getPositionItemId()
    {
        return $this->container['position_item_id'];
    }

    /**
     * Sets position_item_id
     *
     * @param string $position_item_id The unique id of the position item
     *
     * @return $this
     */
    public function setPositionItemId($position_item_id)
    {
        $this->container['position_item_id'] = $position_item_id;

        return $this;
    }

    /**
     * Gets fulfillment_status
     *
     * @return string
     */
    public function getFulfillmentStatus()
    {
        return $this->container['fulfillment_status'];
    }

    /**
     * Sets fulfillment_status
     *
     * @param string $fulfillment_status The fulfillment status of the position item
     *
     * @return $this
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!in_array($fulfillment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fulfillment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillment_status'] = $fulfillment_status;

        return $this;
    }

    /**
     * Gets delivery_service_hes
     *
     * @return bool
     */
    public function getDeliveryServiceHes()
    {
        return $this->container['delivery_service_hes'];
    }

    /**
     * Sets delivery_service_hes
     *
     * @param bool $delivery_service_hes Position item has delivery service HES
     *
     * @return $this
     */
    public function setDeliveryServiceHes($delivery_service_hes)
    {
        $this->container['delivery_service_hes'] = $delivery_service_hes;

        return $this;
    }

    /**
     * Gets item_value_gross_price
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Amount
     */
    public function getItemValueGrossPrice()
    {
        return $this->container['item_value_gross_price'];
    }

    /**
     * Sets item_value_gross_price
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Amount $item_value_gross_price item_value_gross_price
     *
     * @return $this
     */
    public function setItemValueGrossPrice($item_value_gross_price)
    {
        $this->container['item_value_gross_price'] = $item_value_gross_price;

        return $this;
    }

    /**
     * Gets item_value_reduced_gross_price
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Amount
     */
    public function getItemValueReducedGrossPrice()
    {
        return $this->container['item_value_reduced_gross_price'];
    }

    /**
     * Sets item_value_reduced_gross_price
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Amount $item_value_reduced_gross_price item_value_reduced_gross_price
     *
     * @return $this
     */
    public function setItemValueReducedGrossPrice($item_value_reduced_gross_price)
    {
        $this->container['item_value_reduced_gross_price'] = $item_value_reduced_gross_price;

        return $this;
    }

    /**
     * Gets item_value_discount
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Amount
     */
    public function getItemValueDiscount()
    {
        return $this->container['item_value_discount'];
    }

    /**
     * Sets item_value_discount
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Amount $item_value_discount item_value_discount
     *
     * @return $this
     */
    public function setItemValueDiscount($item_value_discount)
    {
        $this->container['item_value_discount'] = $item_value_discount;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Product $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets tracking_info
     *
     * @return \EzzeSiftuz\OrdersV4\Model\TrackingInfo
     */
    public function getTrackingInfo()
    {
        return $this->container['tracking_info'];
    }

    /**
     * Sets tracking_info
     *
     * @param \EzzeSiftuz\OrdersV4\Model\TrackingInfo $tracking_info tracking_info
     *
     * @return $this
     */
    public function setTrackingInfo($tracking_info)
    {
        $this->container['tracking_info'] = $tracking_info;

        return $this;
    }

    /**
     * Gets expected_delivery_date
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expected_delivery_date'];
    }

    /**
     * Sets expected_delivery_date
     *
     * @param \DateTime $expected_delivery_date The date the position item should be delivered
     *
     * @return $this
     */
    public function setExpectedDeliveryDate($expected_delivery_date)
    {
        $this->container['expected_delivery_date'] = $expected_delivery_date;

        return $this;
    }

    /**
     * Gets sent_date
     *
     * @return \DateTime
     */
    public function getSentDate()
    {
        return $this->container['sent_date'];
    }

    /**
     * Sets sent_date
     *
     * @param \DateTime $sent_date Date the position item was sent
     *
     * @return $this
     */
    public function setSentDate($sent_date)
    {
        $this->container['sent_date'] = $sent_date;

        return $this;
    }

    /**
     * Gets returned_date
     *
     * @return \DateTime
     */
    public function getReturnedDate()
    {
        return $this->container['returned_date'];
    }

    /**
     * Sets returned_date
     *
     * @param \DateTime $returned_date Date the position item was returned
     *
     * @return $this
     */
    public function setReturnedDate($returned_date)
    {
        $this->container['returned_date'] = $returned_date;

        return $this;
    }

    /**
     * Gets cancellation_date
     *
     * @return \DateTime
     */
    public function getCancellationDate()
    {
        return $this->container['cancellation_date'];
    }

    /**
     * Sets cancellation_date
     *
     * @param \DateTime $cancellation_date Date the position item was cancelled
     *
     * @return $this
     */
    public function setCancellationDate($cancellation_date)
    {
        $this->container['cancellation_date'] = $cancellation_date;

        return $this;
    }

    /**
     * Gets processable_date
     *
     * @return \DateTime
     */
    public function getProcessableDate()
    {
        return $this->container['processable_date'];
    }

    /**
     * Sets processable_date
     *
     * @param \DateTime $processable_date Date the position item has reached PROCESSABLE fulfillment status
     *
     * @return $this
     */
    public function setProcessableDate($processable_date)
    {
        $this->container['processable_date'] = $processable_date;

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
