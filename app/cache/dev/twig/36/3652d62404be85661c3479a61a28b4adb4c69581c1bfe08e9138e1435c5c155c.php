<?php

/* EsieaBlogBundle:Default:article.html.twig */
class __TwigTemplate_9e7f992ba89e566d9650390bfb1d36aa318dc20e94c2e7727a68b57244480960 extends Twig_Template
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
        $__internal_5ec88b690a3e7311188f09693b99cc7563ca8fcd5b24e86bdb4cf93d90cfa28a = $this->env->getExtension("native_profiler");
        $__internal_5ec88b690a3e7311188f09693b99cc7563ca8fcd5b24e86bdb4cf93d90cfa28a->enter($__internal_5ec88b690a3e7311188f09693b99cc7563ca8fcd5b24e86bdb4cf93d90cfa28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec88b690a3e7311188f09693b99cc7563ca8fcd5b24e86bdb4cf93d90cfa28a->leave($__internal_5ec88b690a3e7311188f09693b99cc7563ca8fcd5b24e86bdb4cf93d90cfa28a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eac6585eb2728c61a9781d451f12702828a0d8bc8d8cbeb7ba46cf9e59c4fc03 = $this->env->getExtension("native_profiler");
        $__internal_eac6585eb2728c61a9781d451f12702828a0d8bc8d8cbeb7ba46cf9e59c4fc03->enter($__internal_eac6585eb2728c61a9781d451f12702828a0d8bc8d8cbeb7ba46cf9e59c4fc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Voir l'article en détail ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eac6585eb2728c61a9781d451f12702828a0d8bc8d8cbeb7ba46cf9e59c4fc03->leave($__internal_eac6585eb2728c61a9781d451f12702828a0d8bc8d8cbeb7ba46cf9e59c4fc03_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_606753d12a320da48e1a1eaf6172c1fb560bef4b35646e6c39d426999912e846 = $this->env->getExtension("native_profiler");
        $__internal_606753d12a320da48e1a1eaf6172c1fb560bef4b35646e6c39d426999912e846->enter($__internal_606753d12a320da48e1a1eaf6172c1fb560bef4b35646e6c39d426999912e846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
 <div class=\"transbox\">
      <div class=\"text\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "</div>
</div>
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
        
        $__internal_606753d12a320da48e1a1eaf6172c1fb560bef4b35646e6c39d426999912e846->leave($__internal_606753d12a320da48e1a1eaf6172c1fb560bef4b35646e6c39d426999912e846_prof);

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
/*  <div class="transbox">*/
/*       <div class="text">{{ advert.content }}</div>*/
/* </div>*/
/*      </a>*/
/*               <a href="{{ path('esiea_blog_modifier', {'id': advert.id}) }}" class="btn btn-default">*/
/*              Modifier l'information*/
/*     </a>*/
/*           <a href="{{ path('esiea_blog_supprimer', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       Supprimer l'information*/
/*     </a> */
/* */
/*  {% endblock %}*/
