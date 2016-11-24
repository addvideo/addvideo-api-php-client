# de\addvideo\client\AddvideoworkflowApi

All URIs are relative to *https://api.addvideo.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlayoutURLs**](AddvideoworkflowApi.md#getPlayoutURLs) | **GET** /addvideo/workflow/playout/getPlayoutURLs/{entry-id} | Get playout URLs for specififc entry.
[**getVideoPreviewThumbnailsURLs**](AddvideoworkflowApi.md#getVideoPreviewThumbnailsURLs) | **GET** /addvideo/workflow/playout/getVideoPreviewThumbnailsURLs/{entry-id} | Get video preview thumbnails URLs for specififc entry.
[**ingest**](AddvideoworkflowApi.md#ingest) | **POST** /addvideo/workflow/ingest/createJob | Ingest new video
[**status**](AddvideoworkflowApi.md#status) | **GET** /addvideo/workflow/ingest/status/{ingest-job-id} | Get status for ingest job


# **getPlayoutURLs**
> \de\addvideo\client\model\PlayoutURLsDTO getPlayoutURLs($entryId)

Get playout URLs for specififc entry.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoworkflowApi();
$entryId = "entryId_example"; // string | Id of entry to retrieve playout URLs for

try {
    $result = $api_instance->getPlayoutURLs($entryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoworkflowApi->getPlayoutURLs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entryId** | **string**| Id of entry to retrieve playout URLs for |

### Return type

[**\de\addvideo\client\model\PlayoutURLsDTO**](../Model/PlayoutURLsDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoPreviewThumbnailsURLs**
> \de\addvideo\client\model\VideoPreviewThumbnailsURLsDTO getVideoPreviewThumbnailsURLs($entryId)

Get video preview thumbnails URLs for specififc entry.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoworkflowApi();
$entryId = "entryId_example"; // string | Id of entry to retrieve video preview thumbnails URLs for

try {
    $result = $api_instance->getVideoPreviewThumbnailsURLs($entryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoworkflowApi->getVideoPreviewThumbnailsURLs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entryId** | **string**| Id of entry to retrieve video preview thumbnails URLs for |

### Return type

[**\de\addvideo\client\model\VideoPreviewThumbnailsURLsDTO**](../Model/VideoPreviewThumbnailsURLsDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ingest**
> \de\addvideo\client\model\IngestResultDTO ingest($body)

Ingest new video



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoworkflowApi();
$body = new \de\addvideo\client\model\IngestDataDTO(); // \de\addvideo\client\model\IngestDataDTO | IngestDataDTO object containing all ingest data

try {
    $result = $api_instance->ingest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoworkflowApi->ingest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\de\addvideo\client\model\IngestDataDTO**](../Model/\de\addvideo\client\model\IngestDataDTO.md)| IngestDataDTO object containing all ingest data |

### Return type

[**\de\addvideo\client\model\IngestResultDTO**](../Model/IngestResultDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **status**
> \de\addvideo\client\model\IngestStatusDTO status($ingestJobId)

Get status for ingest job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// de\addvideo\client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new de\addvideo\client\Api\AddvideoworkflowApi();
$ingestJobId = "ingestJobId_example"; // string | 

try {
    $result = $api_instance->status($ingestJobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddvideoworkflowApi->status: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ingestJobId** | **string**|  |

### Return type

[**\de\addvideo\client\model\IngestStatusDTO**](../Model/IngestStatusDTO.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

