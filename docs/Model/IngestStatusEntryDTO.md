# IngestStatusEntryDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**externalReferenceId** | **string** | External reference id that can be used for external lookup purposes. | [optional] 
**sourceUrl** | **string** | Your source file url. | 
**webhook** | **string** | URL to be triggered if a new status was reached. | 
**status** | **string** | Status of this ingest entry. READ ONLY! | [optional] 
**statusLog** | **string[]** | More detailed information on current status. READ ONLY! | [optional] 
**entry** | [**\de\addvideo\client\model\EntryIdDTO**](EntryIdDTO.md) | Reference to internal entry. Only set if MAM services are available for the account used and enabled. | [optional] 
**webhookLog** | **string[]** | Containing information on webhook activities. READ ONLY! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


