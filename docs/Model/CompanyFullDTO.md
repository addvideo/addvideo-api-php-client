# CompanyFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal reference id in db. | [optional] 
**name** | **string** | Name of company. String value must not exceed 128 bytes of ASCII characters. | 
**headofficeAddress** | [**\de\addvideo\client\model\AddressIdDTO**](AddressIdDTO.md) | Internal reference id to Address of headoffice. | [optional] 
**contactsIds** | [**\de\addvideo\client\model\CompanyContactIdDTO[]**](CompanyContactIdDTO.md) | List of reference ids to Contacts. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API! Format as defined in &lt;a href&#x3D;&#39;http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14&#39; target&#x3D;&#39;_blank&#39;&gt;RFC3339&lt;/a&gt;. Format as defined in &lt;a href&#x3D;&#39;http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14&#39; target&#x3D;&#39;_blank&#39;&gt;RFC3339&lt;/a&gt;. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API! Format as defined in &lt;a href&#x3D;&#39;http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14&#39; target&#x3D;&#39;_blank&#39;&gt;RFC3339&lt;/a&gt;. Format as defined in &lt;a href&#x3D;&#39;http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14&#39; target&#x3D;&#39;_blank&#39;&gt;RFC3339&lt;/a&gt;. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


