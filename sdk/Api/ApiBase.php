<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose">
 *   Copyright (c) 2018 Aspose.Slides for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Slides\Cloud\Sdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Psr7\Request;

/**
 * Aspose.Slides for Cloud API.
 */
class ApiBase
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;

    /*
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /*
     * Initialize a new instance of ApiBase
     * @param ClientInterface   $client client for calling api
     * @param Configuration   $config configuration info
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /*
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        return [];
    }

    /*
     * Executes url parsing
     */
    protected function parseURL($url, $queryParams) 
    {
         $urlToSign = trim($url, "/");
         return $this->config->getHost()
             ."/"
             .$this->config->getBasePath()
             ."/"
             .parse_url($urlToSign, PHP_URL_HOST)
             .parse_url($urlToSign, PHP_URL_PATH)
             ."?"
             .http_build_query($queryParams);
    }


    /**
     * Create request
     */
    protected function createRequest($resourcePath, $queryParams, $headers, $headerParams, $httpBody, $httpMethod)
    {
        $this->requestToken();
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer '.$this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();
        $headers = array_merge($defaultHeaders, $headerParams, $headers);
        $resourcePath = $this->parseURL($resourcePath, $queryParams);
        $request = new Request($httpMethod, $resourcePath, $headers, $httpBody);
        if ($this->config->getDebug()) {
            $this->writeRequestLog($httpMethod, $resourcePath, $headers, $httpBody);
        }
        return $request;
    }

    protected function handleApiException(ApiException $e)
    {
        if ($e->getCode() >= 400) {
            try {
                $errorObject = json_decode($e->getResponseBody()->getContents());
                if (property_exists($errorObject, "Error")) {
                    $errorObject = $errorObject->Error;
                }
                $error = ObjectSerializer::deserialize($errorObject, '\Aspose\Slides\Cloud\Sdk\Api\ErrorMessage', $e->getResponseHeaders());
                $e->setResponseObject($error);
            } catch (Exception $ex) {
                //leave as is if could not parse the error
            }
        }
    }

  
    /*
     * Gets a request token from server
     */
    protected function requestToken() 
    {
        $requestUrl = $this->config->getHost()."/oauth2/token";
        $postData = "grant_type=client_credentials"."&client_id=".$this->config->getAppSid()."&client_secret=".$this->config->getAppKey();
        $response = $this->client->send(new Request('POST', $requestUrl, [], $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
        $this->config->setRefreshToken($result["refresh_token"]);
    }
  
    /*
     * Refresh token
     */
    protected function refreshToken() 
    {
        $requestUrl = $this->config->getHost()."/oauth2/token";
        $postData = "grant_type=refresh_token&refresh_token=".$this->config->getRefreshToken();
        $response = $this->client->send(new Request('POST', $requestUrl, [], $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
        $this->config->setRefreshToken($result["refresh_token"]);
    }

    
    /*
     * Executes response logging
     */
    protected function writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes request logging
     */
    protected function writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes header and boy formatting
     */
    private function writeHeadersAndBody($logInfo, $headers, $body)
    {
        echo "\nlog:";
        foreach ($headers as $name => $value) {
            $logInfo .= $name.': '.(is_array($value) ? implode(",", $value) : $value)."\n";
        }
        return $logInfo .= "Body: ".$body."\n";
    }
}
