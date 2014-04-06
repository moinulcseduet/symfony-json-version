<?php

namespace Asad\Core\Bundle\Service;

class Phone extends Base
{
    public function phoneList()
    {
        $response = file_get_contents('phones/phones.json');

        return $response;
    }

    public function phoneDetails($id)
    {
        $response = file_get_contents('phones/'.$id.'.json');

        return $response;

        /*$response = $this->get('/industry');

        if ($this->httpRequest->getResponseCode() == 200) {
            return $response;
        }

        return false;*/
    }

    public function phoneSearch()
    {
        $response = file_get_contents('phones/phones.json');

        return $response;
    }

}