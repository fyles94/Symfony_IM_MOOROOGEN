<?php

/* ::base.html.twig */
class __TwigTemplate_47c3511135a460d6f18a55e61c695a4b368c37140e3202699f3a4f71594ca72a extends Twig_Template
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
        $__internal_a630ae916f94d422fdcfa0121fda418030e7f65c549354e11679fe6c9d8becbb = $this->env->getExtension("native_profiler");
        $__internal_a630ae916f94d422fdcfa0121fda418030e7f65c549354e11679fe6c9d8becbb->enter($__internal_a630ae916f94d422fdcfa0121fda418030e7f65c549354e11679fe6c9d8becbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a630ae916f94d422fdcfa0121fda418030e7f65c549354e11679fe6c9d8becbb->leave($__internal_a630ae916f94d422fdcfa0121fda418030e7f65c549354e11679fe6c9d8becbb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4550bbef53ddabd710d3341fc03edcbc5c604247a9cb2ea01c2b4ffade06deee = $this->env->getExtension("native_profiler");
        $__internal_4550bbef53ddabd710d3341fc03edcbc5c604247a9cb2ea01c2b4ffade06deee->enter($__internal_4550bbef53ddabd710d3341fc03edcbc5c604247a9cb2ea01c2b4ffade06deee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4550bbef53ddabd710d3341fc03edcbc5c604247a9cb2ea01c2b4ffade06deee->leave($__internal_4550bbef53ddabd710d3341fc03edcbc5c604247a9cb2ea01c2b4ffade06deee_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_786bb8d0c865514a92e397dc7b82d24e2f5fbabb307ac99473a11d9dcaed40b4 = $this->env->getExtension("native_profiler");
        $__internal_786bb8d0c865514a92e397dc7b82d24e2f5fbabb307ac99473a11d9dcaed40b4->enter($__internal_786bb8d0c865514a92e397dc7b82d24e2f5fbabb307ac99473a11d9dcaed40b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_786bb8d0c865514a92e397dc7b82d24e2f5fbabb307ac99473a11d9dcaed40b4->leave($__internal_786bb8d0c865514a92e397dc7b82d24e2f5fbabb307ac99473a11d9dcaed40b4_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_f92a2c0a96c87ffc5e6e310b9fdebb62c26e1eed2c724955606885cae21fc866 = $this->env->getExtension("native_profiler");
        $__internal_f92a2c0a96c87ffc5e6e310b9fdebb62c26e1eed2c724955606885cae21fc866->enter($__internal_f92a2c0a96c87ffc5e6e310b9fdebb62c26e1eed2c724955606885cae21fc866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f92a2c0a96c87ffc5e6e310b9fdebb62c26e1eed2c724955606885cae21fc866->leave($__internal_f92a2c0a96c87ffc5e6e310b9fdebb62c26e1eed2c724955606885cae21fc866_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c6795a2335934c858790128338102c4f8cd6403180047722b8962efc16f28f4 = $this->env->getExtension("native_profiler");
        $__internal_8c6795a2335934c858790128338102c4f8cd6403180047722b8962efc16f28f4->enter($__internal_8c6795a2335934c858790128338102c4f8cd6403180047722b8962efc16f28f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8c6795a2335934c858790128338102c4f8cd6403180047722b8962efc16f28f4->leave($__internal_8c6795a2335934c858790128338102c4f8cd6403180047722b8962efc16f28f4_prof);

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
