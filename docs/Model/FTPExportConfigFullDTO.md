# FTPExportConfigFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Generated id. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**user** | **string** | User. String value must not exceed 256 bytes of ASCII characters. | 
**password** | **string** | Password. String value must not exceed 256 bytes of ASCII characters. | 
**host** | **string** | FTP host. String value must not exceed 256 bytes of ASCII characters. | 
**port** | **int** | FTP port. | 
**usePassiveMode** | **bool** | Defines whether FTP passive mode should be used. | [default to false]
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


