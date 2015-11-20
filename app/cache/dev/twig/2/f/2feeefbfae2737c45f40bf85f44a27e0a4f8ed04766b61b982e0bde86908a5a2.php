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
            'blog_body' => array($this, 'block_blog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b410892616f99777be14b6c7b9b468c3ee1812bf7839ca25f876e6a2ea034186 = $this->env->getExtension("native_profiler");
        $__internal_b410892616f99777be14b6c7b9b468c3ee1812bf7839ca25f876e6a2ea034186->enter($__internal_b410892616f99777be14b6c7b9b468c3ee1812bf7839ca25f876e6a2ea034186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:vue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b410892616f99777be14b6c7b9b468c3ee1812bf7839ca25f876e6a2ea034186->leave($__internal_b410892616f99777be14b6c7b9b468c3ee1812bf7839ca25f876e6a2ea034186_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d359b24466afa930472bdd504fa7496e997e2193565eb4888eb66279c6060746 = $this->env->getExtension("native_profiler");
        $__internal_d359b24466afa930472bdd504fa7496e997e2193565eb4888eb66279c6060746->enter($__internal_d359b24466afa930472bdd504fa7496e997e2193565eb4888eb66279c6060746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d359b24466afa930472bdd504fa7496e997e2193565eb4888eb66279c6060746->leave($__internal_d359b24466afa930472bdd504fa7496e997e2193565eb4888eb66279c6060746_prof);

    }

    // line 8
    public function block_blog_body($context, array $blocks = array())
    {
        $__internal_aeca90d13d7b0c45a627a4a07300e23f6a06a3aaf8d53c4c1012d01ba623d32f = $this->env->getExtension("native_profiler");
        $__internal_aeca90d13d7b0c45a627a4a07300e23f6a06a3aaf8d53c4c1012d01ba623d32f->enter($__internal_aeca90d13d7b0c45a627a4a07300e23f6a06a3aaf8d53c4c1012d01ba623d32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_body"));

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

  <div class=\"articleSelec\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
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
        
        $__internal_aeca90d13d7b0c45a627a4a07300e23f6a06a3aaf8d53c4c1012d01ba623d32f->leave($__internal_aeca90d13d7b0c45a627a4a07300e23f6a06a3aaf8d53c4c1012d01ba623d32f_prof);

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
/*   <div class="articleSelec">*/
/*     {{ advert.title }}*/
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
