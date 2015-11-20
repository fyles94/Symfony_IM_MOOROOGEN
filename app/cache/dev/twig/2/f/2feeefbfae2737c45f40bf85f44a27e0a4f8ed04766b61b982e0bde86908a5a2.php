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
        $__internal_f82fdd657c063da06731960ca61cc3a4693b03da8bf24b9e0460fa2f5e8e0ca9 = $this->env->getExtension("native_profiler");
        $__internal_f82fdd657c063da06731960ca61cc3a4693b03da8bf24b9e0460fa2f5e8e0ca9->enter($__internal_f82fdd657c063da06731960ca61cc3a4693b03da8bf24b9e0460fa2f5e8e0ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:vue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82fdd657c063da06731960ca61cc3a4693b03da8bf24b9e0460fa2f5e8e0ca9->leave($__internal_f82fdd657c063da06731960ca61cc3a4693b03da8bf24b9e0460fa2f5e8e0ca9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cf5823511502005ad948f730c47b7b6b9488db27cfecfaac3ac9f68e6105519 = $this->env->getExtension("native_profiler");
        $__internal_2cf5823511502005ad948f730c47b7b6b9488db27cfecfaac3ac9f68e6105519->enter($__internal_2cf5823511502005ad948f730c47b7b6b9488db27cfecfaac3ac9f68e6105519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2cf5823511502005ad948f730c47b7b6b9488db27cfecfaac3ac9f68e6105519->leave($__internal_2cf5823511502005ad948f730c47b7b6b9488db27cfecfaac3ac9f68e6105519_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e96f7068bf14b22016dd0763ddcba6e68e60b9e32e02ed2c9ac7cc31acd697b1 = $this->env->getExtension("native_profiler");
        $__internal_e96f7068bf14b22016dd0763ddcba6e68e60b9e32e02ed2c9ac7cc31acd697b1->enter($__internal_e96f7068bf14b22016dd0763ddcba6e68e60b9e32e02ed2c9ac7cc31acd697b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <div style=\"width:auto; text-align:center\">
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

<div class= \"container\">

  <FONT size=\"8pt\"> L'article a été poster aver succès BRAVO!!! </FONT>

</div>

  <p>

    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\" class=\"btn btn-default\">
      Retour à la liste des articles

    </a>
  </p>
</div>
";
        
        $__internal_e96f7068bf14b22016dd0763ddcba6e68e60b9e32e02ed2c9ac7cc31acd697b1->leave($__internal_e96f7068bf14b22016dd0763ddcba6e68e60b9e32e02ed2c9ac7cc31acd697b1_prof);

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
        return array (  79 => 21,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div style="width:auto; text-align:center">*/
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/* <div class= "container">*/
/* */
/*   <FONT size="8pt"> L'article a été poster aver succès BRAVO!!! </FONT>*/
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
