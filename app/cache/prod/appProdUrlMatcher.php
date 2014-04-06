<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // asad_core_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'asad_core_homepage')), array (  '_controller' => 'Asad\\Core\\Bundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/phone-')) {
            // asad_core_phone_list
            if ($pathinfo === '/phone-list') {
                return array (  '_controller' => 'Asad\\Core\\Bundle\\Controller\\DefaultController::phoneAction',  '_route' => 'asad_core_phone_list',);
            }

            // asad_core_phone_details
            if (0 === strpos($pathinfo, '/phone-details') && preg_match('#^/phone\\-details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asad_core_phone_details')), array (  '_controller' => 'Asad\\Core\\Bundle\\Controller\\DefaultController::phoneDetailsAction',));
            }

            if (0 === strpos($pathinfo, '/phone-s')) {
                // asad_core_phone_search_list
                if ($pathinfo === '/phone-search') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_asad_core_phone_search_list;
                    }

                    return array (  '_controller' => 'Asad\\Core\\Bundle\\Controller\\DefaultController::phoneSearchAction',  '_route' => 'asad_core_phone_search_list',);
                }
                not_asad_core_phone_search_list:

                // asad_core_phone_sort_list
                if ($pathinfo === '/phone-sort/list') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_asad_core_phone_sort_list;
                    }

                    return array (  '_controller' => 'Asad\\Core\\Bundle\\Controller\\DefaultController::phoneSortAction',  '_route' => 'asad_core_phone_sort_list',);
                }
                not_asad_core_phone_sort_list:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
