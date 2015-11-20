<?php

/* EsieaBlogBundle:Default:index.html.twig */
class __TwigTemplate_9391c497c10dc240c7a45956fc1d7831e878704c10a15220147d1803c59f5b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:index.html.twig", 3);
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
        $__internal_65acefdd54cd2fec9095dc6749d97562011fe5b86b1568bca28d09b397c999f3 = $this->env->getExtension("native_profiler");
        $__internal_65acefdd54cd2fec9095dc6749d97562011fe5b86b1568bca28d09b397c999f3->enter($__internal_65acefdd54cd2fec9095dc6749d97562011fe5b86b1568bca28d09b397c999f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65acefdd54cd2fec9095dc6749d97562011fe5b86b1568bca28d09b397c999f3->leave($__internal_65acefdd54cd2fec9095dc6749d97562011fe5b86b1568bca28d09b397c999f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6198f9560c589d3f0ecbf5f83fd1c6ece1dcaffbd06886f58671ee9a7d0cbef = $this->env->getExtension("native_profiler");
        $__internal_a6198f9560c589d3f0ecbf5f83fd1c6ece1dcaffbd06886f58671ee9a7d0cbef->enter($__internal_a6198f9560c589d3f0ecbf5f83fd1c6ece1dcaffbd06886f58671ee9a7d0cbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a6198f9560c589d3f0ecbf5f83fd1c6ece1dcaffbd06886f58671ee9a7d0cbef->leave($__internal_a6198f9560c589d3f0ecbf5f83fd1c6ece1dcaffbd06886f58671ee9a7d0cbef_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cbcc733ab811b59af01d34713654a0874fa1fd5f411a879b44134051ace3d3e = $this->env->getExtension("native_profiler");
        $__internal_6cbcc733ab811b59af01d34713654a0874fa1fd5f411a879b44134051ace3d3e->enter($__internal_6cbcc733ab811b59af01d34713654a0874fa1fd5f411a879b44134051ace3d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <h2>Toutes les posts</h2>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdvert"]) ? $context["listAdvert"] : $this->getContext($context, "listAdvert")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "  <div style=\"width:auto; text-align:center\">
       <div class=\"cadre\">
      <div class=\"fondArticle\">
        <div class=\"title\"> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</div>
        <center>par ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</center>
      </div>
      <div class=\"panel-body\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
            echo "</div>
          <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_modifier", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">> 
             Modifier l'information
    </a>
          <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_supprimer", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      Supprimer l'information
    </a>
    </div>
</div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "      <li>Aucun article disponible pour le moment.</li>
    <li>Cliquez sur \"ajouter une nouvelle information\" pour alimenté notre BLOG !</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "     

";
        
        $__internal_6cbcc733ab811b59af01d34713654a0874fa1fd5f411a879b44134051ace3d3e->leave($__internal_6cbcc733ab811b59af01d34713654a0874fa1fd5f411a879b44134051ace3d3e_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  106 => 31,  95 => 25,  89 => 22,  85 => 21,  80 => 19,  76 => 18,  72 => 17,  67 => 14,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/Blog/Resources/views/Article/index.html.twig #}*/
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Toutes les posts</h2>*/
/* */
/*     {% for advert in listAdvert %}*/
/*   <div style="width:auto; text-align:center">*/
/*        <div class="cadre">*/
/*       <div class="fondArticle">*/
/*         <div class="title"> {{advert.title}}</div>*/
/*         <center>par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}</center>*/
/*       </div>*/
/*       <div class="panel-body">{{ advert.content }}</div>*/
/*           <a href="{{ path('esiea_blog_modifier', {'id': advert.id}) }}" class="btn btn-default">> */
/*              Modifier l'information*/
/*     </a>*/
/*           <a href="{{ path('esiea_blog_supprimer', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       Supprimer l'information*/
/*     </a>*/
/*     </div>*/
/* </div>*/
/*     {% else %}*/
/*       <li>Aucun article disponible pour le moment.</li>*/
/*     <li>Cliquez sur "ajouter une nouvelle information" pour alimenté notre BLOG !</li>*/
/*     {% endfor %}*/
/*      */
/* */
/* {% endblock %}*/
