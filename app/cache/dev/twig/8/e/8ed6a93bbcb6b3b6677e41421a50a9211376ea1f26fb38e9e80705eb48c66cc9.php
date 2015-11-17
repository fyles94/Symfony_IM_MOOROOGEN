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
        $__internal_3d81ca6aef129e830a253b1cfbdf129e3064e542c2cdf7393dd9de35820773ec = $this->env->getExtension("native_profiler");
        $__internal_3d81ca6aef129e830a253b1cfbdf129e3064e542c2cdf7393dd9de35820773ec->enter($__internal_3d81ca6aef129e830a253b1cfbdf129e3064e542c2cdf7393dd9de35820773ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d81ca6aef129e830a253b1cfbdf129e3064e542c2cdf7393dd9de35820773ec->leave($__internal_3d81ca6aef129e830a253b1cfbdf129e3064e542c2cdf7393dd9de35820773ec_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b1ea8071b3dc57631cc7bb25a1f74c621f9f7ec781cf29201b33f2db0fb041b = $this->env->getExtension("native_profiler");
        $__internal_4b1ea8071b3dc57631cc7bb25a1f74c621f9f7ec781cf29201b33f2db0fb041b->enter($__internal_4b1ea8071b3dc57631cc7bb25a1f74c621f9f7ec781cf29201b33f2db0fb041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_4b1ea8071b3dc57631cc7bb25a1f74c621f9f7ec781cf29201b33f2db0fb041b->leave($__internal_4b1ea8071b3dc57631cc7bb25a1f74c621f9f7ec781cf29201b33f2db0fb041b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9642d630f3c0f13b3de136744ead39e62ac3d273173068d6c1bce2805b9f0770 = $this->env->getExtension("native_profiler");
        $__internal_9642d630f3c0f13b3de136744ead39e62ac3d273173068d6c1bce2805b9f0770->enter($__internal_9642d630f3c0f13b3de136744ead39e62ac3d273173068d6c1bce2805b9f0770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        
        $__internal_9642d630f3c0f13b3de136744ead39e62ac3d273173068d6c1bce2805b9f0770->leave($__internal_9642d630f3c0f13b3de136744ead39e62ac3d273173068d6c1bce2805b9f0770_prof);

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
