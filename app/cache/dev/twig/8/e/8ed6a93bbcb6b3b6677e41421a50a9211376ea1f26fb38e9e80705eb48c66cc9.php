<?php

/* EsieaBlogBundle:Default:index.html.twig */
class __TwigTemplate_9391c497c10dc240c7a45956fc1d7831e878704c10a15220147d1803c59f5b46 extends Twig_Template
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
        $__internal_fd80ba2e89fcd54c3b3b16342638ce459bf992f7da009d924f90b6f5d609142f = $this->env->getExtension("native_profiler");
        $__internal_fd80ba2e89fcd54c3b3b16342638ce459bf992f7da009d924f90b6f5d609142f->enter($__internal_fd80ba2e89fcd54c3b3b16342638ce459bf992f7da009d924f90b6f5d609142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd80ba2e89fcd54c3b3b16342638ce459bf992f7da009d924f90b6f5d609142f->leave($__internal_fd80ba2e89fcd54c3b3b16342638ce459bf992f7da009d924f90b6f5d609142f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecef7e209242e9d5dfc2d75dad55721fa3fb7a38b07bdbcc8bfc266e2345f6fa = $this->env->getExtension("native_profiler");
        $__internal_ecef7e209242e9d5dfc2d75dad55721fa3fb7a38b07bdbcc8bfc266e2345f6fa->enter($__internal_ecef7e209242e9d5dfc2d75dad55721fa3fb7a38b07bdbcc8bfc266e2345f6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_ecef7e209242e9d5dfc2d75dad55721fa3fb7a38b07bdbcc8bfc266e2345f6fa->leave($__internal_ecef7e209242e9d5dfc2d75dad55721fa3fb7a38b07bdbcc8bfc266e2345f6fa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4bea58efd18c5325e803838867c1de089052504d534ef3d644b4a2b44628794 = $this->env->getExtension("native_profiler");
        $__internal_f4bea58efd18c5325e803838867c1de089052504d534ef3d644b4a2b44628794->enter($__internal_f4bea58efd18c5325e803838867c1de089052504d534ef3d644b4a2b44628794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        
        $__internal_f4bea58efd18c5325e803838867c1de089052504d534ef3d644b4a2b44628794->leave($__internal_f4bea58efd18c5325e803838867c1de089052504d534ef3d644b4a2b44628794_prof);

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
