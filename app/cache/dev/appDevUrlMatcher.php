<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/16d4e1a')) {
            // _assetic_16d4e1a
            if ($pathinfo === '/css/16d4e1a.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '16d4e1a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_16d4e1a',);
            }

            if (0 === strpos($pathinfo, '/css/16d4e1a_')) {
                // _assetic_16d4e1a_0
                if ($pathinfo === '/css/16d4e1a_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '16d4e1a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_16d4e1a_0',);
                }

                // _assetic_16d4e1a_1
                if ($pathinfo === '/css/16d4e1a_app_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '16d4e1a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_16d4e1a_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ee67187')) {
            // _assetic_ee67187
            if ($pathinfo === '/js/ee67187.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ee67187',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ee67187',);
            }

            if (0 === strpos($pathinfo, '/js/ee67187_')) {
                // _assetic_ee67187_0
                if ($pathinfo === '/js/ee67187_jquery-1.8.2.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ee67187',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ee67187_0',);
                }

                // _assetic_ee67187_1
                if ($pathinfo === '/js/ee67187_underscore-min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ee67187',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ee67187_1',);
                }

                if (0 === strpos($pathinfo, '/js/ee67187_bootstrap')) {
                    // _assetic_ee67187_2
                    if ($pathinfo === '/js/ee67187_bootstrap.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ee67187',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ee67187_2',);
                    }

                    // _assetic_ee67187_3
                    if ($pathinfo === '/js/ee67187_bootstrap-datepicker_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ee67187',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ee67187_3',);
                    }

                }

                // _assetic_ee67187_4
                if ($pathinfo === '/js/ee67187_Templates_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ee67187',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ee67187_4',);
                }

                // _assetic_ee67187_5
                if ($pathinfo === '/js/ee67187_admin_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ee67187',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_ee67187_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/3247453')) {
            // _assetic_3247453
            if ($pathinfo === '/css/3247453.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 3247453,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3247453',);
            }

            // _assetic_3247453_0
            if ($pathinfo === '/css/3247453_bootstrap.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 3247453,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3247453_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
