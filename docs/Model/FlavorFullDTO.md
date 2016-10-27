# FlavorFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Generated id. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**encodingFlavor** | [**\de\addvideo\client\model\EncodingFlavorIdDTO**](EncodingFlavorIdDTO.md) | Internal reference id to Encoding flavor this entry flavor was encoded in. | [optional] 
**readyDate** | [**\DateTime**](\DateTime.md) | Date flavor became ready for playout. | [optional] 
**completedExportsIds** | [**\de\addvideo\client\model\CompletedExportIdDTO[]**](CompletedExportIdDTO.md) | Set of reference ids to Completed exports this flavor was exported to after encoding. | [optional] 
**deleted** | **bool** | Defines whether entry is deleted or not. READ ONLY! Flag is set in db. | [optional] [default to false]
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


