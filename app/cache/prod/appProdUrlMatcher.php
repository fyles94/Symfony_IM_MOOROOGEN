<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // esiea_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esiea_blog_homepage');
            }

            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esiea_blog_homepage',);
        }

        // esiea_blog_vue
        if (preg_match('#^/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_vue')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::vueAction',));
        }

        // esiea_blog_ajouter
        if ($pathinfo === '/ajouter') {
            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::ajouterAction',  '_route' => 'esiea_blog_ajouter',);
        }

        // esiea_blog_modifier
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_modifier')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::modifierAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // esiea_blog_supprimer
            if (0 === strpos($pathinfo, '/acteur/supprimer') && preg_match('#^/acteur/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_supprimer')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::supprimerAction',));
            }

            // esiea_blog_article
            if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_article')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::articleAction',));
            }

        }

        // esiea_blog_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::loginAction',  '_route' => 'esiea_blog_login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
