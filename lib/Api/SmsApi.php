<?php
/**
 * SmsApi
 * PHP version 5
 *
 * @category Class
 * @package  ToastCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Toast Cloud SMS
 *
 * Toast Cloud SMS API Specification
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.5
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ToastCloud\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ToastCloud\ApiException;
use ToastCloud\Configuration;
use ToastCloud\HeaderSelector;
use ToastCloud\ObjectSerializer;

/**
 * SmsApi Class Doc Comment
 *
 * @category Class
 * @package  ToastCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getSmsSendList
     *
     * 단문 SMS 발송 리스트 조회 (Parameter는 선택적으로 옮겼음)
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  string $requestId 요청ID (조건적 필수 - 1) (optional)
     * @param  string $startRequestDate 발송 날짜 시작값 (조건적 필수 - 2) (optional)
     * @param  string $endRequestDate 발송 날짜 종료값 (조건적 필수 - 2) (optional)
     * @param  string $msgStatus msgStatus (optional)
     *
     * @throws \ToastCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getSmsSendList($appKey, $requestId = null, $startRequestDate = null, $endRequestDate = null, $msgStatus = null)
    {
        $this->getSmsSendListWithHttpInfo($appKey, $requestId, $startRequestDate, $endRequestDate, $msgStatus);
    }

    /**
     * Operation getSmsSendListWithHttpInfo
     *
     * 단문 SMS 발송 리스트 조회 (Parameter는 선택적으로 옮겼음)
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  string $requestId 요청ID (조건적 필수 - 1) (optional)
     * @param  string $startRequestDate 발송 날짜 시작값 (조건적 필수 - 2) (optional)
     * @param  string $endRequestDate 발송 날짜 종료값 (조건적 필수 - 2) (optional)
     * @param  string $msgStatus (optional)
     *
     * @throws \ToastCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSmsSendListWithHttpInfo($appKey, $requestId = null, $startRequestDate = null, $endRequestDate = null, $msgStatus = null)
    {
        $returnType = '';
        $request = $this->getSmsSendListRequest($appKey, $requestId, $startRequestDate, $endRequestDate, $msgStatus);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation getSmsSendListAsync
     *
     * 단문 SMS 발송 리스트 조회 (Parameter는 선택적으로 옮겼음)
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  string $requestId 요청ID (조건적 필수 - 1) (optional)
     * @param  string $startRequestDate 발송 날짜 시작값 (조건적 필수 - 2) (optional)
     * @param  string $endRequestDate 발송 날짜 종료값 (조건적 필수 - 2) (optional)
     * @param  string $msgStatus (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSmsSendListAsync($appKey, $requestId = null, $startRequestDate = null, $endRequestDate = null, $msgStatus = null)
    {
        return $this->getSmsSendListAsyncWithHttpInfo($appKey, $requestId, $startRequestDate, $endRequestDate, $msgStatus)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSmsSendListAsyncWithHttpInfo
     *
     * 단문 SMS 발송 리스트 조회 (Parameter는 선택적으로 옮겼음)
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  string $requestId 요청ID (조건적 필수 - 1) (optional)
     * @param  string $startRequestDate 발송 날짜 시작값 (조건적 필수 - 2) (optional)
     * @param  string $endRequestDate 발송 날짜 종료값 (조건적 필수 - 2) (optional)
     * @param  string $msgStatus (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSmsSendListAsyncWithHttpInfo($appKey, $requestId = null, $startRequestDate = null, $endRequestDate = null, $msgStatus = null)
    {
        $returnType = '';
        $request = $this->getSmsSendListRequest($appKey, $requestId, $startRequestDate, $endRequestDate, $msgStatus);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSmsSendList'
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  string $requestId 요청ID (조건적 필수 - 1) (optional)
     * @param  string $startRequestDate 발송 날짜 시작값 (조건적 필수 - 2) (optional)
     * @param  string $endRequestDate 발송 날짜 종료값 (조건적 필수 - 2) (optional)
     * @param  string $msgStatus (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSmsSendListRequest($appKey, $requestId = null, $startRequestDate = null, $endRequestDate = null, $msgStatus = null)
    {
        // verify the required parameter 'appKey' is set
        if ($appKey === null || (is_array($appKey) && count($appKey) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $appKey when calling getSmsSendList'
            );
        }
        if ($requestId !== null && strlen($requestId) > 25) {
            throw new \InvalidArgumentException('invalid length for "$requestId" when calling SmsApi.getSmsSendList, must be smaller than or equal to 25.');
        }


        $resourcePath = '/{appKey}/sender/sms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($requestId !== null) {
            $queryParams['requestId'] = ObjectSerializer::toQueryValue($requestId);
        }
        // query params
        if ($startRequestDate !== null) {
            $queryParams['startRequestDate'] = ObjectSerializer::toQueryValue($startRequestDate);
        }
        // query params
        if ($endRequestDate !== null) {
            $queryParams['endRequestDate'] = ObjectSerializer::toQueryValue($endRequestDate);
        }
        // query params
        if ($msgStatus !== null) {
            $queryParams['msgStatus'] = ObjectSerializer::toQueryValue($msgStatus);
        }

        // path params
        if ($appKey !== null) {
            $resourcePath = str_replace(
                '{' . 'appKey' . '}',
                ObjectSerializer::toPathValue($appKey),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/sjon;charset=UTF-8']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendSMS
     *
     * 단문 SMS 발송
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  \ToastCloud\Model\SmsBody $body body (required)
     *
     * @throws \ToastCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sendSMS($appKey, $body)
    {
        $this->sendSMSWithHttpInfo($appKey, $body);
    }

    /**
     * Operation sendSMSWithHttpInfo
     *
     * 단문 SMS 발송
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  \ToastCloud\Model\SmsBody $body (required)
     *
     * @throws \ToastCloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendSMSWithHttpInfo($appKey, $body)
    {
        $returnType = '';
        $request = $this->sendSMSRequest($appKey, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation sendSMSAsync
     *
     * 단문 SMS 발송
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  \ToastCloud\Model\SmsBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendSMSAsync($appKey, $body)
    {
        return $this->sendSMSAsyncWithHttpInfo($appKey, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendSMSAsyncWithHttpInfo
     *
     * 단문 SMS 발송
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  \ToastCloud\Model\SmsBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendSMSAsyncWithHttpInfo($appKey, $body)
    {
        $returnType = '';
        $request = $this->sendSMSRequest($appKey, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sendSMS'
     *
     * @param  string $appKey Project별 고유의 앱키 (required)
     * @param  \ToastCloud\Model\SmsBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendSMSRequest($appKey, $body)
    {
        // verify the required parameter 'appKey' is set
        if ($appKey === null || (is_array($appKey) && count($appKey) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $appKey when calling sendSMS'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling sendSMS'
            );
        }

        $resourcePath = '/{appKey}/sender/sms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($appKey !== null) {
            $resourcePath = str_replace(
                '{' . 'appKey' . '}',
                ObjectSerializer::toPathValue($appKey),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json;charset=UTF-8']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
