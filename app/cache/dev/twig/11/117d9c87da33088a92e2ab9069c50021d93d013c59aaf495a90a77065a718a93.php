<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b60b225c3ebff55b10dfed4fd71a50014503d79562a44b57a65d79113cf6cc99 extends Twig_Template
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
        $__internal_376a3f261cb12e63d55f366d83a7f9c54c9c84acb7265f9dd2d818ebd275775d = $this->env->getExtension("native_profiler");
        $__internal_376a3f261cb12e63d55f366d83a7f9c54c9c84acb7265f9dd2d818ebd275775d->enter($__internal_376a3f261cb12e63d55f366d83a7f9c54c9c84acb7265f9dd2d818ebd275775d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_376a3f261cb12e63d55f366d83a7f9c54c9c84acb7265f9dd2d818ebd275775d->leave($__internal_376a3f261cb12e63d55f366d83a7f9c54c9c84acb7265f9dd2d818ebd275775d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c58b8cf978c4cad2c94d554feb14aa712ab48f4a6357a19ad3bbaf1dd6d98515 = $this->env->getExtension("native_profiler");
        $__internal_c58b8cf978c4cad2c94d554feb14aa712ab48f4a6357a19ad3bbaf1dd6d98515->enter($__internal_c58b8cf978c4cad2c94d554feb14aa712ab48f4a6357a19ad3bbaf1dd6d98515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c58b8cf978c4cad2c94d554feb14aa712ab48f4a6357a19ad3bbaf1dd6d98515->leave($__internal_c58b8cf978c4cad2c94d554feb14aa712ab48f4a6357a19ad3bbaf1dd6d98515_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_157bc23d8cbd9d1c2ce8f782370be8012cf56b236572afdc11f6225d5e38cc17 = $this->env->getExtension("native_profiler");
        $__internal_157bc23d8cbd9d1c2ce8f782370be8012cf56b236572afdc11f6225d5e38cc17->enter($__internal_157bc23d8cbd9d1c2ce8f782370be8012cf56b236572afdc11f6225d5e38cc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_157bc23d8cbd9d1c2ce8f782370be8012cf56b236572afdc11f6225d5e38cc17->leave($__internal_157bc23d8cbd9d1c2ce8f782370be8012cf56b236572afdc11f6225d5e38cc17_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e994f612b8cc96e4cef4e89883feacdacd673ece31217c25639bb67cbcac3456 = $this->env->getExtension("native_profiler");
        $__internal_e994f612b8cc96e4cef4e89883feacdacd673ece31217c25639bb67cbcac3456->enter($__internal_e994f612b8cc96e4cef4e89883feacdacd673ece31217c25639bb67cbcac3456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e994f612b8cc96e4cef4e89883feacdacd673ece31217c25639bb67cbcac3456->leave($__internal_e994f612b8cc96e4cef4e89883feacdacd673ece31217c25639bb67cbcac3456_prof);

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
