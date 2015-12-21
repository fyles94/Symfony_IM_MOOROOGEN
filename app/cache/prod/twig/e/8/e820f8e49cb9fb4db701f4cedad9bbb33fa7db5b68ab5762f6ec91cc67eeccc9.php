<?php

/* EsieaBlogBundle:Default:article.html.twig */
class __TwigTemplate_1617088a0a4052f4223b83c9618aaad5dce51bf954f344dea6e0b7219ac64e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:article.html.twig", 1);
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
        $__internal_96a3358814a4a78bd7c6c776d0dac34f6e5d95de4aaf33950dc1ba479518569a = $this->env->getExtension("native_profiler");
        $__internal_96a3358814a4a78bd7c6c776d0dac34f6e5d95de4aaf33950dc1ba479518569a->enter($__internal_96a3358814a4a78bd7c6c776d0dac34f6e5d95de4aaf33950dc1ba479518569a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a3358814a4a78bd7c6c776d0dac34f6e5d95de4aaf33950dc1ba479518569a->leave($__internal_96a3358814a4a78bd7c6c776d0dac34f6e5d95de4aaf33950dc1ba479518569a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d281d461b10dcd817c95e14fda255bab7d3ee551314708e560727d4fb42e5db6 = $this->env->getExtension("native_profiler");
        $__internal_d281d461b10dcd817c95e14fda255bab7d3ee551314708e560727d4fb42e5db6->enter($__internal_d281d461b10dcd817c95e14fda255bab7d3ee551314708e560727d4fb42e5db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Voir l'article en détail ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d281d461b10dcd817c95e14fda255bab7d3ee551314708e560727d4fb42e5db6->leave($__internal_d281d461b10dcd817c95e14fda255bab7d3ee551314708e560727d4fb42e5db6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff5911021188c65524eeb94d050eae55a74bb3d957ade7e2d0d27a1131c315a = $this->env->getExtension("native_profiler");
        $__internal_1ff5911021188c65524eeb94d050eae55a74bb3d957ade7e2d0d27a1131c315a->enter($__internal_1ff5911021188c65524eeb94d050eae55a74bb3d957ade7e2d0d27a1131c315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
 <div style=\"width:auto; text-align:center \">
        <div class=\"title\">
         ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</div>
        <div class=\"text\">par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ",
        le ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</div>

      <div class=\"text\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "</div>

     </a>
              <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_modifier", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
             Modifier l'information
    </a>
          <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_supprimer", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      Supprimer l'information
    </a> 

 ";
        
        $__internal_1ff5911021188c65524eeb94d050eae55a74bb3d957ade7e2d0d27a1131c315a->leave($__internal_1ff5911021188c65524eeb94d050eae55a74bb3d957ade7e2d0d27a1131c315a_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  81 => 18,  75 => 15,  70 => 13,  66 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Voir l'article en détail {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*  <div style="width:auto; text-align:center ">*/
/*         <div class="title">*/
/*          {{advert.title}}</div>*/
/*         <div class="text">par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}</div>*/
/* */
/*       <div class="text">{{ advert.content }}</div>*/
/* */
/*      </a>*/
/*               <a href="{{ path('esiea_blog_modifier', {'id': advert.id}) }}" class="btn btn-default">*/
/*              Modifier l'information*/
/*     </a>*/
/*           <a href="{{ path('esiea_blog_supprimer', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       Supprimer l'information*/
/*     </a> */
/* */
/*  {% endblock %}*/
