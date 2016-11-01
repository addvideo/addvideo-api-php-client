# AddressFullDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal reference id in db. | [optional] 
**street** | **string** | Street. String value must not exceed 45 bytes of ASCII characters. | 
**number** | **string** | Number of house in street. String value must not exceed 8 bytes of ASCII characters. | 
**city** | **string** | City. String value must not exceed 64 bytes of ASCII characters. | 
**zipcode** | **string** | Zipcode. String value must not exceed 16 bytes of ASCII characters. | 
**state** | **string** | State. String value must not exceed 32 bytes of ASCII characters. | [optional] 
**country** | [**\de\addvideo\client\model\CountryIdDTO**](CountryIdDTO.md) | Internal reference id to Country. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Date of dataset creation. READ ONLY! Value will be set from db and cannot be manipulated via the API! Format as defined in &lt;a href&#x3D;&#39;http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14&#39; target&#x3D;&#39;_blank&#39;&gt;RFC3339&lt;/a&gt;. Format as defined in &lt;a href&#x3D;&#39;http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14&#39; target&#x3D;&#39;_blank&#39;&gt;RFC3339&lt;/a&gt;. | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | Date of last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API! Format as defined in &lt;a href&#x3D;&#39;http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14&#39; target&#x3D;&#39;_blank&#39;&gt;RFC3339&lt;/a&gt;. Format as defined in &lt;a href&#x3D;&#39;http://xml2rfc.ietf.org/public/rfc/html/rfc3339.html#anchor14&#39; target&#x3D;&#39;_blank&#39;&gt;RFC3339&lt;/a&gt;. | [optional] 
**accountModifiedBy** | **string** | Account used for last dataset modification. READ ONLY! Value will be set from db and cannot be manipulated via the API!. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


