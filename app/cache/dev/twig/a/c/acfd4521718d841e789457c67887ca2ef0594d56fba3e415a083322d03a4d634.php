<?php

/* EsieaBlogBundle:default:lister.html.twig */
class __TwigTemplate_0f5ffd85eff65441e455fb579bf186fd9329a4d94772c15e70a1368f9475fa68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:default:lister.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'blog_body' => array($this, 'block_blog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b6967d45b0c72e176603416060f5aa7d657676ca100631f2952c0d13d79301f = $this->env->getExtension("native_profiler");
        $__internal_2b6967d45b0c72e176603416060f5aa7d657676ca100631f2952c0d13d79301f->enter($__internal_2b6967d45b0c72e176603416060f5aa7d657676ca100631f2952c0d13d79301f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:default:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6967d45b0c72e176603416060f5aa7d657676ca100631f2952c0d13d79301f->leave($__internal_2b6967d45b0c72e176603416060f5aa7d657676ca100631f2952c0d13d79301f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8adbf0871c59187c99d438bbdd479150dd3eb77b1788fed1d52c348a63c8555b = $this->env->getExtension("native_profiler");
        $__internal_8adbf0871c59187c99d438bbdd479150dd3eb77b1788fed1d52c348a63c8555b->enter($__internal_8adbf0871c59187c99d438bbdd479150dd3eb77b1788fed1d52c348a63c8555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8adbf0871c59187c99d438bbdd479150dd3eb77b1788fed1d52c348a63c8555b->leave($__internal_8adbf0871c59187c99d438bbdd479150dd3eb77b1788fed1d52c348a63c8555b_prof);

    }

    // line 8
    public function block_blog_body($context, array $blocks = array())
    {
        $__internal_3ec67a55f9c3331d5e2e214ae9ba7a8e4f768a712ea40d6c75663ebf85406388 = $this->env->getExtension("native_profiler");
        $__internal_3ec67a55f9c3331d5e2e214ae9ba7a8e4f768a712ea40d6c75663ebf85406388->enter($__internal_3ec67a55f9c3331d5e2e214ae9ba7a8e4f768a712ea40d6c75663ebf85406388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_body"));

        // line 9
        echo "
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

  <div class=\"advertSelec\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\" class=\"bouton boutonRetour\">
      
      Retour à la liste
    </a>

   <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_modifier", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"bouton boutonEdit\">
     
      Modifier l'information
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_supprimer", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"bouton boutonSupp\">
     
      Supprimer l'information
    </a>
  </p>

";
        
        $__internal_3ec67a55f9c3331d5e2e214ae9ba7a8e4f768a712ea40d6c75663ebf85406388->leave($__internal_3ec67a55f9c3331d5e2e214ae9ba7a8e4f768a712ea40d6c75663ebf85406388_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:default:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  87 => 23,  79 => 18,  72 => 14,  64 => 11,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block blog_body %}*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="advertSelec">*/
/*     {{ advert.content }}*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('esiea_blog_homepage') }}" class="bouton boutonRetour">*/
/*       */
/*       Retour à la liste*/
/*     </a>*/
/* */
/*    <a href="{{ path('esiea_blog_modifier', {'id': advert.id}) }}" class="bouton boutonEdit">*/
/*      */
/*       Modifier l'information*/
/*     </a>*/
/*     <a href="{{ path('esiea_blog_supprimer', {'id': advert.id}) }}" class="bouton boutonSupp">*/
/*      */
/*       Supprimer l'information*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
