<?php

/* ::nav.html.twig */
class __TwigTemplate_356e7368baa34d1d371e726f2f73bf2efa6403ecdaedbda93cb3764f9aa67d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94df4b0363f4d3c9e6b13c2febeb7d60e7b496f5aed94c816247668518216873 = $this->env->getExtension("native_profiler");
        $__internal_94df4b0363f4d3c9e6b13c2febeb7d60e7b496f5aed94c816247668518216873->enter($__internal_94df4b0363f4d3c9e6b13c2febeb7d60e7b496f5aed94c816247668518216873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-fixed-top navbar-default\" role=\"navigation\">
  <div class=\"container\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Mon Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
      <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\"><i class=\"fa fa-home\"></i> Accueil</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
";
        
        $__internal_94df4b0363f4d3c9e6b13c2febeb7d60e7b496f5aed94c816247668518216873->leave($__internal_94df4b0363f4d3c9e6b13c2febeb7d60e7b496f5aed94c816247668518216873_prof);

    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  22 => 1,);
    }
}
/* <nav class="navbar navbar-fixed-top navbar-default" role="navigation">*/
/*   <div class="container">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#">Mon Blog</a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*       <li><a href="{{ path('esiea_blog_homepage') }}"><i class="fa fa-home"></i> Accueil</a></li>*/
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container -->*/
/* </nav>*/
/* */
