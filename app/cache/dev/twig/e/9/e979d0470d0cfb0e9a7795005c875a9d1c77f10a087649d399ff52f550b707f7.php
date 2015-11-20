<?php

/* EsieaBlogBundle:Default:lister.html.twig */
class __TwigTemplate_a3d21df2005036fbc1f19a440663e80ddc7dc6e0a8bd735cb890d0f2b99f5f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:lister.html.twig", 1);
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
        $__internal_dfd62f14e94c5a5577c2aa5b491368909f920b99c7fc5f2bbb76c1cfd909bb50 = $this->env->getExtension("native_profiler");
        $__internal_dfd62f14e94c5a5577c2aa5b491368909f920b99c7fc5f2bbb76c1cfd909bb50->enter($__internal_dfd62f14e94c5a5577c2aa5b491368909f920b99c7fc5f2bbb76c1cfd909bb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd62f14e94c5a5577c2aa5b491368909f920b99c7fc5f2bbb76c1cfd909bb50->leave($__internal_dfd62f14e94c5a5577c2aa5b491368909f920b99c7fc5f2bbb76c1cfd909bb50_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e584022b3c891598835cc323c2169b51050dbbb4c20436e047451990f1882154 = $this->env->getExtension("native_profiler");
        $__internal_e584022b3c891598835cc323c2169b51050dbbb4c20436e047451990f1882154->enter($__internal_e584022b3c891598835cc323c2169b51050dbbb4c20436e047451990f1882154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chat";
        
        $__internal_e584022b3c891598835cc323c2169b51050dbbb4c20436e047451990f1882154->leave($__internal_e584022b3c891598835cc323c2169b51050dbbb4c20436e047451990f1882154_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1835182aa3660536a0d351b8f8ed2609a29baa0bc3f7bacbdb238603a567c57f = $this->env->getExtension("native_profiler");
        $__internal_1835182aa3660536a0d351b8f8ed2609a29baa0bc3f7bacbdb238603a567c57f->enter($__internal_1835182aa3660536a0d351b8f8ed2609a29baa0bc3f7bacbdb238603a567c57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        
        $__internal_1835182aa3660536a0d351b8f8ed2609a29baa0bc3f7bacbdb238603a567c57f->leave($__internal_1835182aa3660536a0d351b8f8ed2609a29baa0bc3f7bacbdb238603a567c57f_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:lister.html.twig";
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
