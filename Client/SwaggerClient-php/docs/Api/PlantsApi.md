# Swagger\Client\PlantsApi

All URIs are relative to *https://https://sandbox.api-co.metrc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**plantsV1AdditivesByroomPost**](PlantsApi.md#plantsV1AdditivesByroomPost) | **POST** /plants/v1/additives/byroom | 
[**plantsV1AdditivesGet**](PlantsApi.md#plantsV1AdditivesGet) | **GET** /plants/v1/additives | 
[**plantsV1AdditivesPost**](PlantsApi.md#plantsV1AdditivesPost) | **POST** /plants/v1/additives | 
[**plantsV1AdditivesTypesGet**](PlantsApi.md#plantsV1AdditivesTypesGet) | **GET** /plants/v1/additives/types | 
[**plantsV1ChangegrowthphasesPost**](PlantsApi.md#plantsV1ChangegrowthphasesPost) | **POST** /plants/v1/changegrowthphases | 
[**plantsV1CreatePlantingsPost**](PlantsApi.md#plantsV1CreatePlantingsPost) | **POST** /plants/v1/create/plantings | 
[**plantsV1DestroyplantsPost**](PlantsApi.md#plantsV1DestroyplantsPost) | **POST** /plants/v1/destroyplants | 
[**plantsV1FloweringGet**](PlantsApi.md#plantsV1FloweringGet) | **GET** /plants/v1/flowering | 
[**plantsV1GrowthphasesGet**](PlantsApi.md#plantsV1GrowthphasesGet) | **GET** /plants/v1/growthphases | 
[**plantsV1HarvestplantsPost**](PlantsApi.md#plantsV1HarvestplantsPost) | **POST** /plants/v1/harvestplants | 
[**plantsV1IdGet**](PlantsApi.md#plantsV1IdGet) | **GET** /plants/v1/{id} | 
[**plantsV1InactiveGet**](PlantsApi.md#plantsV1InactiveGet) | **GET** /plants/v1/inactive | 
[**plantsV1LabelGet**](PlantsApi.md#plantsV1LabelGet) | **GET** /plants/v1/{label} | 
[**plantsV1ManicureplantsPost**](PlantsApi.md#plantsV1ManicureplantsPost) | **POST** /plants/v1/manicureplants | 
[**plantsV1MoveplantsPost**](PlantsApi.md#plantsV1MoveplantsPost) | **POST** /plants/v1/moveplants | 
[**plantsV1OnholdGet**](PlantsApi.md#plantsV1OnholdGet) | **GET** /plants/v1/onhold | 
[**plantsV1VegetativeGet**](PlantsApi.md#plantsV1VegetativeGet) | **GET** /plants/v1/vegetative | 
[**plantsV1WasteMethodsGet**](PlantsApi.md#plantsV1WasteMethodsGet) | **GET** /plants/v1/waste/methods | 
[**plantsV1WasteReasonsGet**](PlantsApi.md#plantsV1WasteReasonsGet) | **GET** /plants/v1/waste/reasons | 


# **plantsV1AdditivesByroomPost**
> plantsV1AdditivesByroomPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1AdditivesByroomPost();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1AdditivesByroomPost: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1AdditivesGet**
> plantsV1AdditivesGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1AdditivesGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1AdditivesGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1AdditivesPost**
> plantsV1AdditivesPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1AdditivesPost();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1AdditivesPost: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1AdditivesTypesGet**
> plantsV1AdditivesTypesGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1AdditivesTypesGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1AdditivesTypesGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1ChangegrowthphasesPost**
> plantsV1ChangegrowthphasesPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1ChangegrowthphasesPost();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1ChangegrowthphasesPost: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1CreatePlantingsPost**
> plantsV1CreatePlantingsPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1CreatePlantingsPost();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1CreatePlantingsPost: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1DestroyplantsPost**
> plantsV1DestroyplantsPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1DestroyplantsPost();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1DestroyplantsPost: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1FloweringGet**
> plantsV1FloweringGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1FloweringGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1FloweringGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1GrowthphasesGet**
> plantsV1GrowthphasesGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1GrowthphasesGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1GrowthphasesGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1HarvestplantsPost**
> plantsV1HarvestplantsPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1HarvestplantsPost();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1HarvestplantsPost: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1IdGet**
> plantsV1IdGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1IdGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1IdGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1InactiveGet**
> plantsV1InactiveGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1InactiveGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1InactiveGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1LabelGet**
> plantsV1LabelGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1LabelGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1LabelGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1ManicureplantsPost**
> plantsV1ManicureplantsPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1ManicureplantsPost();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1ManicureplantsPost: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1MoveplantsPost**
> plantsV1MoveplantsPost()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1MoveplantsPost();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1MoveplantsPost: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1OnholdGet**
> plantsV1OnholdGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1OnholdGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1OnholdGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1VegetativeGet**
> plantsV1VegetativeGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1VegetativeGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1VegetativeGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1WasteMethodsGet**
> plantsV1WasteMethodsGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1WasteMethodsGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1WasteMethodsGet: ', $e->getMessage(), PHP_EOL;
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

# **plantsV1WasteReasonsGet**
> plantsV1WasteReasonsGet()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PlantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->plantsV1WasteReasonsGet();
} catch (Exception $e) {
    echo 'Exception when calling PlantsApi->plantsV1WasteReasonsGet: ', $e->getMessage(), PHP_EOL;
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

