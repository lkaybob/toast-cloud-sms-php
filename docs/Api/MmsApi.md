# ToastCloud\MmsApi

All URIs are relative to *https://api-sms.cloud.toast.com/sms/v2.2/appKeys/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMmsSendList**](MmsApi.md#getMmsSendList) | **GET** /{appKey}/sender/mms | 장문 MMS 발송 리스트 조회 (Parameter는 선택적으로 옮겼음)
[**sendMmsWithoutAttachment**](MmsApi.md#sendMmsWithoutAttachment) | **POST** /{appKey}/sender/mms | 장문 SMS 발송


# **getMmsSendList**
> getMmsSendList($appKey, $requestId, $startRequestDate, $endRequestDate, $msgStatus)

장문 MMS 발송 리스트 조회 (Parameter는 선택적으로 옮겼음)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ToastCloud\Api\MmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appKey = "appKey_example"; // string | Project별 고유의 앱키
$requestId = "requestId_example"; // string | 요청ID (조건적 필수 - 1)
$startRequestDate = "startRequestDate_example"; // string | 발송 날짜 시작값 (조건적 필수 - 2)
$endRequestDate = "endRequestDate_example"; // string | 발송 날짜 종료값 (조건적 필수 - 2)
$msgStatus = "msgStatus_example"; // string | 

try {
    $apiInstance->getMmsSendList($appKey, $requestId, $startRequestDate, $endRequestDate, $msgStatus);
} catch (Exception $e) {
    echo 'Exception when calling MmsApi->getMmsSendList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appKey** | **string**| Project별 고유의 앱키 |
 **requestId** | **string**| 요청ID (조건적 필수 - 1) | [optional]
 **startRequestDate** | **string**| 발송 날짜 시작값 (조건적 필수 - 2) | [optional]
 **endRequestDate** | **string**| 발송 날짜 종료값 (조건적 필수 - 2) | [optional]
 **msgStatus** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/sjon;charset=UTF-8
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMmsWithoutAttachment**
> sendMmsWithoutAttachment($appKey, $body)

장문 SMS 발송

최대 4000자 이내

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ToastCloud\Api\MmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appKey = "appKey_example"; // string | Project별 고유의 앱키
$body = new \ToastCloud\Model\MmsBody(); // \ToastCloud\Model\MmsBody | 

try {
    $apiInstance->sendMmsWithoutAttachment($appKey, $body);
} catch (Exception $e) {
    echo 'Exception when calling MmsApi->sendMmsWithoutAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appKey** | **string**| Project별 고유의 앱키 |
 **body** | [**\ToastCloud\Model\MmsBody**](../Model/MmsBody.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

