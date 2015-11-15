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
        $__internal_4edfa1586ac03cf042b3bc21010028df766013c0e88c70b39fb4907ebd37d9c2 = $this->env->getExtension("native_profiler");
        $__internal_4edfa1586ac03cf042b3bc21010028df766013c0e88c70b39fb4907ebd37d9c2->enter($__internal_4edfa1586ac03cf042b3bc21010028df766013c0e88c70b39fb4907ebd37d9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\"/>
            ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        </head>
        <body>
        ";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        </body>
    </html>

";
        
        $__internal_4edfa1586ac03cf042b3bc21010028df766013c0e88c70b39fb4907ebd37d9c2->leave($__internal_4edfa1586ac03cf042b3bc21010028df766013c0e88c70b39fb4907ebd37d9c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed58ef3661ca8c018969f1ab70444ada0dbdb01b449e3de0cc0e2851eb6bcfca = $this->env->getExtension("native_profiler");
        $__internal_ed58ef3661ca8c018969f1ab70444ada0dbdb01b449e3de0cc0e2851eb6bcfca->enter($__internal_ed58ef3661ca8c018969f1ab70444ada0dbdb01b449e3de0cc0e2851eb6bcfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ed58ef3661ca8c018969f1ab70444ada0dbdb01b449e3de0cc0e2851eb6bcfca->leave($__internal_ed58ef3661ca8c018969f1ab70444ada0dbdb01b449e3de0cc0e2851eb6bcfca_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_162e58a8b0009e85dbdcad0ccbfeca322aed5fb547744d0b69ed7fc75e5fddd0 = $this->env->getExtension("native_profiler");
        $__internal_162e58a8b0009e85dbdcad0ccbfeca322aed5fb547744d0b69ed7fc75e5fddd0->enter($__internal_162e58a8b0009e85dbdcad0ccbfeca322aed5fb547744d0b69ed7fc75e5fddd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_162e58a8b0009e85dbdcad0ccbfeca322aed5fb547744d0b69ed7fc75e5fddd0->leave($__internal_162e58a8b0009e85dbdcad0ccbfeca322aed5fb547744d0b69ed7fc75e5fddd0_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ed91458ba2a39ae5605bb4fd8fda20e25cb84b2e2d5f4eb72084ec09706b294e = $this->env->getExtension("native_profiler");
        $__internal_ed91458ba2a39ae5605bb4fd8fda20e25cb84b2e2d5f4eb72084ec09706b294e->enter($__internal_ed91458ba2a39ae5605bb4fd8fda20e25cb84b2e2d5f4eb72084ec09706b294e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 14)->display($context);
        
        $__internal_ed91458ba2a39ae5605bb4fd8fda20e25cb84b2e2d5f4eb72084ec09706b294e->leave($__internal_ed91458ba2a39ae5605bb4fd8fda20e25cb84b2e2d5f4eb72084ec09706b294e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68768771e6a1aa5b6fb9b75414e0fe7e15e59b538e61c027d56ddd825674c60 = $this->env->getExtension("native_profiler");
        $__internal_a68768771e6a1aa5b6fb9b75414e0fe7e15e59b538e61c027d56ddd825674c60->enter($__internal_a68768771e6a1aa5b6fb9b75414e0fe7e15e59b538e61c027d56ddd825674c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a68768771e6a1aa5b6fb9b75414e0fe7e15e59b538e61c027d56ddd825674c60->leave($__internal_a68768771e6a1aa5b6fb9b75414e0fe7e15e59b538e61c027d56ddd825674c60_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3087e2324a253374af39eedaebc8a00793ec3e68ce52ce5147c12f133b2198d4 = $this->env->getExtension("native_profiler");
        $__internal_3087e2324a253374af39eedaebc8a00793ec3e68ce52ce5147c12f133b2198d4->enter($__internal_3087e2324a253374af39eedaebc8a00793ec3e68ce52ce5147c12f133b2198d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3087e2324a253374af39eedaebc8a00793ec3e68ce52ce5147c12f133b2198d4->leave($__internal_3087e2324a253374af39eedaebc8a00793ec3e68ce52ce5147c12f133b2198d4_prof);

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
        return array (  124 => 16,  113 => 15,  101 => 14,  90 => 10,  79 => 5,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  56 => 14,  49 => 11,  47 => 10,  43 => 9,  38 => 7,  33 => 5,  27 => 1,);
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
/*             <link rel="stylesheet" href="{{ asset('css/add.css') }}"/>*/
/*             {% block stylesheets %}{% endblock %}*/
/*             <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*         </head>*/
/*         <body>*/
/*         {% block nav %}{%include('::nav.html.twig')%}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         </body>*/
/*     </html>*/
/* */
/* */
