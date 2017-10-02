<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * srcDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            // api_jsonld_context
            if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
            }

            if (0 === strpos($pathinfo, '/api/categories')) {
                // api_categories_get_collection
                if (preg_match('#^/api/categories(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_categories_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Category',  '_api_collection_operation_name' => 'get',));
                }
                not_api_categories_get_collection:

                // api_categories_post_collection
                if (preg_match('#^/api/categories(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_categories_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Category',  '_api_collection_operation_name' => 'post',));
                }
                not_api_categories_post_collection:

                // api_categories_get_item
                if (preg_match('#^/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_categories_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Category',  '_api_item_operation_name' => 'get',));
                }
                not_api_categories_get_item:

                // api_categories_put_item
                if (preg_match('#^/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_categories_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Category',  '_api_item_operation_name' => 'put',));
                }
                not_api_categories_put_item:

                // api_categories_delete_item
                if (preg_match('#^/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_categories_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Category',  '_api_item_operation_name' => 'delete',));
                }
                not_api_categories_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/products')) {
                // api_products_get_collection
                if (preg_match('#^/api/products(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_products_get_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product',  '_api_collection_operation_name' => 'get',));
                }
                not_api_products_get_collection:

                // api_products_post_collection
                if (preg_match('#^/api/products(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_api_products_post_collection;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product',  '_api_collection_operation_name' => 'post',));
                }
                not_api_products_post_collection:

                // api_products_get_item
                if (preg_match('#^/api/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_api_products_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product',  '_api_item_operation_name' => 'get',));
                }
                not_api_products_get_item:

                // api_products_put_item
                if (preg_match('#^/api/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_api_products_put_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product',  '_api_item_operation_name' => 'put',));
                }
                not_api_products_put_item:

                // api_products_delete_item
                if (preg_match('#^/api/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_api_products_delete_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product',  '_api_item_operation_name' => 'delete',));
                }
                not_api_products_delete_item:

            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        }

        elseif (0 === strpos($pathinfo, '/categories')) {
            // categories
            if ('/categories' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categories');
                }

                return array (  '_controller' => 'App\\Controller\\CategoriesController::indexAction',  '_route' => 'categories',);
            }

            // category
            if (preg_match('#^/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category')), array (  '_controller' => 'App\\Controller\\CategoryController::indexAction',));
            }

        }

        // form
        if ('/form' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'form');
            }

            return array (  '_controller' => 'App\\Controller\\FormController::createAction',  '_route' => 'form',);
        }

        // app_homepage_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_homepage_index');
            }

            return array (  '_controller' => 'App\\Controller\\HomepageController::indexAction',  '_route' => 'app_homepage_index',);
        }

        if (0 === strpos($pathinfo, '/products')) {
            // productsList
            if ('/products' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'productsList');
                }

                return array (  '_controller' => 'App\\Controller\\ProductsController::indexAction',  '_route' => 'productsList',);
            }

            // single
            if (preg_match('#^/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'single')), array (  '_controller' => 'App\\Controller\\SingleController::indexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
