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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f403f404413be0b81d31627422cf2c335db6ec588344656a5c6f35608dc1cc73 = $this->env->getExtension("native_profiler");
        $__internal_f403f404413be0b81d31627422cf2c335db6ec588344656a5c6f35608dc1cc73->enter($__internal_f403f404413be0b81d31627422cf2c335db6ec588344656a5c6f35608dc1cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f403f404413be0b81d31627422cf2c335db6ec588344656a5c6f35608dc1cc73->leave($__internal_f403f404413be0b81d31627422cf2c335db6ec588344656a5c6f35608dc1cc73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd3946ea0704f080f3e1a2beea35fb49e0319f22bdc28c04815f54002fc83201 = $this->env->getExtension("native_profiler");
        $__internal_bd3946ea0704f080f3e1a2beea35fb49e0319f22bdc28c04815f54002fc83201->enter($__internal_bd3946ea0704f080f3e1a2beea35fb49e0319f22bdc28c04815f54002fc83201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bd3946ea0704f080f3e1a2beea35fb49e0319f22bdc28c04815f54002fc83201->leave($__internal_bd3946ea0704f080f3e1a2beea35fb49e0319f22bdc28c04815f54002fc83201_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdd7d50ce6ff0ad055ac649c2c331abe73f5adcb15714f79e83be3f002bd7629 = $this->env->getExtension("native_profiler");
        $__internal_fdd7d50ce6ff0ad055ac649c2c331abe73f5adcb15714f79e83be3f002bd7629->enter($__internal_fdd7d50ce6ff0ad055ac649c2c331abe73f5adcb15714f79e83be3f002bd7629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fdd7d50ce6ff0ad055ac649c2c331abe73f5adcb15714f79e83be3f002bd7629->leave($__internal_fdd7d50ce6ff0ad055ac649c2c331abe73f5adcb15714f79e83be3f002bd7629_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_93591835aeff983f519d092a7e794ed182b7cb8579e2d0607901eddb37c286c3 = $this->env->getExtension("native_profiler");
        $__internal_93591835aeff983f519d092a7e794ed182b7cb8579e2d0607901eddb37c286c3->enter($__internal_93591835aeff983f519d092a7e794ed182b7cb8579e2d0607901eddb37c286c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93591835aeff983f519d092a7e794ed182b7cb8579e2d0607901eddb37c286c3->leave($__internal_93591835aeff983f519d092a7e794ed182b7cb8579e2d0607901eddb37c286c3_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53687f2c8a73f405850078e16ae1d13757aad32f45f0619f138e9bed2702a8b4 = $this->env->getExtension("native_profiler");
        $__internal_53687f2c8a73f405850078e16ae1d13757aad32f45f0619f138e9bed2702a8b4->enter($__internal_53687f2c8a73f405850078e16ae1d13757aad32f45f0619f138e9bed2702a8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_53687f2c8a73f405850078e16ae1d13757aad32f45f0619f138e9bed2702a8b4->leave($__internal_53687f2c8a73f405850078e16ae1d13757aad32f45f0619f138e9bed2702a8b4_prof);

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
