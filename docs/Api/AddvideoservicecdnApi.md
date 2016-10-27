# de\addvideo\client\AddvideoservicecdnApi

All URIs are relative to *https://api.addvideo.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCDN**](AddvideoservicecdnApi.md#addCDN) | **POST** /addvideo/service/cdn/cdn/addCDN | Add a new CDN object
[**addCDNAccount**](AddvideoservicecdnApi.md#addCDNAccount) | **POST** /addvideo/service/cdn/cdn-account/addCDNAccount | Add a new CDNAccount object
[**addCDNService**](AddvideoservicecdnApi.md#addCDNService) | **POST** /addvideo/service/cdn/cdn-service/addCDNService | Add a new CDNService object
[**deleteCDN**](AddvideoservicecdnApi.md#deleteCDN) | **DELETE** /addvideo/service/cdn/cdn/deleteCDN/{id} | Delete CDN object matching the given id
[**deleteCDNAccount**](AddvideoservicecdnApi.md#deleteCDNAccount) | **DELETE** /addvideo/service/cdn/cdn-account/deleteCDNAccount/{id} | Delete CDNAccount object matching the given id
[**deleteCDNService**](AddvideoservicecdnApi.md#deleteCDNService) | **DELETE** /addvideo/service/cdn/cdn-service/deleteCDNService/{id} | Delete CDNService object matching the given id
[**getCDN**](AddvideoservicecdnApi.md#getCDN) | **GET** /addvideo/service/cdn/cdn/getCDN/{id} | Get CDN object for id
[**getCDNAccount**](AddvideoservicecdnApi.md#getCDNAccount) | **GET** /addvideo/service/cdn/cdn-account/getCDNAccount/{id} | Get CDNAccount object for id
[**getCDNService**](AddvideoservicecdnApi.md#getCDNService) | **GET** /addvideo/service/cdn/cdn-service/getCDNService/{id} | Get CDNService object for id
[**listCDNAccounts**](AddvideoservicecdnApi.md#listCDNAccounts) | **POST** /addvideo/service/cdn/cdn-account/listCDNAccounts | List CDNAccount objects depending on filter
[**listCDNServices**](AddvideoservicecdnApi.md#listCDNServices) | **POST** /addvideo/service/cdn/cdn-service/listCDNServices | List CDNService objects depending on filter
[**listCDNs**](AddvideoservicecdnApi.md#listCDNs) | **POST** /addvideo/service/cdn/cdn/listCDNs | List CDN objects depending on filter
[**updateCDN**](AddvideoservicecdnApi.md#updateCDN) | **PUT** /addvideo/service/cdn/cdn/updateCDN/{id} | Update CDN object
[**updateCDNAccount**](AddvideoservicecdnApi.md#updateCDNAccount) | **PUT** /addvideo/service/cdn/cdn-account/updateCDNAccount/{id} | Update CDNAccount object
[**updateCDNService**](AddvideoservicecdnApi.md#updateCDNService) | **PUT** /addvideo/service/cdn/cdn-service/updateCDNService/{id} | Update CDNService object


# **addCDN**
> \de\addvideo\client\model\CDNFullDTO addCDN($body)

Add a new CDN object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$body = new \de\addvideo\client\model\CDNFullDTO(); // \de\addvideo\client\model\CDNFullDTO | CDN object that shall be added

try {
    $result = $api_instance->addCDN($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->addCDN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\CDNFullDTO**](../Model/\de\addvideo\client\model\CDNFullDTO.md)| CDN object that shall be added |

### Return type

[**\de\addvideo\client\model\CDNFullDTO**](../Model/CDNFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCDNAccount**
> \de\addvideo\client\model\CDNAccountFullDTO addCDNAccount($body)

Add a new CDNAccount object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$body = new \de\addvideo\client\model\CDNAccountFullDTO(); // \de\addvideo\client\model\CDNAccountFullDTO | CDNAccount object that shall be added

try {
    $result = $api_instance->addCDNAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->addCDNAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\CDNAccountFullDTO**](../Model/\de\addvideo\client\model\CDNAccountFullDTO.md)| CDNAccount object that shall be added |

### Return type

[**\de\addvideo\client\model\CDNAccountFullDTO**](../Model/CDNAccountFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCDNService**
> \de\addvideo\client\model\CDNServiceFullDTO addCDNService($body)

Add a new CDNService object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$body = new \de\addvideo\client\model\CDNServiceFullDTO(); // \de\addvideo\client\model\CDNServiceFullDTO | CDNService object that shall be added

try {
    $result = $api_instance->addCDNService($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->addCDNService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\CDNServiceFullDTO**](../Model/\de\addvideo\client\model\CDNServiceFullDTO.md)| CDNService object that shall be added |

### Return type

[**\de\addvideo\client\model\CDNServiceFullDTO**](../Model/CDNServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCDN**
> \de\addvideo\client\model\CDNFullDTO deleteCDN($id)

Delete CDN object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteCDN($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->deleteCDN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\CDNFullDTO**](../Model/CDNFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCDNAccount**
> \de\addvideo\client\model\CDNAccountFullDTO deleteCDNAccount($id)

Delete CDNAccount object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteCDNAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->deleteCDNAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\CDNAccountFullDTO**](../Model/CDNAccountFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCDNService**
> \de\addvideo\client\model\CDNServiceFullDTO deleteCDNService($id)

Delete CDNService object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteCDNService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->deleteCDNService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\CDNServiceFullDTO**](../Model/CDNServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCDN**
> \de\addvideo\client\model\CDNFullDTO getCDN($id)

Get CDN object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getCDN($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->getCDN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\CDNFullDTO**](../Model/CDNFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCDNAccount**
> \de\addvideo\client\model\CDNAccountFullDTO getCDNAccount($id)

Get CDNAccount object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getCDNAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->getCDNAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\CDNAccountFullDTO**](../Model/CDNAccountFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCDNService**
> \de\addvideo\client\model\CDNServiceFullDTO getCDNService($id)

Get CDNService object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getCDNService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->getCDNService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\CDNServiceFullDTO**](../Model/CDNServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCDNAccounts**
> \de\addvideo\client\model\CDNAccountFullDTOListResult listCDNAccounts($body)

List CDNAccount objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listCDNAccounts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->listCDNAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\CDNAccountFullDTOListResult**](../Model/CDNAccountFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCDNServices**
> \de\addvideo\client\model\CDNServiceFullDTOListResult listCDNServices($body)

List CDNService objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listCDNServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->listCDNServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\CDNServiceFullDTOListResult**](../Model/CDNServiceFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCDNs**
> \de\addvideo\client\model\CDNFullDTOListResult listCDNs($body)

List CDN objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listCDNs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->listCDNs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\CDNFullDTOListResult**](../Model/CDNFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCDN**
> \de\addvideo\client\model\CDNFullDTO updateCDN($id, $body)

Update CDN object

Looks for a  CDN object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\CDNFullDTO(); // \de\addvideo\client\model\CDNFullDTO | CDN object that shall be updated

try {
    $result = $api_instance->updateCDN($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->updateCDN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\CDNFullDTO**](../Model/\de\addvideo\client\model\CDNFullDTO.md)| CDN object that shall be updated |

### Return type

[**\de\addvideo\client\model\CDNFullDTO**](../Model/CDNFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCDNAccount**
> \de\addvideo\client\model\CDNAccountFullDTO updateCDNAccount($id, $body)

Update CDNAccount object

Looks for a  CDNAccount object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\CDNAccountFullDTO(); // \de\addvideo\client\model\CDNAccountFullDTO | CDNAccount object that shall be updated

try {
    $result = $api_instance->updateCDNAccount($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->updateCDNAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\CDNAccountFullDTO**](../Model/\de\addvideo\client\model\CDNAccountFullDTO.md)| CDNAccount object that shall be updated |

### Return type

[**\de\addvideo\client\model\CDNAccountFullDTO**](../Model/CDNAccountFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCDNService**
> \de\addvideo\client\model\CDNServiceFullDTO updateCDNService($id, $body)

Update CDNService object

Looks for a  CDNService object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoservicecdnApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\CDNServiceFullDTO(); // \de\addvideo\client\model\CDNServiceFullDTO | CDNService object that shall be updated

try {
    $result = $api_instance->updateCDNService($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoservicecdnApi->updateCDNService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\CDNServiceFullDTO**](../Model/\de\addvideo\client\model\CDNServiceFullDTO.md)| CDNService object that shall be updated |

### Return type

[**\de\addvideo\client\model\CDNServiceFullDTO**](../Model/CDNServiceFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

