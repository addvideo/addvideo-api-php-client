# AccountSecretFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | [The account identifier. Part of the composite primary key.]. String value must not exceed 128 bytes of ASCII characters. | 
**secret** | **string** | [The secret. Part of the composite primary key.]. String value must not exceed 128 bytes of ASCII characters. | 
**rolesIds** | [**\de\addvideo\client\model\RoleIdDTO[]**](RoleIdDTO.md) | Set of reference ids to [The associated role.]. | [optional] 
**refId** | **string** | [Id used to simplify access for external referential purposes. Not part of the primary key.]. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


