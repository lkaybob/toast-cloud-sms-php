# toast-cloud-sms-php
Toast Cloud SMS API Specification

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/lkaybob/toast-cloud-sms-php.git"
    }
  ],
  "require": {
    "lkaybob/toast-cloud-sms-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/toast-cloud-sms-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api-sms.cloud.toast.com/sms/v2.2/appKeys/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MmsApi* | [**getMmsSendList**](docs/Api/MmsApi.md#getmmssendlist) | **GET** /{appKey}/sender/mms | 장문 MMS 발송 리스트 조회 (Parameter는 선택적으로 옮겼음)
*MmsApi* | [**sendMmsWithoutAttachment**](docs/Api/MmsApi.md#sendmmswithoutattachment) | **POST** /{appKey}/sender/mms | 장문 SMS 발송
*SmsApi* | [**getSmsSendList**](docs/Api/SmsApi.md#getsmssendlist) | **GET** /{appKey}/sender/sms | 단문 SMS 발송 리스트 조회 (Parameter는 선택적으로 옮겼음)
*SmsApi* | [**sendSMS**](docs/Api/SmsApi.md#sendsms) | **POST** /{appKey}/sender/sms | 단문 SMS 발송


## Documentation For Models

 - [MmsBody](docs/Model/MmsBody.md)
 - [Recipient](docs/Model/Recipient.md)
 - [SmsBody](docs/Model/SmsBody.md)
 - [TemplateParameter](docs/Model/TemplateParameter.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




