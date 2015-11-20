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
        $__internal_3d0002de0ffa4f4ebbea173d4a618cf5ced4d4ddcf73b32606a67b139f3cca5a = $this->env->getExtension("native_profiler");
        $__internal_3d0002de0ffa4f4ebbea173d4a618cf5ced4d4ddcf73b32606a67b139f3cca5a->enter($__internal_3d0002de0ffa4f4ebbea173d4a618cf5ced4d4ddcf73b32606a67b139f3cca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0002de0ffa4f4ebbea173d4a618cf5ced4d4ddcf73b32606a67b139f3cca5a->leave($__internal_3d0002de0ffa4f4ebbea173d4a618cf5ced4d4ddcf73b32606a67b139f3cca5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b0d91d183440a4e6dcb9fb857d2edbfc1e3c02a437985849efdf3839919f2cc = $this->env->getExtension("native_profiler");
        $__internal_6b0d91d183440a4e6dcb9fb857d2edbfc1e3c02a437985849efdf3839919f2cc->enter($__internal_6b0d91d183440a4e6dcb9fb857d2edbfc1e3c02a437985849efdf3839919f2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6b0d91d183440a4e6dcb9fb857d2edbfc1e3c02a437985849efdf3839919f2cc->leave($__internal_6b0d91d183440a4e6dcb9fb857d2edbfc1e3c02a437985849efdf3839919f2cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2c1704592802b3c6e718dace5ae1cbfb25c773ae13e3a41c7296cf30e38132 = $this->env->getExtension("native_profiler");
        $__internal_be2c1704592802b3c6e718dace5ae1cbfb25c773ae13e3a41c7296cf30e38132->enter($__internal_be2c1704592802b3c6e718dace5ae1cbfb25c773ae13e3a41c7296cf30e38132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <h2>Toutes les informations</h2>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdvert"]) ? $context["listAdvert"] : $this->getContext($context, "listAdvert")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "       <div class=\"cadre\">
      <div class=\"fondArticle\">
        <center>par ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</center>
      </div>
      <div class=\"panel-body\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
            echo "</div>
    </div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Aucun article disponible pour le moment.</li>
    <li>Cliquez sur \"ajouter une nouvelle information\" pour alimenté notre BLOG !</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "     

";
        
        $__internal_be2c1704592802b3c6e718dace5ae1cbfb25c773ae13e3a41c7296cf30e38132->leave($__internal_be2c1704592802b3c6e718dace5ae1cbfb25c773ae13e3a41c7296cf30e38132_prof);

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
        return array (  97 => 26,  89 => 23,  80 => 19,  75 => 17,  71 => 16,  67 => 14,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/*   <h2>Toutes les informations</h2>*/
/* */
/*     {% for advert in listAdvert %}*/
/*        <div class="cadre">*/
/*       <div class="fondArticle">*/
/*         <center>par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}</center>*/
/*       </div>*/
/*       <div class="panel-body">{{ advert.content }}</div>*/
/*     </div>*/
/* */
/*     {% else %}*/
/*       <li>Aucun article disponible pour le moment.</li>*/
/*     <li>Cliquez sur "ajouter une nouvelle information" pour alimenté notre BLOG !</li>*/
/*     {% endfor %}*/
/*      */
/* */
/* {% endblock %}*/
