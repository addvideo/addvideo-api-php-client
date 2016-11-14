<?php
/**
 * FTPExportConfigFullDTOListResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  de\addvideo\client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AddVideo REST API v1
 *
 * <h1>Welcome to AddVideo | easy video integration into your project</h1><p>AddVideo offers the integration of professional online video services and capabilities such as CDN, encoding, asset management and complex distribution workflows  with your favourite CMS. AddVideo processes and distributes your video contents as required, without interface- or CDN-specific implementations. Using AddVideo you will get:</p><ul><li>API: a powerful REST-API with free client SDKs available in many different programming languages incl. examples at http://github.com/addvideo</li><li>Encoding: media processing and video encoding services</li><li>CDN: use diverse very powerful global CDNs to distribute your contents</li><li>OTT: access to useful functionalities via the API</li><li>Development, Service und Maintenance: our team of high class software engineers and online video specialists is located in Frankfurt/Germany</li><li>Powerfull Infrastructure: system operations in high class data centres in Germany</li><li>In General: a fast growing set of features</li></ul><p>It has never been easier to add professional video modules to your platform on demand. AddVideo helps to slimline your integration efforts and provides the whole video workflow accessible through a simple programming interface.</p>
 *
 * OpenAPI spec version: 1
 * Contact: info@addvideo.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace de\addvideo\client\model;

use \ArrayAccess;

/**
 * FTPExportConfigFullDTOListResult Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     de\addvideo\client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FTPExportConfigFullDTOListResult implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FTPExportConfigFullDTOListResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'exportConfigs' => '\de\addvideo\client\model\FTPExportConfigFullDTO[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'exportConfigs' => 'export-configs'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'exportConfigs' => 'setExportConfigs'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'exportConfigs' => 'getExportConfigs'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['exportConfigs'] = isset($data['exportConfigs']) ? $data['exportConfigs'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['exportConfigs'] === null) {
            $invalid_properties[] = "'exportConfigs' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['exportConfigs'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets exportConfigs
     * @return \de\addvideo\client\model\FTPExportConfigFullDTO[]
     */
    public function getExportConfigs()
    {
        return $this->container['exportConfigs'];
    }

    /**
     * Sets exportConfigs
     * @param \de\addvideo\client\model\FTPExportConfigFullDTO[] $exportConfigs List of entity objects.
     * @return $this
     */
    public function setExportConfigs($exportConfigs)
    {
        $this->container['exportConfigs'] = $exportConfigs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\de\addvideo\client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\de\addvideo\client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


