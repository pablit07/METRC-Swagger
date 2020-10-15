# Swagger\Client\FacilitiesApi

All URIs are relative to *https://https://sandbox.api-co.metrc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**facilitiesV1Get**](FacilitiesApi.md#facilitiesV1Get) | **GET** /facilities/v1 | This endpoint provides a list of facilities for which the authenticated user has access.


# **facilitiesV1Get**
> facilitiesV1Get()

This endpoint provides a list of facilities for which the authenticated user has access.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FacilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->facilitiesV1Get();
} catch (Exception $e) {
    echo 'Exception when calling FacilitiesApi->facilitiesV1Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

