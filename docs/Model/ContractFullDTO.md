# ContractFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Generated id. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**contractId** | **string** | Contract Id. String value must not exceed 32 bytes of ASCII characters. | 
**contractType** | [**\de\addvideo\client\model\ContractTypeIdDTO**](ContractTypeIdDTO.md) | Internal reference id to Type of contract. | 
**customer** | [**\de\addvideo\client\model\CustomerIdDTO**](CustomerIdDTO.md) | Internal reference id to Customer. | [optional] 
**contractLinesIds** | [**\de\addvideo\client\model\ContractLineIdDTO[]**](ContractLineIdDTO.md) | Set of reference ids to Lines of contract. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


