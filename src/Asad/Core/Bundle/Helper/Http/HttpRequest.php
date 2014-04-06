<?php

namespace Asad\Core\Bundle\Helper\Http;

class HttpRequest implements Base
{
    protected $httpRequest;

    public function __construct($url = null)
    {
        $this->httpRequest = new \HttpRequest($url);

        $this->httpRequest->setOptions(array(
            'dns_cache_timeout' => 30,
            'connecttimeout' => 30,
            'timeout' => 30
        ));
    }

    public function addHeader($key, $value)
    {
        $this->httpRequest->addHeaders(array($key => $value));
    }

    public function getResponseBody()
    {
        return $this->httpRequest->getResponseBody();
    }

    public function getResponseCode()
    {
        return $this->httpRequest->getResponseCode();
    }

    public function get($url)
    {
        $this->httpRequest->setUrl($url);
        $this->httpRequest->send();
    }

    public function post($url, $data)
    {
        $this->httpRequest->setUrl($url);
        $this->httpRequest->addPostFields($data);
        $this->httpRequest->setMethod(\HttpRequest::METH_POST);
        $this->httpRequest->send();
    }

    public function put($url, $data)
    {
        $this->httpRequest->addHeaders(array('Content-type' => 'application/x-www-form-urlencoded'));

        $this->httpRequest->setUrl($url);
        $this->httpRequest->addPutData(http_build_query($data));
        $this->httpRequest->setMethod(\HttpRequest::METH_PUT);
        $this->httpRequest->send();
    }

    public function delete($url)
    {
        $this->httpRequest->setUrl($url);
        $this->httpRequest->setMethod(\HttpRequest::METH_DELETE);
        $this->httpRequest->send();
    }

    public function getRawResponseMessage()
    {
        return $this->httpRequest->getRawResponseMessage();
    }

    public function getRawRequestMessage()
    {
        return $this->httpRequest->getRawRequestMessage();
    }
}