<?php

/* EsieaBlogBundle:Default:ajouter.html.twig */
class __TwigTemplate_5c7f86ee4c80a16b7b985ff2c2a9520eb5df9a4062daf1213466ce1ffb22bf03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:ajouter.html.twig", 2);
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
        $__internal_48d826d334fb3397bfaee86fab84a2f7d020e9f49e911d8d6b58cd4a01d1171c = $this->env->getExtension("native_profiler");
        $__internal_48d826d334fb3397bfaee86fab84a2f7d020e9f49e911d8d6b58cd4a01d1171c->enter($__internal_48d826d334fb3397bfaee86fab84a2f7d020e9f49e911d8d6b58cd4a01d1171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d826d334fb3397bfaee86fab84a2f7d020e9f49e911d8d6b58cd4a01d1171c->leave($__internal_48d826d334fb3397bfaee86fab84a2f7d020e9f49e911d8d6b58cd4a01d1171c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_98977b33c0f47b63db7c4ce56d1946c5089552468b778424da9d659d36d6be74 = $this->env->getExtension("native_profiler");
        $__internal_98977b33c0f47b63db7c4ce56d1946c5089552468b778424da9d659d36d6be74->enter($__internal_98977b33c0f47b63db7c4ce56d1946c5089552468b778424da9d659d36d6be74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_98977b33c0f47b63db7c4ce56d1946c5089552468b778424da9d659d36d6be74->leave($__internal_98977b33c0f47b63db7c4ce56d1946c5089552468b778424da9d659d36d6be74_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0937388f003e0e15e8c508efa41b308908d422d920628e315103e73c28bc191c = $this->env->getExtension("native_profiler");
        $__internal_0937388f003e0e15e8c508efa41b308908d422d920628e315103e73c28bc191c->enter($__internal_0937388f003e0e15e8c508efa41b308908d422d920628e315103e73c28bc191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

  <h2>Ajouter une annonce</h2>



<div class=\"well\">

  ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

</div>
  <p>

    Attention : cette annonce sera ajoutée directement

    sur la page d'accueil après validation du formulaire.

  </p>


";
        
        $__internal_0937388f003e0e15e8c508efa41b308908d422d920628e315103e73c28bc191c->leave($__internal_0937388f003e0e15e8c508efa41b308908d422d920628e315103e73c28bc191c_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/* */
/* */
/* <div class="well">*/
/* */
/*   {{ form(form) }}*/
/* */
/* </div>*/
/*   <p>*/
/* */
/*     Attention : cette annonce sera ajoutée directement*/
/* */
/*     sur la page d'accueil après validation du formulaire.*/
/* */
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
