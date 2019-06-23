# Swagger\Client\StationsApi

All URIs are relative to *https://api.leap-play.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStation**](StationsApi.md#createStation) | **PUT** /api/v1/stations | Creates a Station (Auth)
[**getSessionLogsAll**](StationsApi.md#getSessionLogsAll) | **GET** /api/v1/stations/sessions | Gets closed Sessions from all stations (Auth)
[**getSessionLogsByStationId**](StationsApi.md#getSessionLogsByStationId) | **GET** /api/v1/stations/{stationId}/sessions | Gets closed Sessions (Auth)
[**getSettings**](StationsApi.md#getSettings) | **GET** /api/v1/stations/settings | Gets the Settings of all Stations (Auth)
[**getSettingsByStationId**](StationsApi.md#getSettingsByStationId) | **GET** /api/v1/stations/{stationId}/settings | Get the Settings of an Station (Auth)
[**getState**](StationsApi.md#getState) | **GET** /api/v1/stations/{stationId} | Get the Station&#39;s State (Auth)
[**getStates**](StationsApi.md#getStates) | **GET** /api/v1/stations | Gets Collection of Station States (Auth)
[**sessionCreate**](StationsApi.md#sessionCreate) | **PUT** /api/v1/stations/{stationId}/sessions | Creates a Session (Auth)
[**sessionStop**](StationsApi.md#sessionStop) | **POST** /api/v1/stations/{stationId}/sessions/current/stop | Stops the running Session (Auth)
[**sessionUpdate**](StationsApi.md#sessionUpdate) | **POST** /api/v1/stations/{stationId}/sessions/current/update | Updates the running Session. (Auth)
[**setSettings**](StationsApi.md#setSettings) | **POST** /api/v1/stations/{stationId}/settings | Sets the Settings for an Station (Auth)
[**setStationMode**](StationsApi.md#setStationMode) | **POST** /api/v1/stations/{stationId}/settings/mode | Sets the Operation Mode (Auth)
[**setStationPassword**](StationsApi.md#setStationPassword) | **POST** /api/v1/stations/{stationId}/settings/password | Changes the Password (Auth)
[**setStationQrCode**](StationsApi.md#setStationQrCode) | **POST** /api/v1/stations/{stationId}/settings/qrcode | Sets the QrCode (Auth)


# **createStation**
> \Swagger\Client\models\StationSettings createStation($create_station)

Creates a Station (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_station = new \Swagger\Client\models\RequestCreateStation(); // \Swagger\Client\models\RequestCreateStation | Create Station Dto

try {
    $result = $apiInstance->createStation($create_station);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->createStation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_station** | [**\Swagger\Client\models\RequestCreateStation**](../Model/RequestCreateStation.md)| Create Station Dto | [optional]

### Return type

[**\Swagger\Client\models\StationSettings**](../Model/StationSettings.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSessionLogsAll**
> \Swagger\Client\models\SessionLog[] getSessionLogsAll($take, $skip)

Gets closed Sessions from all stations (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$take = 50; // int | Entries to return
$skip = 0; // int | Entries to skip

try {
    $result = $apiInstance->getSessionLogsAll($take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getSessionLogsAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **take** | **int**| Entries to return | [optional] [default to 50]
 **skip** | **int**| Entries to skip | [optional] [default to 0]

### Return type

[**\Swagger\Client\models\SessionLog[]**](../Model/SessionLog.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSessionLogsByStationId**
> \Swagger\Client\models\SessionLog[] getSessionLogsByStationId($station_id, $take, $skip)

Gets closed Sessions (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id
$take = 50; // int | Entries to return
$skip = 0; // int | Entries to skip

try {
    $result = $apiInstance->getSessionLogsByStationId($station_id, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getSessionLogsByStationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |
 **take** | **int**| Entries to return | [optional] [default to 50]
 **skip** | **int**| Entries to skip | [optional] [default to 0]

### Return type

[**\Swagger\Client\models\SessionLog[]**](../Model/SessionLog.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettings**
> \Swagger\Client\models\StationSettings[] getSettings()

Gets the Settings of all Stations (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\models\StationSettings[]**](../Model/StationSettings.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingsByStationId**
> \Swagger\Client\models\StationSettings getSettingsByStationId($station_id)

Get the Settings of an Station (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id

try {
    $result = $apiInstance->getSettingsByStationId($station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getSettingsByStationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |

### Return type

[**\Swagger\Client\models\StationSettings**](../Model/StationSettings.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getState**
> \Swagger\Client\models\StationCurrentState getState($station_id)

Get the Station's State (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id

try {
    $result = $apiInstance->getState($station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |

### Return type

[**\Swagger\Client\models\StationCurrentState**](../Model/StationCurrentState.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStates**
> \Swagger\Client\models\StationCurrentState[] getStates($network_state_filter)

Gets Collection of Station States (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_state_filter = "network_state_filter_example"; // string | Optional Network State Filter

try {
    $result = $apiInstance->getStates($network_state_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network_state_filter** | **string**| Optional Network State Filter | [optional]

### Return type

[**\Swagger\Client\models\StationCurrentState[]**](../Model/StationCurrentState.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionCreate**
> \Swagger\Client\models\CreatedSession sessionCreate($station_id, $create_session_request)

Creates a Session (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id
$create_session_request = new \Swagger\Client\models\RequestNewStationSession(); // \Swagger\Client\models\RequestNewStationSession | New Session Request Dto

try {
    $result = $apiInstance->sessionCreate($station_id, $create_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->sessionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |
 **create_session_request** | [**\Swagger\Client\models\RequestNewStationSession**](../Model/RequestNewStationSession.md)| New Session Request Dto | [optional]

### Return type

[**\Swagger\Client\models\CreatedSession**](../Model/CreatedSession.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionStop**
> \Swagger\Client\models\StoppedSession sessionStop($station_id)

Stops the running Session (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id

try {
    $result = $apiInstance->sessionStop($station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->sessionStop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |

### Return type

[**\Swagger\Client\models\StoppedSession**](../Model/StoppedSession.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionUpdate**
> \Swagger\Client\models\UpdatedSession sessionUpdate($station_id, $update_session_request)

Updates the running Session. (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id
$update_session_request = new \Swagger\Client\models\RequestSessionUpdate(); // \Swagger\Client\models\RequestSessionUpdate | The Update Request Dto

try {
    $result = $apiInstance->sessionUpdate($station_id, $update_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->sessionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |
 **update_session_request** | [**\Swagger\Client\models\RequestSessionUpdate**](../Model/RequestSessionUpdate.md)| The Update Request Dto | [optional]

### Return type

[**\Swagger\Client\models\UpdatedSession**](../Model/UpdatedSession.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSettings**
> setSettings($station_id, $set_settings_request)

Sets the Settings for an Station (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id
$set_settings_request = new \Swagger\Client\models\RequestStationSettings(); // \Swagger\Client\models\RequestStationSettings | Settings Dto

try {
    $apiInstance->setSettings($station_id, $set_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->setSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |
 **set_settings_request** | [**\Swagger\Client\models\RequestStationSettings**](../Model/RequestStationSettings.md)| Settings Dto | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setStationMode**
> setStationMode($station_id, $set_mode_request)

Sets the Operation Mode (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id
$set_mode_request = new \Swagger\Client\models\RequestStationMode(); // \Swagger\Client\models\RequestStationMode | The Operation Mode

try {
    $apiInstance->setStationMode($station_id, $set_mode_request);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->setStationMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |
 **set_mode_request** | [**\Swagger\Client\models\RequestStationMode**](../Model/RequestStationMode.md)| The Operation Mode | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setStationPassword**
> setStationPassword($station_id, $set_password_request)

Changes the Password (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id
$set_password_request = new \Swagger\Client\models\RequestSetStationPassword(); // \Swagger\Client\models\RequestSetStationPassword | New Password

try {
    $apiInstance->setStationPassword($station_id, $set_password_request);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->setStationPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |
 **set_password_request** | [**\Swagger\Client\models\RequestSetStationPassword**](../Model/RequestSetStationPassword.md)| New Password | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setStationQrCode**
> setStationQrCode($station_id, $set_qr_code_request)

Sets the QrCode (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = "station_id_example"; // string | Station Id
$set_qr_code_request = new \Swagger\Client\models\RequestStationQrCode(); // \Swagger\Client\models\RequestStationQrCode | QrCode

try {
    $apiInstance->setStationQrCode($station_id, $set_qr_code_request);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->setStationQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station_id** | [**string**](../Model/.md)| Station Id |
 **set_qr_code_request** | [**\Swagger\Client\models\RequestStationQrCode**](../Model/RequestStationQrCode.md)| QrCode | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

