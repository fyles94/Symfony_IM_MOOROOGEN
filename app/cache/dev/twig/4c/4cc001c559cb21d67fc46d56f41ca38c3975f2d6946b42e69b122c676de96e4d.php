<?php

/* EsieaBlogBundle:Default:vue.html.twig */
class __TwigTemplate_db012725a46418100102e2048ec5d30039ab5bcebea1db58c326b4bee85b547a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:vue.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f5b6f80e992976d23ad3abe1e25fc925c21fcb777b194eae3685c1267bec602 = $this->env->getExtension("native_profiler");
        $__internal_7f5b6f80e992976d23ad3abe1e25fc925c21fcb777b194eae3685c1267bec602->enter($__internal_7f5b6f80e992976d23ad3abe1e25fc925c21fcb777b194eae3685c1267bec602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:vue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f5b6f80e992976d23ad3abe1e25fc925c21fcb777b194eae3685c1267bec602->leave($__internal_7f5b6f80e992976d23ad3abe1e25fc925c21fcb777b194eae3685c1267bec602_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2451613b9cc8add09f7bba68bc4b722315db3194a2c96cef6fb7c065c8af6d4b = $this->env->getExtension("native_profiler");
        $__internal_2451613b9cc8add09f7bba68bc4b722315db3194a2c96cef6fb7c065c8af6d4b->enter($__internal_2451613b9cc8add09f7bba68bc4b722315db3194a2c96cef6fb7c065c8af6d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Lecture du Post - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2451613b9cc8add09f7bba68bc4b722315db3194a2c96cef6fb7c065c8af6d4b->leave($__internal_2451613b9cc8add09f7bba68bc4b722315db3194a2c96cef6fb7c065c8af6d4b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_90271ddd72171c62eb4ab69e6e6a4897b9dbfe67964a1f49dfb0e7fe01097b7d = $this->env->getExtension("native_profiler");
        $__internal_90271ddd72171c62eb4ab69e6e6a4897b9dbfe67964a1f49dfb0e7fe01097b7d->enter($__internal_90271ddd72171c62eb4ab69e6e6a4897b9dbfe67964a1f49dfb0e7fe01097b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <div style=\"width:auto; text-align:center\">


<div class= \"container\">

  <h1>Le Post a été poster aver succès! </h1>

</div>

  <p>

    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\" class=\"btn btn-default\">
      Retour à la liste des articles

    </a>
  </p>
</div>
";
        
        $__internal_90271ddd72171c62eb4ab69e6e6a4897b9dbfe67964a1f49dfb0e7fe01097b7d->leave($__internal_90271ddd72171c62eb4ab69e6e6a4897b9dbfe67964a1f49dfb0e7fe01097b7d_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:vue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture du Post - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div style="width:auto; text-align:center">*/
/* */
/* */
/* <div class= "container">*/
/* */
/*   <h1>Le Post a été poster aver succès! </h1>*/
/* */
/* </div>*/
/* */
/*   <p>*/
/* */
/*     <a href="{{ path('esiea_blog_homepage') }}" class="btn btn-default">*/
/*       Retour à la liste des articles*/
/* */
/*     </a>*/
/*   </p>*/
/* </div>*/
/* {% endblock %}*/
