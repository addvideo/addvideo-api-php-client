# de\addvideo\client\AddvideoserviceencodingApi

All URIs are relative to *https://api.addvideo.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEncodingService**](AddvideoserviceencodingApi.md#addEncodingService) | **POST** /addvideo/service/encoding/encoding-service/addEncodingService | Add a new EncodingService object
[**addFFMPEGEncodingFlavor**](AddvideoserviceencodingApi.md#addFFMPEGEncodingFlavor) | **POST** /addvideo/service/encoding/ffmpeg-encoding-flavor/addFFMPEGEncodingFlavor | Add a new FFMPEGEncodingFlavor object
[**deleteEncodingService**](AddvideoserviceencodingApi.md#deleteEncodingService) | **DELETE** /addvideo/service/encoding/encoding-service/deleteEncodingService/{id} | Delete EncodingService object matching the given id
[**deleteFFMPEGEncodingFlavor**](AddvideoserviceencodingApi.md#deleteFFMPEGEncodingFlavor) | **DELETE** /addvideo/service/encoding/ffmpeg-encoding-flavor/deleteFFMPEGEncodingFlavor/{id} | Delete FFMPEGEncodingFlavor object matching the given id
[**getEncodingService**](AddvideoserviceencodingApi.md#getEncodingService) | **GET** /addvideo/service/encoding/encoding-service/getEncodingService/{id} | Get EncodingService object for id
[**getFFMPEGEncodingFlavor**](AddvideoserviceencodingApi.md#getFFMPEGEncodingFlavor) | **GET** /addvideo/service/encoding/ffmpeg-encoding-flavor/getFFMPEGEncodingFlavor/{id} | Get FFMPEGEncodingFlavor object for id
[**listEncodingServices**](AddvideoserviceencodingApi.md#listEncodingServices) | **POST** /addvideo/service/encoding/encoding-service/listEncodingServices | List EncodingService objects depending on filter
[**listFFMPEGEncodingFlavors**](AddvideoserviceencodingApi.md#listFFMPEGEncodingFlavors) | **POST** /addvideo/service/encoding/ffmpeg-encoding-flavor/listFFMPEGEncodingFlavors | List FFMPEGEncodingFlavor objects depending on filter
[**updateEncodingService**](AddvideoserviceencodingApi.md#updateEncodingService) | **PUT** /addvideo/service/encoding/encoding-service/updateEncodingService/{id} | Update EncodingService object
[**updateFFMPEGEncodingFlavor**](AddvideoserviceencodingApi.md#updateFFMPEGEncodingFlavor) | **PUT** /addvideo/service/encoding/ffmpeg-encoding-flavor/updateFFMPEGEncodingFlavor/{id} | Update FFMPEGEncodingFlavor object


# **addEncodingService**
> \de\addvideo\client\model\EncodingServiceFullDTO addEncodingService($body)

Add a new EncodingService object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$body = new \de\addvideo\client\model\EncodingServiceFullDTO(); // \de\addvideo\client\model\EncodingServiceFullDTO | EncodingService object that shall be added

try {
    $result = $api_instance->addEncodingService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->addEncodingService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\EncodingServiceFullDTO**](../Model/\de\addvideo\client\model\EncodingServiceFullDTO.md)| EncodingService object that shall be added |

### Return type

[**\de\addvideo\client\model\EncodingServiceFullDTO**](../Model/EncodingServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFFMPEGEncodingFlavor**
> \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO addFFMPEGEncodingFlavor($body)

Add a new FFMPEGEncodingFlavor object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$body = new \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO(); // \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO | FFMPEGEncodingFlavor object that shall be added

try {
    $result = $api_instance->addFFMPEGEncodingFlavor($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->addFFMPEGEncodingFlavor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO**](../Model/\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO.md)| FFMPEGEncodingFlavor object that shall be added |

### Return type

[**\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO**](../Model/FFMPEGEncodingFlavorFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEncodingService**
> \de\addvideo\client\model\EncodingServiceFullDTO deleteEncodingService($id)

Delete EncodingService object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteEncodingService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->deleteEncodingService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\EncodingServiceFullDTO**](../Model/EncodingServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFFMPEGEncodingFlavor**
> \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO deleteFFMPEGEncodingFlavor($id)

Delete FFMPEGEncodingFlavor object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteFFMPEGEncodingFlavor($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->deleteFFMPEGEncodingFlavor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO**](../Model/FFMPEGEncodingFlavorFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEncodingService**
> \de\addvideo\client\model\EncodingServiceFullDTO getEncodingService($id)

Get EncodingService object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getEncodingService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->getEncodingService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\EncodingServiceFullDTO**](../Model/EncodingServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFFMPEGEncodingFlavor**
> \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO getFFMPEGEncodingFlavor($id)

Get FFMPEGEncodingFlavor object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getFFMPEGEncodingFlavor($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->getFFMPEGEncodingFlavor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO**](../Model/FFMPEGEncodingFlavorFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEncodingServices**
> \de\addvideo\client\model\EncodingServiceFullDTOListResult listEncodingServices($body)

List EncodingService objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listEncodingServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->listEncodingServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\EncodingServiceFullDTOListResult**](../Model/EncodingServiceFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFFMPEGEncodingFlavors**
> \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTOListResult listFFMPEGEncodingFlavors($body)

List FFMPEGEncodingFlavor objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listFFMPEGEncodingFlavors($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->listFFMPEGEncodingFlavors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTOListResult**](../Model/FFMPEGEncodingFlavorFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEncodingService**
> \de\addvideo\client\model\EncodingServiceFullDTO updateEncodingService($id, $body)

Update EncodingService object

Looks for a  EncodingService object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\EncodingServiceFullDTO(); // \de\addvideo\client\model\EncodingServiceFullDTO | EncodingService object that shall be updated

try {
    $result = $api_instance->updateEncodingService($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->updateEncodingService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\EncodingServiceFullDTO**](../Model/\de\addvideo\client\model\EncodingServiceFullDTO.md)| EncodingService object that shall be updated |

### Return type

[**\de\addvideo\client\model\EncodingServiceFullDTO**](../Model/EncodingServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFFMPEGEncodingFlavor**
> \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO updateFFMPEGEncodingFlavor($id, $body)

Update FFMPEGEncodingFlavor object

Looks for a  FFMPEGEncodingFlavor object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoserviceencodingApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO(); // \de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO | FFMPEGEncodingFlavor object that shall be updated

try {
    $result = $api_instance->updateFFMPEGEncodingFlavor($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoserviceencodingApi->updateFFMPEGEncodingFlavor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO**](../Model/\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO.md)| FFMPEGEncodingFlavor object that shall be updated |

### Return type

[**\de\addvideo\client\model\FFMPEGEncodingFlavorFullDTO**](../Model/FFMPEGEncodingFlavorFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

