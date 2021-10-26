<?php
/**
 * PartnerOrder
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
 * PartnerOrder Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\OrdersV4
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PartnerOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PartnerOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_order_id' => 'string',
'order_number' => 'string',
'order_date' => '\DateTime',
'last_modified_date' => '\DateTime',
'position_items' => '\EzzeSiftuz\OrdersV4\Model\PositionItem[]',
'order_lifecycle_information' => '\EzzeSiftuz\OrdersV4\Model\OrderLifecycleInformation',
'initial_delivery_fees' => '\EzzeSiftuz\OrdersV4\Model\InitialDeliveryFee[]',
'initial_discounts' => '\EzzeSiftuz\OrdersV4\Model\InitialDiscount[]',
'delivery_address' => '\EzzeSiftuz\OrdersV4\Model\Address',
'invoice_address' => '\EzzeSiftuz\OrdersV4\Model\Address',
'payment' => '\EzzeSiftuz\OrdersV4\Model\Payment',
'links' => '\EzzeSiftuz\OrdersV4\Model\Link[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_order_id' => null,
'order_number' => null,
'order_date' => 'date-time',
'last_modified_date' => 'date-time',
'position_items' => null,
'order_lifecycle_information' => null,
'initial_delivery_fees' => null,
'initial_discounts' => null,
'delivery_address' => null,
'invoice_address' => null,
'payment' => null,
'links' => null    ];

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
        'sales_order_id' => 'salesOrderId',
'order_number' => 'orderNumber',
'order_date' => 'orderDate',
'last_modified_date' => 'lastModifiedDate',
'position_items' => 'positionItems',
'order_lifecycle_information' => 'orderLifecycleInformation',
'initial_delivery_fees' => 'initialDeliveryFees',
'initial_discounts' => 'initialDiscounts',
'delivery_address' => 'deliveryAddress',
'invoice_address' => 'invoiceAddress',
'payment' => 'payment',
'links' => 'links'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_order_id' => 'setSalesOrderId',
'order_number' => 'setOrderNumber',
'order_date' => 'setOrderDate',
'last_modified_date' => 'setLastModifiedDate',
'position_items' => 'setPositionItems',
'order_lifecycle_information' => 'setOrderLifecycleInformation',
'initial_delivery_fees' => 'setInitialDeliveryFees',
'initial_discounts' => 'setInitialDiscounts',
'delivery_address' => 'setDeliveryAddress',
'invoice_address' => 'setInvoiceAddress',
'payment' => 'setPayment',
'links' => 'setLinks'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_order_id' => 'getSalesOrderId',
'order_number' => 'getOrderNumber',
'order_date' => 'getOrderDate',
'last_modified_date' => 'getLastModifiedDate',
'position_items' => 'getPositionItems',
'order_lifecycle_information' => 'getOrderLifecycleInformation',
'initial_delivery_fees' => 'getInitialDeliveryFees',
'initial_discounts' => 'getInitialDiscounts',
'delivery_address' => 'getDeliveryAddress',
'invoice_address' => 'getInvoiceAddress',
'payment' => 'getPayment',
'links' => 'getLinks'    ];

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
        $this->container['sales_order_id'] = isset($data['sales_order_id']) ? $data['sales_order_id'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        $this->container['position_items'] = isset($data['position_items']) ? $data['position_items'] : null;
        $this->container['order_lifecycle_information'] = isset($data['order_lifecycle_information']) ? $data['order_lifecycle_information'] : null;
        $this->container['initial_delivery_fees'] = isset($data['initial_delivery_fees']) ? $data['initial_delivery_fees'] : null;
        $this->container['initial_discounts'] = isset($data['initial_discounts']) ? $data['initial_discounts'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['invoice_address'] = isset($data['invoice_address']) ? $data['invoice_address'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sales_order_id'] === null) {
            $invalidProperties[] = "'sales_order_id' can't be null";
        }
        if ($this->container['order_number'] === null) {
            $invalidProperties[] = "'order_number' can't be null";
        }
        if ($this->container['order_date'] === null) {
            $invalidProperties[] = "'order_date' can't be null";
        }
        if ($this->container['position_items'] === null) {
            $invalidProperties[] = "'position_items' can't be null";
        }
        if ($this->container['order_lifecycle_information'] === null) {
            $invalidProperties[] = "'order_lifecycle_information' can't be null";
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
     * Gets sales_order_id
     *
     * @return string
     */
    public function getSalesOrderId()
    {
        return $this->container['sales_order_id'];
    }

    /**
     * Sets sales_order_id
     *
     * @param string $sales_order_id The id of the corresponding sales order. For one partner the sales order id is unique
     *
     * @return $this
     */
    public function setSalesOrderId($sales_order_id)
    {
        $this->container['sales_order_id'] = $sales_order_id;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number The order number. An unique human readable 10 character(alphanumeric) identifier referring to this order
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \DateTime $order_date The date, when this order has been placed
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param \DateTime $last_modified_date Last order update date
     *
     * @return $this
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets position_items
     *
     * @return \EzzeSiftuz\OrdersV4\Model\PositionItem[]
     */
    public function getPositionItems()
    {
        return $this->container['position_items'];
    }

    /**
     * Sets position_items
     *
     * @param \EzzeSiftuz\OrdersV4\Model\PositionItem[] $position_items The physical position items of this order. Multiple position item can refer to the same product
     *
     * @return $this
     */
    public function setPositionItems($position_items)
    {
        $this->container['position_items'] = $position_items;

        return $this;
    }

    /**
     * Gets order_lifecycle_information
     *
     * @return \EzzeSiftuz\OrdersV4\Model\OrderLifecycleInformation
     */
    public function getOrderLifecycleInformation()
    {
        return $this->container['order_lifecycle_information'];
    }

    /**
     * Sets order_lifecycle_information
     *
     * @param \EzzeSiftuz\OrdersV4\Model\OrderLifecycleInformation $order_lifecycle_information order_lifecycle_information
     *
     * @return $this
     */
    public function setOrderLifecycleInformation($order_lifecycle_information)
    {
        $this->container['order_lifecycle_information'] = $order_lifecycle_information;

        return $this;
    }

    /**
     * Gets initial_delivery_fees
     *
     * @return \EzzeSiftuz\OrdersV4\Model\InitialDeliveryFee[]
     */
    public function getInitialDeliveryFees()
    {
        return $this->container['initial_delivery_fees'];
    }

    /**
     * Sets initial_delivery_fees
     *
     * @param \EzzeSiftuz\OrdersV4\Model\InitialDeliveryFee[] $initial_delivery_fees The delivery fees on customer checkout
     *
     * @return $this
     */
    public function setInitialDeliveryFees($initial_delivery_fees)
    {
        $this->container['initial_delivery_fees'] = $initial_delivery_fees;

        return $this;
    }

    /**
     * Gets initial_discounts
     *
     * @return \EzzeSiftuz\OrdersV4\Model\InitialDiscount[]
     */
    public function getInitialDiscounts()
    {
        return $this->container['initial_discounts'];
    }

    /**
     * Sets initial_discounts
     *
     * @param \EzzeSiftuz\OrdersV4\Model\InitialDiscount[] $initial_discounts The initial discounts on customer checkout
     *
     * @return $this
     */
    public function setInitialDiscounts($initial_discounts)
    {
        $this->container['initial_discounts'] = $initial_discounts;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Address
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Address $delivery_address delivery_address
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets invoice_address
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Address
     */
    public function getInvoiceAddress()
    {
        return $this->container['invoice_address'];
    }

    /**
     * Sets invoice_address
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Address $invoice_address invoice_address
     *
     * @return $this
     */
    public function setInvoiceAddress($invoice_address)
    {
        $this->container['invoice_address'] = $invoice_address;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Payment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Payment $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \EzzeSiftuz\OrdersV4\Model\Link[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \EzzeSiftuz\OrdersV4\Model\Link[] $links Order related links like the link to fetch the single partner order
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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
