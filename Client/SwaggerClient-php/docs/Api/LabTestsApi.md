# Swagger\Client\LabTestsApi

All URIs are relative to *https://https://sandbox.api-co.metrc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**labtestsV1RecordPost**](LabTestsApi.md#labtestsV1RecordPost) | **POST** /labtests/v1/record | 
[**labtestsV1StatesGet**](LabTestsApi.md#labtestsV1StatesGet) | **GET** /labtests/v1/states | 
[**labtestsV1TypesGet**](LabTestsApi.md#labtestsV1TypesGet) | **GET** /labtests/v1/types | 


# **labtestsV1RecordPost**
> labtestsV1RecordPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LabTestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->labtestsV1RecordPost();
} catch (Exception $e) {
    echo 'Exception when calling LabTestsApi->labtestsV1RecordPost: ', $e->getMessage(), PHP_EOL;
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

# **labtestsV1StatesGet**
> labtestsV1StatesGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LabTestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->labtestsV1StatesGet();
} catch (Exception $e) {
    echo 'Exception when calling LabTestsApi->labtestsV1StatesGet: ', $e->getMessage(), PHP_EOL;
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

# **labtestsV1TypesGet**
> labtestsV1TypesGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LabTestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->labtestsV1TypesGet();
} catch (Exception $e) {
    echo 'Exception when calling LabTestsApi->labtestsV1TypesGet: ', $e->getMessage(), PHP_EOL;
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

