<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_01aecaf61af9ce60c5310c8ffe8b147c1898ef8b316391bb59c320ccfb944c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f9193386e08a4c614dc13364852282194cf0b2deb83381b31489665480bf7c9 = $this->env->getExtension("native_profiler");
        $__internal_9f9193386e08a4c614dc13364852282194cf0b2deb83381b31489665480bf7c9->enter($__internal_9f9193386e08a4c614dc13364852282194cf0b2deb83381b31489665480bf7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9193386e08a4c614dc13364852282194cf0b2deb83381b31489665480bf7c9->leave($__internal_9f9193386e08a4c614dc13364852282194cf0b2deb83381b31489665480bf7c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34ed73fc8af5620f6094d9b925372040ef60fd880913017cd83dfb97dcda43ea = $this->env->getExtension("native_profiler");
        $__internal_34ed73fc8af5620f6094d9b925372040ef60fd880913017cd83dfb97dcda43ea->enter($__internal_34ed73fc8af5620f6094d9b925372040ef60fd880913017cd83dfb97dcda43ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34ed73fc8af5620f6094d9b925372040ef60fd880913017cd83dfb97dcda43ea->leave($__internal_34ed73fc8af5620f6094d9b925372040ef60fd880913017cd83dfb97dcda43ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f98dce47b70a0137c43b169806d411178dc2a85b8c56cff2beeee1142294901 = $this->env->getExtension("native_profiler");
        $__internal_3f98dce47b70a0137c43b169806d411178dc2a85b8c56cff2beeee1142294901->enter($__internal_3f98dce47b70a0137c43b169806d411178dc2a85b8c56cff2beeee1142294901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3f98dce47b70a0137c43b169806d411178dc2a85b8c56cff2beeee1142294901->leave($__internal_3f98dce47b70a0137c43b169806d411178dc2a85b8c56cff2beeee1142294901_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1af8a01d7bb73b15ad41226f1b5f94789135bbabd34abc4ed73e02774a766aff = $this->env->getExtension("native_profiler");
        $__internal_1af8a01d7bb73b15ad41226f1b5f94789135bbabd34abc4ed73e02774a766aff->enter($__internal_1af8a01d7bb73b15ad41226f1b5f94789135bbabd34abc4ed73e02774a766aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1af8a01d7bb73b15ad41226f1b5f94789135bbabd34abc4ed73e02774a766aff->leave($__internal_1af8a01d7bb73b15ad41226f1b5f94789135bbabd34abc4ed73e02774a766aff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
