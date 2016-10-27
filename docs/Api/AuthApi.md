# de\addvideo\client\AuthApi

All URIs are relative to *https://api.addvideo.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAccountSecret**](AuthApi.md#addAccountSecret) | **POST** /auth/account-secret/addAccountSecret | Add a new AccountSecret object
[**addRole**](AuthApi.md#addRole) | **POST** /auth/role/addRole | Add a new Role object
[**authenticate**](AuthApi.md#authenticate) | **POST** /auth/session/authenticate | Authenticates credentials.
[**deleteAccountSecret**](AuthApi.md#deleteAccountSecret) | **POST** /auth/account-secret/deleteAccountSecret | Delete AccountSecret object matching the given id
[**deleteRole**](AuthApi.md#deleteRole) | **DELETE** /auth/role/deleteRole/{id} | Delete Role object matching the given id
[**getAccountSecret**](AuthApi.md#getAccountSecret) | **POST** /auth/account-secret/getAccountSecret | Get AccountSecret object for id
[**getRole**](AuthApi.md#getRole) | **GET** /auth/role/getRole/{id} | Get Role object for id
[**listAccountSecrets**](AuthApi.md#listAccountSecrets) | **POST** /auth/account-secret/listAccountSecrets | List AccountSecret objects depending on filter
[**listRoles**](AuthApi.md#listRoles) | **POST** /auth/role/listRoles | List Role objects depending on filter
[**updateAccountSecret**](AuthApi.md#updateAccountSecret) | **POST** /auth/account-secret/updateAccountSecret | Update AccountSecret object
[**updateRole**](AuthApi.md#updateRole) | **PUT** /auth/role/updateRole/{id} | Update Role object


# **addAccountSecret**
> \de\addvideo\client\model\AccountSecretFullDTO addAccountSecret($body)

Add a new AccountSecret object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$body = new \de\addvideo\client\model\AccountSecretFullDTO(); // \de\addvideo\client\model\AccountSecretFullDTO | AccountSecret object that shall be added

try {
    $result = $api_instance->addAccountSecret($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->addAccountSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\AccountSecretFullDTO**](../Model/\de\addvideo\client\model\AccountSecretFullDTO.md)| AccountSecret object that shall be added |

### Return type

[**\de\addvideo\client\model\AccountSecretFullDTO**](../Model/AccountSecretFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRole**
> \de\addvideo\client\model\RoleFullDTO addRole($body)

Add a new Role object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$body = new \de\addvideo\client\model\RoleFullDTO(); // \de\addvideo\client\model\RoleFullDTO | Role object that shall be added

try {
    $result = $api_instance->addRole($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->addRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\RoleFullDTO**](../Model/\de\addvideo\client\model\RoleFullDTO.md)| Role object that shall be added |

### Return type

[**\de\addvideo\client\model\RoleFullDTO**](../Model/RoleFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticate**
> \de\addvideo\client\model\AuthenticationResultDTO authenticate($body)

Authenticates credentials.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new de\addvideo\client\Api\AuthApi();
$body = new \de\addvideo\client\model\CredentialsDTO(); // \de\addvideo\client\model\CredentialsDTO | CredentialsDTO

try {
    $result = $api_instance->authenticate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\CredentialsDTO**](../Model/\de\addvideo\client\model\CredentialsDTO.md)| CredentialsDTO |

### Return type

[**\de\addvideo\client\model\AuthenticationResultDTO**](../Model/AuthenticationResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountSecret**
> \de\addvideo\client\model\AccountSecretFullDTO deleteAccountSecret($id)

Delete AccountSecret object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$id = new \de\addvideo\client\model\AccountSecretIdDTO(); // \de\addvideo\client\model\AccountSecretIdDTO | 

try {
    $result = $api_instance->deleteAccountSecret($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteAccountSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\de\addvideo\client\model\AccountSecretIdDTO**](../Model/\de\addvideo\client\model\AccountSecretIdDTO.md)|  |

### Return type

[**\de\addvideo\client\model\AccountSecretFullDTO**](../Model/AccountSecretFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRole**
> \de\addvideo\client\model\RoleFullDTO deleteRole($id)

Delete Role object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$id = 56; // int | 

try {
    $result = $api_instance->deleteRole($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\RoleFullDTO**](../Model/RoleFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountSecret**
> \de\addvideo\client\model\AccountSecretFullDTO getAccountSecret($id)

Get AccountSecret object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$id = new \de\addvideo\client\model\AccountSecretIdDTO(); // \de\addvideo\client\model\AccountSecretIdDTO | 

try {
    $result = $api_instance->getAccountSecret($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getAccountSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\de\addvideo\client\model\AccountSecretIdDTO**](../Model/\de\addvideo\client\model\AccountSecretIdDTO.md)|  |

### Return type

[**\de\addvideo\client\model\AccountSecretFullDTO**](../Model/AccountSecretFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRole**
> \de\addvideo\client\model\RoleFullDTO getRole($id)

Get Role object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$id = 56; // int | 

try {
    $result = $api_instance->getRole($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\RoleFullDTO**](../Model/RoleFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountSecrets**
> \de\addvideo\client\model\AccountSecretFullDTOListResult listAccountSecrets($body)

List AccountSecret objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listAccountSecrets($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->listAccountSecrets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\AccountSecretFullDTOListResult**](../Model/AccountSecretFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRoles**
> \de\addvideo\client\model\RoleFullDTOListResult listRoles($body)

List Role objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->listRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\RoleFullDTOListResult**](../Model/RoleFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountSecret**
> \de\addvideo\client\model\AccountSecretFullDTO updateAccountSecret($value)

Update AccountSecret object

Looks for a  AccountSecret object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$value = new \de\addvideo\client\model\AccountSecretFullDTO(); // \de\addvideo\client\model\AccountSecretFullDTO | 

try {
    $result = $api_instance->updateAccountSecret($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateAccountSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | [**\de\addvideo\client\model\AccountSecretFullDTO**](../Model/\de\addvideo\client\model\AccountSecretFullDTO.md)|  |

### Return type

[**\de\addvideo\client\model\AccountSecretFullDTO**](../Model/AccountSecretFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRole**
> \de\addvideo\client\model\RoleFullDTO updateRole($id, $body)

Update Role object

Looks for a  Role object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AuthApi();
$id = 56; // int | 
$body = new \de\addvideo\client\model\RoleFullDTO(); // \de\addvideo\client\model\RoleFullDTO | Role object that shall be updated

try {
    $result = $api_instance->updateRole($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\de\addvideo\client\model\RoleFullDTO**](../Model/\de\addvideo\client\model\RoleFullDTO.md)| Role object that shall be updated |

### Return type

[**\de\addvideo\client\model\RoleFullDTO**](../Model/RoleFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

