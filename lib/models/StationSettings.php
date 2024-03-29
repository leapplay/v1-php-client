<?php
/**
 * StationSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Leap Play
 *
 * Learn more at https://www.leap-play.com
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.5
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\models;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * StationSettings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StationSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StationSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'station_id' => 'string',
        'display_name' => 'string',
        'qr_code' => 'string',
        'control_mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'station_id' => 'uuid',
        'display_name' => null,
        'qr_code' => null,
        'control_mode' => null
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
        'station_id' => 'stationId',
        'display_name' => 'displayName',
        'qr_code' => 'qrCode',
        'control_mode' => 'controlMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'station_id' => 'setStationId',
        'display_name' => 'setDisplayName',
        'qr_code' => 'setQrCode',
        'control_mode' => 'setControlMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'station_id' => 'getStationId',
        'display_name' => 'getDisplayName',
        'qr_code' => 'getQrCode',
        'control_mode' => 'getControlMode'
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

    const CONTROL_MODE_UNDEFINED = 'Undefined';
    const CONTROL_MODE_LOCAL = 'Local';
    const CONTROL_MODE_REMOTE = 'Remote';
    const CONTROL_MODE_REMOTE_WITH_QR_CODE = 'RemoteWithQrCode';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getControlModeAllowableValues()
    {
        return [
            self::CONTROL_MODE_UNDEFINED,
            self::CONTROL_MODE_LOCAL,
            self::CONTROL_MODE_REMOTE,
            self::CONTROL_MODE_REMOTE_WITH_QR_CODE,
        ];
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
        $this->container['station_id'] = isset($data['station_id']) ? $data['station_id'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['qr_code'] = isset($data['qr_code']) ? $data['qr_code'] : null;
        $this->container['control_mode'] = isset($data['control_mode']) ? $data['control_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getControlModeAllowableValues();
        if (!is_null($this->container['control_mode']) && !in_array($this->container['control_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'control_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets station_id
     *
     * @return string
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     *
     * @param string $station_id station_id
     *
     * @return $this
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

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
     * Gets qr_code
     *
     * @return string
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param string $qr_code qr_code
     *
     * @return $this
     */
    public function setQrCode($qr_code)
    {
        $this->container['qr_code'] = $qr_code;

        return $this;
    }

    /**
     * Gets control_mode
     *
     * @return string
     */
    public function getControlMode()
    {
        return $this->container['control_mode'];
    }

    /**
     * Sets control_mode
     *
     * @param string $control_mode control_mode
     *
     * @return $this
     */
    public function setControlMode($control_mode)
    {
        $allowedValues = $this->getControlModeAllowableValues();
        if (!is_null($control_mode) && !in_array($control_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'control_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['control_mode'] = $control_mode;

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


