<?php

namespace Asad\Core\Bundle\Helper\Http;

interface Base
{
    public function __construct($url = null);

    public function addHeader($key, $value);
    public function getResponseBody();
    public function getResponseCode();

    public function get($url);
    public function post($url, $data);
    public function put($url, $data);
    public function delete($url);
    public function getRawResponseMessage();
    public function getRawRequestMessage();

}