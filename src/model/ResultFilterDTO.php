<?php
/**
 * ResultFilterDTO
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
 * <h1>Willkommen bei AddVideo | add video to your project</h1><p>Nutzen Sie die Technologie von AddVideo zur Verbindung von CMS- mit CDN-FunktionalitÃ¤ten. Mit AddVideo verarbeiten und distribuieren Sie Ihre Videoinhalte ganz nach Bedarf. Werden Sie und Ihre Anwendungen unabhÃ¤ngig von OberflÃ¤chen oder CDN-spezifischen Anforderungen. AddVideo bietet Ihnen:</p><ul><li>individuelle Nutzung durch Anbindung Ã¼ber Rest-API</li><li>Client SDKs in vielen Programmiersprachen frei verfÃ¼gbar unter http://github.com/addvideo</li><li>Media Processing und Video Encoding Services</li><li>Betrieb und Datenhaltung in Rechenzentren in Deutschland</li><li>Service und Betrieb durch ein erfahrenes Team von Videospezialisten in Frankfurt am Main</li><li>einen stetig wachsenden Funktionsumfang</li><li>eine stetig wachsende Anzahl an angebundenen CDNs</li><li>Nutzung von zahlreichen OTT-Funktionen Ã¼ber die API</li></ul><p>Bei AddVideo kÃ¶nnen Sie individuell selbst entscheiden, welche Bausteine Sie fÃ¼r Ihre Videoverwaltung benÃ¶tigen. Bestehende Systeme und LÃ¶sungen lassen sich komfortabel anbinden.</p>
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
 * ResultFilterDTO Class Doc Comment
 *
 * @category    Class */
 // @description Filter to be used to filter results.
/** 
 * @package     de\addvideo\client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ResultFilterDTO implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ResultFilterDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'attributeFilters' => '\de\addvideo\client\model\AttributeFilterDTO[]',
        'paginator' => '\de\addvideo\client\model\PaginatorDTO'
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
        'attributeFilters' => 'attribute-filters',
        'paginator' => 'paginator'
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
        'attributeFilters' => 'setAttributeFilters',
        'paginator' => 'setPaginator'
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
        'attributeFilters' => 'getAttributeFilters',
        'paginator' => 'getPaginator'
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
        $this->container['attributeFilters'] = isset($data['attributeFilters']) ? $data['attributeFilters'] : null;
        $this->container['paginator'] = isset($data['paginator']) ? $data['paginator'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['attributeFilters'] === null) {
            $invalid_properties[] = "'attributeFilters' can't be null";
        }
        if ($this->container['paginator'] === null) {
            $invalid_properties[] = "'paginator' can't be null";
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
        if ($this->container['attributeFilters'] === null) {
            return false;
        }
        if ($this->container['paginator'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets attributeFilters
     * @return \de\addvideo\client\model\AttributeFilterDTO[]
     */
    public function getAttributeFilters()
    {
        return $this->container['attributeFilters'];
    }

    /**
     * Sets attributeFilters
     * @param \de\addvideo\client\model\AttributeFilterDTO[] $attributeFilters list of filters to be applied to results
     * @return $this
     */
    public function setAttributeFilters($attributeFilters)
    {
        $this->container['attributeFilters'] = $attributeFilters;

        return $this;
    }

    /**
     * Gets paginator
     * @return \de\addvideo\client\model\PaginatorDTO
     */
    public function getPaginator()
    {
        return $this->container['paginator'];
    }

    /**
     * Sets paginator
     * @param \de\addvideo\client\model\PaginatorDTO $paginator paginating the results
     * @return $this
     */
    public function setPaginator($paginator)
    {
        $this->container['paginator'] = $paginator;

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


