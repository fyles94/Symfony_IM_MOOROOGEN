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
        $__internal_2a77cde1f243058ae45fefbf3b45fd104441bb5d34691556f6f693bb83ee9eca = $this->env->getExtension("native_profiler");
        $__internal_2a77cde1f243058ae45fefbf3b45fd104441bb5d34691556f6f693bb83ee9eca->enter($__internal_2a77cde1f243058ae45fefbf3b45fd104441bb5d34691556f6f693bb83ee9eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a77cde1f243058ae45fefbf3b45fd104441bb5d34691556f6f693bb83ee9eca->leave($__internal_2a77cde1f243058ae45fefbf3b45fd104441bb5d34691556f6f693bb83ee9eca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f2ab97168b7eb61b53831f48e9b4a3453221a464421f55dcfe6d023398f425a = $this->env->getExtension("native_profiler");
        $__internal_3f2ab97168b7eb61b53831f48e9b4a3453221a464421f55dcfe6d023398f425a->enter($__internal_3f2ab97168b7eb61b53831f48e9b4a3453221a464421f55dcfe6d023398f425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3f2ab97168b7eb61b53831f48e9b4a3453221a464421f55dcfe6d023398f425a->leave($__internal_3f2ab97168b7eb61b53831f48e9b4a3453221a464421f55dcfe6d023398f425a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbd10d7631788bb0971c953b33f2ccbe579725adafc73eb2d474df82e70aaf7f = $this->env->getExtension("native_profiler");
        $__internal_bbd10d7631788bb0971c953b33f2ccbe579725adafc73eb2d474df82e70aaf7f->enter($__internal_bbd10d7631788bb0971c953b33f2ccbe579725adafc73eb2d474df82e70aaf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <h2>Toutes les posts</h2>

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdvert"]) ? $context["listAdvert"] : $this->getContext($context, "listAdvert")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "  <div style=\"width:auto; text-align:center \">
        <div class=\"title\">
         ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</div>
        <div class=\"text\">par ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</div>
      <div class=\"text\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
            echo "</div>

    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_article", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">> 
             Voir l'article
      </a>
</div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "      <li>Aucun article disponible pour le moment.</li>
    <li>Cliquez sur \"ajouter une nouvelle information\" pour alimenté notre BLOG !</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "     

";
        
        $__internal_bbd10d7631788bb0971c953b33f2ccbe579725adafc73eb2d474df82e70aaf7f->leave($__internal_bbd10d7631788bb0971c953b33f2ccbe579725adafc73eb2d474df82e70aaf7f_prof);

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
        return array (  105 => 28,  97 => 25,  87 => 20,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 13,  61 => 12,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/*   <h2>Toutes les posts</h2>*/
/* */
/*     {% for advert in listAdvert %}*/
/*   <div style="width:auto; text-align:center ">*/
/*         <div class="title">*/
/*          {{advert.title}}</div>*/
/*         <div class="text">par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}</div>*/
/*       <div class="text">{{ advert.content }}</div>*/
/* */
/*     <a href="{{ path('esiea_blog_article', {'id': advert.id}) }}" class="btn btn-default">> */
/*              Voir l'article*/
/*       </a>*/
/* </div>*/
/*     {% else %}*/
/*       <li>Aucun article disponible pour le moment.</li>*/
/*     <li>Cliquez sur "ajouter une nouvelle information" pour alimenté notre BLOG !</li>*/
/*     {% endfor %}*/
/*      */
/* */
/* {% endblock %}*/
