<?php

/* EsieaBlogBundle:Default:index.html.twig */
class __TwigTemplate_1ae35f8890264beb8d8f62a8d928528a44f1c0509be472a0142680e3fa0a855e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:index.html.twig", 1);
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
        $__internal_3ad1f4afa22ee667a88050f880f96d8f355331aee179276557d0e8b14f311890 = $this->env->getExtension("native_profiler");
        $__internal_3ad1f4afa22ee667a88050f880f96d8f355331aee179276557d0e8b14f311890->enter($__internal_3ad1f4afa22ee667a88050f880f96d8f355331aee179276557d0e8b14f311890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ad1f4afa22ee667a88050f880f96d8f355331aee179276557d0e8b14f311890->leave($__internal_3ad1f4afa22ee667a88050f880f96d8f355331aee179276557d0e8b14f311890_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e58f0c0f66dcd0ee80e9dd4df81c308bbd79579c151ec7ad218ed43e49c924d = $this->env->getExtension("native_profiler");
        $__internal_0e58f0c0f66dcd0ee80e9dd4df81c308bbd79579c151ec7ad218ed43e49c924d->enter($__internal_0e58f0c0f66dcd0ee80e9dd4df81c308bbd79579c151ec7ad218ed43e49c924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_0e58f0c0f66dcd0ee80e9dd4df81c308bbd79579c151ec7ad218ed43e49c924d->leave($__internal_0e58f0c0f66dcd0ee80e9dd4df81c308bbd79579c151ec7ad218ed43e49c924d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f019441140246cbdc272340382d216f23f00a575116110de9aec792b8d50a1dd = $this->env->getExtension("native_profiler");
        $__internal_f019441140246cbdc272340382d216f23f00a575116110de9aec792b8d50a1dd->enter($__internal_f019441140246cbdc272340382d216f23f00a575116110de9aec792b8d50a1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        
        $__internal_f019441140246cbdc272340382d216f23f00a575116110de9aec792b8d50a1dd->leave($__internal_f019441140246cbdc272340382d216f23f00a575116110de9aec792b8d50a1dd_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Accueil{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
