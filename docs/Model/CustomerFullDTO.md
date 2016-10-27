# CustomerFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Generated id. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**customerId** | **string** | Id of customer. String value must not exceed 32 bytes of ASCII characters. | 
**ncsmId** | **string** | Customer Id referenced in NCSM. String value must not exceed 16 bytes of ASCII characters. | [optional] 
**ecotelCustomerId** | **string** | Customer Id referenced by ecotel. String value must not exceed 32 bytes of ASCII characters. | [optional] 
**comment** | **string** | Comment. String value must not exceed 65535 bytes of ASCII characters. | [optional] 
**archived** | **bool** | Determines whether entry is archived or not. | [optional] [default to false]
**company** | [**\de\addvideo\client\model\CompanyIdDTO**](CompanyIdDTO.md) | Internal reference id to Company representing the customer. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


