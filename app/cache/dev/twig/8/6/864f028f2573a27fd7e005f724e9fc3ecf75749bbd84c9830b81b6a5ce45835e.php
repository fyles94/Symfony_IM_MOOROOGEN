<?php

/* ::nav.html.twig */
class __TwigTemplate_defce6fccf06e45bc4ee8bd05f983c054ac882c79345b76ac6fcdc76b0984d91 extends Twig_Template
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
        $__internal_3dcff9469a443a803ed4f9f3bebff224e757f98da5e2d3e7c87aa89175e96bfb = $this->env->getExtension("native_profiler");
        $__internal_3dcff9469a443a803ed4f9f3bebff224e757f98da5e2d3e7c87aa89175e96bfb->enter($__internal_3dcff9469a443a803ed4f9f3bebff224e757f98da5e2d3e7c87aa89175e96bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

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
        
        $__internal_3dcff9469a443a803ed4f9f3bebff224e757f98da5e2d3e7c87aa89175e96bfb->leave($__internal_3dcff9469a443a803ed4f9f3bebff224e757f98da5e2d3e7c87aa89175e96bfb_prof);

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
