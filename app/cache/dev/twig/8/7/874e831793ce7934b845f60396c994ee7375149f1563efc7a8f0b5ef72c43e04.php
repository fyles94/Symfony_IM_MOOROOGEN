<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a974bd87570f59e2124524ca14799e11a1adeef6e5779653474f8214b44441bf extends Twig_Template
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
        $__internal_7710b5ce33e535c9c2d2f6d6036f329ba813e0ba866ad9fd438380acf82cbc94 = $this->env->getExtension("native_profiler");
        $__internal_7710b5ce33e535c9c2d2f6d6036f329ba813e0ba866ad9fd438380acf82cbc94->enter($__internal_7710b5ce33e535c9c2d2f6d6036f329ba813e0ba866ad9fd438380acf82cbc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7710b5ce33e535c9c2d2f6d6036f329ba813e0ba866ad9fd438380acf82cbc94->leave($__internal_7710b5ce33e535c9c2d2f6d6036f329ba813e0ba866ad9fd438380acf82cbc94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5a95c36e36fd5ff8e889bac1bbd8bab6b90dfeaca6bf5f333d05b19a6f7cad9 = $this->env->getExtension("native_profiler");
        $__internal_b5a95c36e36fd5ff8e889bac1bbd8bab6b90dfeaca6bf5f333d05b19a6f7cad9->enter($__internal_b5a95c36e36fd5ff8e889bac1bbd8bab6b90dfeaca6bf5f333d05b19a6f7cad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5a95c36e36fd5ff8e889bac1bbd8bab6b90dfeaca6bf5f333d05b19a6f7cad9->leave($__internal_b5a95c36e36fd5ff8e889bac1bbd8bab6b90dfeaca6bf5f333d05b19a6f7cad9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44f304cbbc134e821e760e785af78c7a16ee73620d69173b15ed58ba948870c4 = $this->env->getExtension("native_profiler");
        $__internal_44f304cbbc134e821e760e785af78c7a16ee73620d69173b15ed58ba948870c4->enter($__internal_44f304cbbc134e821e760e785af78c7a16ee73620d69173b15ed58ba948870c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44f304cbbc134e821e760e785af78c7a16ee73620d69173b15ed58ba948870c4->leave($__internal_44f304cbbc134e821e760e785af78c7a16ee73620d69173b15ed58ba948870c4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_185b480321d932e486298f97255d05169ddbb093e314d5b6d7b4938d92d6306e = $this->env->getExtension("native_profiler");
        $__internal_185b480321d932e486298f97255d05169ddbb093e314d5b6d7b4938d92d6306e->enter($__internal_185b480321d932e486298f97255d05169ddbb093e314d5b6d7b4938d92d6306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_185b480321d932e486298f97255d05169ddbb093e314d5b6d7b4938d92d6306e->leave($__internal_185b480321d932e486298f97255d05169ddbb093e314d5b6d7b4938d92d6306e_prof);

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
