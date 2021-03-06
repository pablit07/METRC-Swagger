<?php
/**
 * CreatePlanting
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
 * CreatePlanting Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreatePlanting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreatePlanting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'package_label' => 'string',
'package_adjustment_amount' => 'float',
'package_adjustment_unit_of_measure_name' => 'string',
'plant_batch_name' => 'string',
'plant_batch_type' => 'string',
'plant_count' => 'int',
'room_name' => 'string',
'strain_name' => 'string',
'patient_license_number' => 'string',
'planted_date' => 'string',
'unpackaged_date' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'package_label' => null,
'package_adjustment_amount' => null,
'package_adjustment_unit_of_measure_name' => null,
'plant_batch_name' => null,
'plant_batch_type' => null,
'plant_count' => null,
'room_name' => null,
'strain_name' => null,
'patient_license_number' => null,
'planted_date' => null,
'unpackaged_date' => null    ];

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
        'package_label' => 'PackageLabel',
'package_adjustment_amount' => 'PackageAdjustmentAmount',
'package_adjustment_unit_of_measure_name' => 'PackageAdjustmentUnitOfMeasureName',
'plant_batch_name' => 'PlantBatchName',
'plant_batch_type' => 'PlantBatchType',
'plant_count' => 'PlantCount',
'room_name' => 'RoomName',
'strain_name' => 'StrainName',
'patient_license_number' => 'PatientLicenseNumber',
'planted_date' => 'PlantedDate',
'unpackaged_date' => 'UnpackagedDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_label' => 'setPackageLabel',
'package_adjustment_amount' => 'setPackageAdjustmentAmount',
'package_adjustment_unit_of_measure_name' => 'setPackageAdjustmentUnitOfMeasureName',
'plant_batch_name' => 'setPlantBatchName',
'plant_batch_type' => 'setPlantBatchType',
'plant_count' => 'setPlantCount',
'room_name' => 'setRoomName',
'strain_name' => 'setStrainName',
'patient_license_number' => 'setPatientLicenseNumber',
'planted_date' => 'setPlantedDate',
'unpackaged_date' => 'setUnpackagedDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_label' => 'getPackageLabel',
'package_adjustment_amount' => 'getPackageAdjustmentAmount',
'package_adjustment_unit_of_measure_name' => 'getPackageAdjustmentUnitOfMeasureName',
'plant_batch_name' => 'getPlantBatchName',
'plant_batch_type' => 'getPlantBatchType',
'plant_count' => 'getPlantCount',
'room_name' => 'getRoomName',
'strain_name' => 'getStrainName',
'patient_license_number' => 'getPatientLicenseNumber',
'planted_date' => 'getPlantedDate',
'unpackaged_date' => 'getUnpackagedDate'    ];

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
        $this->container['package_label'] = isset($data['package_label']) ? $data['package_label'] : null;
        $this->container['package_adjustment_amount'] = isset($data['package_adjustment_amount']) ? $data['package_adjustment_amount'] : null;
        $this->container['package_adjustment_unit_of_measure_name'] = isset($data['package_adjustment_unit_of_measure_name']) ? $data['package_adjustment_unit_of_measure_name'] : null;
        $this->container['plant_batch_name'] = isset($data['plant_batch_name']) ? $data['plant_batch_name'] : null;
        $this->container['plant_batch_type'] = isset($data['plant_batch_type']) ? $data['plant_batch_type'] : null;
        $this->container['plant_count'] = isset($data['plant_count']) ? $data['plant_count'] : null;
        $this->container['room_name'] = isset($data['room_name']) ? $data['room_name'] : null;
        $this->container['strain_name'] = isset($data['strain_name']) ? $data['strain_name'] : null;
        $this->container['patient_license_number'] = isset($data['patient_license_number']) ? $data['patient_license_number'] : null;
        $this->container['planted_date'] = isset($data['planted_date']) ? $data['planted_date'] : null;
        $this->container['unpackaged_date'] = isset($data['unpackaged_date']) ? $data['unpackaged_date'] : null;
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
     * Gets package_label
     *
     * @return string
     */
    public function getPackageLabel()
    {
        return $this->container['package_label'];
    }

    /**
     * Sets package_label
     *
     * @param string $package_label package_label
     *
     * @return $this
     */
    public function setPackageLabel($package_label)
    {
        $this->container['package_label'] = $package_label;

        return $this;
    }

    /**
     * Gets package_adjustment_amount
     *
     * @return float
     */
    public function getPackageAdjustmentAmount()
    {
        return $this->container['package_adjustment_amount'];
    }

    /**
     * Sets package_adjustment_amount
     *
     * @param float $package_adjustment_amount package_adjustment_amount
     *
     * @return $this
     */
    public function setPackageAdjustmentAmount($package_adjustment_amount)
    {
        $this->container['package_adjustment_amount'] = $package_adjustment_amount;

        return $this;
    }

    /**
     * Gets package_adjustment_unit_of_measure_name
     *
     * @return string
     */
    public function getPackageAdjustmentUnitOfMeasureName()
    {
        return $this->container['package_adjustment_unit_of_measure_name'];
    }

    /**
     * Sets package_adjustment_unit_of_measure_name
     *
     * @param string $package_adjustment_unit_of_measure_name package_adjustment_unit_of_measure_name
     *
     * @return $this
     */
    public function setPackageAdjustmentUnitOfMeasureName($package_adjustment_unit_of_measure_name)
    {
        $this->container['package_adjustment_unit_of_measure_name'] = $package_adjustment_unit_of_measure_name;

        return $this;
    }

    /**
     * Gets plant_batch_name
     *
     * @return string
     */
    public function getPlantBatchName()
    {
        return $this->container['plant_batch_name'];
    }

    /**
     * Sets plant_batch_name
     *
     * @param string $plant_batch_name plant_batch_name
     *
     * @return $this
     */
    public function setPlantBatchName($plant_batch_name)
    {
        $this->container['plant_batch_name'] = $plant_batch_name;

        return $this;
    }

    /**
     * Gets plant_batch_type
     *
     * @return string
     */
    public function getPlantBatchType()
    {
        return $this->container['plant_batch_type'];
    }

    /**
     * Sets plant_batch_type
     *
     * @param string $plant_batch_type plant_batch_type
     *
     * @return $this
     */
    public function setPlantBatchType($plant_batch_type)
    {
        $this->container['plant_batch_type'] = $plant_batch_type;

        return $this;
    }

    /**
     * Gets plant_count
     *
     * @return int
     */
    public function getPlantCount()
    {
        return $this->container['plant_count'];
    }

    /**
     * Sets plant_count
     *
     * @param int $plant_count plant_count
     *
     * @return $this
     */
    public function setPlantCount($plant_count)
    {
        $this->container['plant_count'] = $plant_count;

        return $this;
    }

    /**
     * Gets room_name
     *
     * @return string
     */
    public function getRoomName()
    {
        return $this->container['room_name'];
    }

    /**
     * Sets room_name
     *
     * @param string $room_name room_name
     *
     * @return $this
     */
    public function setRoomName($room_name)
    {
        $this->container['room_name'] = $room_name;

        return $this;
    }

    /**
     * Gets strain_name
     *
     * @return string
     */
    public function getStrainName()
    {
        return $this->container['strain_name'];
    }

    /**
     * Sets strain_name
     *
     * @param string $strain_name strain_name
     *
     * @return $this
     */
    public function setStrainName($strain_name)
    {
        $this->container['strain_name'] = $strain_name;

        return $this;
    }

    /**
     * Gets patient_license_number
     *
     * @return string
     */
    public function getPatientLicenseNumber()
    {
        return $this->container['patient_license_number'];
    }

    /**
     * Sets patient_license_number
     *
     * @param string $patient_license_number patient_license_number
     *
     * @return $this
     */
    public function setPatientLicenseNumber($patient_license_number)
    {
        $this->container['patient_license_number'] = $patient_license_number;

        return $this;
    }

    /**
     * Gets planted_date
     *
     * @return string
     */
    public function getPlantedDate()
    {
        return $this->container['planted_date'];
    }

    /**
     * Sets planted_date
     *
     * @param string $planted_date planted_date
     *
     * @return $this
     */
    public function setPlantedDate($planted_date)
    {
        $this->container['planted_date'] = $planted_date;

        return $this;
    }

    /**
     * Gets unpackaged_date
     *
     * @return string
     */
    public function getUnpackagedDate()
    {
        return $this->container['unpackaged_date'];
    }

    /**
     * Sets unpackaged_date
     *
     * @param string $unpackaged_date unpackaged_date
     *
     * @return $this
     */
    public function setUnpackagedDate($unpackaged_date)
    {
        $this->container['unpackaged_date'] = $unpackaged_date;

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
