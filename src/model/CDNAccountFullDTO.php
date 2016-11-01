<?php
/**
 * CDNAccountFullDTO
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
 * <h1>Willkommen bei AddVideo | add video to your project</h1><p>Nutzen Sie die Technologie von AddVideo zur Verbindung von CMS- mit CDN-Funktionalitäten. Mit AddVideo verarbeiten und distribuieren Sie Ihre Videoinhalte ganz nach Bedarf. Werden Sie und Ihre Anwendungen unabhängig von Oberflächen oder CDN-spezifischen Anforderungen. AddVideo bietet Ihnen:</p><ul><li>individuelle Nutzung durch Anbindung über Rest-API</li><li>Client SDKs in vielen Programmiersprachen frei verfügbar unter http://github.com/addvideo</li><li>Media Processing und Video Encoding Services</li><li>Betrieb und Datenhaltung in Rechenzentren in Deutschland</li><li>Service und Betrieb durch ein erfahrenes Team von Videospezialisten in Frankfurt am Main</li><li>einen stetig wachsenden Funktionsumfang</li><li>eine stetig wachsende Anzahl an angebundenen CDNs</li><li>Nutzung von zahlreichen OTT-Funktionen über die API</li></ul><p>Bei AddVideo können Sie individuell selbst entscheiden, welche Bausteine Sie für Ihre Videoverwaltung benötigen. Bestehende Systeme und Lösungen lassen sich komfortabel anbinden.</p>
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
 * CDNAccountFullDTO Class Doc Comment
 *
 * @category    Class */
 // @description CDNAccountFullDTO
/** 
 * @package     de\addvideo\client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CDNAccountFullDTO implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CDNAccountFullDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'cdn' => '\de\addvideo\client\model\CDNIdDTO',
        'httpDeliveryPrefix' => 'string',
        'httpsDeliveryPrefix' => 'string',
        'ingestExportConfig' => '\de\addvideo\client\model\ExportConfigIdDTO',
        'creationDate' => '\DateTime',
        'modificationDate' => '\DateTime',
        'accountModifiedBy' => 'string'
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
        'id' => 'id',
        'cdn' => 'cdn',
        'httpDeliveryPrefix' => 'http-delivery-prefix',
        'httpsDeliveryPrefix' => 'https-delivery-prefix',
        'ingestExportConfig' => 'ingest-export-config',
        'creationDate' => 'creation-date',
        'modificationDate' => 'modification-date',
        'accountModifiedBy' => 'account-modified-by'
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
        'id' => 'setId',
        'cdn' => 'setCdn',
        'httpDeliveryPrefix' => 'setHttpDeliveryPrefix',
        'httpsDeliveryPrefix' => 'setHttpsDeliveryPrefix',
        'ingestExportConfig' => 'setIngestExportConfig',
        'creationDate' => 'setCreationDate',
        'modificationDate' => 'setModificationDate',
        'accountModifiedBy' => 'setAccountModifiedBy'
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
        'id' => 'getId',
        'cdn' => 'getCdn',
        'httpDeliveryPrefix' => 'getHttpDeliveryPrefix',
        'httpsDeliveryPrefix' => 'getHttpsDeliveryPrefix',
        'ingestExportConfig' => 'getIngestExportConfig',
        'creationDate' => 'getCreationDate',
        'modificationDate' => 'getModificationDate',
        'accountModifiedBy' => 'getAccountModifiedBy'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cdn'] = isset($data['cdn']) ? $data['cdn'] : null;
        $this->container['httpDeliveryPrefix'] = isset($data['httpDeliveryPrefix']) ? $data['httpDeliveryPrefix'] : null;
        $this->container['httpsDeliveryPrefix'] = isset($data['httpsDeliveryPrefix']) ? $data['httpsDeliveryPrefix'] : null;
        $this->container['ingestExportConfig'] = isset($data['ingestExportConfig']) ? $data['ingestExportConfig'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['modificationDate'] = isset($data['modificationDate']) ? $data['modificationDate'] : null;
        $this->container['accountModifiedBy'] = isset($data['accountModifiedBy']) ? $data['accountModifiedBy'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['cdn'] === null) {
            $invalid_properties[] = "'cdn' can't be null";
        }
        if ($this->container['httpDeliveryPrefix'] === null) {
            $invalid_properties[] = "'httpDeliveryPrefix' can't be null";
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
        if ($this->container['cdn'] === null) {
            return false;
        }
        if ($this->container['httpDeliveryPrefix'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Generated id. READ ONLY! Value will be set from db and cannot be manipulated via the API!.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets cdn
     * @return \de\addvideo\client\model\CDNIdDTO
     */
    public function getCdn()
    {
        return $this->container['cdn'];
    }

    /**
     * Sets cdn
     * @param \de\addvideo\client\model\CDNIdDTO $cdn Internal reference id to CDN.
     * @return $this
     */
    public function setCdn($cdn)
    {
        $this->container['cdn'] = $cdn;

        return $this;
    }

    /**
     * Gets httpDeliveryPrefix
     * @return string
     */
    public function getHttpDeliveryPrefix()
    {
        return $this->container['httpDeliveryPrefix'];
    }

    /**
     * Sets httpDeliveryPrefix
     * @param string $httpDeliveryPrefix Prefix used for HTTP delivery. String value must not exceed 256 bytes of ASCII characters.
     * @return $this
     */
    public function setHttpDeliveryPrefix($httpDeliveryPrefix)
    {
        $this->container['httpDeliveryPrefix'] = $httpDeliveryPrefix;

        return $this;
    }

    /**
     * Gets httpsDeliveryPrefix
     * @return string
     */
    public function getHttpsDeliveryPrefix()
    {
        return $this->container['httpsDeliveryPrefix'];
    }

    /**
     * Sets httpsDeliveryPrefix
     * @param string $httpsDeliveryPrefix Prefix used for HTTPS delivery. String value must not exceed 256 bytes of ASCII characters.
     * @return $this
     */
    public function setHttpsDeliveryPrefix($httpsDeliveryPrefix)
    {
        $this->container['httpsDeliveryPrefix'] = $httpsDeliveryPrefix;

        return $this;
    }

    /**
     * Gets ingestExportConfig
     * @return \de\addvideo\client\model\ExportConfigIdDTO
     */
    public function getIngestExportConfig()
    {
        return $this->container['ingestExportConfig'];
    }

    /**
     * Sets ingestExportConfig
     * @param \de\addvideo\client\model\ExportConfigIdDTO $ingestExportConfig Internal reference id to Export configuration to be used to ingest files into the CDN account.
     * @return $this
     */
    public function setIngestExportConfig($ingestExportConfig)
    {
        $this->container['ingestExportConfig'] = $ingestExportConfig;

        return $this;
    }

    /**
     * Gets creationDate
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     * @param \DateTime $creationDate Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API! Format as defined in <a href='http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14' target='_blank'>RFC3339</a>. Format as defined in <a href='http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14' target='_blank'>RFC3339</a>.
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets modificationDate
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->container['modificationDate'];
    }

    /**
     * Sets modificationDate
     * @param \DateTime $modificationDate Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API! Format as defined in <a href='http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14' target='_blank'>RFC3339</a>. Format as defined in <a href='http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14' target='_blank'>RFC3339</a>.
     * @return $this
     */
    public function setModificationDate($modificationDate)
    {
        $this->container['modificationDate'] = $modificationDate;

        return $this;
    }

    /**
     * Gets accountModifiedBy
     * @return string
     */
    public function getAccountModifiedBy()
    {
        return $this->container['accountModifiedBy'];
    }

    /**
     * Sets accountModifiedBy
     * @param string $accountModifiedBy Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!.
     * @return $this
     */
    public function setAccountModifiedBy($accountModifiedBy)
    {
        $this->container['accountModifiedBy'] = $accountModifiedBy;

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


