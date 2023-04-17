<?php
/**
 * LedgerEntryApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Etsy Open API v3
 *
 * <div class=\"wt-text-body-01\"><p class=\"wt-pt-xs-2 wt-pb-xs-2\">Etsy's Open API provides a simple RESTful interface for various Etsy.com features. The API endpoints are meant to replace Etsy's Open API v2, which is scheduled to end service in 2022.</p><p class=\"wt-pb-xs-2\">All of the endpoints are callable and the majority of the API endpoints are now in a beta phase. This means we do not expect to make any breaking changes before our general release. A handful of endpoints are currently interface stubs (labeled “Feedback Only”) and returns a \"501 Not Implemented\" response code when called.</p><p class=\"wt-pb-xs-2\">If you'd like to report an issue or provide feedback on the API design, <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://github.com/etsy/open-api/discussions\">please add an issue in Github</a>.</p></div>&copy; 2021-2023 Etsy, Inc. All Rights Reserved. Use of this code is subject to Etsy's <a class='wt-text-link wt-p-xs-0' target='_blank' href='https://www.etsy.com/legal/api'>API Developer Terms of Use</a>.
 *
 * OpenAPI spec version: 3.0.0
 * Contact: developers@etsy.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * LedgerEntryApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LedgerEntryApi
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
     * Operation getShopPaymentAccountLedgerEntries
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $min_created The earliest unix timestamp for when a record was created. (required)
     * @param  int $max_created The latest unix timestamp for when a record was created. (required)
     * @param  int $limit The maximum number of results to return. (optional, default to 25)
     * @param  int $offset The number of records to skip before selecting the first result. (optional, default to 0)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PaymentAccountLedgerEntries
     */
    public function getShopPaymentAccountLedgerEntries($shop_id, $min_created, $max_created, $limit = '25', $offset = '0')
    {
        list($response) = $this->getShopPaymentAccountLedgerEntriesWithHttpInfo($shop_id, $min_created, $max_created, $limit, $offset);
        return $response;
    }

    /**
     * Operation getShopPaymentAccountLedgerEntriesWithHttpInfo
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $min_created The earliest unix timestamp for when a record was created. (required)
     * @param  int $max_created The latest unix timestamp for when a record was created. (required)
     * @param  int $limit The maximum number of results to return. (optional, default to 25)
     * @param  int $offset The number of records to skip before selecting the first result. (optional, default to 0)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PaymentAccountLedgerEntries, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShopPaymentAccountLedgerEntriesWithHttpInfo($shop_id, $min_created, $max_created, $limit = '25', $offset = '0')
    {
        $returnType = '\Swagger\Client\Model\PaymentAccountLedgerEntries';
        $request = $this->getShopPaymentAccountLedgerEntriesRequest($shop_id, $min_created, $max_created, $limit, $offset);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PaymentAccountLedgerEntries',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getShopPaymentAccountLedgerEntriesAsync
     *
     * 
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $min_created The earliest unix timestamp for when a record was created. (required)
     * @param  int $max_created The latest unix timestamp for when a record was created. (required)
     * @param  int $limit The maximum number of results to return. (optional, default to 25)
     * @param  int $offset The number of records to skip before selecting the first result. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShopPaymentAccountLedgerEntriesAsync($shop_id, $min_created, $max_created, $limit = '25', $offset = '0')
    {
        return $this->getShopPaymentAccountLedgerEntriesAsyncWithHttpInfo($shop_id, $min_created, $max_created, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShopPaymentAccountLedgerEntriesAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $min_created The earliest unix timestamp for when a record was created. (required)
     * @param  int $max_created The latest unix timestamp for when a record was created. (required)
     * @param  int $limit The maximum number of results to return. (optional, default to 25)
     * @param  int $offset The number of records to skip before selecting the first result. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShopPaymentAccountLedgerEntriesAsyncWithHttpInfo($shop_id, $min_created, $max_created, $limit = '25', $offset = '0')
    {
        $returnType = '\Swagger\Client\Model\PaymentAccountLedgerEntries';
        $request = $this->getShopPaymentAccountLedgerEntriesRequest($shop_id, $min_created, $max_created, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'getShopPaymentAccountLedgerEntries'
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $min_created The earliest unix timestamp for when a record was created. (required)
     * @param  int $max_created The latest unix timestamp for when a record was created. (required)
     * @param  int $limit The maximum number of results to return. (optional, default to 25)
     * @param  int $offset The number of records to skip before selecting the first result. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getShopPaymentAccountLedgerEntriesRequest($shop_id, $min_created, $max_created, $limit = '25', $offset = '0')
    {
        // verify the required parameter 'shop_id' is set
        if ($shop_id === null || (is_array($shop_id) && count($shop_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shop_id when calling getShopPaymentAccountLedgerEntries'
            );
        }
        // verify the required parameter 'min_created' is set
        if ($min_created === null || (is_array($min_created) && count($min_created) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $min_created when calling getShopPaymentAccountLedgerEntries'
            );
        }
        // verify the required parameter 'max_created' is set
        if ($max_created === null || (is_array($max_created) && count($max_created) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $max_created when calling getShopPaymentAccountLedgerEntries'
            );
        }

        $resourcePath = '/v3/application/shops/{shop_id}/payment-account/ledger-entries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($min_created !== null) {
            $queryParams['min_created'] = ObjectSerializer::toQueryValue($min_created, null);
        }
        // query params
        if ($max_created !== null) {
            $queryParams['max_created'] = ObjectSerializer::toQueryValue($max_created, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }

        // path params
        if ($shop_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shop_id' . '}',
                ObjectSerializer::toPathValue($shop_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation getShopPaymentAccountLedgerEntry
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $ledger_entry_id The unique ID of the shop owner ledger entry. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PaymentAccountLedgerEntry
     */
    public function getShopPaymentAccountLedgerEntry($shop_id, $ledger_entry_id)
    {
        list($response) = $this->getShopPaymentAccountLedgerEntryWithHttpInfo($shop_id, $ledger_entry_id);
        return $response;
    }

    /**
     * Operation getShopPaymentAccountLedgerEntryWithHttpInfo
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $ledger_entry_id The unique ID of the shop owner ledger entry. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PaymentAccountLedgerEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShopPaymentAccountLedgerEntryWithHttpInfo($shop_id, $ledger_entry_id)
    {
        $returnType = '\Swagger\Client\Model\PaymentAccountLedgerEntry';
        $request = $this->getShopPaymentAccountLedgerEntryRequest($shop_id, $ledger_entry_id);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PaymentAccountLedgerEntry',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getShopPaymentAccountLedgerEntryAsync
     *
     * 
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $ledger_entry_id The unique ID of the shop owner ledger entry. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShopPaymentAccountLedgerEntryAsync($shop_id, $ledger_entry_id)
    {
        return $this->getShopPaymentAccountLedgerEntryAsyncWithHttpInfo($shop_id, $ledger_entry_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShopPaymentAccountLedgerEntryAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $ledger_entry_id The unique ID of the shop owner ledger entry. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShopPaymentAccountLedgerEntryAsyncWithHttpInfo($shop_id, $ledger_entry_id)
    {
        $returnType = '\Swagger\Client\Model\PaymentAccountLedgerEntry';
        $request = $this->getShopPaymentAccountLedgerEntryRequest($shop_id, $ledger_entry_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'getShopPaymentAccountLedgerEntry'
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $ledger_entry_id The unique ID of the shop owner ledger entry. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getShopPaymentAccountLedgerEntryRequest($shop_id, $ledger_entry_id)
    {
        // verify the required parameter 'shop_id' is set
        if ($shop_id === null || (is_array($shop_id) && count($shop_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shop_id when calling getShopPaymentAccountLedgerEntry'
            );
        }
        // verify the required parameter 'ledger_entry_id' is set
        if ($ledger_entry_id === null || (is_array($ledger_entry_id) && count($ledger_entry_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ledger_entry_id when calling getShopPaymentAccountLedgerEntry'
            );
        }

        $resourcePath = '/v3/application/shops/{shop_id}/payment-account/ledger-entries/{ledger_entry_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($shop_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shop_id' . '}',
                ObjectSerializer::toPathValue($shop_id),
                $resourcePath
            );
        }
        // path params
        if ($ledger_entry_id !== null) {
            $resourcePath = str_replace(
                '{' . 'ledger_entry_id' . '}',
                ObjectSerializer::toPathValue($ledger_entry_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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