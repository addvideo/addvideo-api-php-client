# ContactFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal reference in db. | [optional] 
**title** | [**\de\addvideo\client\model\TitleIdDTO**](TitleIdDTO.md) | Internal reference id to Title. | [optional] 
**firstName** | **string** | Firstname. String value must not exceed 45 bytes of ASCII characters. | [optional] 
**lastName** | **string** | Lastname. String value must not exceed 45 bytes of ASCII characters. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


