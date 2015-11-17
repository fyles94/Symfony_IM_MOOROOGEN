<?php

/* EsieaBlogBundle:Default:chat.html.twig */
class __TwigTemplate_09264a82e9c402f4b71ca4285c94a7bae7ef223c658a0ce3509714d73c7dfbc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:chat.html.twig", 1);
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
        $__internal_5d2031891d4280022e65682309d5c76cf119c045317e6363e810bf0890774b04 = $this->env->getExtension("native_profiler");
        $__internal_5d2031891d4280022e65682309d5c76cf119c045317e6363e810bf0890774b04->enter($__internal_5d2031891d4280022e65682309d5c76cf119c045317e6363e810bf0890774b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:chat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2031891d4280022e65682309d5c76cf119c045317e6363e810bf0890774b04->leave($__internal_5d2031891d4280022e65682309d5c76cf119c045317e6363e810bf0890774b04_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0b9f469ae123a7243b4b5e2545dc227f9a9d75c31eef8ced7f0b686e3cf4c33 = $this->env->getExtension("native_profiler");
        $__internal_f0b9f469ae123a7243b4b5e2545dc227f9a9d75c31eef8ced7f0b686e3cf4c33->enter($__internal_f0b9f469ae123a7243b4b5e2545dc227f9a9d75c31eef8ced7f0b686e3cf4c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chat";
        
        $__internal_f0b9f469ae123a7243b4b5e2545dc227f9a9d75c31eef8ced7f0b686e3cf4c33->leave($__internal_f0b9f469ae123a7243b4b5e2545dc227f9a9d75c31eef8ced7f0b686e3cf4c33_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_34e571153f0ab373c2622cb43a251040221c4fb50db6b5e2be0df9809e00d660 = $this->env->getExtension("native_profiler");
        $__internal_34e571153f0ab373c2622cb43a251040221c4fb50db6b5e2be0df9809e00d660->enter($__internal_34e571153f0ab373c2622cb43a251040221c4fb50db6b5e2be0df9809e00d660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        
        $__internal_34e571153f0ab373c2622cb43a251040221c4fb50db6b5e2be0df9809e00d660->leave($__internal_34e571153f0ab373c2622cb43a251040221c4fb50db6b5e2be0df9809e00d660_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:chat.html.twig";
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
/* {% block title %}Chat{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
