<?php

/* EsieaBlogBundle:Default:article.html.twig */
class __TwigTemplate_310ce7f0160c282868d7e91d1ab0b9c30cc987c68c926a2b783384575ae079d6 extends Twig_Template
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
        $__internal_3b33f0c51caf5e077ffdccbfaa78a200d01c950e402f11de75c400c20b44fcd1 = $this->env->getExtension("native_profiler");
        $__internal_3b33f0c51caf5e077ffdccbfaa78a200d01c950e402f11de75c400c20b44fcd1->enter($__internal_3b33f0c51caf5e077ffdccbfaa78a200d01c950e402f11de75c400c20b44fcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b33f0c51caf5e077ffdccbfaa78a200d01c950e402f11de75c400c20b44fcd1->leave($__internal_3b33f0c51caf5e077ffdccbfaa78a200d01c950e402f11de75c400c20b44fcd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4e2e370a874e75f1708b46e69f2a80a5e149bb48285dd26f31428f868798978 = $this->env->getExtension("native_profiler");
        $__internal_a4e2e370a874e75f1708b46e69f2a80a5e149bb48285dd26f31428f868798978->enter($__internal_a4e2e370a874e75f1708b46e69f2a80a5e149bb48285dd26f31428f868798978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Voir l'article en détail ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4e2e370a874e75f1708b46e69f2a80a5e149bb48285dd26f31428f868798978->leave($__internal_a4e2e370a874e75f1708b46e69f2a80a5e149bb48285dd26f31428f868798978_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_652d478e86c514553c8d6a4f1072a412ccba826f23958b8b2f221cd3d073b728 = $this->env->getExtension("native_profiler");
        $__internal_652d478e86c514553c8d6a4f1072a412ccba826f23958b8b2f221cd3d073b728->enter($__internal_652d478e86c514553c8d6a4f1072a412ccba826f23958b8b2f221cd3d073b728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_652d478e86c514553c8d6a4f1072a412ccba826f23958b8b2f221cd3d073b728->leave($__internal_652d478e86c514553c8d6a4f1072a412ccba826f23958b8b2f221cd3d073b728_prof);

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
