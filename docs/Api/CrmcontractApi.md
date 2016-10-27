# de\addvideo\client\CrmcontractApi

All URIs are relative to *https://api.addvideo.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContract**](CrmcontractApi.md#addContract) | **POST** /crm/contract/contract/addContract | Add a new Contract object
[**addContractLine**](CrmcontractApi.md#addContractLine) | **POST** /crm/contract/contract-line/addContractLine | Add a new ContractLine object
[**addContractType**](CrmcontractApi.md#addContractType) | **POST** /crm/contract/contract-type/addContractType | Add a new ContractType object
[**addCustomer**](CrmcontractApi.md#addCustomer) | **POST** /crm/contract/customer/addCustomer | Add a new Customer object
[**deleteContract**](CrmcontractApi.md#deleteContract) | **DELETE** /crm/contract/contract/deleteContract/{id} | Delete Contract object matching the given id
[**deleteContractLine**](CrmcontractApi.md#deleteContractLine) | **DELETE** /crm/contract/contract-line/deleteContractLine/{id} | Delete ContractLine object matching the given id
[**deleteContractType**](CrmcontractApi.md#deleteContractType) | **DELETE** /crm/contract/contract-type/deleteContractType/{id} | Delete ContractType object matching the given id
[**deleteCustomer**](CrmcontractApi.md#deleteCustomer) | **DELETE** /crm/contract/customer/deleteCustomer/{id} | Delete Customer object matching the given id
[**getContract**](CrmcontractApi.md#getContract) | **GET** /crm/contract/contract/getContract/{id} | Get Contract object for id
[**getContractLine**](CrmcontractApi.md#getContractLine) | **GET** /crm/contract/contract-line/getContractLine/{id} | Get ContractLine object for id
[**getContractType**](CrmcontractApi.md#getContractType) | **GET** /crm/contract/contract-type/getContractType/{id} | Get ContractType object for id
[**getCustomer**](CrmcontractApi.md#getCustomer) | **GET** /crm/contract/customer/getCustomer/{id} | Get Customer object for id
[**listContractLines**](CrmcontractApi.md#listContractLines) | **POST** /crm/contract/contract-line/listContractLines | List ContractLine objects depending on filter
[**listContractTypes**](CrmcontractApi.md#listContractTypes) | **POST** /crm/contract/contract-type/listContractTypes | List ContractType objects depending on filter
[**listContracts**](CrmcontractApi.md#listContracts) | **POST** /crm/contract/contract/listContracts | List Contract objects depending on filter
[**listCustomers**](CrmcontractApi.md#listCustomers) | **POST** /crm/contract/customer/listCustomers | List Customer objects depending on filter
[**updateContract**](CrmcontractApi.md#updateContract) | **PUT** /crm/contract/contract/updateContract/{id} | Update Contract object
[**updateContractLine**](CrmcontractApi.md#updateContractLine) | **PUT** /crm/contract/contract-line/updateContractLine/{id} | Update ContractLine object
[**updateContractType**](CrmcontractApi.md#updateContractType) | **PUT** /crm/contract/contract-type/updateContractType/{id} | Update ContractType object
[**updateCustomer**](CrmcontractApi.md#updateCustomer) | **PUT** /crm/contract/customer/updateCustomer/{id} | Update Customer object


# **addContract**
> \de\addvideo\client\model\ContractFullDTO addContract($body)

Add a new Contract object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$body = new \de\addvideo\client\model\ContractFullDTO(); // \de\addvideo\client\model\ContractFullDTO | Contract object that shall be added

try {
    $result = $api_instance->addContract($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->addContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ContractFullDTO**](../Model/\de\addvideo\client\model\ContractFullDTO.md)| Contract object that shall be added |

### Return type

[**\de\addvideo\client\model\ContractFullDTO**](../Model/ContractFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContractLine**
> \de\addvideo\client\model\ContractLineFullDTO addContractLine($body)

Add a new ContractLine object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$body = new \de\addvideo\client\model\ContractLineFullDTO(); // \de\addvideo\client\model\ContractLineFullDTO | ContractLine object that shall be added

try {
    $result = $api_instance->addContractLine($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->addContractLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ContractLineFullDTO**](../Model/\de\addvideo\client\model\ContractLineFullDTO.md)| ContractLine object that shall be added |

### Return type

[**\de\addvideo\client\model\ContractLineFullDTO**](../Model/ContractLineFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContractType**
> \de\addvideo\client\model\ContractTypeFullDTO addContractType($body)

Add a new ContractType object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$body = new \de\addvideo\client\model\ContractTypeFullDTO(); // \de\addvideo\client\model\ContractTypeFullDTO | ContractType object that shall be added

try {
    $result = $api_instance->addContractType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->addContractType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ContractTypeFullDTO**](../Model/\de\addvideo\client\model\ContractTypeFullDTO.md)| ContractType object that shall be added |

### Return type

[**\de\addvideo\client\model\ContractTypeFullDTO**](../Model/ContractTypeFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCustomer**
> \de\addvideo\client\model\CustomerFullDTO addCustomer($body)

Add a new Customer object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$body = new \de\addvideo\client\model\CustomerFullDTO(); // \de\addvideo\client\model\CustomerFullDTO | Customer object that shall be added

try {
    $result = $api_instance->addCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->addCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\CustomerFullDTO**](../Model/\de\addvideo\client\model\CustomerFullDTO.md)| Customer object that shall be added |

### Return type

[**\de\addvideo\client\model\CustomerFullDTO**](../Model/CustomerFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContract**
> \de\addvideo\client\model\ContractFullDTO deleteContract($id)

Delete Contract object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteContract($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->deleteContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\ContractFullDTO**](../Model/ContractFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContractLine**
> \de\addvideo\client\model\ContractLineFullDTO deleteContractLine($id)

Delete ContractLine object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteContractLine($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->deleteContractLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\ContractLineFullDTO**](../Model/ContractLineFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContractType**
> \de\addvideo\client\model\ContractTypeFullDTO deleteContractType($id)

Delete ContractType object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = 789; // int | 

try {
    $result = $api_instance->deleteContractType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->deleteContractType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\ContractTypeFullDTO**](../Model/ContractTypeFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> \de\addvideo\client\model\CustomerFullDTO deleteCustomer($id)

Delete Customer object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->deleteCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\CustomerFullDTO**](../Model/CustomerFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContract**
> \de\addvideo\client\model\ContractFullDTO getContract($id)

Get Contract object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getContract($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->getContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\ContractFullDTO**](../Model/ContractFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractLine**
> \de\addvideo\client\model\ContractLineFullDTO getContractLine($id)

Get ContractLine object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getContractLine($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->getContractLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\ContractLineFullDTO**](../Model/ContractLineFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContractType**
> \de\addvideo\client\model\ContractTypeFullDTO getContractType($id)

Get ContractType object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = 789; // int | 

try {
    $result = $api_instance->getContractType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->getContractType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\ContractTypeFullDTO**](../Model/ContractTypeFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \de\addvideo\client\model\CustomerFullDTO getCustomer($id)

Get Customer object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->getCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\de\addvideo\client\model\CustomerFullDTO**](../Model/CustomerFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContractLines**
> \de\addvideo\client\model\ContractLineFullDTOListResult listContractLines($body)

List ContractLine objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listContractLines($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->listContractLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\ContractLineFullDTOListResult**](../Model/ContractLineFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContractTypes**
> \de\addvideo\client\model\ContractTypeFullDTOListResult listContractTypes($body)

List ContractType objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listContractTypes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->listContractTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\ContractTypeFullDTOListResult**](../Model/ContractTypeFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContracts**
> \de\addvideo\client\model\ContractFullDTOListResult listContracts($body)

List Contract objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listContracts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->listContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\ContractFullDTOListResult**](../Model/ContractFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomers**
> \de\addvideo\client\model\CustomerFullDTOListResult listCustomers($body)

List Customer objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listCustomers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\CustomerFullDTOListResult**](../Model/CustomerFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContract**
> \de\addvideo\client\model\ContractFullDTO updateContract($id, $body)

Update Contract object

Looks for a  Contract object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\ContractFullDTO(); // \de\addvideo\client\model\ContractFullDTO | Contract object that shall be updated

try {
    $result = $api_instance->updateContract($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->updateContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\ContractFullDTO**](../Model/\de\addvideo\client\model\ContractFullDTO.md)| Contract object that shall be updated |

### Return type

[**\de\addvideo\client\model\ContractFullDTO**](../Model/ContractFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContractLine**
> \de\addvideo\client\model\ContractLineFullDTO updateContractLine($id, $body)

Update ContractLine object

Looks for a  ContractLine object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\ContractLineFullDTO(); // \de\addvideo\client\model\ContractLineFullDTO | ContractLine object that shall be updated

try {
    $result = $api_instance->updateContractLine($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->updateContractLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\ContractLineFullDTO**](../Model/\de\addvideo\client\model\ContractLineFullDTO.md)| ContractLine object that shall be updated |

### Return type

[**\de\addvideo\client\model\ContractLineFullDTO**](../Model/ContractLineFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContractType**
> \de\addvideo\client\model\ContractTypeFullDTO updateContractType($id, $body)

Update ContractType object

Looks for a  ContractType object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = 789; // int | 
$body = new \de\addvideo\client\model\ContractTypeFullDTO(); // \de\addvideo\client\model\ContractTypeFullDTO | ContractType object that shall be updated

try {
    $result = $api_instance->updateContractType($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->updateContractType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\de\addvideo\client\model\ContractTypeFullDTO**](../Model/\de\addvideo\client\model\ContractTypeFullDTO.md)| ContractType object that shall be updated |

### Return type

[**\de\addvideo\client\model\ContractTypeFullDTO**](../Model/ContractTypeFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \de\addvideo\client\model\CustomerFullDTO updateCustomer($id, $body)

Update Customer object

Looks for a  Customer object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontractApi();
$id = "id_example"; // string | 
$body = new \de\addvideo\client\model\CustomerFullDTO(); // \de\addvideo\client\model\CustomerFullDTO | Customer object that shall be updated

try {
    $result = $api_instance->updateCustomer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontractApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\de\addvideo\client\model\CustomerFullDTO**](../Model/\de\addvideo\client\model\CustomerFullDTO.md)| Customer object that shall be updated |

### Return type

[**\de\addvideo\client\model\CustomerFullDTO**](../Model/CustomerFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

