<?php
/**
 * Facility
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
 * Facility Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Facility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Facility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hire_date' => '\DateTime',
        'is_owner' => 'bool',
        'is_manager' => 'bool',
        'occupations' => 'string[]',
        'name' => 'string',
        'alias' => 'string',
        'display_name' => 'string',
        'credentialed_date' => '\DateTime',
        'support_activation_date' => '\DateTime',
        'support_expiration_date' => '\DateTime',
        'support_last_paid_date' => '\DateTime',
        'facility_type' => 'string',
        'license' => '\Swagger\Client\Model\License'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hire_date' => 'date',
        'is_owner' => null,
        'is_manager' => null,
        'occupations' => null,
        'name' => null,
        'alias' => null,
        'display_name' => null,
        'credentialed_date' => 'date',
        'support_activation_date' => 'date',
        'support_expiration_date' => 'date',
        'support_last_paid_date' => 'date',
        'facility_type' => null,
        'license' => null
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
        'hire_date' => 'HireDate',
        'is_owner' => 'IsOwner',
        'is_manager' => 'IsManager',
        'occupations' => 'Occupations',
        'name' => 'Name',
        'alias' => 'Alias',
        'display_name' => 'DisplayName',
        'credentialed_date' => 'CredentialedDate',
        'support_activation_date' => 'SupportActivationDate',
        'support_expiration_date' => 'SupportExpirationDate',
        'support_last_paid_date' => 'SupportLastPaidDate',
        'facility_type' => 'FacilityType',
        'license' => 'License'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hire_date' => 'setHireDate',
        'is_owner' => 'setIsOwner',
        'is_manager' => 'setIsManager',
        'occupations' => 'setOccupations',
        'name' => 'setName',
        'alias' => 'setAlias',
        'display_name' => 'setDisplayName',
        'credentialed_date' => 'setCredentialedDate',
        'support_activation_date' => 'setSupportActivationDate',
        'support_expiration_date' => 'setSupportExpirationDate',
        'support_last_paid_date' => 'setSupportLastPaidDate',
        'facility_type' => 'setFacilityType',
        'license' => 'setLicense'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hire_date' => 'getHireDate',
        'is_owner' => 'getIsOwner',
        'is_manager' => 'getIsManager',
        'occupations' => 'getOccupations',
        'name' => 'getName',
        'alias' => 'getAlias',
        'display_name' => 'getDisplayName',
        'credentialed_date' => 'getCredentialedDate',
        'support_activation_date' => 'getSupportActivationDate',
        'support_expiration_date' => 'getSupportExpirationDate',
        'support_last_paid_date' => 'getSupportLastPaidDate',
        'facility_type' => 'getFacilityType',
        'license' => 'getLicense'
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
        $this->container['hire_date'] = isset($data['hire_date']) ? $data['hire_date'] : null;
        $this->container['is_owner'] = isset($data['is_owner']) ? $data['is_owner'] : null;
        $this->container['is_manager'] = isset($data['is_manager']) ? $data['is_manager'] : null;
        $this->container['occupations'] = isset($data['occupations']) ? $data['occupations'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['credentialed_date'] = isset($data['credentialed_date']) ? $data['credentialed_date'] : null;
        $this->container['support_activation_date'] = isset($data['support_activation_date']) ? $data['support_activation_date'] : null;
        $this->container['support_expiration_date'] = isset($data['support_expiration_date']) ? $data['support_expiration_date'] : null;
        $this->container['support_last_paid_date'] = isset($data['support_last_paid_date']) ? $data['support_last_paid_date'] : null;
        $this->container['facility_type'] = isset($data['facility_type']) ? $data['facility_type'] : null;
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
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
     * Gets hire_date
     *
     * @return \DateTime
     */
    public function getHireDate()
    {
        return $this->container['hire_date'];
    }

    /**
     * Sets hire_date
     *
     * @param \DateTime $hire_date hire_date
     *
     * @return $this
     */
    public function setHireDate($hire_date)
    {
        $this->container['hire_date'] = $hire_date;

        return $this;
    }

    /**
     * Gets is_owner
     *
     * @return bool
     */
    public function getIsOwner()
    {
        return $this->container['is_owner'];
    }

    /**
     * Sets is_owner
     *
     * @param bool $is_owner is_owner
     *
     * @return $this
     */
    public function setIsOwner($is_owner)
    {
        $this->container['is_owner'] = $is_owner;

        return $this;
    }

    /**
     * Gets is_manager
     *
     * @return bool
     */
    public function getIsManager()
    {
        return $this->container['is_manager'];
    }

    /**
     * Sets is_manager
     *
     * @param bool $is_manager is_manager
     *
     * @return $this
     */
    public function setIsManager($is_manager)
    {
        $this->container['is_manager'] = $is_manager;

        return $this;
    }

    /**
     * Gets occupations
     *
     * @return string[]
     */
    public function getOccupations()
    {
        return $this->container['occupations'];
    }

    /**
     * Sets occupations
     *
     * @param string[] $occupations occupations
     *
     * @return $this
     */
    public function setOccupations($occupations)
    {
        $this->container['occupations'] = $occupations;

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
     * Gets alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string $alias alias
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets credentialed_date
     *
     * @return \DateTime
     */
    public function getCredentialedDate()
    {
        return $this->container['credentialed_date'];
    }

    /**
     * Sets credentialed_date
     *
     * @param \DateTime $credentialed_date credentialed_date
     *
     * @return $this
     */
    public function setCredentialedDate($credentialed_date)
    {
        $this->container['credentialed_date'] = $credentialed_date;

        return $this;
    }

    /**
     * Gets support_activation_date
     *
     * @return \DateTime
     */
    public function getSupportActivationDate()
    {
        return $this->container['support_activation_date'];
    }

    /**
     * Sets support_activation_date
     *
     * @param \DateTime $support_activation_date support_activation_date
     *
     * @return $this
     */
    public function setSupportActivationDate($support_activation_date)
    {
        $this->container['support_activation_date'] = $support_activation_date;

        return $this;
    }

    /**
     * Gets support_expiration_date
     *
     * @return \DateTime
     */
    public function getSupportExpirationDate()
    {
        return $this->container['support_expiration_date'];
    }

    /**
     * Sets support_expiration_date
     *
     * @param \DateTime $support_expiration_date support_expiration_date
     *
     * @return $this
     */
    public function setSupportExpirationDate($support_expiration_date)
    {
        $this->container['support_expiration_date'] = $support_expiration_date;

        return $this;
    }

    /**
     * Gets support_last_paid_date
     *
     * @return \DateTime
     */
    public function getSupportLastPaidDate()
    {
        return $this->container['support_last_paid_date'];
    }

    /**
     * Sets support_last_paid_date
     *
     * @param \DateTime $support_last_paid_date support_last_paid_date
     *
     * @return $this
     */
    public function setSupportLastPaidDate($support_last_paid_date)
    {
        $this->container['support_last_paid_date'] = $support_last_paid_date;

        return $this;
    }

    /**
     * Gets facility_type
     *
     * @return string
     */
    public function getFacilityType()
    {
        return $this->container['facility_type'];
    }

    /**
     * Sets facility_type
     *
     * @param string $facility_type facility_type
     *
     * @return $this
     */
    public function setFacilityType($facility_type)
    {
        $this->container['facility_type'] = $facility_type;

        return $this;
    }

    /**
     * Gets license
     *
     * @return \Swagger\Client\Model\License
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param \Swagger\Client\Model\License $license license
     *
     * @return $this
     */
    public function setLicense($license)
    {
        $this->container['license'] = $license;

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

