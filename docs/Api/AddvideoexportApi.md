# de\addvideo\client\AddvideoexportApi

All URIs are relative to *https://api.addvideo.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFTPCompletedExport**](AddvideoexportApi.md#addFTPCompletedExport) | **POST** /addvideo/export/ftp-completed-export/addFTPCompletedExport | Add a new FTPCompletedExport object
[**addFTPExportConfig**](AddvideoexportApi.md#addFTPExportConfig) | **POST** /addvideo/export/ftp-export-config/addFTPExportConfig | Add a new FTPExportConfig object
[**addS3CompletedExport**](AddvideoexportApi.md#addS3CompletedExport) | **POST** /addvideo/export/s3-completed-export/addS3CompletedExport | Add a new S3CompletedExport object
[**addS3ExportConfig**](AddvideoexportApi.md#addS3ExportConfig) | **POST** /addvideo/export/s3-export-config/addS3ExportConfig | Add a new S3ExportConfig object
[**deleteFTPCompletedExport**](AddvideoexportApi.md#deleteFTPCompletedExport) | **DELETE** /addvideo/export/ftp-completed-export/deleteFTPCompletedExport/{id} | Delete FTPCompletedExport object matching the given id
[**deleteFTPExportConfig**](AddvideoexportApi.md#deleteFTPExportConfig) | **DELETE** /addvideo/export/ftp-export-config/deleteFTPExportConfig/{id} | Delete FTPExportConfig object matching the given id
[**deleteS3CompletedExport**](AddvideoexportApi.md#deleteS3CompletedExport) | **DELETE** /addvideo/export/s3-completed-export/deleteS3CompletedExport/{id} | Delete S3CompletedExport object matching the given id
[**deleteS3ExportConfig**](AddvideoexportApi.md#deleteS3ExportConfig) | **DELETE** /addvideo/export/s3-export-config/deleteS3ExportConfig/{id} | Delete S3ExportConfig object matching the given id
[**getFTPCompletedExport**](AddvideoexportApi.md#getFTPCompletedExport) | **GET** /addvideo/export/ftp-completed-export/getFTPCompletedExport/{id} | Get FTPCompletedExport object for id
[**getFTPExportConfig**](AddvideoexportApi.md#getFTPExportConfig) | **GET** /addvideo/export/ftp-export-config/getFTPExportConfig/{id} | Get FTPExportConfig object for id
[**getS3CompletedExport**](AddvideoexportApi.md#getS3CompletedExport) | **GET** /addvideo/export/s3-completed-export/getS3CompletedExport/{id} | Get S3CompletedExport object for id
[**getS3ExportConfig**](AddvideoexportApi.md#getS3ExportConfig) | **GET** /addvideo/export/s3-export-config/getS3ExportConfig/{id} | Get S3ExportConfig object for id
[**listFTPCompletedExports**](AddvideoexportApi.md#listFTPCompletedExports) | **POST** /addvideo/export/ftp-completed-export/listFTPCompletedExports | List FTPCompletedExport objects depending on filter
[**listFTPExportConfigs**](AddvideoexportApi.md#listFTPExportConfigs) | **POST** /addvideo/export/ftp-export-config/listFTPExportConfigs | List FTPExportConfig objects depending on filter
[**listS3CompletedExports**](AddvideoexportApi.md#listS3CompletedExports) | **POST** /addvideo/export/s3-completed-export/listS3CompletedExports | List S3CompletedExport objects depending on filter
[**listS3ExportConfigs**](AddvideoexportApi.md#listS3ExportConfigs) | **POST** /addvideo/export/s3-export-config/listS3ExportConfigs | List S3ExportConfig objects depending on filter
[**updateFTPCompletedExport**](AddvideoexportApi.md#updateFTPCompletedExport) | **PUT** /addvideo/export/ftp-completed-export/updateFTPCompletedExport/{id} | Update FTPCompletedExport object
[**updateFTPExportConfig**](AddvideoexportApi.md#updateFTPExportConfig) | **PUT** /addvideo/export/ftp-export-config/updateFTPExportConfig/{id} | Update FTPExportConfig object
[**updateS3CompletedExport**](AddvideoexportApi.md#updateS3CompletedExport) | **PUT** /addvideo/export/s3-completed-export/updateS3CompletedExport/{id} | Update S3CompletedExport object
[**updateS3ExportConfig**](AddvideoexportApi.md#updateS3ExportConfig) | **PUT** /addvideo/export/s3-export-config/updateS3ExportConfig/{id} | Update S3ExportConfig object


# **addFTPCompletedExport**
> \de\addvideo\client\model\FTPCompletedExportFullDTO addFTPCompletedExport($body)

Add a new FTPCompletedExport object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$body = new \de\addvideo\client\model\FTPCompletedExportFullDTO(); // \de\addvideo\client\model\FTPCompletedExportFullDTO | FTPCompletedExport object that shall be added

try {
    $result = $api_instance->addFTPCompletedExport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->addFTPCompletedExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\FTPCompletedExportFullDTO**](../Model/\de\addvideo\client\model\FTPCompletedExportFullDTO.md)| FTPCompletedExport object that shall be added |

### Return type

[**\de\addvideo\client\model\FTPCompletedExportFullDTO**](../Model/FTPCompletedExportFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFTPExportConfig**
> \de\addvideo\client\model\FTPExportConfigFullDTO addFTPExportConfig($body)

Add a new FTPExportConfig object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$body = new \de\addvideo\client\model\FTPExportConfigFullDTO(); // \de\addvideo\client\model\FTPExportConfigFullDTO | FTPExportConfig object that shall be added

try {
    $result = $api_instance->addFTPExportConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->addFTPExportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\FTPExportConfigFullDTO**](../Model/\de\addvideo\client\model\FTPExportConfigFullDTO.md)| FTPExportConfig object that shall be added |

### Return type

[**\de\addvideo\client\model\FTPExportConfigFullDTO**](../Model/FTPExportConfigFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addS3CompletedExport**
> \de\addvideo\client\model\S3CompletedExportFullDTO addS3CompletedExport($body)

Add a new S3CompletedExport object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$body = new \de\addvideo\client\model\S3CompletedExportFullDTO(); // \de\addvideo\client\model\S3CompletedExportFullDTO | S3CompletedExport object that shall be added

try {
    $result = $api_instance->addS3CompletedExport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->addS3CompletedExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\S3CompletedExportFullDTO**](../Model/\de\addvideo\client\model\S3CompletedExportFullDTO.md)| S3CompletedExport object that shall be added |

### Return type

[**\de\addvideo\client\model\S3CompletedExportFullDTO**](../Model/S3CompletedExportFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addS3ExportConfig**
> \de\addvideo\client\model\S3ExportConfigFullDTO addS3ExportConfig($body)

Add a new S3ExportConfig object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$body = new \de\addvideo\client\model\S3ExportConfigFullDTO(); // \de\addvideo\client\model\S3ExportConfigFullDTO | S3ExportConfig object that shall be added

try {
    $result = $api_instance->addS3ExportConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->addS3ExportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\S3ExportConfigFullDTO**](../Model/\de\addvideo\client\model\S3ExportConfigFullDTO.md)| S3ExportConfig object that shall be added |

### Return type

[**\de\addvideo\client\model\S3ExportConfigFullDTO**](../Model/S3ExportConfigFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFTPCompletedExport**
> \de\addvideo\client\model\FTPCompletedExportFullDTO deleteFTPCompletedExport($id)

Delete FTPCompletedExport object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteFTPCompletedExport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->deleteFTPCompletedExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\FTPCompletedExportFullDTO**](../Model/FTPCompletedExportFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFTPExportConfig**
> \de\addvideo\client\model\FTPExportConfigFullDTO deleteFTPExportConfig($id)

Delete FTPExportConfig object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteFTPExportConfig($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->deleteFTPExportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\FTPExportConfigFullDTO**](../Model/FTPExportConfigFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteS3CompletedExport**
> \de\addvideo\client\model\S3CompletedExportFullDTO deleteS3CompletedExport($id)

Delete S3CompletedExport object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteS3CompletedExport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->deleteS3CompletedExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\S3CompletedExportFullDTO**](../Model/S3CompletedExportFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteS3ExportConfig**
> \de\addvideo\client\model\S3ExportConfigFullDTO deleteS3ExportConfig($id)

Delete S3ExportConfig object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteS3ExportConfig($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->deleteS3ExportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\S3ExportConfigFullDTO**](../Model/S3ExportConfigFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFTPCompletedExport**
> \de\addvideo\client\model\FTPCompletedExportFullDTO getFTPCompletedExport($id)

Get FTPCompletedExport object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getFTPCompletedExport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->getFTPCompletedExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\FTPCompletedExportFullDTO**](../Model/FTPCompletedExportFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFTPExportConfig**
> \de\addvideo\client\model\FTPExportConfigFullDTO getFTPExportConfig($id)

Get FTPExportConfig object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getFTPExportConfig($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->getFTPExportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\FTPExportConfigFullDTO**](../Model/FTPExportConfigFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getS3CompletedExport**
> \de\addvideo\client\model\S3CompletedExportFullDTO getS3CompletedExport($id)

Get S3CompletedExport object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getS3CompletedExport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->getS3CompletedExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\S3CompletedExportFullDTO**](../Model/S3CompletedExportFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getS3ExportConfig**
> \de\addvideo\client\model\S3ExportConfigFullDTO getS3ExportConfig($id)

Get S3ExportConfig object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getS3ExportConfig($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->getS3ExportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\S3ExportConfigFullDTO**](../Model/S3ExportConfigFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFTPCompletedExports**
> \de\addvideo\client\model\FTPCompletedExportFullDTOListResult listFTPCompletedExports($body)

List FTPCompletedExport objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listFTPCompletedExports($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->listFTPCompletedExports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\FTPCompletedExportFullDTOListResult**](../Model/FTPCompletedExportFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFTPExportConfigs**
> \de\addvideo\client\model\FTPExportConfigFullDTOListResult listFTPExportConfigs($body)

List FTPExportConfig objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listFTPExportConfigs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->listFTPExportConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\FTPExportConfigFullDTOListResult**](../Model/FTPExportConfigFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listS3CompletedExports**
> \de\addvideo\client\model\S3CompletedExportFullDTOListResult listS3CompletedExports($body)

List S3CompletedExport objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listS3CompletedExports($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->listS3CompletedExports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\S3CompletedExportFullDTOListResult**](../Model/S3CompletedExportFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listS3ExportConfigs**
> \de\addvideo\client\model\S3ExportConfigFullDTOListResult listS3ExportConfigs($body)

List S3ExportConfig objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listS3ExportConfigs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->listS3ExportConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\S3ExportConfigFullDTOListResult**](../Model/S3ExportConfigFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFTPCompletedExport**
> \de\addvideo\client\model\FTPCompletedExportFullDTO updateFTPCompletedExport($id, $body)

Update FTPCompletedExport object

Looks for a  FTPCompletedExport object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\FTPCompletedExportFullDTO(); // \de\addvideo\client\model\FTPCompletedExportFullDTO | FTPCompletedExport object that shall be updated

try {
    $result = $api_instance->updateFTPCompletedExport($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->updateFTPCompletedExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\FTPCompletedExportFullDTO**](../Model/\de\addvideo\client\model\FTPCompletedExportFullDTO.md)| FTPCompletedExport object that shall be updated |

### Return type

[**\de\addvideo\client\model\FTPCompletedExportFullDTO**](../Model/FTPCompletedExportFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFTPExportConfig**
> \de\addvideo\client\model\FTPExportConfigFullDTO updateFTPExportConfig($id, $body)

Update FTPExportConfig object

Looks for a  FTPExportConfig object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\FTPExportConfigFullDTO(); // \de\addvideo\client\model\FTPExportConfigFullDTO | FTPExportConfig object that shall be updated

try {
    $result = $api_instance->updateFTPExportConfig($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->updateFTPExportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\FTPExportConfigFullDTO**](../Model/\de\addvideo\client\model\FTPExportConfigFullDTO.md)| FTPExportConfig object that shall be updated |

### Return type

[**\de\addvideo\client\model\FTPExportConfigFullDTO**](../Model/FTPExportConfigFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateS3CompletedExport**
> \de\addvideo\client\model\S3CompletedExportFullDTO updateS3CompletedExport($id, $body)

Update S3CompletedExport object

Looks for a  S3CompletedExport object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\S3CompletedExportFullDTO(); // \de\addvideo\client\model\S3CompletedExportFullDTO | S3CompletedExport object that shall be updated

try {
    $result = $api_instance->updateS3CompletedExport($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->updateS3CompletedExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\S3CompletedExportFullDTO**](../Model/\de\addvideo\client\model\S3CompletedExportFullDTO.md)| S3CompletedExport object that shall be updated |

### Return type

[**\de\addvideo\client\model\S3CompletedExportFullDTO**](../Model/S3CompletedExportFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateS3ExportConfig**
> \de\addvideo\client\model\S3ExportConfigFullDTO updateS3ExportConfig($id, $body)

Update S3ExportConfig object

Looks for a  S3ExportConfig object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoexportApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\S3ExportConfigFullDTO(); // \de\addvideo\client\model\S3ExportConfigFullDTO | S3ExportConfig object that shall be updated

try {
    $result = $api_instance->updateS3ExportConfig($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoexportApi->updateS3ExportConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\S3ExportConfigFullDTO**](../Model/\de\addvideo\client\model\S3ExportConfigFullDTO.md)| S3ExportConfig object that shall be updated |

### Return type

[**\de\addvideo\client\model\S3ExportConfigFullDTO**](../Model/S3ExportConfigFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

