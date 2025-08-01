<?php
/**
 * LoyaltyStoresCorporationIdOffersGetInner
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Tkhamez\Eve\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EVE Sandbox Ingress (ESI) - tranquility
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2020-01-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Tkhamez\Eve\API\Model;

use \ArrayAccess;
use \Tkhamez\Eve\API\ObjectSerializer;

/**
 * LoyaltyStoresCorporationIdOffersGetInner Class Doc Comment
 *
 * @category Class
 * @package  Tkhamez\Eve\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltyStoresCorporationIdOffersGetInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyStoresCorporationIdOffersGet_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ak_cost' => 'int',
        'isk_cost' => 'int',
        'lp_cost' => 'int',
        'offer_id' => 'int',
        'quantity' => 'int',
        'required_items' => '\Tkhamez\Eve\API\Model\LoyaltyStoresCorporationIdOffersGetInnerRequiredItemsInner[]',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ak_cost' => 'int64',
        'isk_cost' => 'int64',
        'lp_cost' => 'int64',
        'offer_id' => 'int64',
        'quantity' => 'int64',
        'required_items' => null,
        'type_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ak_cost' => false,
        'isk_cost' => false,
        'lp_cost' => false,
        'offer_id' => false,
        'quantity' => false,
        'required_items' => false,
        'type_id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'ak_cost' => 'ak_cost',
        'isk_cost' => 'isk_cost',
        'lp_cost' => 'lp_cost',
        'offer_id' => 'offer_id',
        'quantity' => 'quantity',
        'required_items' => 'required_items',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ak_cost' => 'setAkCost',
        'isk_cost' => 'setIskCost',
        'lp_cost' => 'setLpCost',
        'offer_id' => 'setOfferId',
        'quantity' => 'setQuantity',
        'required_items' => 'setRequiredItems',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ak_cost' => 'getAkCost',
        'isk_cost' => 'getIskCost',
        'lp_cost' => 'getLpCost',
        'offer_id' => 'getOfferId',
        'quantity' => 'getQuantity',
        'required_items' => 'getRequiredItems',
        'type_id' => 'getTypeId'
    ];

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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('ak_cost', $data ?? [], null);
        $this->setIfExists('isk_cost', $data ?? [], null);
        $this->setIfExists('lp_cost', $data ?? [], null);
        $this->setIfExists('offer_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('required_items', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isk_cost'] === null) {
            $invalidProperties[] = "'isk_cost' can't be null";
        }
        if ($this->container['lp_cost'] === null) {
            $invalidProperties[] = "'lp_cost' can't be null";
        }
        if ($this->container['offer_id'] === null) {
            $invalidProperties[] = "'offer_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['required_items'] === null) {
            $invalidProperties[] = "'required_items' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
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
     * Gets ak_cost
     *
     * @return int|null
     */
    public function getAkCost()
    {
        return $this->container['ak_cost'];
    }

    /**
     * Sets ak_cost
     *
     * @param int|null $ak_cost Analysis kredit cost
     *
     * @return self
     */
    public function setAkCost($ak_cost)
    {
        if (is_null($ak_cost)) {
            throw new \InvalidArgumentException('non-nullable ak_cost cannot be null');
        }
        $this->container['ak_cost'] = $ak_cost;

        return $this;
    }

    /**
     * Gets isk_cost
     *
     * @return int
     */
    public function getIskCost()
    {
        return $this->container['isk_cost'];
    }

    /**
     * Sets isk_cost
     *
     * @param int $isk_cost isk_cost
     *
     * @return self
     */
    public function setIskCost($isk_cost)
    {
        if (is_null($isk_cost)) {
            throw new \InvalidArgumentException('non-nullable isk_cost cannot be null');
        }
        $this->container['isk_cost'] = $isk_cost;

        return $this;
    }

    /**
     * Gets lp_cost
     *
     * @return int
     */
    public function getLpCost()
    {
        return $this->container['lp_cost'];
    }

    /**
     * Sets lp_cost
     *
     * @param int $lp_cost lp_cost
     *
     * @return self
     */
    public function setLpCost($lp_cost)
    {
        if (is_null($lp_cost)) {
            throw new \InvalidArgumentException('non-nullable lp_cost cannot be null');
        }
        $this->container['lp_cost'] = $lp_cost;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param int $offer_id offer_id
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        if (is_null($offer_id)) {
            throw new \InvalidArgumentException('non-nullable offer_id cannot be null');
        }
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets required_items
     *
     * @return \Tkhamez\Eve\API\Model\LoyaltyStoresCorporationIdOffersGetInnerRequiredItemsInner[]
     */
    public function getRequiredItems()
    {
        return $this->container['required_items'];
    }

    /**
     * Sets required_items
     *
     * @param \Tkhamez\Eve\API\Model\LoyaltyStoresCorporationIdOffersGetInnerRequiredItemsInner[] $required_items required_items
     *
     * @return self
     */
    public function setRequiredItems($required_items)
    {
        if (is_null($required_items)) {
            throw new \InvalidArgumentException('non-nullable required_items cannot be null');
        }
        $this->container['required_items'] = $required_items;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id type_id
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        if (is_null($type_id)) {
            throw new \InvalidArgumentException('non-nullable type_id cannot be null');
        }
        $this->container['type_id'] = $type_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


