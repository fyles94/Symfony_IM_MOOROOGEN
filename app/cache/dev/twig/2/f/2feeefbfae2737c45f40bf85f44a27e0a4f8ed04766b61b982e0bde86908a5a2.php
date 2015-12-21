<?php

/* EsieaBlogBundle:Default:vue.html.twig */
class __TwigTemplate_61bea2e3666dc16d014c0af3bbc29be721d878122e77a1405e8f3cce9411b4d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:vue.html.twig", 2);
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
        $__internal_6b3b19755a25c74678f4840335ae663e4f51b5071d429062ac712abce4830c2c = $this->env->getExtension("native_profiler");
        $__internal_6b3b19755a25c74678f4840335ae663e4f51b5071d429062ac712abce4830c2c->enter($__internal_6b3b19755a25c74678f4840335ae663e4f51b5071d429062ac712abce4830c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:vue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3b19755a25c74678f4840335ae663e4f51b5071d429062ac712abce4830c2c->leave($__internal_6b3b19755a25c74678f4840335ae663e4f51b5071d429062ac712abce4830c2c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2625751849154f7d1f48d049db41cd7da397ed66cb8a1ef59ee6b80b4d93b9af = $this->env->getExtension("native_profiler");
        $__internal_2625751849154f7d1f48d049db41cd7da397ed66cb8a1ef59ee6b80b4d93b9af->enter($__internal_2625751849154f7d1f48d049db41cd7da397ed66cb8a1ef59ee6b80b4d93b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Lecture du Post - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2625751849154f7d1f48d049db41cd7da397ed66cb8a1ef59ee6b80b4d93b9af->leave($__internal_2625751849154f7d1f48d049db41cd7da397ed66cb8a1ef59ee6b80b4d93b9af_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8d2b6d673df61cc0cc6645b859eec38d586aaa19bcf0d70e47638211fbdfb12 = $this->env->getExtension("native_profiler");
        $__internal_b8d2b6d673df61cc0cc6645b859eec38d586aaa19bcf0d70e47638211fbdfb12->enter($__internal_b8d2b6d673df61cc0cc6645b859eec38d586aaa19bcf0d70e47638211fbdfb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <div style=\"width:auto; text-align:center\">


<div class= \"container\">

  <h1>Le Post a été poster aver succès! </h1>

</div>

  <p>

    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\" class=\"btn btn-default\">
      Retour à la liste des articles

    </a>
  </p>
</div>
";
        
        $__internal_b8d2b6d673df61cc0cc6645b859eec38d586aaa19bcf0d70e47638211fbdfb12->leave($__internal_b8d2b6d673df61cc0cc6645b859eec38d586aaa19bcf0d70e47638211fbdfb12_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:vue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture du Post - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div style="width:auto; text-align:center">*/
/* */
/* */
/* <div class= "container">*/
/* */
/*   <h1>Le Post a été poster aver succès! </h1>*/
/* */
/* </div>*/
/* */
/*   <p>*/
/* */
/*     <a href="{{ path('esiea_blog_homepage') }}" class="btn btn-default">*/
/*       Retour à la liste des articles*/
/* */
/*     </a>*/
/*   </p>*/
/* </div>*/
/* {% endblock %}*/
