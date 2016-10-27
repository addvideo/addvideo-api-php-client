# de\addvideo\client\CrmcontactApi

All URIs are relative to *https://api.addvideo.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAddress**](CrmcontactApi.md#addAddress) | **POST** /crm/contact/address/addAddress | Add a new Address object
[**addCompany**](CrmcontactApi.md#addCompany) | **POST** /crm/contact/company/addCompany | Add a new Company object
[**addCompanyContact**](CrmcontactApi.md#addCompanyContact) | **POST** /crm/contact/company-contact/addCompanyContact | Add a new CompanyContact object
[**addContact**](CrmcontactApi.md#addContact) | **POST** /crm/contact/contact/addContact | Add a new Contact object
[**addCountry**](CrmcontactApi.md#addCountry) | **POST** /crm/contact/country/addCountry | Add a new Country object
[**addTitle**](CrmcontactApi.md#addTitle) | **POST** /crm/contact/title/addTitle | Add a new Title object
[**deleteAddress**](CrmcontactApi.md#deleteAddress) | **DELETE** /crm/contact/address/deleteAddress/{id} | Delete Address object matching the given id
[**deleteCompany**](CrmcontactApi.md#deleteCompany) | **DELETE** /crm/contact/company/deleteCompany/{id} | Delete Company object matching the given id
[**deleteCompanyContact**](CrmcontactApi.md#deleteCompanyContact) | **POST** /crm/contact/company-contact/deleteCompanyContact | Delete CompanyContact object matching the given id
[**deleteContact**](CrmcontactApi.md#deleteContact) | **DELETE** /crm/contact/contact/deleteContact/{id} | Delete Contact object matching the given id
[**deleteCountry**](CrmcontactApi.md#deleteCountry) | **DELETE** /crm/contact/country/deleteCountry/{id} | Delete Country object matching the given id
[**deleteTitle**](CrmcontactApi.md#deleteTitle) | **DELETE** /crm/contact/title/deleteTitle/{id} | Delete Title object matching the given id
[**getAddress**](CrmcontactApi.md#getAddress) | **GET** /crm/contact/address/getAddress/{id} | Get Address object for id
[**getCompany**](CrmcontactApi.md#getCompany) | **GET** /crm/contact/company/getCompany/{id} | Get Company object for id
[**getCompanyContact**](CrmcontactApi.md#getCompanyContact) | **POST** /crm/contact/company-contact/getCompanyContact | Get CompanyContact object for id
[**getContact**](CrmcontactApi.md#getContact) | **GET** /crm/contact/contact/getContact/{id} | Get Contact object for id
[**getCountry**](CrmcontactApi.md#getCountry) | **GET** /crm/contact/country/getCountry/{id} | Get Country object for id
[**getTitle**](CrmcontactApi.md#getTitle) | **GET** /crm/contact/title/getTitle/{id} | Get Title object for id
[**listAddresses**](CrmcontactApi.md#listAddresses) | **POST** /crm/contact/address/listAddresses | List Address objects depending on filter
[**listCompanies**](CrmcontactApi.md#listCompanies) | **POST** /crm/contact/company/listCompanies | List Company objects depending on filter
[**listCompanyContacts**](CrmcontactApi.md#listCompanyContacts) | **POST** /crm/contact/company-contact/listCompanyContacts | List CompanyContact objects depending on filter
[**listContacts**](CrmcontactApi.md#listContacts) | **POST** /crm/contact/contact/listContacts | List Contact objects depending on filter
[**listCountries**](CrmcontactApi.md#listCountries) | **POST** /crm/contact/country/listCountries | List Country objects depending on filter
[**listTitles**](CrmcontactApi.md#listTitles) | **POST** /crm/contact/title/listTitles | List Title objects depending on filter
[**updateAddress**](CrmcontactApi.md#updateAddress) | **PUT** /crm/contact/address/updateAddress/{id} | Update Address object
[**updateCompany**](CrmcontactApi.md#updateCompany) | **PUT** /crm/contact/company/updateCompany/{id} | Update Company object
[**updateCompanyContact**](CrmcontactApi.md#updateCompanyContact) | **POST** /crm/contact/company-contact/updateCompanyContact | Update CompanyContact object
[**updateContact**](CrmcontactApi.md#updateContact) | **PUT** /crm/contact/contact/updateContact/{id} | Update Contact object
[**updateCountry**](CrmcontactApi.md#updateCountry) | **PUT** /crm/contact/country/updateCountry/{id} | Update Country object
[**updateTitle**](CrmcontactApi.md#updateTitle) | **PUT** /crm/contact/title/updateTitle/{id} | Update Title object


# **addAddress**
> \de\addvideo\client\model\AddressFullDTO addAddress($body)

Add a new Address object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\AddressFullDTO(); // \de\addvideo\client\model\AddressFullDTO | Address object that shall be added

try {
    $result = $api_instance->addAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->addAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\AddressFullDTO**](../Model/\de\addvideo\client\model\AddressFullDTO.md)| Address object that shall be added |

### Return type

[**\de\addvideo\client\model\AddressFullDTO**](../Model/AddressFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCompany**
> \de\addvideo\client\model\CompanyFullDTO addCompany($body)

Add a new Company object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\CompanyFullDTO(); // \de\addvideo\client\model\CompanyFullDTO | Company object that shall be added

try {
    $result = $api_instance->addCompany($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->addCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\CompanyFullDTO**](../Model/\de\addvideo\client\model\CompanyFullDTO.md)| Company object that shall be added |

### Return type

[**\de\addvideo\client\model\CompanyFullDTO**](../Model/CompanyFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCompanyContact**
> \de\addvideo\client\model\CompanyContactFullDTO addCompanyContact($body)

Add a new CompanyContact object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\CompanyContactFullDTO(); // \de\addvideo\client\model\CompanyContactFullDTO | CompanyContact object that shall be added

try {
    $result = $api_instance->addCompanyContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->addCompanyContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\CompanyContactFullDTO**](../Model/\de\addvideo\client\model\CompanyContactFullDTO.md)| CompanyContact object that shall be added |

### Return type

[**\de\addvideo\client\model\CompanyContactFullDTO**](../Model/CompanyContactFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContact**
> \de\addvideo\client\model\ContactFullDTO addContact($body)

Add a new Contact object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\ContactFullDTO(); // \de\addvideo\client\model\ContactFullDTO | Contact object that shall be added

try {
    $result = $api_instance->addContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->addContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ContactFullDTO**](../Model/\de\addvideo\client\model\ContactFullDTO.md)| Contact object that shall be added |

### Return type

[**\de\addvideo\client\model\ContactFullDTO**](../Model/ContactFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCountry**
> \de\addvideo\client\model\CountryFullDTO addCountry($body)

Add a new Country object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\CountryFullDTO(); // \de\addvideo\client\model\CountryFullDTO | Country object that shall be added

try {
    $result = $api_instance->addCountry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->addCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\CountryFullDTO**](../Model/\de\addvideo\client\model\CountryFullDTO.md)| Country object that shall be added |

### Return type

[**\de\addvideo\client\model\CountryFullDTO**](../Model/CountryFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTitle**
> \de\addvideo\client\model\TitleFullDTO addTitle($body)

Add a new Title object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\TitleFullDTO(); // \de\addvideo\client\model\TitleFullDTO | Title object that shall be added

try {
    $result = $api_instance->addTitle($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->addTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\TitleFullDTO**](../Model/\de\addvideo\client\model\TitleFullDTO.md)| Title object that shall be added |

### Return type

[**\de\addvideo\client\model\TitleFullDTO**](../Model/TitleFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddress**
> \de\addvideo\client\model\AddressFullDTO deleteAddress($id)

Delete Address object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->deleteAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\AddressFullDTO**](../Model/AddressFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCompany**
> \de\addvideo\client\model\CompanyFullDTO deleteCompany($id)

Delete Company object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->deleteCompany($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->deleteCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\CompanyFullDTO**](../Model/CompanyFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCompanyContact**
> \de\addvideo\client\model\CompanyContactFullDTO deleteCompanyContact($id)

Delete CompanyContact object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = new \de\addvideo\client\model\CompanyContactIdDTO(); // \de\addvideo\client\model\CompanyContactIdDTO | 

try {
    $result = $api_instance->deleteCompanyContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->deleteCompanyContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\de\addvideo\client\model\CompanyContactIdDTO**](../Model/\de\addvideo\client\model\CompanyContactIdDTO.md)|  |

### Return type

[**\de\addvideo\client\model\CompanyContactFullDTO**](../Model/CompanyContactFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> \de\addvideo\client\model\ContactFullDTO deleteContact($id)

Delete Contact object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->deleteContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\ContactFullDTO**](../Model/ContactFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCountry**
> \de\addvideo\client\model\CountryFullDTO deleteCountry($id)

Delete Country object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->deleteCountry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->deleteCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\CountryFullDTO**](../Model/CountryFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTitle**
> \de\addvideo\client\model\TitleFullDTO deleteTitle($id)

Delete Title object matching the given id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->deleteTitle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->deleteTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\TitleFullDTO**](../Model/TitleFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddress**
> \de\addvideo\client\model\AddressFullDTO getAddress($id)

Get Address object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->getAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->getAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\AddressFullDTO**](../Model/AddressFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompany**
> \de\addvideo\client\model\CompanyFullDTO getCompany($id)

Get Company object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->getCompany($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\CompanyFullDTO**](../Model/CompanyFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyContact**
> \de\addvideo\client\model\CompanyContactFullDTO getCompanyContact($id)

Get CompanyContact object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = new \de\addvideo\client\model\CompanyContactIdDTO(); // \de\addvideo\client\model\CompanyContactIdDTO | 

try {
    $result = $api_instance->getCompanyContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->getCompanyContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\de\addvideo\client\model\CompanyContactIdDTO**](../Model/\de\addvideo\client\model\CompanyContactIdDTO.md)|  |

### Return type

[**\de\addvideo\client\model\CompanyContactFullDTO**](../Model/CompanyContactFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContact**
> \de\addvideo\client\model\ContactFullDTO getContact($id)

Get Contact object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->getContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\ContactFullDTO**](../Model/ContactFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountry**
> \de\addvideo\client\model\CountryFullDTO getCountry($id)

Get Country object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->getCountry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->getCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\CountryFullDTO**](../Model/CountryFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTitle**
> \de\addvideo\client\model\TitleFullDTO getTitle($id)

Get Title object for id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 

try {
    $result = $api_instance->getTitle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->getTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\de\addvideo\client\model\TitleFullDTO**](../Model/TitleFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAddresses**
> \de\addvideo\client\model\AddressFullDTOListResult listAddresses($body)

List Address objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listAddresses($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->listAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\AddressFullDTOListResult**](../Model/AddressFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCompanies**
> \de\addvideo\client\model\CompanyFullDTOListResult listCompanies($body)

List Company objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listCompanies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->listCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\CompanyFullDTOListResult**](../Model/CompanyFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCompanyContacts**
> \de\addvideo\client\model\CompanyContactFullDTOListResult listCompanyContacts($body)

List CompanyContact objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listCompanyContacts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->listCompanyContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\CompanyContactFullDTOListResult**](../Model/CompanyContactFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContacts**
> \de\addvideo\client\model\ContactFullDTOListResult listContacts($body)

List Contact objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listContacts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->listContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\ContactFullDTOListResult**](../Model/ContactFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCountries**
> \de\addvideo\client\model\CountryFullDTOListResult listCountries($body)

List Country objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listCountries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->listCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\CountryFullDTOListResult**](../Model/CountryFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTitles**
> \de\addvideo\client\model\TitleFullDTOListResult listTitles($body)

List Title objects depending on filter

If no filter is set, a full list will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$body = new \de\addvideo\client\model\ResultFilterDTO(); // \de\addvideo\client\model\ResultFilterDTO | Filter to be applied to results

try {
    $result = $api_instance->listTitles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->listTitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\ResultFilterDTO**](../Model/\de\addvideo\client\model\ResultFilterDTO.md)| Filter to be applied to results |

### Return type

[**\de\addvideo\client\model\TitleFullDTOListResult**](../Model/TitleFullDTOListResult.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddress**
> \de\addvideo\client\model\AddressFullDTO updateAddress($id, $body)

Update Address object

Looks for a  Address object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 
$body = new \de\addvideo\client\model\AddressFullDTO(); // \de\addvideo\client\model\AddressFullDTO | Address object that shall be updated

try {
    $result = $api_instance->updateAddress($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->updateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\de\addvideo\client\model\AddressFullDTO**](../Model/\de\addvideo\client\model\AddressFullDTO.md)| Address object that shall be updated |

### Return type

[**\de\addvideo\client\model\AddressFullDTO**](../Model/AddressFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompany**
> \de\addvideo\client\model\CompanyFullDTO updateCompany($id, $body)

Update Company object

Looks for a  Company object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 
$body = new \de\addvideo\client\model\CompanyFullDTO(); // \de\addvideo\client\model\CompanyFullDTO | Company object that shall be updated

try {
    $result = $api_instance->updateCompany($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->updateCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\de\addvideo\client\model\CompanyFullDTO**](../Model/\de\addvideo\client\model\CompanyFullDTO.md)| Company object that shall be updated |

### Return type

[**\de\addvideo\client\model\CompanyFullDTO**](../Model/CompanyFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompanyContact**
> \de\addvideo\client\model\CompanyContactFullDTO updateCompanyContact($value)

Update CompanyContact object

Looks for a  CompanyContact object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$value = new \de\addvideo\client\model\CompanyContactFullDTO(); // \de\addvideo\client\model\CompanyContactFullDTO | 

try {
    $result = $api_instance->updateCompanyContact($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->updateCompanyContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | [**\de\addvideo\client\model\CompanyContactFullDTO**](../Model/\de\addvideo\client\model\CompanyContactFullDTO.md)|  |

### Return type

[**\de\addvideo\client\model\CompanyContactFullDTO**](../Model/CompanyContactFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \de\addvideo\client\model\ContactFullDTO updateContact($id, $body)

Update Contact object

Looks for a  Contact object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 
$body = new \de\addvideo\client\model\ContactFullDTO(); // \de\addvideo\client\model\ContactFullDTO | Contact object that shall be updated

try {
    $result = $api_instance->updateContact($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\de\addvideo\client\model\ContactFullDTO**](../Model/\de\addvideo\client\model\ContactFullDTO.md)| Contact object that shall be updated |

### Return type

[**\de\addvideo\client\model\ContactFullDTO**](../Model/ContactFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCountry**
> \de\addvideo\client\model\CountryFullDTO updateCountry($id, $body)

Update Country object

Looks for a  Country object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 
$body = new \de\addvideo\client\model\CountryFullDTO(); // \de\addvideo\client\model\CountryFullDTO | Country object that shall be updated

try {
    $result = $api_instance->updateCountry($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->updateCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\de\addvideo\client\model\CountryFullDTO**](../Model/\de\addvideo\client\model\CountryFullDTO.md)| Country object that shall be updated |

### Return type

[**\de\addvideo\client\model\CountryFullDTO**](../Model/CountryFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTitle**
> \de\addvideo\client\model\TitleFullDTO updateTitle($id, $body)

Update Title object

Looks for a  Title object matching the given id and updates it accordingly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\CrmcontactApi();
$id = 789; // int | 
$body = new \de\addvideo\client\model\TitleFullDTO(); // \de\addvideo\client\model\TitleFullDTO | Title object that shall be updated

try {
    $result = $api_instance->updateTitle($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrmcontactApi->updateTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\de\addvideo\client\model\TitleFullDTO**](../Model/\de\addvideo\client\model\TitleFullDTO.md)| Title object that shall be updated |

### Return type

[**\de\addvideo\client\model\TitleFullDTO**](../Model/TitleFullDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

