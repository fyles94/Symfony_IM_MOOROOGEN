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
        $__internal_c9c337ec953855bd090b80c7c0732447647d22fc9313a92fae876fcb60823048 = $this->env->getExtension("native_profiler");
        $__internal_c9c337ec953855bd090b80c7c0732447647d22fc9313a92fae876fcb60823048->enter($__internal_c9c337ec953855bd090b80c7c0732447647d22fc9313a92fae876fcb60823048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c9c337ec953855bd090b80c7c0732447647d22fc9313a92fae876fcb60823048->leave($__internal_c9c337ec953855bd090b80c7c0732447647d22fc9313a92fae876fcb60823048_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee8f69ac1b6d986c7f610110cc95f20dd75550657df90b33a20fb39a74038cdc = $this->env->getExtension("native_profiler");
        $__internal_ee8f69ac1b6d986c7f610110cc95f20dd75550657df90b33a20fb39a74038cdc->enter($__internal_ee8f69ac1b6d986c7f610110cc95f20dd75550657df90b33a20fb39a74038cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ee8f69ac1b6d986c7f610110cc95f20dd75550657df90b33a20fb39a74038cdc->leave($__internal_ee8f69ac1b6d986c7f610110cc95f20dd75550657df90b33a20fb39a74038cdc_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fdbb8afe87374212ab0ca87147bb6dc6db0a099b042f787980f45e08a7a3348 = $this->env->getExtension("native_profiler");
        $__internal_9fdbb8afe87374212ab0ca87147bb6dc6db0a099b042f787980f45e08a7a3348->enter($__internal_9fdbb8afe87374212ab0ca87147bb6dc6db0a099b042f787980f45e08a7a3348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9fdbb8afe87374212ab0ca87147bb6dc6db0a099b042f787980f45e08a7a3348->leave($__internal_9fdbb8afe87374212ab0ca87147bb6dc6db0a099b042f787980f45e08a7a3348_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_16eca17f02e063a602a37294dd9a379427dcce67936ded21487e45a92e2c731b = $this->env->getExtension("native_profiler");
        $__internal_16eca17f02e063a602a37294dd9a379427dcce67936ded21487e45a92e2c731b->enter($__internal_16eca17f02e063a602a37294dd9a379427dcce67936ded21487e45a92e2c731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 14)->display($context);
        
        $__internal_16eca17f02e063a602a37294dd9a379427dcce67936ded21487e45a92e2c731b->leave($__internal_16eca17f02e063a602a37294dd9a379427dcce67936ded21487e45a92e2c731b_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_60c6eed918c947dcd26667d4b3f6b2b9edf568040d6db347739b4fe550f16dfc = $this->env->getExtension("native_profiler");
        $__internal_60c6eed918c947dcd26667d4b3f6b2b9edf568040d6db347739b4fe550f16dfc->enter($__internal_60c6eed918c947dcd26667d4b3f6b2b9edf568040d6db347739b4fe550f16dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60c6eed918c947dcd26667d4b3f6b2b9edf568040d6db347739b4fe550f16dfc->leave($__internal_60c6eed918c947dcd26667d4b3f6b2b9edf568040d6db347739b4fe550f16dfc_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35f437f99dd8596c0e095a15427f5c30573fbd7052768b68f26c4947973cbe8f = $this->env->getExtension("native_profiler");
        $__internal_35f437f99dd8596c0e095a15427f5c30573fbd7052768b68f26c4947973cbe8f->enter($__internal_35f437f99dd8596c0e095a15427f5c30573fbd7052768b68f26c4947973cbe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35f437f99dd8596c0e095a15427f5c30573fbd7052768b68f26c4947973cbe8f->leave($__internal_35f437f99dd8596c0e095a15427f5c30573fbd7052768b68f26c4947973cbe8f_prof);

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
