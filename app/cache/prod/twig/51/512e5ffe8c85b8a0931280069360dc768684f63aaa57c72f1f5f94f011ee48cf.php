<?php

/* ::base.html.twig */
class __TwigTemplate_25bb97b40f14e2d916066dca753ca7d03b3118a1b3d6d002786e7bd3baebe92f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39af56dfdfdd0cda7d8927fa94227e98f4b9ccacf7c19ff3485b9154477c2dc7 = $this->env->getExtension("native_profiler");
        $__internal_39af56dfdfdd0cda7d8927fa94227e98f4b9ccacf7c19ff3485b9154477c2dc7->enter($__internal_39af56dfdfdd0cda7d8927fa94227e98f4b9ccacf7c19ff3485b9154477c2dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
        </head>
        <body>

      <header class=\"page-header\">
              ";
        // line 19
        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 19)->display($context);
        // line 20
        echo "    </header>
    <div class=\"container\">
<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\"><img src=\"http://primers.xyz/problems/3/pokemon.jpg\" width=100%></a>  
</div>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "
        </body>
    </html>

";
        
        $__internal_39af56dfdfdd0cda7d8927fa94227e98f4b9ccacf7c19ff3485b9154477c2dc7->leave($__internal_39af56dfdfdd0cda7d8927fa94227e98f4b9ccacf7c19ff3485b9154477c2dc7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78aa93fc66c04fd2a3753d481efbc2e84ae0e021e6a3eb22f50cb89ec0fcf3c8 = $this->env->getExtension("native_profiler");
        $__internal_78aa93fc66c04fd2a3753d481efbc2e84ae0e021e6a3eb22f50cb89ec0fcf3c8->enter($__internal_78aa93fc66c04fd2a3753d481efbc2e84ae0e021e6a3eb22f50cb89ec0fcf3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_78aa93fc66c04fd2a3753d481efbc2e84ae0e021e6a3eb22f50cb89ec0fcf3c8->leave($__internal_78aa93fc66c04fd2a3753d481efbc2e84ae0e021e6a3eb22f50cb89ec0fcf3c8_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56620d08c20e00050b07e888c320585be452b3562097f3ea44f2a4c3599c1f55 = $this->env->getExtension("native_profiler");
        $__internal_56620d08c20e00050b07e888c320585be452b3562097f3ea44f2a4c3599c1f55->enter($__internal_56620d08c20e00050b07e888c320585be452b3562097f3ea44f2a4c3599c1f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\"/>  
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
 
            ";
        
        $__internal_56620d08c20e00050b07e888c320585be452b3562097f3ea44f2a4c3599c1f55->leave($__internal_56620d08c20e00050b07e888c320585be452b3562097f3ea44f2a4c3599c1f55_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd36312b6449f1a764ec56ff26ac39fdea61bb3c67d0cf9de67f4e4ba58c1c31 = $this->env->getExtension("native_profiler");
        $__internal_dd36312b6449f1a764ec56ff26ac39fdea61bb3c67d0cf9de67f4e4ba58c1c31->enter($__internal_dd36312b6449f1a764ec56ff26ac39fdea61bb3c67d0cf9de67f4e4ba58c1c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd36312b6449f1a764ec56ff26ac39fdea61bb3c67d0cf9de67f4e4ba58c1c31->leave($__internal_dd36312b6449f1a764ec56ff26ac39fdea61bb3c67d0cf9de67f4e4ba58c1c31_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ba8a12c7a3022fc873615616bb51a94262343567232ecdb1121a982567d027a = $this->env->getExtension("native_profiler");
        $__internal_5ba8a12c7a3022fc873615616bb51a94262343567232ecdb1121a982567d027a->enter($__internal_5ba8a12c7a3022fc873615616bb51a94262343567232ecdb1121a982567d027a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5ba8a12c7a3022fc873615616bb51a94262343567232ecdb1121a982567d027a->leave($__internal_5ba8a12c7a3022fc873615616bb51a94262343567232ecdb1121a982567d027a_prof);

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
        return array (  132 => 28,  129 => 27,  123 => 26,  112 => 24,  102 => 11,  98 => 10,  93 => 9,  87 => 8,  76 => 5,  65 => 30,  63 => 26,  60 => 25,  58 => 24,  53 => 22,  49 => 20,  47 => 19,  40 => 14,  38 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/*     <html>*/
/*         <head>*/
/*             <meta charset="UTF-8"/>*/
/*             <title>{% block title %}{% endblock %} -Mon Blog</title>*/
/*             <meta name="viewport" content="width-device-width, initial-scale=1.0"/>*/
/*             <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*             {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>*/
/*             <link rel="stylesheet" href="{{ asset('css/add.css')}}"/>  */
/*             <link rel="stylesheet" href="{{ asset('css/style.css')}}"/>*/
/*  */
/*             {% endblock %}*/
/*         <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />*/
/*         </head>*/
/*         <body>*/
/* */
/*       <header class="page-header">*/
/*               {% include '::nav.html.twig' %}*/
/*     </header>*/
/*     <div class="container">*/
/* <a href="{{path('esiea_blog_homepage')}}"><img src="http://primers.xyz/problems/3/pokemon.jpg" width=100%></a>  */
/* </div>*/
/*         {% block body %}{% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*         </body>*/
/*     </html>*/
/* */
/* */
