<?php

namespace Asad\Core\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    protected $request;

    /**
     * @var \Symfony\Component\HttpFoundation\Response;
     */
    protected $response;

    public function init()
    {
        $this->request = $this->getRequest();
        $this->response = new Response();
    }

    public function redirectUnautorized($path = '/')
    {
        //$this->session->setFlash('error', '<i class="icon-ban-circle"></i>&nbsp; <strong>Sorry</strong>, you first need to sign in to access your dashboard. ');
        return $this->redirect($path);
    }

    public function respondUnauthorized()
    {
        $this->response->setStatusCode(401);
        return $this->response;
    }

    /**
     * @param $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function processResponse($response)
    {
        if($response) {
            $this->response->setContent(json_encode($response));
            $this->response->setStatusCode(200);
        } else {
            $this->response->setContent(json_encode(array()));
            $this->response->setStatusCode(200);
        }
        return $this->response;
    }

}