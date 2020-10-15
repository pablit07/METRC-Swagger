<?php
/**
 * HarvestPackageIngredients
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
 * Swagger Codegen version: 2.4.15
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
 * HarvestPackageIngredients Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HarvestPackageIngredients implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HarvestPackage_Ingredients';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'harvest_id' => 'int',
        'harvest_name' => 'string',
        'weight' => 'float',
        'unit_of_weight' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'harvest_id' => null,
        'harvest_name' => null,
        'weight' => null,
        'unit_of_weight' => null
    ];

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
        'harvest_id' => 'HarvestId',
        'harvest_name' => 'HarvestName',
        'weight' => 'Weight',
        'unit_of_weight' => 'UnitOfWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'harvest_id' => 'setHarvestId',
        'harvest_name' => 'setHarvestName',
        'weight' => 'setWeight',
        'unit_of_weight' => 'setUnitOfWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'harvest_id' => 'getHarvestId',
        'harvest_name' => 'getHarvestName',
        'weight' => 'getWeight',
        'unit_of_weight' => 'getUnitOfWeight'
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
        $this->container['harvest_id'] = isset($data['harvest_id']) ? $data['harvest_id'] : null;
        $this->container['harvest_name'] = isset($data['harvest_name']) ? $data['harvest_name'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['unit_of_weight'] = isset($data['unit_of_weight']) ? $data['unit_of_weight'] : null;
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
     * Gets harvest_id
     *
     * @return int
     */
    public function getHarvestId()
    {
        return $this->container['harvest_id'];
    }

    /**
     * Sets harvest_id
     *
     * @param int $harvest_id harvest_id
     *
     * @return $this
     */
    public function setHarvestId($harvest_id)
    {
        $this->container['harvest_id'] = $harvest_id;

        return $this;
    }

    /**
     * Gets harvest_name
     *
     * @return string
     */
    public function getHarvestName()
    {
        return $this->container['harvest_name'];
    }

    /**
     * Sets harvest_name
     *
     * @param string $harvest_name harvest_name
     *
     * @return $this
     */
    public function setHarvestName($harvest_name)
    {
        $this->container['harvest_name'] = $harvest_name;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets unit_of_weight
     *
     * @return string
     */
    public function getUnitOfWeight()
    {
        return $this->container['unit_of_weight'];
    }

    /**
     * Sets unit_of_weight
     *
     * @param string $unit_of_weight unit_of_weight
     *
     * @return $this
     */
    public function setUnitOfWeight($unit_of_weight)
    {
        $this->container['unit_of_weight'] = $unit_of_weight;

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


