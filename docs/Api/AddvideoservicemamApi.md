# de\addvideo\client\AddvideoservicemamApi

All URIs are relative to *https://api.addvideo.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEntry**](AddvideoservicemamApi.md#addEntry) | **POST** /addvideo/service/mam/entry/addEntry | Add a new Entry object
[**addFlavor**](AddvideoservicemamApi.md#addFlavor) | **POST** /addvideo/service/mam/flavor/addFlavor | Add a new Flavor object
[**addMAMService**](AddvideoservicemamApi.md#addMAMService) | **POST** /addvideo/service/mam/mam-service/addMAMService | Add a new MAMService object
[**addMetadata**](AddvideoservicemamApi.md#addMetadata) | **POST** /addvideo/service/mam/metadata/addMetadata | Add a new Metadata object
[**deleteEntry**](AddvideoservicemamApi.md#deleteEntry) | **DELETE** /addvideo/service/mam/entry/deleteEntry/{id} | Delete Entry object matching the given id
[**deleteFlavor**](AddvideoservicemamApi.md#deleteFlavor) | **DELETE** /addvideo/service/mam/flavor/deleteFlavor/{id} | Delete Flavor object matching the given id
[**deleteMAMService**](AddvideoservicemamApi.md#deleteMAMService) | **DELETE** /addvideo/service/mam/mam-service/deleteMAMService/{id} | Delete MAMService object matching the given id
[**deleteMetadata**](AddvideoservicemamApi.md#deleteMetadata) | **POST** /addvideo/service/mam/metadata/deleteMetadata | Delete Metadata object matching the given id
[**getEntry**](AddvideoservicemamApi.md#getEntry) | **GET** /addvideo/service/mam/entry/getEntry/{id} | Get Entry object for id
[**getFlavor**](AddvideoservicemamApi.md#getFlavor) | **GET** /addvideo/service/mam/flavor/getFlavor/{id} | Get Flavor object for id
[**getMAMService**](AddvideoservicemamApi.md#getMAMService) | **GET** /addvideo/service/mam/mam-service/getMAMService/{id} | Get MAMService object for id
[**getMetadata**](AddvideoservicemamApi.md#getMetadata) | **POST** /addvideo/service/mam/metadata/getMetadata | Get Metadata object for id
[**listEntries**](AddvideoservicemamApi.md#listEntries) | **POST** /addvideo/service/mam/entry/listEntries | List Entry objects depending on filter
[**listFlavors**](AddvideoservicemamApi.md#listFlavors) | **POST** /addvideo/service/mam/flavor/listFlavors | List Flavor objects depending on filter
[**listMAMServices**](AddvideoservicemamApi.md#listMAMServices) | **POST** /addvideo/service/mam/mam-service/listMAMServices | List MAMService objects depending on filter
[**listMetadatas**](AddvideoservicemamApi.md#listMetadatas) | **POST** /addvideo/service/mam/metadata/listMetadatas | List Metadata objects depending on filter
[**updateEntry**](AddvideoservicemamApi.md#updateEntry) | **PUT** /addvideo/service/mam/entry/updateEntry/{id} | Update Entry object
[**updateFlavor**](AddvideoservicemamApi.md#updateFlavor) | **PUT** /addvideo/service/mam/flavor/updateFlavor/{id} | Update Flavor object
[**updateMAMService**](AddvideoservicemamApi.md#updateMAMService) | **PUT** /addvideo/service/mam/mam-service/updateMAMService/{id} | Update MAMService object
[**updateMetadata**](AddvideoservicemamApi.md#updateMetadata) | **POST** /addvideo/service/mam/metadata/updateMetadata | Update Metadata object


# **addEntry**
> \de\addvideo\client\model\EntryFullDTO addEntry($body)

Add a new Entry object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$body = new \de\addvideo\client\model\EntryFullDTO(); // \de\addvideo\client\model\EntryFullDTO | Entry object that shall be added

try {
    $result = $api_instance->addEntry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->addEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\EntryFullDTO**](../Model/\de\addvideo\client\model\EntryFullDTO.md)| Entry object that shall be added |

### Return type

[**\de\addvideo\client\model\EntryFullDTO**](../Model/EntryFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFlavor**
> \de\addvideo\client\model\FlavorFullDTO addFlavor($body)

Add a new Flavor object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$body = new \de\addvideo\client\model\FlavorFullDTO(); // \de\addvideo\client\model\FlavorFullDTO | Flavor object that shall be added

try {
    $result = $api_instance->addFlavor($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->addFlavor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\FlavorFullDTO**](../Model/\de\addvideo\client\model\FlavorFullDTO.md)| Flavor object that shall be added |

### Return type

[**\de\addvideo\client\model\FlavorFullDTO**](../Model/FlavorFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMAMService**
> \de\addvideo\client\model\MAMServiceFullDTO addMAMService($body)

Add a new MAMService object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$body = new \de\addvideo\client\model\MAMServiceFullDTO(); // \de\addvideo\client\model\MAMServiceFullDTO | MAMService object that shall be added

try {
    $result = $api_instance->addMAMService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->addMAMService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\MAMServiceFullDTO**](../Model/\de\addvideo\client\model\MAMServiceFullDTO.md)| MAMService object that shall be added |

### Return type

[**\de\addvideo\client\model\MAMServiceFullDTO**](../Model/MAMServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMetadata**
> \de\addvideo\client\model\MetadataFullDTO addMetadata($body)

Add a new Metadata object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$body = new \de\addvideo\client\model\MetadataFullDTO(); // \de\addvideo\client\model\MetadataFullDTO | Metadata object that shall be added

try {
    $result = $api_instance->addMetadata($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->addMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\MetadataFullDTO**](../Model/\de\addvideo\client\model\MetadataFullDTO.md)| Metadata object that shall be added |

### Return type

[**\de\addvideo\client\model\MetadataFullDTO**](../Model/MetadataFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEntry**
> \de\addvideo\client\model\EntryFullDTO deleteEntry($id)

Delete Entry object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteEntry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->deleteEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\EntryFullDTO**](../Model/EntryFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlavor**
> \de\addvideo\client\model\FlavorFullDTO deleteFlavor($id)

Delete Flavor object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteFlavor($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->deleteFlavor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\FlavorFullDTO**](../Model/FlavorFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMAMService**
> \de\addvideo\client\model\MAMServiceFullDTO deleteMAMService($id)

Delete MAMService object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteMAMService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->deleteMAMService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\MAMServiceFullDTO**](../Model/MAMServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetadata**
> \de\addvideo\client\model\MetadataFullDTO deleteMetadata($id)

Delete Metadata object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = new \de\addvideo\client\model\EntryIdDTO(); // \de\addvideo\client\model\EntryIdDTO | 

try {
    $result = $api_instance->deleteMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->deleteMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\de\addvideo\client\model\EntryIdDTO**](../Model/\de\addvideo\client\model\EntryIdDTO.md)|  |

### Return type

[**\de\addvideo\client\model\MetadataFullDTO**](../Model/MetadataFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntry**
> \de\addvideo\client\model\EntryFullDTO getEntry($id)

Get Entry object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getEntry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->getEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\EntryFullDTO**](../Model/EntryFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlavor**
> \de\addvideo\client\model\FlavorFullDTO getFlavor($id)

Get Flavor object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getFlavor($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->getFlavor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\FlavorFullDTO**](../Model/FlavorFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMAMService**
> \de\addvideo\client\model\MAMServiceFullDTO getMAMService($id)

Get MAMService object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getMAMService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->getMAMService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\MAMServiceFullDTO**](../Model/MAMServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> \de\addvideo\client\model\MetadataFullDTO getMetadata($id)

Get Metadata object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = new \de\addvideo\client\model\EntryIdDTO(); // \de\addvideo\client\model\EntryIdDTO | 

try {
    $result = $api_instance->getMetadata($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\de\addvideo\client\model\EntryIdDTO**](../Model/\de\addvideo\client\model\EntryIdDTO.md)|  |

### Return type

[**\de\addvideo\client\model\MetadataFullDTO**](../Model/MetadataFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEntries**
> \de\addvideo\client\model\EntryFullDTOListResult listEntries($body)

List Entry objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listEntries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->listEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\EntryFullDTOListResult**](../Model/EntryFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFlavors**
> \de\addvideo\client\model\FlavorFullDTOListResult listFlavors($body)

List Flavor objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listFlavors($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->listFlavors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\FlavorFullDTOListResult**](../Model/FlavorFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMAMServices**
> \de\addvideo\client\model\MAMServiceFullDTOListResult listMAMServices($body)

List MAMService objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listMAMServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->listMAMServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\MAMServiceFullDTOListResult**](../Model/MAMServiceFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMetadatas**
> \de\addvideo\client\model\MetadataFullDTOListResult listMetadatas($body)

List Metadata objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listMetadatas($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->listMetadatas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\MetadataFullDTOListResult**](../Model/MetadataFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntry**
> \de\addvideo\client\model\EntryFullDTO updateEntry($id, $body)

Update Entry object

Looks for a  Entry object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\EntryFullDTO(); // \de\addvideo\client\model\EntryFullDTO | Entry object that shall be updated

try {
    $result = $api_instance->updateEntry($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->updateEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\EntryFullDTO**](../Model/\de\addvideo\client\model\EntryFullDTO.md)| Entry object that shall be updated |

### Return type

[**\de\addvideo\client\model\EntryFullDTO**](../Model/EntryFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFlavor**
> \de\addvideo\client\model\FlavorFullDTO updateFlavor($id, $body)

Update Flavor object

Looks for a  Flavor object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\FlavorFullDTO(); // \de\addvideo\client\model\FlavorFullDTO | Flavor object that shall be updated

try {
    $result = $api_instance->updateFlavor($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->updateFlavor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\FlavorFullDTO**](../Model/\de\addvideo\client\model\FlavorFullDTO.md)| Flavor object that shall be updated |

### Return type

[**\de\addvideo\client\model\FlavorFullDTO**](../Model/FlavorFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMAMService**
> \de\addvideo\client\model\MAMServiceFullDTO updateMAMService($id, $body)

Update MAMService object

Looks for a  MAMService object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\MAMServiceFullDTO(); // \de\addvideo\client\model\MAMServiceFullDTO | MAMService object that shall be updated

try {
    $result = $api_instance->updateMAMService($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->updateMAMService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\MAMServiceFullDTO**](../Model/\de\addvideo\client\model\MAMServiceFullDTO.md)| MAMService object that shall be updated |

### Return type

[**\de\addvideo\client\model\MAMServiceFullDTO**](../Model/MAMServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetadata**
> \de\addvideo\client\model\MetadataFullDTO updateMetadata($value)

Update Metadata object

Looks for a  Metadata object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicemamApi();
$value = new \de\addvideo\client\model\MetadataFullDTO(); // \de\addvideo\client\model\MetadataFullDTO | 

try {
    $result = $api_instance->updateMetadata($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicemamApi->updateMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | [**\de\addvideo\client\model\MetadataFullDTO**](../Model/\de\addvideo\client\model\MetadataFullDTO.md)|  |

### Return type

[**\de\addvideo\client\model\MetadataFullDTO**](../Model/MetadataFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

