<?php
/**
 * PlayoutURLDTO
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
 * PlayoutURLDTO Class Doc Comment
 *
 * @category    Class */
 // @description Playout data for one specififc flavor of an entry.
/** 
 * @package     de\addvideo\client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PlayoutURLDTO implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PlayoutURLDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'url' => 'string',
        'label' => 'string',
        'bitrate' => 'int',
        'targetVideoBitrate' => 'int',
        'targetAudioBitrate' => 'int',
        'protected' => 'bool'
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
        'url' => 'url',
        'label' => 'label',
        'bitrate' => 'bitrate',
        'targetVideoBitrate' => 'target-video-bitrate',
        'targetAudioBitrate' => 'target-audio-bitrate',
        'protected' => 'protected'
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
        'url' => 'setUrl',
        'label' => 'setLabel',
        'bitrate' => 'setBitrate',
        'targetVideoBitrate' => 'setTargetVideoBitrate',
        'targetAudioBitrate' => 'setTargetAudioBitrate',
        'protected' => 'setProtected'
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
        'url' => 'getUrl',
        'label' => 'getLabel',
        'bitrate' => 'getBitrate',
        'targetVideoBitrate' => 'getTargetVideoBitrate',
        'targetAudioBitrate' => 'getTargetAudioBitrate',
        'protected' => 'getProtected'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['targetVideoBitrate'] = isset($data['targetVideoBitrate']) ? $data['targetVideoBitrate'] : null;
        $this->container['targetAudioBitrate'] = isset($data['targetAudioBitrate']) ? $data['targetAudioBitrate'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url URL
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label Label giving a hint about encoding.
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets bitrate
     * @return int
     */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
     * Sets bitrate
     * @param int $bitrate Rounded overall bitrate this file has been encoded in.
     * @return $this
     */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;

        return $this;
    }

    /**
     * Gets targetVideoBitrate
     * @return int
     */
    public function getTargetVideoBitrate()
    {
        return $this->container['targetVideoBitrate'];
    }

    /**
     * Sets targetVideoBitrate
     * @param int $targetVideoBitrate Video target bitrate this file has been encoded with.
     * @return $this
     */
    public function setTargetVideoBitrate($targetVideoBitrate)
    {
        $this->container['targetVideoBitrate'] = $targetVideoBitrate;

        return $this;
    }

    /**
     * Gets targetAudioBitrate
     * @return int
     */
    public function getTargetAudioBitrate()
    {
        return $this->container['targetAudioBitrate'];
    }

    /**
     * Sets targetAudioBitrate
     * @param int $targetAudioBitrate Audio target bitrate this file has been encoded with.
     * @return $this
     */
    public function setTargetAudioBitrate($targetAudioBitrate)
    {
        $this->container['targetAudioBitrate'] = $targetAudioBitrate;

        return $this;
    }

    /**
     * Gets protected
     * @return bool
     */
    public function getProtected()
    {
        return $this->container['protected'];
    }

    /**
     * Sets protected
     * @param bool $protected Info flag telling whether created URL is protected somehow.
     * @return $this
     */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;

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


