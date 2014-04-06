<?php

namespace Asad\Core\Bundle\Service;


use Asad\Core\Bundle\Helper\Http\Factory as HttpClientFactory;

class Base
{
    protected $debug;
    protected $endPoint;
    protected $container;
    protected $httpRequest;

    public function __construct($container, $endpoint, $client)
    {
        $this->endPoint  = $endpoint;
        $this->container = $container;

        $this->httpRequest = HttpClientFactory::get($client);

        if ((bool) $this->container->getParameter('service_debug')) {
            $this->debug(true);
        }
    }

    public function debug($mode)
    {
        $this->debug = (bool) $mode;
    }

    public function get($path, $cache = false)
    {
        $this->httpRequest->get($this->endPoint . $path);
        $this->logServiceCalls();

        $data = $this->httpRequest->getResponseBody();

        return $data;
    }

    public function post($path, $data)
    {
        $this->httpRequest->post($this->endPoint . $path, $data);
        $this->logServiceCalls();

        return $this->httpRequest->getResponseBody();
    }

    public function put($path, $data)
    {
        $this->httpRequest->put($this->endPoint . $path, $data);
        $this->logServiceCalls();

        return $this->httpRequest->getResponseBody();
    }

    public function delete($path)
    {
        $this->httpRequest->delete($this->endPoint . $path);
        $this->logServiceCalls();

        return $this->httpRequest->getResponseBody();
    }

    public static function indexBy(array $arr, $field = 'id')
    {
        $indexedArr = array();

        foreach ($arr as $item) {
            if (is_array($item)) {
                $indexedArr[$item[$field]] = $item;
            } elseif (is_object($item)) {
                $indexedArr[$item->$field] = $item;
            }
        }

        return $indexedArr;
    }

    protected function parse($content)
    {
        $output = json_decode($content);

        if (!is_null($output)) {
            return $output;
        }

        $errorStr = 'Error in parsing JSON';

        switch (json_last_error()) {

            case JSON_ERROR_NONE:
                $errorStr .= ' - No JSON errors'; break;

            case JSON_ERROR_DEPTH:
                $errorStr .= ' - Maximum stack depth exceeded'; break;

            case JSON_ERROR_STATE_MISMATCH:
                $errorStr .= ' - Underflow or the modes mismatch'; break;

            case JSON_ERROR_CTRL_CHAR:
                $errorStr .= ' - Unexpected control character found'; break;

            case JSON_ERROR_SYNTAX:
                $errorStr .= ' - Syntax error, malformed JSON'; break;

            case JSON_ERROR_UTF8:
                $errorStr .= ' - Malformed UTF-8 characters, possibly incorrectly encoded'; break;

            default:
                $errorStr .= ' - Unknown error';

        }

        throw new \ErrorException($errorStr, json_last_error());
    }

    protected function logServiceCalls()
    {
        if ($this->debug) {

            $file = $this->container->getParameter('kernel.logs_dir') . '/service_calls.log';

            $data = '[' . date('Y-m-d H:i:s') . '] '
                . $this->httpRequest->getRawRequestMessage()
                . PHP_EOL . PHP_EOL
                . $this->httpRequest->getRawResponseMessage()
                . PHP_EOL . PHP_EOL . PHP_EOL;

            file_put_contents($file, $data, FILE_APPEND);

        }
    }
}