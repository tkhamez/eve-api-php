<?php
/**
 * UniverseIdsPost
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
 * UniverseIdsPost Class Doc Comment
 *
 * @category Class
 * @package  Tkhamez\Eve\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UniverseIdsPost implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UniverseIdsPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agents' => '\Tkhamez\Eve\API\Model\UniverseIdsPostAgentsInner[]',
        'alliances' => '\Tkhamez\Eve\API\Model\UniverseIdsPostAlliancesInner[]',
        'characters' => '\Tkhamez\Eve\API\Model\UniverseIdsPostCharactersInner[]',
        'constellations' => '\Tkhamez\Eve\API\Model\UniverseIdsPostConstellationsInner[]',
        'corporations' => '\Tkhamez\Eve\API\Model\UniverseIdsPostCorporationsInner[]',
        'factions' => '\Tkhamez\Eve\API\Model\UniverseIdsPostFactionsInner[]',
        'inventory_types' => '\Tkhamez\Eve\API\Model\UniverseIdsPostInventoryTypesInner[]',
        'regions' => '\Tkhamez\Eve\API\Model\UniverseIdsPostRegionsInner[]',
        'stations' => '\Tkhamez\Eve\API\Model\UniverseIdsPostStationsInner[]',
        'systems' => '\Tkhamez\Eve\API\Model\UniverseIdsPostSystemsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agents' => null,
        'alliances' => null,
        'characters' => null,
        'constellations' => null,
        'corporations' => null,
        'factions' => null,
        'inventory_types' => null,
        'regions' => null,
        'stations' => null,
        'systems' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'agents' => false,
        'alliances' => false,
        'characters' => false,
        'constellations' => false,
        'corporations' => false,
        'factions' => false,
        'inventory_types' => false,
        'regions' => false,
        'stations' => false,
        'systems' => false
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
        'agents' => 'agents',
        'alliances' => 'alliances',
        'characters' => 'characters',
        'constellations' => 'constellations',
        'corporations' => 'corporations',
        'factions' => 'factions',
        'inventory_types' => 'inventory_types',
        'regions' => 'regions',
        'stations' => 'stations',
        'systems' => 'systems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agents' => 'setAgents',
        'alliances' => 'setAlliances',
        'characters' => 'setCharacters',
        'constellations' => 'setConstellations',
        'corporations' => 'setCorporations',
        'factions' => 'setFactions',
        'inventory_types' => 'setInventoryTypes',
        'regions' => 'setRegions',
        'stations' => 'setStations',
        'systems' => 'setSystems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agents' => 'getAgents',
        'alliances' => 'getAlliances',
        'characters' => 'getCharacters',
        'constellations' => 'getConstellations',
        'corporations' => 'getCorporations',
        'factions' => 'getFactions',
        'inventory_types' => 'getInventoryTypes',
        'regions' => 'getRegions',
        'stations' => 'getStations',
        'systems' => 'getSystems'
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
        $this->setIfExists('agents', $data ?? [], null);
        $this->setIfExists('alliances', $data ?? [], null);
        $this->setIfExists('characters', $data ?? [], null);
        $this->setIfExists('constellations', $data ?? [], null);
        $this->setIfExists('corporations', $data ?? [], null);
        $this->setIfExists('factions', $data ?? [], null);
        $this->setIfExists('inventory_types', $data ?? [], null);
        $this->setIfExists('regions', $data ?? [], null);
        $this->setIfExists('stations', $data ?? [], null);
        $this->setIfExists('systems', $data ?? [], null);
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
     * Gets agents
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostAgentsInner[]|null
     */
    public function getAgents()
    {
        return $this->container['agents'];
    }

    /**
     * Sets agents
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostAgentsInner[]|null $agents agents
     *
     * @return self
     */
    public function setAgents($agents)
    {
        if (is_null($agents)) {
            throw new \InvalidArgumentException('non-nullable agents cannot be null');
        }
        $this->container['agents'] = $agents;

        return $this;
    }

    /**
     * Gets alliances
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostAlliancesInner[]|null
     */
    public function getAlliances()
    {
        return $this->container['alliances'];
    }

    /**
     * Sets alliances
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostAlliancesInner[]|null $alliances alliances
     *
     * @return self
     */
    public function setAlliances($alliances)
    {
        if (is_null($alliances)) {
            throw new \InvalidArgumentException('non-nullable alliances cannot be null');
        }
        $this->container['alliances'] = $alliances;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostCharactersInner[]|null
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostCharactersInner[]|null $characters characters
     *
     * @return self
     */
    public function setCharacters($characters)
    {
        if (is_null($characters)) {
            throw new \InvalidArgumentException('non-nullable characters cannot be null');
        }
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets constellations
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostConstellationsInner[]|null
     */
    public function getConstellations()
    {
        return $this->container['constellations'];
    }

    /**
     * Sets constellations
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostConstellationsInner[]|null $constellations constellations
     *
     * @return self
     */
    public function setConstellations($constellations)
    {
        if (is_null($constellations)) {
            throw new \InvalidArgumentException('non-nullable constellations cannot be null');
        }
        $this->container['constellations'] = $constellations;

        return $this;
    }

    /**
     * Gets corporations
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostCorporationsInner[]|null
     */
    public function getCorporations()
    {
        return $this->container['corporations'];
    }

    /**
     * Sets corporations
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostCorporationsInner[]|null $corporations corporations
     *
     * @return self
     */
    public function setCorporations($corporations)
    {
        if (is_null($corporations)) {
            throw new \InvalidArgumentException('non-nullable corporations cannot be null');
        }
        $this->container['corporations'] = $corporations;

        return $this;
    }

    /**
     * Gets factions
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostFactionsInner[]|null
     */
    public function getFactions()
    {
        return $this->container['factions'];
    }

    /**
     * Sets factions
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostFactionsInner[]|null $factions factions
     *
     * @return self
     */
    public function setFactions($factions)
    {
        if (is_null($factions)) {
            throw new \InvalidArgumentException('non-nullable factions cannot be null');
        }
        $this->container['factions'] = $factions;

        return $this;
    }

    /**
     * Gets inventory_types
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostInventoryTypesInner[]|null
     */
    public function getInventoryTypes()
    {
        return $this->container['inventory_types'];
    }

    /**
     * Sets inventory_types
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostInventoryTypesInner[]|null $inventory_types inventory_types
     *
     * @return self
     */
    public function setInventoryTypes($inventory_types)
    {
        if (is_null($inventory_types)) {
            throw new \InvalidArgumentException('non-nullable inventory_types cannot be null');
        }
        $this->container['inventory_types'] = $inventory_types;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostRegionsInner[]|null
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostRegionsInner[]|null $regions regions
     *
     * @return self
     */
    public function setRegions($regions)
    {
        if (is_null($regions)) {
            throw new \InvalidArgumentException('non-nullable regions cannot be null');
        }
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets stations
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostStationsInner[]|null
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostStationsInner[]|null $stations stations
     *
     * @return self
     */
    public function setStations($stations)
    {
        if (is_null($stations)) {
            throw new \InvalidArgumentException('non-nullable stations cannot be null');
        }
        $this->container['stations'] = $stations;

        return $this;
    }

    /**
     * Gets systems
     *
     * @return \Tkhamez\Eve\API\Model\UniverseIdsPostSystemsInner[]|null
     */
    public function getSystems()
    {
        return $this->container['systems'];
    }

    /**
     * Sets systems
     *
     * @param \Tkhamez\Eve\API\Model\UniverseIdsPostSystemsInner[]|null $systems systems
     *
     * @return self
     */
    public function setSystems($systems)
    {
        if (is_null($systems)) {
            throw new \InvalidArgumentException('non-nullable systems cannot be null');
        }
        $this->container['systems'] = $systems;

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


