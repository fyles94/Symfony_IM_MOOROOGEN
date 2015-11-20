<?php

/* ::base.html.twig */
class __TwigTemplate_c7f15b2b72deb7eda4aeb511301c6db5a79f19af96747cf4e128a125aec2e010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10f40e17d1597db3b869aa627b7e57637b0a1663ecf5e30435cfb6800d79cfff = $this->env->getExtension("native_profiler");
        $__internal_10f40e17d1597db3b869aa627b7e57637b0a1663ecf5e30435cfb6800d79cfff->enter($__internal_10f40e17d1597db3b869aa627b7e57637b0a1663ecf5e30435cfb6800d79cfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"UTF-8\"/>
            <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " -Mon Blog</title>
            <meta name=\"viewport\" content=\"width-device-width, initial-scale=1.0\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        </head>
        <body>

          ";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 17
        echo "

        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
      </div>

    </div>
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        </body>
    </html>

";
        
        $__internal_10f40e17d1597db3b869aa627b7e57637b0a1663ecf5e30435cfb6800d79cfff->leave($__internal_10f40e17d1597db3b869aa627b7e57637b0a1663ecf5e30435cfb6800d79cfff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ada3681a60b16b5978cf417dfbb97dbef066ef770ebc29ca2a95c07bd8e23af0 = $this->env->getExtension("native_profiler");
        $__internal_ada3681a60b16b5978cf417dfbb97dbef066ef770ebc29ca2a95c07bd8e23af0->enter($__internal_ada3681a60b16b5978cf417dfbb97dbef066ef770ebc29ca2a95c07bd8e23af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ada3681a60b16b5978cf417dfbb97dbef066ef770ebc29ca2a95c07bd8e23af0->leave($__internal_ada3681a60b16b5978cf417dfbb97dbef066ef770ebc29ca2a95c07bd8e23af0_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1a605ae70d7f8d608d654215da0681edf7f29f9812e2e59c5dc722357f35f15 = $this->env->getExtension("native_profiler");
        $__internal_d1a605ae70d7f8d608d654215da0681edf7f29f9812e2e59c5dc722357f35f15->enter($__internal_d1a605ae70d7f8d608d654215da0681edf7f29f9812e2e59c5dc722357f35f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d1a605ae70d7f8d608d654215da0681edf7f29f9812e2e59c5dc722357f35f15->leave($__internal_d1a605ae70d7f8d608d654215da0681edf7f29f9812e2e59c5dc722357f35f15_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_676fa1fe5066875540f6bf3bff1000f96ebce661666e07435deb54666269c940 = $this->env->getExtension("native_profiler");
        $__internal_676fa1fe5066875540f6bf3bff1000f96ebce661666e07435deb54666269c940->enter($__internal_676fa1fe5066875540f6bf3bff1000f96ebce661666e07435deb54666269c940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 15
        echo "          ";
        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 15)->display($context);
        // line 16
        echo "          ";
        
        $__internal_676fa1fe5066875540f6bf3bff1000f96ebce661666e07435deb54666269c940->leave($__internal_676fa1fe5066875540f6bf3bff1000f96ebce661666e07435deb54666269c940_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e9f1fe2f2991c1e34f0d71b3175d1e3f59db56ebb8a5d6f773e65b7ca9b80d0 = $this->env->getExtension("native_profiler");
        $__internal_2e9f1fe2f2991c1e34f0d71b3175d1e3f59db56ebb8a5d6f773e65b7ca9b80d0->enter($__internal_2e9f1fe2f2991c1e34f0d71b3175d1e3f59db56ebb8a5d6f773e65b7ca9b80d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "        ";
        
        $__internal_2e9f1fe2f2991c1e34f0d71b3175d1e3f59db56ebb8a5d6f773e65b7ca9b80d0->leave($__internal_2e9f1fe2f2991c1e34f0d71b3175d1e3f59db56ebb8a5d6f773e65b7ca9b80d0_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_385ab8974630bb3de4e2aa56b3bb63945732a26a6f8b6e954350f3d6f58d3435 = $this->env->getExtension("native_profiler");
        $__internal_385ab8974630bb3de4e2aa56b3bb63945732a26a6f8b6e954350f3d6f58d3435->enter($__internal_385ab8974630bb3de4e2aa56b3bb63945732a26a6f8b6e954350f3d6f58d3435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_385ab8974630bb3de4e2aa56b3bb63945732a26a6f8b6e954350f3d6f58d3435->leave($__internal_385ab8974630bb3de4e2aa56b3bb63945732a26a6f8b6e954350f3d6f58d3435_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 25,  128 => 20,  122 => 19,  115 => 16,  112 => 15,  106 => 14,  95 => 9,  84 => 5,  72 => 27,  69 => 26,  67 => 25,  61 => 21,  59 => 19,  55 => 17,  53 => 14,  45 => 10,  43 => 9,  38 => 7,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/*     <html>*/
/*         <head>*/
/*             <meta charset="UTF-8"/>*/
/*             <title>{% block title %}{% endblock %} -Mon Blog</title>*/
/*             <meta name="viewport" content="width-device-width, initial-scale=1.0"/>*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>*/
/*             <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*             {% block stylesheets %}{% endblock %}*/
/*             <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*         </head>*/
/*         <body>*/
/* */
/*           {% block nav %}*/
/*           {% include '::nav.html.twig' %}*/
/*           {% endblock %}*/
/* */
/* */
/*         {% block body %}*/
/*         {% endblock %}*/
/* */
/*       </div>*/
/* */
/*     </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         </body>*/
/*     </html>*/
/* */
/* */
