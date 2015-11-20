<?php

/* EsieaBlogBundle:Default:modifier.html.twig */
class __TwigTemplate_d93028e754800241a8e3b7a258a63b6a6a74c31fc3a167215bb81817e130ecbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:modifier.html.twig", 2);
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
        $__internal_bf140a264d8ddec09b3a59c7f6a9665b8da042b100a662ff87220709abf2840f = $this->env->getExtension("native_profiler");
        $__internal_bf140a264d8ddec09b3a59c7f6a9665b8da042b100a662ff87220709abf2840f->enter($__internal_bf140a264d8ddec09b3a59c7f6a9665b8da042b100a662ff87220709abf2840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf140a264d8ddec09b3a59c7f6a9665b8da042b100a662ff87220709abf2840f->leave($__internal_bf140a264d8ddec09b3a59c7f6a9665b8da042b100a662ff87220709abf2840f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_46ef916d8cdbe555104d98f26dc1cb411db670c998bdcdeae639d6043fc4816e = $this->env->getExtension("native_profiler");
        $__internal_46ef916d8cdbe555104d98f26dc1cb411db670c998bdcdeae639d6043fc4816e->enter($__internal_46ef916d8cdbe555104d98f26dc1cb411db670c998bdcdeae639d6043fc4816e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

  <h2>Modifier une annonce</h2>


<div class=\"well\">

  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

</div>



";
        
        $__internal_46ef916d8cdbe555104d98f26dc1cb411db670c998bdcdeae639d6043fc4816e->leave($__internal_46ef916d8cdbe555104d98f26dc1cb411db670c998bdcdeae639d6043fc4816e_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* 	*/
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/* */
/* <div class="well">*/
/* */
/*   {{ form(form) }}*/
/* */
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
