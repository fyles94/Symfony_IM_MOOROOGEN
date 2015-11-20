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
        $__internal_4f95204ff07c5a0f6583657cdc08153cfe34c6e1f27d1adaa6a1109ad3e63f02 = $this->env->getExtension("native_profiler");
        $__internal_4f95204ff07c5a0f6583657cdc08153cfe34c6e1f27d1adaa6a1109ad3e63f02->enter($__internal_4f95204ff07c5a0f6583657cdc08153cfe34c6e1f27d1adaa6a1109ad3e63f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f95204ff07c5a0f6583657cdc08153cfe34c6e1f27d1adaa6a1109ad3e63f02->leave($__internal_4f95204ff07c5a0f6583657cdc08153cfe34c6e1f27d1adaa6a1109ad3e63f02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_da157290b6297da6c02062e3254a38ce23f8ad664aa69adde118e363c7329e63 = $this->env->getExtension("native_profiler");
        $__internal_da157290b6297da6c02062e3254a38ce23f8ad664aa69adde118e363c7329e63->enter($__internal_da157290b6297da6c02062e3254a38ce23f8ad664aa69adde118e363c7329e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_da157290b6297da6c02062e3254a38ce23f8ad664aa69adde118e363c7329e63->leave($__internal_da157290b6297da6c02062e3254a38ce23f8ad664aa69adde118e363c7329e63_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_17ebc76de01876849f44a69434aeb1203dedb3f25dff9d3e3728777f3c2ddb7b = $this->env->getExtension("native_profiler");
        $__internal_17ebc76de01876849f44a69434aeb1203dedb3f25dff9d3e3728777f3c2ddb7b->enter($__internal_17ebc76de01876849f44a69434aeb1203dedb3f25dff9d3e3728777f3c2ddb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_17ebc76de01876849f44a69434aeb1203dedb3f25dff9d3e3728777f3c2ddb7b->leave($__internal_17ebc76de01876849f44a69434aeb1203dedb3f25dff9d3e3728777f3c2ddb7b_prof);

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
