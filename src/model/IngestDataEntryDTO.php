<?php
/**
 * IngestDataEntryDTO
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
 * <h1>Welcome to AddVideo | easy video integration into your project</h1><p>Use our AddVideo services to add CDN-functionalitiy to your favorite CMS. AddVideo processes and distributes your video contents as required without interface- or CDN-specific implementations. Using AddVideo you get:</p><ul><li>API: a powerfull REST-API with client SDKs in many different programming languages incl. examples available for free at http://github.com/addvideo</li><li>Encoding: media processing and video encoding services</li><li>CDN: capabilities of diverse very powerful global CDNs</li><li>OTT: access to useful functionalities via the API</li><li>Development, Service und Maintenance: our team of high class software engineers and online video specialists is located in Frankfurt/Germany</li><li>Powerfull Infrastructure: operations in high class data centers in Germany</li><li>In General: a fast growing feature set</li></ul><p>It was never easier to add professional video modules to your platform on demand. AddVideo helps to slimline your integration efforts and provides the whole video workflow accesible through a simple programming interface.</p>
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
 * IngestDataEntryDTO Class Doc Comment
 *
 * @category    Class */
 // @description Entry in ingest data list.
/** 
 * @package     de\addvideo\client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IngestDataEntryDTO implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IngestDataEntryDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'externalReferenceId' => 'string',
        'sourceUrl' => 'string',
        'webhook' => 'string'
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
        'externalReferenceId' => 'external-reference-id',
        'sourceUrl' => 'source-url',
        'webhook' => 'webhook'
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
        'externalReferenceId' => 'setExternalReferenceId',
        'sourceUrl' => 'setSourceUrl',
        'webhook' => 'setWebhook'
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
        'externalReferenceId' => 'getExternalReferenceId',
        'sourceUrl' => 'getSourceUrl',
        'webhook' => 'getWebhook'
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
        $this->container['externalReferenceId'] = isset($data['externalReferenceId']) ? $data['externalReferenceId'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['webhook'] = isset($data['webhook']) ? $data['webhook'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['sourceUrl'] === null) {
            $invalid_properties[] = "'sourceUrl' can't be null";
        }
        if ($this->container['webhook'] === null) {
            $invalid_properties[] = "'webhook' can't be null";
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
        if ($this->container['sourceUrl'] === null) {
            return false;
        }
        if ($this->container['webhook'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets externalReferenceId
     * @return string
     */
    public function getExternalReferenceId()
    {
        return $this->container['externalReferenceId'];
    }

    /**
     * Sets externalReferenceId
     * @param string $externalReferenceId External reference id that can be used for external lookup purposes.
     * @return $this
     */
    public function setExternalReferenceId($externalReferenceId)
    {
        $this->container['externalReferenceId'] = $externalReferenceId;

        return $this;
    }

    /**
     * Gets sourceUrl
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
     * Sets sourceUrl
     * @param string $sourceUrl Your source file url.
     * @return $this
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;

        return $this;
    }

    /**
     * Gets webhook
     * @return string
     */
    public function getWebhook()
    {
        return $this->container['webhook'];
    }

    /**
     * Sets webhook
     * @param string $webhook URL to be triggered if a new status was reached.
     * @return $this
     */
    public function setWebhook($webhook)
    {
        $this->container['webhook'] = $webhook;

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


