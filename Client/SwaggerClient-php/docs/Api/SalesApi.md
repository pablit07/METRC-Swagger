# Swagger\Client\SalesApi

All URIs are relative to *https://https://sandbox.api-co.metrc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesV1CustomertypesGet**](SalesApi.md#salesV1CustomertypesGet) | **GET** /sales/v1/customertypes | 
[**salesV1ReceiptsGet**](SalesApi.md#salesV1ReceiptsGet) | **GET** /sales/v1/receipts | 
[**salesV1ReceiptsIdDelete**](SalesApi.md#salesV1ReceiptsIdDelete) | **DELETE** /sales/v1/receipts/{id} | 
[**salesV1ReceiptsIdGet**](SalesApi.md#salesV1ReceiptsIdGet) | **GET** /sales/v1/receipts/{id} | 
[**salesV1ReceiptsPost**](SalesApi.md#salesV1ReceiptsPost) | **POST** /sales/v1/receipts | 
[**salesV1ReceiptsPut**](SalesApi.md#salesV1ReceiptsPut) | **PUT** /sales/v1/receipts | 
[**salesV1TransactionsDatePost**](SalesApi.md#salesV1TransactionsDatePost) | **POST** /sales/v1/transactions/{date} | 
[**salesV1TransactionsDatePut**](SalesApi.md#salesV1TransactionsDatePut) | **PUT** /sales/v1/transactions/{date} | 
[**salesV1TransactionsSalesDateStartSalesDateEndGet**](SalesApi.md#salesV1TransactionsSalesDateStartSalesDateEndGet) | **GET** /sales/v1/transactions/{salesDateStart}/{salesDateEnd} | 


# **salesV1CustomertypesGet**
> salesV1CustomertypesGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1CustomertypesGet();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1CustomertypesGet: ', $e->getMessage(), PHP_EOL;
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

# **salesV1ReceiptsGet**
> salesV1ReceiptsGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1ReceiptsGet();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1ReceiptsGet: ', $e->getMessage(), PHP_EOL;
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

# **salesV1ReceiptsIdDelete**
> salesV1ReceiptsIdDelete()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1ReceiptsIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1ReceiptsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **salesV1ReceiptsIdGet**
> salesV1ReceiptsIdGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1ReceiptsIdGet();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1ReceiptsIdGet: ', $e->getMessage(), PHP_EOL;
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

# **salesV1ReceiptsPost**
> salesV1ReceiptsPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1ReceiptsPost();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1ReceiptsPost: ', $e->getMessage(), PHP_EOL;
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

# **salesV1ReceiptsPut**
> salesV1ReceiptsPut()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1ReceiptsPut();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1ReceiptsPut: ', $e->getMessage(), PHP_EOL;
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

# **salesV1TransactionsDatePost**
> salesV1TransactionsDatePost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1TransactionsDatePost();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1TransactionsDatePost: ', $e->getMessage(), PHP_EOL;
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

# **salesV1TransactionsDatePut**
> salesV1TransactionsDatePut()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1TransactionsDatePut();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1TransactionsDatePut: ', $e->getMessage(), PHP_EOL;
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

# **salesV1TransactionsSalesDateStartSalesDateEndGet**
> salesV1TransactionsSalesDateStartSalesDateEndGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->salesV1TransactionsSalesDateStartSalesDateEndGet();
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesV1TransactionsSalesDateStartSalesDateEndGet: ', $e->getMessage(), PHP_EOL;
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

