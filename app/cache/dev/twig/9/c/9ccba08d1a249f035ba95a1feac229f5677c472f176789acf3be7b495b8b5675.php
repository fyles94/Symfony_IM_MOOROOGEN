<?php

/* EsieaBlogBundle:default:vue.html.twig */
class __TwigTemplate_410400c9a86780b91c9b4875c7d98ad1c1077517d113bf511b319ec5e3c874a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:default:vue.html.twig", 2);
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
        $__internal_5547076dc4151b9d303cbd4d9fac5a4910d8fe305e899e08fa6921bdaea61799 = $this->env->getExtension("native_profiler");
        $__internal_5547076dc4151b9d303cbd4d9fac5a4910d8fe305e899e08fa6921bdaea61799->enter($__internal_5547076dc4151b9d303cbd4d9fac5a4910d8fe305e899e08fa6921bdaea61799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:default:vue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5547076dc4151b9d303cbd4d9fac5a4910d8fe305e899e08fa6921bdaea61799->leave($__internal_5547076dc4151b9d303cbd4d9fac5a4910d8fe305e899e08fa6921bdaea61799_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8e910376a70cd3e3cf18c2017cdfa20d931efca7dd832edfe6e937d2cddf94b = $this->env->getExtension("native_profiler");
        $__internal_f8e910376a70cd3e3cf18c2017cdfa20d931efca7dd832edfe6e937d2cddf94b->enter($__internal_f8e910376a70cd3e3cf18c2017cdfa20d931efca7dd832edfe6e937d2cddf94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f8e910376a70cd3e3cf18c2017cdfa20d931efca7dd832edfe6e937d2cddf94b->leave($__internal_f8e910376a70cd3e3cf18c2017cdfa20d931efca7dd832edfe6e937d2cddf94b_prof);

    }

    // line 8
    public function block_blog_body($context, array $blocks = array())
    {
        $__internal_04067be80a50d5ef076ad119374600353fca302929236be16259c7a4f80a3b7f = $this->env->getExtension("native_profiler");
        $__internal_04067be80a50d5ef076ad119374600353fca302929236be16259c7a4f80a3b7f->enter($__internal_04067be80a50d5ef076ad119374600353fca302929236be16259c7a4f80a3b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_body"));

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
        
        $__internal_04067be80a50d5ef076ad119374600353fca302929236be16259c7a4f80a3b7f->leave($__internal_04067be80a50d5ef076ad119374600353fca302929236be16259c7a4f80a3b7f_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:default:vue.html.twig";
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
