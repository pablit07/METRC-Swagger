<?php
/**
 * PlantBatch
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
 * PlantBatch Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlantBatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlantBatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'type' => 'string',
'room_id' => 'string',
'room_name' => 'string',
'strain_id' => 'int',
'strain_name' => 'string',
'patient_license_number' => 'string',
'untracked_count' => 'int',
'count' => 'int',
'tracked_count' => 'int',
'live_count' => 'int',
'packaged_count' => 'int',
'harvested_count' => 'int',
'destroyed_count' => 'int',
'source_package_id' => 'int',
'source_package_label' => 'string',
'source_plant_id' => 'int',
'source_plant_label' => 'string',
'planted_date' => 'string',
'last_modified' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'type' => null,
'room_id' => null,
'room_name' => null,
'strain_id' => null,
'strain_name' => null,
'patient_license_number' => null,
'untracked_count' => null,
'count' => null,
'tracked_count' => null,
'live_count' => null,
'packaged_count' => null,
'harvested_count' => null,
'destroyed_count' => null,
'source_package_id' => null,
'source_package_label' => null,
'source_plant_id' => null,
'source_plant_label' => null,
'planted_date' => null,
'last_modified' => null    ];

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
'type' => 'Type',
'room_id' => 'RoomId',
'room_name' => 'RoomName',
'strain_id' => 'StrainId',
'strain_name' => 'StrainName',
'patient_license_number' => 'PatientLicenseNumber',
'untracked_count' => 'UntrackedCount',
'count' => 'Count',
'tracked_count' => 'TrackedCount',
'live_count' => 'LiveCount',
'packaged_count' => 'PackagedCount',
'harvested_count' => 'HarvestedCount',
'destroyed_count' => 'DestroyedCount',
'source_package_id' => 'SourcePackageId',
'source_package_label' => 'SourcePackageLabel',
'source_plant_id' => 'SourcePlantId',
'source_plant_label' => 'SourcePlantLabel',
'planted_date' => 'PlantedDate',
'last_modified' => 'LastModified'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'type' => 'setType',
'room_id' => 'setRoomId',
'room_name' => 'setRoomName',
'strain_id' => 'setStrainId',
'strain_name' => 'setStrainName',
'patient_license_number' => 'setPatientLicenseNumber',
'untracked_count' => 'setUntrackedCount',
'count' => 'setCount',
'tracked_count' => 'setTrackedCount',
'live_count' => 'setLiveCount',
'packaged_count' => 'setPackagedCount',
'harvested_count' => 'setHarvestedCount',
'destroyed_count' => 'setDestroyedCount',
'source_package_id' => 'setSourcePackageId',
'source_package_label' => 'setSourcePackageLabel',
'source_plant_id' => 'setSourcePlantId',
'source_plant_label' => 'setSourcePlantLabel',
'planted_date' => 'setPlantedDate',
'last_modified' => 'setLastModified'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'type' => 'getType',
'room_id' => 'getRoomId',
'room_name' => 'getRoomName',
'strain_id' => 'getStrainId',
'strain_name' => 'getStrainName',
'patient_license_number' => 'getPatientLicenseNumber',
'untracked_count' => 'getUntrackedCount',
'count' => 'getCount',
'tracked_count' => 'getTrackedCount',
'live_count' => 'getLiveCount',
'packaged_count' => 'getPackagedCount',
'harvested_count' => 'getHarvestedCount',
'destroyed_count' => 'getDestroyedCount',
'source_package_id' => 'getSourcePackageId',
'source_package_label' => 'getSourcePackageLabel',
'source_plant_id' => 'getSourcePlantId',
'source_plant_label' => 'getSourcePlantLabel',
'planted_date' => 'getPlantedDate',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['room_id'] = isset($data['room_id']) ? $data['room_id'] : null;
        $this->container['room_name'] = isset($data['room_name']) ? $data['room_name'] : null;
        $this->container['strain_id'] = isset($data['strain_id']) ? $data['strain_id'] : null;
        $this->container['strain_name'] = isset($data['strain_name']) ? $data['strain_name'] : null;
        $this->container['patient_license_number'] = isset($data['patient_license_number']) ? $data['patient_license_number'] : null;
        $this->container['untracked_count'] = isset($data['untracked_count']) ? $data['untracked_count'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['tracked_count'] = isset($data['tracked_count']) ? $data['tracked_count'] : null;
        $this->container['live_count'] = isset($data['live_count']) ? $data['live_count'] : null;
        $this->container['packaged_count'] = isset($data['packaged_count']) ? $data['packaged_count'] : null;
        $this->container['harvested_count'] = isset($data['harvested_count']) ? $data['harvested_count'] : null;
        $this->container['destroyed_count'] = isset($data['destroyed_count']) ? $data['destroyed_count'] : null;
        $this->container['source_package_id'] = isset($data['source_package_id']) ? $data['source_package_id'] : null;
        $this->container['source_package_label'] = isset($data['source_package_label']) ? $data['source_package_label'] : null;
        $this->container['source_plant_id'] = isset($data['source_plant_id']) ? $data['source_plant_id'] : null;
        $this->container['source_plant_label'] = isset($data['source_plant_label']) ? $data['source_plant_label'] : null;
        $this->container['planted_date'] = isset($data['planted_date']) ? $data['planted_date'] : null;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets room_id
     *
     * @return string
     */
    public function getRoomId()
    {
        return $this->container['room_id'];
    }

    /**
     * Sets room_id
     *
     * @param string $room_id room_id
     *
     * @return $this
     */
    public function setRoomId($room_id)
    {
        $this->container['room_id'] = $room_id;

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
     * Gets strain_id
     *
     * @return int
     */
    public function getStrainId()
    {
        return $this->container['strain_id'];
    }

    /**
     * Sets strain_id
     *
     * @param int $strain_id strain_id
     *
     * @return $this
     */
    public function setStrainId($strain_id)
    {
        $this->container['strain_id'] = $strain_id;

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
     * Gets untracked_count
     *
     * @return int
     */
    public function getUntrackedCount()
    {
        return $this->container['untracked_count'];
    }

    /**
     * Sets untracked_count
     *
     * @param int $untracked_count untracked_count
     *
     * @return $this
     */
    public function setUntrackedCount($untracked_count)
    {
        $this->container['untracked_count'] = $untracked_count;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets tracked_count
     *
     * @return int
     */
    public function getTrackedCount()
    {
        return $this->container['tracked_count'];
    }

    /**
     * Sets tracked_count
     *
     * @param int $tracked_count tracked_count
     *
     * @return $this
     */
    public function setTrackedCount($tracked_count)
    {
        $this->container['tracked_count'] = $tracked_count;

        return $this;
    }

    /**
     * Gets live_count
     *
     * @return int
     */
    public function getLiveCount()
    {
        return $this->container['live_count'];
    }

    /**
     * Sets live_count
     *
     * @param int $live_count live_count
     *
     * @return $this
     */
    public function setLiveCount($live_count)
    {
        $this->container['live_count'] = $live_count;

        return $this;
    }

    /**
     * Gets packaged_count
     *
     * @return int
     */
    public function getPackagedCount()
    {
        return $this->container['packaged_count'];
    }

    /**
     * Sets packaged_count
     *
     * @param int $packaged_count packaged_count
     *
     * @return $this
     */
    public function setPackagedCount($packaged_count)
    {
        $this->container['packaged_count'] = $packaged_count;

        return $this;
    }

    /**
     * Gets harvested_count
     *
     * @return int
     */
    public function getHarvestedCount()
    {
        return $this->container['harvested_count'];
    }

    /**
     * Sets harvested_count
     *
     * @param int $harvested_count harvested_count
     *
     * @return $this
     */
    public function setHarvestedCount($harvested_count)
    {
        $this->container['harvested_count'] = $harvested_count;

        return $this;
    }

    /**
     * Gets destroyed_count
     *
     * @return int
     */
    public function getDestroyedCount()
    {
        return $this->container['destroyed_count'];
    }

    /**
     * Sets destroyed_count
     *
     * @param int $destroyed_count destroyed_count
     *
     * @return $this
     */
    public function setDestroyedCount($destroyed_count)
    {
        $this->container['destroyed_count'] = $destroyed_count;

        return $this;
    }

    /**
     * Gets source_package_id
     *
     * @return int
     */
    public function getSourcePackageId()
    {
        return $this->container['source_package_id'];
    }

    /**
     * Sets source_package_id
     *
     * @param int $source_package_id source_package_id
     *
     * @return $this
     */
    public function setSourcePackageId($source_package_id)
    {
        $this->container['source_package_id'] = $source_package_id;

        return $this;
    }

    /**
     * Gets source_package_label
     *
     * @return string
     */
    public function getSourcePackageLabel()
    {
        return $this->container['source_package_label'];
    }

    /**
     * Sets source_package_label
     *
     * @param string $source_package_label source_package_label
     *
     * @return $this
     */
    public function setSourcePackageLabel($source_package_label)
    {
        $this->container['source_package_label'] = $source_package_label;

        return $this;
    }

    /**
     * Gets source_plant_id
     *
     * @return int
     */
    public function getSourcePlantId()
    {
        return $this->container['source_plant_id'];
    }

    /**
     * Sets source_plant_id
     *
     * @param int $source_plant_id source_plant_id
     *
     * @return $this
     */
    public function setSourcePlantId($source_plant_id)
    {
        $this->container['source_plant_id'] = $source_plant_id;

        return $this;
    }

    /**
     * Gets source_plant_label
     *
     * @return string
     */
    public function getSourcePlantLabel()
    {
        return $this->container['source_plant_label'];
    }

    /**
     * Sets source_plant_label
     *
     * @param string $source_plant_label source_plant_label
     *
     * @return $this
     */
    public function setSourcePlantLabel($source_plant_label)
    {
        $this->container['source_plant_label'] = $source_plant_label;

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
     * Gets last_modified
     *
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string $last_modified last_modified
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
