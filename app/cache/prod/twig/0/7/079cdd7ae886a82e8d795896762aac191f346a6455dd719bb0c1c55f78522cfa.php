<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a92b1d3622ed6eb9463ec029c427aacd7c6b75dcdd47cc946f5349078163bdc7 extends Twig_Template
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
        $__internal_e709e87f70f3520e452d1ec72270c5ffd6a30a86f255dc30fee13197e3e22672 = $this->env->getExtension("native_profiler");
        $__internal_e709e87f70f3520e452d1ec72270c5ffd6a30a86f255dc30fee13197e3e22672->enter($__internal_e709e87f70f3520e452d1ec72270c5ffd6a30a86f255dc30fee13197e3e22672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e709e87f70f3520e452d1ec72270c5ffd6a30a86f255dc30fee13197e3e22672->leave($__internal_e709e87f70f3520e452d1ec72270c5ffd6a30a86f255dc30fee13197e3e22672_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee527641511a22e069f5d5062aa06d69412de1d397115284453a1f6ea8a10a25 = $this->env->getExtension("native_profiler");
        $__internal_ee527641511a22e069f5d5062aa06d69412de1d397115284453a1f6ea8a10a25->enter($__internal_ee527641511a22e069f5d5062aa06d69412de1d397115284453a1f6ea8a10a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ee527641511a22e069f5d5062aa06d69412de1d397115284453a1f6ea8a10a25->leave($__internal_ee527641511a22e069f5d5062aa06d69412de1d397115284453a1f6ea8a10a25_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a40036417f0f4a2fb451de94d4008e03ba7f4ce3f518c83d11d9fc706039697 = $this->env->getExtension("native_profiler");
        $__internal_8a40036417f0f4a2fb451de94d4008e03ba7f4ce3f518c83d11d9fc706039697->enter($__internal_8a40036417f0f4a2fb451de94d4008e03ba7f4ce3f518c83d11d9fc706039697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a40036417f0f4a2fb451de94d4008e03ba7f4ce3f518c83d11d9fc706039697->leave($__internal_8a40036417f0f4a2fb451de94d4008e03ba7f4ce3f518c83d11d9fc706039697_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_97be060c76c71f7fbb622b66e2a02648344732c958590d2edd2ac7382bc8908a = $this->env->getExtension("native_profiler");
        $__internal_97be060c76c71f7fbb622b66e2a02648344732c958590d2edd2ac7382bc8908a->enter($__internal_97be060c76c71f7fbb622b66e2a02648344732c958590d2edd2ac7382bc8908a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_97be060c76c71f7fbb622b66e2a02648344732c958590d2edd2ac7382bc8908a->leave($__internal_97be060c76c71f7fbb622b66e2a02648344732c958590d2edd2ac7382bc8908a_prof);

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
