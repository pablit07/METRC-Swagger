<?php
/**
 * PlantsChangeGrowthPhase
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * METRC API
 *
 * Metrc Web API Documentation
 *
 * OpenAPI spec version: 0.2
 * Contact: paul.kohlhoff@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
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
 * PlantsChangeGrowthPhase Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlantsChangeGrowthPhase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlantsChangeGrowthPhase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'label' => 'string',
'new_tag' => 'string',
'growth_phase' => 'string',
'new_room' => 'string',
'growth_date' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'label' => null,
'new_tag' => null,
'growth_phase' => null,
'new_room' => null,
'growth_date' => null    ];

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
        'id' => 'Id',
'label' => 'Label',
'new_tag' => 'NewTag',
'growth_phase' => 'GrowthPhase',
'new_room' => 'NewRoom',
'growth_date' => 'GrowthDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'label' => 'setLabel',
'new_tag' => 'setNewTag',
'growth_phase' => 'setGrowthPhase',
'new_room' => 'setNewRoom',
'growth_date' => 'setGrowthDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'label' => 'getLabel',
'new_tag' => 'getNewTag',
'growth_phase' => 'getGrowthPhase',
'new_room' => 'getNewRoom',
'growth_date' => 'getGrowthDate'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['new_tag'] = isset($data['new_tag']) ? $data['new_tag'] : null;
        $this->container['growth_phase'] = isset($data['growth_phase']) ? $data['growth_phase'] : null;
        $this->container['new_room'] = isset($data['new_room']) ? $data['new_room'] : null;
        $this->container['growth_date'] = isset($data['growth_date']) ? $data['growth_date'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets new_tag
     *
     * @return string
     */
    public function getNewTag()
    {
        return $this->container['new_tag'];
    }

    /**
     * Sets new_tag
     *
     * @param string $new_tag new_tag
     *
     * @return $this
     */
    public function setNewTag($new_tag)
    {
        $this->container['new_tag'] = $new_tag;

        return $this;
    }

    /**
     * Gets growth_phase
     *
     * @return string
     */
    public function getGrowthPhase()
    {
        return $this->container['growth_phase'];
    }

    /**
     * Sets growth_phase
     *
     * @param string $growth_phase growth_phase
     *
     * @return $this
     */
    public function setGrowthPhase($growth_phase)
    {
        $this->container['growth_phase'] = $growth_phase;

        return $this;
    }

    /**
     * Gets new_room
     *
     * @return string
     */
    public function getNewRoom()
    {
        return $this->container['new_room'];
    }

    /**
     * Sets new_room
     *
     * @param string $new_room new_room
     *
     * @return $this
     */
    public function setNewRoom($new_room)
    {
        $this->container['new_room'] = $new_room;

        return $this;
    }

    /**
     * Gets growth_date
     *
     * @return string
     */
    public function getGrowthDate()
    {
        return $this->container['growth_date'];
    }

    /**
     * Sets growth_date
     *
     * @param string $growth_date growth_date
     *
     * @return $this
     */
    public function setGrowthDate($growth_date)
    {
        $this->container['growth_date'] = $growth_date;

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
