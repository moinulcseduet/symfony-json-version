<?php

namespace Asad\Core\Bundle\Model;

class Phone extends Base
{

    public function phone_list()
    {
        $response = $this->get('phone_service')->phoneList();

        if ($response) {
            return json_decode($response, true);
        }

        return false;
    }

    public function phone_details($id)
    {
        $response = $this->get('phone_service')->phoneDetails($id);

        if ($response) {
            return json_decode($response, true);
        }

        return false;
    }

    public function phone_search()
    {
        $response = $this->get('phone_service')->phoneSearch();

        if ($response) {
            return json_decode($response, true);
        }

        return false;
    }

}

