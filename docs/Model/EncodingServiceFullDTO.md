# EncodingServiceFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Generated id. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**contractLineId** | **int** | Reference to contract-line. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Date of start of service. | 
**endDate** | [**\DateTime**](\DateTime.md) | Date of end of service (including). | [optional] 
**exportConfigurationsIds** | [**\de\addvideo\client\model\ExportConfigIdDTO[]**](ExportConfigIdDTO.md) | Set of reference ids to Export configurations to be used for exporting generated flavors. | [optional] 
**description** | **string** | Description. String value must not exceed 65536 bytes of ASCII characters. | 
**label** | **string** | A label. String value must not exceed 64 bytes of ASCII characters. | 
**defaultEncodingsIds** | [**\de\addvideo\client\model\EncodingFlavorIdDTO[]**](EncodingFlavorIdDTO.md) | Set of reference ids to Default encosings to be used for this encoding service. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


