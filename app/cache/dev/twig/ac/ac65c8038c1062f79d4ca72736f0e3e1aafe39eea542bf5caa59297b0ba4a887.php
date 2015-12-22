<?php

/* ::base.html.twig */
class __TwigTemplate_53c2ac23bf98e632d1f4f61455364158ad821b87cada7486ddfb4c45a2cbd500 extends Twig_Template
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
        $__internal_7fa96f25b7a5f705383977b8dccc1d5aae9d4c44eaa1328caf477d066ff3c3f3 = $this->env->getExtension("native_profiler");
        $__internal_7fa96f25b7a5f705383977b8dccc1d5aae9d4c44eaa1328caf477d066ff3c3f3->enter($__internal_7fa96f25b7a5f705383977b8dccc1d5aae9d4c44eaa1328caf477d066ff3c3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7fa96f25b7a5f705383977b8dccc1d5aae9d4c44eaa1328caf477d066ff3c3f3->leave($__internal_7fa96f25b7a5f705383977b8dccc1d5aae9d4c44eaa1328caf477d066ff3c3f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9c6de7f0bf2ee84bfa1a4bc53f4333f9e106d298fd2c99f76f73747f9fd50f7 = $this->env->getExtension("native_profiler");
        $__internal_a9c6de7f0bf2ee84bfa1a4bc53f4333f9e106d298fd2c99f76f73747f9fd50f7->enter($__internal_a9c6de7f0bf2ee84bfa1a4bc53f4333f9e106d298fd2c99f76f73747f9fd50f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a9c6de7f0bf2ee84bfa1a4bc53f4333f9e106d298fd2c99f76f73747f9fd50f7->leave($__internal_a9c6de7f0bf2ee84bfa1a4bc53f4333f9e106d298fd2c99f76f73747f9fd50f7_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6b380a0a7298560f859f8c3a6244605537531f5f910f88c7ad6bb445ddb2f28 = $this->env->getExtension("native_profiler");
        $__internal_c6b380a0a7298560f859f8c3a6244605537531f5f910f88c7ad6bb445ddb2f28->enter($__internal_c6b380a0a7298560f859f8c3a6244605537531f5f910f88c7ad6bb445ddb2f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c6b380a0a7298560f859f8c3a6244605537531f5f910f88c7ad6bb445ddb2f28->leave($__internal_c6b380a0a7298560f859f8c3a6244605537531f5f910f88c7ad6bb445ddb2f28_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a5931e53453969258db4f694c87d643432964d0b82c45d953cc8bd38f89d700 = $this->env->getExtension("native_profiler");
        $__internal_2a5931e53453969258db4f694c87d643432964d0b82c45d953cc8bd38f89d700->enter($__internal_2a5931e53453969258db4f694c87d643432964d0b82c45d953cc8bd38f89d700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a5931e53453969258db4f694c87d643432964d0b82c45d953cc8bd38f89d700->leave($__internal_2a5931e53453969258db4f694c87d643432964d0b82c45d953cc8bd38f89d700_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8084e15f63df531f59921e663dd636c8241ac9135f6bf6b424f88cb2969d970 = $this->env->getExtension("native_profiler");
        $__internal_d8084e15f63df531f59921e663dd636c8241ac9135f6bf6b424f88cb2969d970->enter($__internal_d8084e15f63df531f59921e663dd636c8241ac9135f6bf6b424f88cb2969d970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d8084e15f63df531f59921e663dd636c8241ac9135f6bf6b424f88cb2969d970->leave($__internal_d8084e15f63df531f59921e663dd636c8241ac9135f6bf6b424f88cb2969d970_prof);

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
