<?php

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
