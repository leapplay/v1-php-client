# Swagger\Client\AccountsApi

All URIs are relative to *https://api.leap-play.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePassword**](AccountsApi.md#changePassword) | **POST** /api/v1/accounts/password/change | Changes the Password and provides a new Refresh Token (Auth)
[**confirmEmail**](AccountsApi.md#confirmEmail) | **POST** /api/v1/accounts/email/confirmation | Confirms ownership of an E-Mail Address by an E-Mail Confirmation Token
[**register**](AccountsApi.md#register) | **POST** /api/v1/accounts/register | Registers a User Account
[**requestPassword**](AccountsApi.md#requestPassword) | **POST** /api/v1/accounts/password/forgot | Receives a Reset Token that is required to reset the Password
[**resendEMailConfirmation**](AccountsApi.md#resendEMailConfirmation) | **POST** /api/v1/accounts/email/confirmation/send | Re-sends a message with a EMail Confirmation Token.
[**resetPassword**](AccountsApi.md#resetPassword) | **POST** /api/v1/accounts/password/reset | Resets the Password with an Reset Token


# **changePassword**
> \Swagger\Client\models\ChangedPasswordUser changePassword($change_password_request)

Changes the Password and provides a new Refresh Token (Auth)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_password_request = new \Swagger\Client\models\RequestChangePassword(); // \Swagger\Client\models\RequestChangePassword | The change password request.

try {
    $result = $apiInstance->changePassword($change_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_password_request** | [**\Swagger\Client\models\RequestChangePassword**](../Model/RequestChangePassword.md)| The change password request. |

### Return type

[**\Swagger\Client\models\ChangedPasswordUser**](../Model/ChangedPasswordUser.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmEmail**
> confirmEmail($email_confirmation_request)

Confirms ownership of an E-Mail Address by an E-Mail Confirmation Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_confirmation_request = new \Swagger\Client\models\RequestEmailConfirmation(); // \Swagger\Client\models\RequestEmailConfirmation | The request email confirmation.

try {
    $apiInstance->confirmEmail($email_confirmation_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->confirmEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_confirmation_request** | [**\Swagger\Client\models\RequestEmailConfirmation**](../Model/RequestEmailConfirmation.md)| The request email confirmation. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register**
> register($register_request)

Registers a User Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_request = new \Swagger\Client\models\RequestRegisterUser(); // \Swagger\Client\models\RequestRegisterUser | 

try {
    $apiInstance->register($register_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_request** | [**\Swagger\Client\models\RequestRegisterUser**](../Model/RequestRegisterUser.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestPassword**
> requestPassword($forgot_password_request)

Receives a Reset Token that is required to reset the Password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forgot_password_request = new \Swagger\Client\models\RequestForgotPassword(); // \Swagger\Client\models\RequestForgotPassword | Request object holding the required parameter

try {
    $apiInstance->requestPassword($forgot_password_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->requestPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgot_password_request** | [**\Swagger\Client\models\RequestForgotPassword**](../Model/RequestForgotPassword.md)| Request object holding the required parameter |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendEMailConfirmation**
> resendEMailConfirmation($resend_confirmation_email_request)

Re-sends a message with a EMail Confirmation Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resend_confirmation_email_request = new \Swagger\Client\models\RequestResendConfirmationEmail(); // \Swagger\Client\models\RequestResendConfirmationEmail | The resend email confirmation request.

try {
    $apiInstance->resendEMailConfirmation($resend_confirmation_email_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->resendEMailConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resend_confirmation_email_request** | [**\Swagger\Client\models\RequestResendConfirmationEmail**](../Model/RequestResendConfirmationEmail.md)| The resend email confirmation request. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassword**
> resetPassword($reset_password_request)

Resets the Password with an Reset Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reset_password_request = new \Swagger\Client\models\RequestResetPassword(); // \Swagger\Client\models\RequestResetPassword | The request reset password.

try {
    $apiInstance->resetPassword($reset_password_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reset_password_request** | [**\Swagger\Client\models\RequestResetPassword**](../Model/RequestResetPassword.md)| The request reset password. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

