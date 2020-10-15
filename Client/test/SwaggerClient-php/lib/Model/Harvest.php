<?php
/**
 * Harvest
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
 * Harvest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Harvest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Harvest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'harvest_type' => 'string',
'source_strain_count' => 'string',
'source_strain_names' => 'string',
'strains' => 'string[]',
'drying_room_id' => 'int',
'drying_room_name' => 'string',
'patient_license_number' => 'string',
'current_weight' => 'float',
'total_waste_weight' => 'float',
'plant_count' => 'int',
'total_wet_weight' => 'float',
'total_restored_weight' => 'float',
'package_count' => 'int',
'total_packaged_weight' => 'float',
'unit_of_weight_name' => 'string',
'lab_testing_state' => 'string',
'lab_testing_state_date' => '\DateTime',
'is_on_hold' => 'bool',
'harvest_start_date' => '\DateTime',
'finished_date' => '\DateTime',
'archived_date' => '\DateTime',
'last_modified' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'harvest_type' => null,
'source_strain_count' => null,
'source_strain_names' => null,
'strains' => null,
'drying_room_id' => null,
'drying_room_name' => null,
'patient_license_number' => null,
'current_weight' => null,
'total_waste_weight' => null,
'plant_count' => null,
'total_wet_weight' => null,
'total_restored_weight' => null,
'package_count' => null,
'total_packaged_weight' => null,
'unit_of_weight_name' => null,
'lab_testing_state' => null,
'lab_testing_state_date' => 'date',
'is_on_hold' => null,
'harvest_start_date' => 'date',
'finished_date' => 'date',
'archived_date' => 'date',
'last_modified' => 'date'    ];

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
'name' => 'Name',
'harvest_type' => 'HarvestType',
'source_strain_count' => 'SourceStrainCount',
'source_strain_names' => 'SourceStrainNames',
'strains' => 'Strains',
'drying_room_id' => 'DryingRoomId',
'drying_room_name' => 'DryingRoomName',
'patient_license_number' => 'PatientLicenseNumber',
'current_weight' => 'CurrentWeight',
'total_waste_weight' => 'TotalWasteWeight',
'plant_count' => 'PlantCount',
'total_wet_weight' => 'TotalWetWeight',
'total_restored_weight' => 'TotalRestoredWeight',
'package_count' => 'PackageCount',
'total_packaged_weight' => 'TotalPackagedWeight',
'unit_of_weight_name' => 'UnitOfWeightName',
'lab_testing_state' => 'LabTestingState',
'lab_testing_state_date' => 'LabTestingStateDate',
'is_on_hold' => 'IsOnHold',
'harvest_start_date' => 'HarvestStartDate',
'finished_date' => 'FinishedDate',
'archived_date' => 'ArchivedDate',
'last_modified' => 'LastModified'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'harvest_type' => 'setHarvestType',
'source_strain_count' => 'setSourceStrainCount',
'source_strain_names' => 'setSourceStrainNames',
'strains' => 'setStrains',
'drying_room_id' => 'setDryingRoomId',
'drying_room_name' => 'setDryingRoomName',
'patient_license_number' => 'setPatientLicenseNumber',
'current_weight' => 'setCurrentWeight',
'total_waste_weight' => 'setTotalWasteWeight',
'plant_count' => 'setPlantCount',
'total_wet_weight' => 'setTotalWetWeight',
'total_restored_weight' => 'setTotalRestoredWeight',
'package_count' => 'setPackageCount',
'total_packaged_weight' => 'setTotalPackagedWeight',
'unit_of_weight_name' => 'setUnitOfWeightName',
'lab_testing_state' => 'setLabTestingState',
'lab_testing_state_date' => 'setLabTestingStateDate',
'is_on_hold' => 'setIsOnHold',
'harvest_start_date' => 'setHarvestStartDate',
'finished_date' => 'setFinishedDate',
'archived_date' => 'setArchivedDate',
'last_modified' => 'setLastModified'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'harvest_type' => 'getHarvestType',
'source_strain_count' => 'getSourceStrainCount',
'source_strain_names' => 'getSourceStrainNames',
'strains' => 'getStrains',
'drying_room_id' => 'getDryingRoomId',
'drying_room_name' => 'getDryingRoomName',
'patient_license_number' => 'getPatientLicenseNumber',
'current_weight' => 'getCurrentWeight',
'total_waste_weight' => 'getTotalWasteWeight',
'plant_count' => 'getPlantCount',
'total_wet_weight' => 'getTotalWetWeight',
'total_restored_weight' => 'getTotalRestoredWeight',
'package_count' => 'getPackageCount',
'total_packaged_weight' => 'getTotalPackagedWeight',
'unit_of_weight_name' => 'getUnitOfWeightName',
'lab_testing_state' => 'getLabTestingState',
'lab_testing_state_date' => 'getLabTestingStateDate',
'is_on_hold' => 'getIsOnHold',
'harvest_start_date' => 'getHarvestStartDate',
'finished_date' => 'getFinishedDate',
'archived_date' => 'getArchivedDate',
'last_modified' => 'getLastModified'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['harvest_type'] = isset($data['harvest_type']) ? $data['harvest_type'] : null;
        $this->container['source_strain_count'] = isset($data['source_strain_count']) ? $data['source_strain_count'] : null;
        $this->container['source_strain_names'] = isset($data['source_strain_names']) ? $data['source_strain_names'] : null;
        $this->container['strains'] = isset($data['strains']) ? $data['strains'] : null;
        $this->container['drying_room_id'] = isset($data['drying_room_id']) ? $data['drying_room_id'] : null;
        $this->container['drying_room_name'] = isset($data['drying_room_name']) ? $data['drying_room_name'] : null;
        $this->container['patient_license_number'] = isset($data['patient_license_number']) ? $data['patient_license_number'] : null;
        $this->container['current_weight'] = isset($data['current_weight']) ? $data['current_weight'] : null;
        $this->container['total_waste_weight'] = isset($data['total_waste_weight']) ? $data['total_waste_weight'] : null;
        $this->container['plant_count'] = isset($data['plant_count']) ? $data['plant_count'] : null;
        $this->container['total_wet_weight'] = isset($data['total_wet_weight']) ? $data['total_wet_weight'] : null;
        $this->container['total_restored_weight'] = isset($data['total_restored_weight']) ? $data['total_restored_weight'] : null;
        $this->container['package_count'] = isset($data['package_count']) ? $data['package_count'] : null;
        $this->container['total_packaged_weight'] = isset($data['total_packaged_weight']) ? $data['total_packaged_weight'] : null;
        $this->container['unit_of_weight_name'] = isset($data['unit_of_weight_name']) ? $data['unit_of_weight_name'] : null;
        $this->container['lab_testing_state'] = isset($data['lab_testing_state']) ? $data['lab_testing_state'] : null;
        $this->container['lab_testing_state_date'] = isset($data['lab_testing_state_date']) ? $data['lab_testing_state_date'] : null;
        $this->container['is_on_hold'] = isset($data['is_on_hold']) ? $data['is_on_hold'] : null;
        $this->container['harvest_start_date'] = isset($data['harvest_start_date']) ? $data['harvest_start_date'] : null;
        $this->container['finished_date'] = isset($data['finished_date']) ? $data['finished_date'] : null;
        $this->container['archived_date'] = isset($data['archived_date']) ? $data['archived_date'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets harvest_type
     *
     * @return string
     */
    public function getHarvestType()
    {
        return $this->container['harvest_type'];
    }

    /**
     * Sets harvest_type
     *
     * @param string $harvest_type harvest_type
     *
     * @return $this
     */
    public function setHarvestType($harvest_type)
    {
        $this->container['harvest_type'] = $harvest_type;

        return $this;
    }

    /**
     * Gets source_strain_count
     *
     * @return string
     */
    public function getSourceStrainCount()
    {
        return $this->container['source_strain_count'];
    }

    /**
     * Sets source_strain_count
     *
     * @param string $source_strain_count source_strain_count
     *
     * @return $this
     */
    public function setSourceStrainCount($source_strain_count)
    {
        $this->container['source_strain_count'] = $source_strain_count;

        return $this;
    }

    /**
     * Gets source_strain_names
     *
     * @return string
     */
    public function getSourceStrainNames()
    {
        return $this->container['source_strain_names'];
    }

    /**
     * Sets source_strain_names
     *
     * @param string $source_strain_names source_strain_names
     *
     * @return $this
     */
    public function setSourceStrainNames($source_strain_names)
    {
        $this->container['source_strain_names'] = $source_strain_names;

        return $this;
    }

    /**
     * Gets strains
     *
     * @return string[]
     */
    public function getStrains()
    {
        return $this->container['strains'];
    }

    /**
     * Sets strains
     *
     * @param string[] $strains strains
     *
     * @return $this
     */
    public function setStrains($strains)
    {
        $this->container['strains'] = $strains;

        return $this;
    }

    /**
     * Gets drying_room_id
     *
     * @return int
     */
    public function getDryingRoomId()
    {
        return $this->container['drying_room_id'];
    }

    /**
     * Sets drying_room_id
     *
     * @param int $drying_room_id drying_room_id
     *
     * @return $this
     */
    public function setDryingRoomId($drying_room_id)
    {
        $this->container['drying_room_id'] = $drying_room_id;

        return $this;
    }

    /**
     * Gets drying_room_name
     *
     * @return string
     */
    public function getDryingRoomName()
    {
        return $this->container['drying_room_name'];
    }

    /**
     * Sets drying_room_name
     *
     * @param string $drying_room_name drying_room_name
     *
     * @return $this
     */
    public function setDryingRoomName($drying_room_name)
    {
        $this->container['drying_room_name'] = $drying_room_name;

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
     * Gets current_weight
     *
     * @return float
     */
    public function getCurrentWeight()
    {
        return $this->container['current_weight'];
    }

    /**
     * Sets current_weight
     *
     * @param float $current_weight current_weight
     *
     * @return $this
     */
    public function setCurrentWeight($current_weight)
    {
        $this->container['current_weight'] = $current_weight;

        return $this;
    }

    /**
     * Gets total_waste_weight
     *
     * @return float
     */
    public function getTotalWasteWeight()
    {
        return $this->container['total_waste_weight'];
    }

    /**
     * Sets total_waste_weight
     *
     * @param float $total_waste_weight total_waste_weight
     *
     * @return $this
     */
    public function setTotalWasteWeight($total_waste_weight)
    {
        $this->container['total_waste_weight'] = $total_waste_weight;

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
     * Gets total_wet_weight
     *
     * @return float
     */
    public function getTotalWetWeight()
    {
        return $this->container['total_wet_weight'];
    }

    /**
     * Sets total_wet_weight
     *
     * @param float $total_wet_weight total_wet_weight
     *
     * @return $this
     */
    public function setTotalWetWeight($total_wet_weight)
    {
        $this->container['total_wet_weight'] = $total_wet_weight;

        return $this;
    }

    /**
     * Gets total_restored_weight
     *
     * @return float
     */
    public function getTotalRestoredWeight()
    {
        return $this->container['total_restored_weight'];
    }

    /**
     * Sets total_restored_weight
     *
     * @param float $total_restored_weight total_restored_weight
     *
     * @return $this
     */
    public function setTotalRestoredWeight($total_restored_weight)
    {
        $this->container['total_restored_weight'] = $total_restored_weight;

        return $this;
    }

    /**
     * Gets package_count
     *
     * @return int
     */
    public function getPackageCount()
    {
        return $this->container['package_count'];
    }

    /**
     * Sets package_count
     *
     * @param int $package_count package_count
     *
     * @return $this
     */
    public function setPackageCount($package_count)
    {
        $this->container['package_count'] = $package_count;

        return $this;
    }

    /**
     * Gets total_packaged_weight
     *
     * @return float
     */
    public function getTotalPackagedWeight()
    {
        return $this->container['total_packaged_weight'];
    }

    /**
     * Sets total_packaged_weight
     *
     * @param float $total_packaged_weight total_packaged_weight
     *
     * @return $this
     */
    public function setTotalPackagedWeight($total_packaged_weight)
    {
        $this->container['total_packaged_weight'] = $total_packaged_weight;

        return $this;
    }

    /**
     * Gets unit_of_weight_name
     *
     * @return string
     */
    public function getUnitOfWeightName()
    {
        return $this->container['unit_of_weight_name'];
    }

    /**
     * Sets unit_of_weight_name
     *
     * @param string $unit_of_weight_name unit_of_weight_name
     *
     * @return $this
     */
    public function setUnitOfWeightName($unit_of_weight_name)
    {
        $this->container['unit_of_weight_name'] = $unit_of_weight_name;

        return $this;
    }

    /**
     * Gets lab_testing_state
     *
     * @return string
     */
    public function getLabTestingState()
    {
        return $this->container['lab_testing_state'];
    }

    /**
     * Sets lab_testing_state
     *
     * @param string $lab_testing_state lab_testing_state
     *
     * @return $this
     */
    public function setLabTestingState($lab_testing_state)
    {
        $this->container['lab_testing_state'] = $lab_testing_state;

        return $this;
    }

    /**
     * Gets lab_testing_state_date
     *
     * @return \DateTime
     */
    public function getLabTestingStateDate()
    {
        return $this->container['lab_testing_state_date'];
    }

    /**
     * Sets lab_testing_state_date
     *
     * @param \DateTime $lab_testing_state_date lab_testing_state_date
     *
     * @return $this
     */
    public function setLabTestingStateDate($lab_testing_state_date)
    {
        $this->container['lab_testing_state_date'] = $lab_testing_state_date;

        return $this;
    }

    /**
     * Gets is_on_hold
     *
     * @return bool
     */
    public function getIsOnHold()
    {
        return $this->container['is_on_hold'];
    }

    /**
     * Sets is_on_hold
     *
     * @param bool $is_on_hold is_on_hold
     *
     * @return $this
     */
    public function setIsOnHold($is_on_hold)
    {
        $this->container['is_on_hold'] = $is_on_hold;

        return $this;
    }

    /**
     * Gets harvest_start_date
     *
     * @return \DateTime
     */
    public function getHarvestStartDate()
    {
        return $this->container['harvest_start_date'];
    }

    /**
     * Sets harvest_start_date
     *
     * @param \DateTime $harvest_start_date harvest_start_date
     *
     * @return $this
     */
    public function setHarvestStartDate($harvest_start_date)
    {
        $this->container['harvest_start_date'] = $harvest_start_date;

        return $this;
    }

    /**
     * Gets finished_date
     *
     * @return \DateTime
     */
    public function getFinishedDate()
    {
        return $this->container['finished_date'];
    }

    /**
     * Sets finished_date
     *
     * @param \DateTime $finished_date finished_date
     *
     * @return $this
     */
    public function setFinishedDate($finished_date)
    {
        $this->container['finished_date'] = $finished_date;

        return $this;
    }

    /**
     * Gets archived_date
     *
     * @return \DateTime
     */
    public function getArchivedDate()
    {
        return $this->container['archived_date'];
    }

    /**
     * Sets archived_date
     *
     * @param \DateTime $archived_date archived_date
     *
     * @return $this
     */
    public function setArchivedDate($archived_date)
    {
        $this->container['archived_date'] = $archived_date;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

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
