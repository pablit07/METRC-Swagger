<?php
/**
 * Patient
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
 * Patient Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Patient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Patient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'patient_id' => 'int',
'license_number' => 'string',
'registration_date' => 'string',
'license_effective_start_date' => 'string',
'license_effective_end_date' => 'string',
'recommended_plants' => 'int',
'recommended_smokable_quantity' => 'float',
'other_facilities_count' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'patient_id' => null,
'license_number' => null,
'registration_date' => null,
'license_effective_start_date' => null,
'license_effective_end_date' => null,
'recommended_plants' => null,
'recommended_smokable_quantity' => null,
'other_facilities_count' => null    ];

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
        'patient_id' => 'PatientId',
'license_number' => 'LicenseNumber',
'registration_date' => 'RegistrationDate',
'license_effective_start_date' => 'LicenseEffectiveStartDate',
'license_effective_end_date' => 'LicenseEffectiveEndDate',
'recommended_plants' => 'RecommendedPlants',
'recommended_smokable_quantity' => 'RecommendedSmokableQuantity',
'other_facilities_count' => 'OtherFacilitiesCount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'patient_id' => 'setPatientId',
'license_number' => 'setLicenseNumber',
'registration_date' => 'setRegistrationDate',
'license_effective_start_date' => 'setLicenseEffectiveStartDate',
'license_effective_end_date' => 'setLicenseEffectiveEndDate',
'recommended_plants' => 'setRecommendedPlants',
'recommended_smokable_quantity' => 'setRecommendedSmokableQuantity',
'other_facilities_count' => 'setOtherFacilitiesCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'patient_id' => 'getPatientId',
'license_number' => 'getLicenseNumber',
'registration_date' => 'getRegistrationDate',
'license_effective_start_date' => 'getLicenseEffectiveStartDate',
'license_effective_end_date' => 'getLicenseEffectiveEndDate',
'recommended_plants' => 'getRecommendedPlants',
'recommended_smokable_quantity' => 'getRecommendedSmokableQuantity',
'other_facilities_count' => 'getOtherFacilitiesCount'    ];

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
        $this->container['patient_id'] = isset($data['patient_id']) ? $data['patient_id'] : null;
        $this->container['license_number'] = isset($data['license_number']) ? $data['license_number'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['license_effective_start_date'] = isset($data['license_effective_start_date']) ? $data['license_effective_start_date'] : null;
        $this->container['license_effective_end_date'] = isset($data['license_effective_end_date']) ? $data['license_effective_end_date'] : null;
        $this->container['recommended_plants'] = isset($data['recommended_plants']) ? $data['recommended_plants'] : null;
        $this->container['recommended_smokable_quantity'] = isset($data['recommended_smokable_quantity']) ? $data['recommended_smokable_quantity'] : null;
        $this->container['other_facilities_count'] = isset($data['other_facilities_count']) ? $data['other_facilities_count'] : null;
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
     * Gets patient_id
     *
     * @return int
     */
    public function getPatientId()
    {
        return $this->container['patient_id'];
    }

    /**
     * Sets patient_id
     *
     * @param int $patient_id patient_id
     *
     * @return $this
     */
    public function setPatientId($patient_id)
    {
        $this->container['patient_id'] = $patient_id;

        return $this;
    }

    /**
     * Gets license_number
     *
     * @return string
     */
    public function getLicenseNumber()
    {
        return $this->container['license_number'];
    }

    /**
     * Sets license_number
     *
     * @param string $license_number license_number
     *
     * @return $this
     */
    public function setLicenseNumber($license_number)
    {
        $this->container['license_number'] = $license_number;

        return $this;
    }

    /**
     * Gets registration_date
     *
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }

    /**
     * Sets registration_date
     *
     * @param string $registration_date registration_date
     *
     * @return $this
     */
    public function setRegistrationDate($registration_date)
    {
        $this->container['registration_date'] = $registration_date;

        return $this;
    }

    /**
     * Gets license_effective_start_date
     *
     * @return string
     */
    public function getLicenseEffectiveStartDate()
    {
        return $this->container['license_effective_start_date'];
    }

    /**
     * Sets license_effective_start_date
     *
     * @param string $license_effective_start_date license_effective_start_date
     *
     * @return $this
     */
    public function setLicenseEffectiveStartDate($license_effective_start_date)
    {
        $this->container['license_effective_start_date'] = $license_effective_start_date;

        return $this;
    }

    /**
     * Gets license_effective_end_date
     *
     * @return string
     */
    public function getLicenseEffectiveEndDate()
    {
        return $this->container['license_effective_end_date'];
    }

    /**
     * Sets license_effective_end_date
     *
     * @param string $license_effective_end_date license_effective_end_date
     *
     * @return $this
     */
    public function setLicenseEffectiveEndDate($license_effective_end_date)
    {
        $this->container['license_effective_end_date'] = $license_effective_end_date;

        return $this;
    }

    /**
     * Gets recommended_plants
     *
     * @return int
     */
    public function getRecommendedPlants()
    {
        return $this->container['recommended_plants'];
    }

    /**
     * Sets recommended_plants
     *
     * @param int $recommended_plants recommended_plants
     *
     * @return $this
     */
    public function setRecommendedPlants($recommended_plants)
    {
        $this->container['recommended_plants'] = $recommended_plants;

        return $this;
    }

    /**
     * Gets recommended_smokable_quantity
     *
     * @return float
     */
    public function getRecommendedSmokableQuantity()
    {
        return $this->container['recommended_smokable_quantity'];
    }

    /**
     * Sets recommended_smokable_quantity
     *
     * @param float $recommended_smokable_quantity recommended_smokable_quantity
     *
     * @return $this
     */
    public function setRecommendedSmokableQuantity($recommended_smokable_quantity)
    {
        $this->container['recommended_smokable_quantity'] = $recommended_smokable_quantity;

        return $this;
    }

    /**
     * Gets other_facilities_count
     *
     * @return int
     */
    public function getOtherFacilitiesCount()
    {
        return $this->container['other_facilities_count'];
    }

    /**
     * Sets other_facilities_count
     *
     * @param int $other_facilities_count other_facilities_count
     *
     * @return $this
     */
    public function setOtherFacilitiesCount($other_facilities_count)
    {
        $this->container['other_facilities_count'] = $other_facilities_count;

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