# CDNAccountFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Generated id. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**cdn** | [**\de\addvideo\client\model\CDNIdDTO**](CDNIdDTO.md) | Internal reference id to CDN. | 
**httpDeliveryPrefix** | **string** | Prefix used for HTTP delivery. String value must not exceed 256 bytes of ASCII characters. | 
**httpsDeliveryPrefix** | **string** | Prefix used for HTTPS delivery. String value must not exceed 256 bytes of ASCII characters. | [optional] 
**ingestExportConfig** | [**\de\addvideo\client\model\ExportConfigIdDTO**](ExportConfigIdDTO.md) | Internal reference id to Export configuration to be used to ingest files into the CDN account. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


