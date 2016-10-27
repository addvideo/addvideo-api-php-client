# CompanyFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal reference id in db. | [optional] 
**name** | **string** | Name of company. String value must not exceed 128 bytes of ASCII characters. | 
**headofficeAddress** | [**\de\addvideo\client\model\AddressIdDTO**](AddressIdDTO.md) | Internal reference id to Address of headoffice. | [optional] 
**contactsIds** | [**\de\addvideo\client\model\CompanyContactIdDTO[]**](CompanyContactIdDTO.md) | List of reference ids to Contacts. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


