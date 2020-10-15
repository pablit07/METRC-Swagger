# Swagger\Client\ObsoleteApi

All URIs are relative to *https://https://sandbox.api-co.metrc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**harvestsV1CreatepackagesPost**](ObsoleteApi.md#harvestsV1CreatepackagesPost) | **POST** /harvests/v1/createpackages | 


# **harvestsV1CreatepackagesPost**
> harvestsV1CreatepackagesPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObsoleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->harvestsV1CreatepackagesPost();
} catch (Exception $e) {
    echo 'Exception when calling ObsoleteApi->harvestsV1CreatepackagesPost: ', $e->getMessage(), PHP_EOL;
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

