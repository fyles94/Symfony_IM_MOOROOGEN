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
        $__internal_199620b809871ca4583eec6e62226716d76b60b4ef288d003eff0beab8b36ddd = $this->env->getExtension("native_profiler");
        $__internal_199620b809871ca4583eec6e62226716d76b60b4ef288d003eff0beab8b36ddd->enter($__internal_199620b809871ca4583eec6e62226716d76b60b4ef288d003eff0beab8b36ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar navbar-default\" role=\"navigation\">
  <div class=\"container\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Les articles</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
      <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\"></i> Accueil</a></li>
      <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("esiea_blog_ajouter");
        echo "\"></i> Ajouter un article</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
";
        
        $__internal_199620b809871ca4583eec6e62226716d76b60b4ef288d003eff0beab8b36ddd->leave($__internal_199620b809871ca4583eec6e62226716d76b60b4ef288d003eff0beab8b36ddd_prof);

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
        return array (  43 => 17,  39 => 16,  22 => 1,);
    }
}
/* <nav class="navbar navbar navbar-default" role="navigation">*/
/*   <div class="container">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#">Les articles</a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*       <li><a href="{{ path('esiea_blog_homepage') }}"></i> Accueil</a></li>*/
/*       <li><a href="{{ path('esiea_blog_ajouter') }}"></i> Ajouter un article</a></li>*/
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container -->*/
/* </nav>*/
/* */
