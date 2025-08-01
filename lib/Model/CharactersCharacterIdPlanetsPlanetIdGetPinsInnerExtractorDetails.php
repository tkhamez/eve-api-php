<?php
/**
 * CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetails
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
 * CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetails Class Doc Comment
 *
 * @category Class
 * @package  Tkhamez\Eve\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CharactersCharacterIdPlanetsPlanetIdGet_pins_inner_extractor_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cycle_time' => 'int',
        'head_radius' => 'float',
        'heads' => '\Tkhamez\Eve\API\Model\CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetailsHeadsInner[]',
        'product_type_id' => 'int',
        'qty_per_cycle' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cycle_time' => 'int64',
        'head_radius' => 'double',
        'heads' => null,
        'product_type_id' => 'int64',
        'qty_per_cycle' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cycle_time' => false,
        'head_radius' => false,
        'heads' => false,
        'product_type_id' => false,
        'qty_per_cycle' => false
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
        'cycle_time' => 'cycle_time',
        'head_radius' => 'head_radius',
        'heads' => 'heads',
        'product_type_id' => 'product_type_id',
        'qty_per_cycle' => 'qty_per_cycle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cycle_time' => 'setCycleTime',
        'head_radius' => 'setHeadRadius',
        'heads' => 'setHeads',
        'product_type_id' => 'setProductTypeId',
        'qty_per_cycle' => 'setQtyPerCycle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cycle_time' => 'getCycleTime',
        'head_radius' => 'getHeadRadius',
        'heads' => 'getHeads',
        'product_type_id' => 'getProductTypeId',
        'qty_per_cycle' => 'getQtyPerCycle'
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
        $this->setIfExists('cycle_time', $data ?? [], null);
        $this->setIfExists('head_radius', $data ?? [], null);
        $this->setIfExists('heads', $data ?? [], null);
        $this->setIfExists('product_type_id', $data ?? [], null);
        $this->setIfExists('qty_per_cycle', $data ?? [], null);
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

        if ($this->container['heads'] === null) {
            $invalidProperties[] = "'heads' can't be null";
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
     * Gets cycle_time
     *
     * @return int|null
     */
    public function getCycleTime()
    {
        return $this->container['cycle_time'];
    }

    /**
     * Sets cycle_time
     *
     * @param int|null $cycle_time in seconds
     *
     * @return self
     */
    public function setCycleTime($cycle_time)
    {
        if (is_null($cycle_time)) {
            throw new \InvalidArgumentException('non-nullable cycle_time cannot be null');
        }
        $this->container['cycle_time'] = $cycle_time;

        return $this;
    }

    /**
     * Gets head_radius
     *
     * @return float|null
     */
    public function getHeadRadius()
    {
        return $this->container['head_radius'];
    }

    /**
     * Sets head_radius
     *
     * @param float|null $head_radius head_radius
     *
     * @return self
     */
    public function setHeadRadius($head_radius)
    {
        if (is_null($head_radius)) {
            throw new \InvalidArgumentException('non-nullable head_radius cannot be null');
        }
        $this->container['head_radius'] = $head_radius;

        return $this;
    }

    /**
     * Gets heads
     *
     * @return \Tkhamez\Eve\API\Model\CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetailsHeadsInner[]
     */
    public function getHeads()
    {
        return $this->container['heads'];
    }

    /**
     * Sets heads
     *
     * @param \Tkhamez\Eve\API\Model\CharactersCharacterIdPlanetsPlanetIdGetPinsInnerExtractorDetailsHeadsInner[] $heads heads
     *
     * @return self
     */
    public function setHeads($heads)
    {
        if (is_null($heads)) {
            throw new \InvalidArgumentException('non-nullable heads cannot be null');
        }
        $this->container['heads'] = $heads;

        return $this;
    }

    /**
     * Gets product_type_id
     *
     * @return int|null
     */
    public function getProductTypeId()
    {
        return $this->container['product_type_id'];
    }

    /**
     * Sets product_type_id
     *
     * @param int|null $product_type_id product_type_id
     *
     * @return self
     */
    public function setProductTypeId($product_type_id)
    {
        if (is_null($product_type_id)) {
            throw new \InvalidArgumentException('non-nullable product_type_id cannot be null');
        }
        $this->container['product_type_id'] = $product_type_id;

        return $this;
    }

    /**
     * Gets qty_per_cycle
     *
     * @return int|null
     */
    public function getQtyPerCycle()
    {
        return $this->container['qty_per_cycle'];
    }

    /**
     * Sets qty_per_cycle
     *
     * @param int|null $qty_per_cycle qty_per_cycle
     *
     * @return self
     */
    public function setQtyPerCycle($qty_per_cycle)
    {
        if (is_null($qty_per_cycle)) {
            throw new \InvalidArgumentException('non-nullable qty_per_cycle cannot be null');
        }
        $this->container['qty_per_cycle'] = $qty_per_cycle;

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


