<?php

/* EsieaBlogBundle:Default:vue.html.twig */
class __TwigTemplate_22490df69f32003ee17a629ce1a5accff726da5f77ea2c492a36a8fe8f2a1e55 extends Twig_Template
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
        $__internal_e50a7cde4495368fe4086ff3f6362ba5bd33965f017118eac4494430d0d97265 = $this->env->getExtension("native_profiler");
        $__internal_e50a7cde4495368fe4086ff3f6362ba5bd33965f017118eac4494430d0d97265->enter($__internal_e50a7cde4495368fe4086ff3f6362ba5bd33965f017118eac4494430d0d97265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:vue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50a7cde4495368fe4086ff3f6362ba5bd33965f017118eac4494430d0d97265->leave($__internal_e50a7cde4495368fe4086ff3f6362ba5bd33965f017118eac4494430d0d97265_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_934b899e9242cb25086be1fbbe12a75b954e51ac36e32e74284b0ce88808e4af = $this->env->getExtension("native_profiler");
        $__internal_934b899e9242cb25086be1fbbe12a75b954e51ac36e32e74284b0ce88808e4af->enter($__internal_934b899e9242cb25086be1fbbe12a75b954e51ac36e32e74284b0ce88808e4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Lecture du Post - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_934b899e9242cb25086be1fbbe12a75b954e51ac36e32e74284b0ce88808e4af->leave($__internal_934b899e9242cb25086be1fbbe12a75b954e51ac36e32e74284b0ce88808e4af_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b250f11b33bd470c0ff6ae4ab79168dad32704a11dc5de568aea9b076687b395 = $this->env->getExtension("native_profiler");
        $__internal_b250f11b33bd470c0ff6ae4ab79168dad32704a11dc5de568aea9b076687b395->enter($__internal_b250f11b33bd470c0ff6ae4ab79168dad32704a11dc5de568aea9b076687b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b250f11b33bd470c0ff6ae4ab79168dad32704a11dc5de568aea9b076687b395->leave($__internal_b250f11b33bd470c0ff6ae4ab79168dad32704a11dc5de568aea9b076687b395_prof);

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
