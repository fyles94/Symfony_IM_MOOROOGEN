<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'esiea_blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_vue' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::vueAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::modifierAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/acteur/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::articleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
