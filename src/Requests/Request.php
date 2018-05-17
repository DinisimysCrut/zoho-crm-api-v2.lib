<?php


namespace ZohoCrmApiV2\Requests;


use SingletonClasses\GuzzleSingleton;

class Request
{

    protected $token;

    protected $method;

    protected $module;

    protected $httpQuery = [];

    protected $httpHeaders = [
        'Authorization' => null
    ];

    protected $httpJson = [];


    private static $url = "https://www.zohoapis.com/crm/v2/";

    protected $urlApi;

    protected function getStaticUrl() {
        return self::$url;
    }

    protected function getUrlApi()
    {
        return $this->urlApi;
    }

    protected function setUrlApi($urlApi)
    {
        $this->urlApi = $urlApi;
    }

    protected function getHttpClient()
    {
        return GuzzleSingleton::getInstance()->getHttpClient();
    }


    protected function getHttpJson()
    {
        return $this->httpJson;
    }

    protected function setHttpJson($httpJson)
    {
        $this->httpJson = $httpJson;
    }

    protected function setHttpQuery($key,$value)
    {
        $this->httpQuery[$key] = $value;
    }

    protected function getHttpQuery()
    {
        return $this->httpQuery;
    }

    protected function defaultHeaders()
    {
        return [
            'Authorization' => $this->getToken()
        ];
    }

    protected function setHttpHeaders($header,$value)
    {
        $this->httpHeaders[$header] = $value;
    }

    protected function getHttpHeaders()
    {
        return $this->httpHeaders;
    }

    public function setModule($module)
    {
        $this->setUrlApi(self::$url . $module);
        $this->module = $module;
        return $this;
    }

    protected function getModule()
    {
        return $this->module;
    }

    protected function setMethod($method)
    {
        $this->method = $method;
    }

    protected function getMethod()
    {
        return $this->method;
    }


    protected function getToken()
    {
        return $this->httpHeaders['Authorization'];

    }

    /**
     * @param $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->httpHeaders['Authorization'] = $token;
        return $this;
    }

    public function request() {
        return $this->getHttpClient()->request($this->getMethod(),$this->getUrlApi(),[
            'query' => $this->getHttpQuery(),
            'headers' => $this->getHttpHeaders(),
            'http_errors' => false,
            'json' => $this->getHttpJson(),
        ]);
    }
}