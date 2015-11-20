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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6da69b7b390400fdc9e5b6b0676685df68087ea7786b25d9f032188c48e48e47 = $this->env->getExtension("native_profiler");
        $__internal_6da69b7b390400fdc9e5b6b0676685df68087ea7786b25d9f032188c48e48e47->enter($__internal_6da69b7b390400fdc9e5b6b0676685df68087ea7786b25d9f032188c48e48e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da69b7b390400fdc9e5b6b0676685df68087ea7786b25d9f032188c48e48e47->leave($__internal_6da69b7b390400fdc9e5b6b0676685df68087ea7786b25d9f032188c48e48e47_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_488636bd7285e9e229306b5b51040dffa57826d5a03b6e10204c05e4decff52c = $this->env->getExtension("native_profiler");
        $__internal_488636bd7285e9e229306b5b51040dffa57826d5a03b6e10204c05e4decff52c->enter($__internal_488636bd7285e9e229306b5b51040dffa57826d5a03b6e10204c05e4decff52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

  <h2>Ajouter une annonce</h2>



<div class=\"well\">

  ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

</div>
  <p>

    Attention : cette annonce sera ajoutée directement

    sur la page d'accueil après validation du formulaire.

  </p>


";
        
        $__internal_488636bd7285e9e229306b5b51040dffa57826d5a03b6e10204c05e4decff52c->leave($__internal_488636bd7285e9e229306b5b51040dffa57826d5a03b6e10204c05e4decff52c_prof);

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
        return array (  50 => 13,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
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
