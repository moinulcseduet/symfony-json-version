<?php

namespace Asad\Core\Bundle\Helper\Http;

class Factory
{
    public static function get($client)
    {
        switch ($client) {

            case 'HttpRequest':
                return new HttpRequest();

            case 'Guzzle':
                return new Guzzle();

        }
    }
}