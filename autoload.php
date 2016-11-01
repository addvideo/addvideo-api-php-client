<?php

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
 * An example of a project-specific implementation.
 *
 * After registering this autoload function with SPL, the following line
 * would cause the function to attempt to load the \de\addvideo\client\Baz\Qux class
 * from /path/to/project/src/Baz/Qux.php:
 *
 *      new \de\addvideo\client\Baz\Qux;
 *
 * @param string $class The fully-qualified class name.
 *
 * @return void
 */
spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'de\\addvideo\\client\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
