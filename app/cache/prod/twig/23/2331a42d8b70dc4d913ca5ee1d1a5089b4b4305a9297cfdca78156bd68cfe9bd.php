<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e6ce12534f5bd1dcc482a119dc5fb9b828f9c8db25d437495ef621db32af8738 extends Twig_Template
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
        $__internal_1157cb943fd5f4258835457e04e368d4823cec3ba034e5ab5eca15166a6678cc = $this->env->getExtension("native_profiler");
        $__internal_1157cb943fd5f4258835457e04e368d4823cec3ba034e5ab5eca15166a6678cc->enter($__internal_1157cb943fd5f4258835457e04e368d4823cec3ba034e5ab5eca15166a6678cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1157cb943fd5f4258835457e04e368d4823cec3ba034e5ab5eca15166a6678cc->leave($__internal_1157cb943fd5f4258835457e04e368d4823cec3ba034e5ab5eca15166a6678cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18e9cc68fcbffd4e14c865b7eae21313508c4efebbc5946853ae6ae45cfe1b8c = $this->env->getExtension("native_profiler");
        $__internal_18e9cc68fcbffd4e14c865b7eae21313508c4efebbc5946853ae6ae45cfe1b8c->enter($__internal_18e9cc68fcbffd4e14c865b7eae21313508c4efebbc5946853ae6ae45cfe1b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_18e9cc68fcbffd4e14c865b7eae21313508c4efebbc5946853ae6ae45cfe1b8c->leave($__internal_18e9cc68fcbffd4e14c865b7eae21313508c4efebbc5946853ae6ae45cfe1b8c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a66011a6ae546610e73c1a5e16bd8e5fea9d4299fb8babb1846292f5fd1322e = $this->env->getExtension("native_profiler");
        $__internal_6a66011a6ae546610e73c1a5e16bd8e5fea9d4299fb8babb1846292f5fd1322e->enter($__internal_6a66011a6ae546610e73c1a5e16bd8e5fea9d4299fb8babb1846292f5fd1322e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6a66011a6ae546610e73c1a5e16bd8e5fea9d4299fb8babb1846292f5fd1322e->leave($__internal_6a66011a6ae546610e73c1a5e16bd8e5fea9d4299fb8babb1846292f5fd1322e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c7ee7c858c08a2e8161e308ee4dff164432bf57bb4a8d6d4e9fc963c7f4c31 = $this->env->getExtension("native_profiler");
        $__internal_33c7ee7c858c08a2e8161e308ee4dff164432bf57bb4a8d6d4e9fc963c7f4c31->enter($__internal_33c7ee7c858c08a2e8161e308ee4dff164432bf57bb4a8d6d4e9fc963c7f4c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_33c7ee7c858c08a2e8161e308ee4dff164432bf57bb4a8d6d4e9fc963c7f4c31->leave($__internal_33c7ee7c858c08a2e8161e308ee4dff164432bf57bb4a8d6d4e9fc963c7f4c31_prof);

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
