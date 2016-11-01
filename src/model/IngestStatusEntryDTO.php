<?php
/**
 * IngestStatusEntryDTO
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
 * IngestStatusEntryDTO Class Doc Comment
 *
 * @category    Class */
 // @description Entry in ingest status list.
/** 
 * @package     de\addvideo\client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IngestStatusEntryDTO implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'IngestStatusEntryDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'externalReferenceId' => 'string',
        'sourceUrl' => 'string',
        'webhook' => 'string',
        'status' => 'string',
        'statusLog' => 'string[]',
        'entry' => '\de\addvideo\client\model\EntryIdDTO',
        'webhookLog' => 'string[]'
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
        'webhook' => 'webhook',
        'status' => 'status',
        'statusLog' => 'status-log',
        'entry' => 'entry',
        'webhookLog' => 'webhook-log'
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
        'webhook' => 'setWebhook',
        'status' => 'setStatus',
        'statusLog' => 'setStatusLog',
        'entry' => 'setEntry',
        'webhookLog' => 'setWebhookLog'
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
        'webhook' => 'getWebhook',
        'status' => 'getStatus',
        'statusLog' => 'getStatusLog',
        'entry' => 'getEntry',
        'webhookLog' => 'getWebhookLog'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_READY = 'READY';
    const STATUS_FLAVOR_READY = 'FLAVOR_READY';
    const STATUS_CONVERTING = 'CONVERTING';
    const STATUS_ERROR = 'ERROR';
    const STATUS_INGESTING = 'INGESTING';
    const STATUS_WAITING = 'WAITING';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_READY,
            self::STATUS_FLAVOR_READY,
            self::STATUS_CONVERTING,
            self::STATUS_ERROR,
            self::STATUS_INGESTING,
            self::STATUS_WAITING,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusLog'] = isset($data['statusLog']) ? $data['statusLog'] : null;
        $this->container['entry'] = isset($data['entry']) ? $data['entry'] : null;
        $this->container['webhookLog'] = isset($data['webhookLog']) ? $data['webhookLog'] : null;
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
        $allowed_values = array("READY", "FLAVOR_READY", "CONVERTING", "ERROR", "INGESTING", "WAITING");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
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
        $allowed_values = array("READY", "FLAVOR_READY", "CONVERTING", "ERROR", "INGESTING", "WAITING");
        if (!in_array($this->container['status'], $allowed_values)) {
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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of this ingest entry. READ ONLY!
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('READY', 'FLAVOR_READY', 'CONVERTING', 'ERROR', 'INGESTING', 'WAITING');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'READY', 'FLAVOR_READY', 'CONVERTING', 'ERROR', 'INGESTING', 'WAITING'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusLog
     * @return string[]
     */
    public function getStatusLog()
    {
        return $this->container['statusLog'];
    }

    /**
     * Sets statusLog
     * @param string[] $statusLog More detailed information on current status. READ ONLY!
     * @return $this
     */
    public function setStatusLog($statusLog)
    {
        $this->container['statusLog'] = $statusLog;

        return $this;
    }

    /**
     * Gets entry
     * @return \de\addvideo\client\model\EntryIdDTO
     */
    public function getEntry()
    {
        return $this->container['entry'];
    }

    /**
     * Sets entry
     * @param \de\addvideo\client\model\EntryIdDTO $entry Reference to internal entry. Only set if MAM services are available for the account used and enabled.
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->container['entry'] = $entry;

        return $this;
    }

    /**
     * Gets webhookLog
     * @return string[]
     */
    public function getWebhookLog()
    {
        return $this->container['webhookLog'];
    }

    /**
     * Sets webhookLog
     * @param string[] $webhookLog Containing information on webhook activities. READ ONLY!
     * @return $this
     */
    public function setWebhookLog($webhookLog)
    {
        $this->container['webhookLog'] = $webhookLog;

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


