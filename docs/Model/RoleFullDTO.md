# RoleFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal reference id in db. | [optional] 
**name** | **string** | Name of role. String value must not exceed 45 bytes of ASCII characters. | 
**parent** | [**\de\addvideo\client\model\RoleIdDTO**](RoleIdDTO.md) | Internal reference id to Parent role. | [optional] 
**childrenIds** | [**\de\addvideo\client\model\RoleIdDTO[]**](RoleIdDTO.md) | Set of reference ids to Child roles. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


