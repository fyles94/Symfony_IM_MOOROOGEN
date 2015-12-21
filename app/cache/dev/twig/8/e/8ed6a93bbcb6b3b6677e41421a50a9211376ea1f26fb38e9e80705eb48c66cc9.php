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
        $__internal_86d45a1f1790f7f894bb3a4a195039da72bebcb5c1ac14c6cae7b029ebd4d20b = $this->env->getExtension("native_profiler");
        $__internal_86d45a1f1790f7f894bb3a4a195039da72bebcb5c1ac14c6cae7b029ebd4d20b->enter($__internal_86d45a1f1790f7f894bb3a4a195039da72bebcb5c1ac14c6cae7b029ebd4d20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d45a1f1790f7f894bb3a4a195039da72bebcb5c1ac14c6cae7b029ebd4d20b->leave($__internal_86d45a1f1790f7f894bb3a4a195039da72bebcb5c1ac14c6cae7b029ebd4d20b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc1fee2d635f52737c65916e55ff646b230e52f8701922df3cd37ece41940986 = $this->env->getExtension("native_profiler");
        $__internal_cc1fee2d635f52737c65916e55ff646b230e52f8701922df3cd37ece41940986->enter($__internal_cc1fee2d635f52737c65916e55ff646b230e52f8701922df3cd37ece41940986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cc1fee2d635f52737c65916e55ff646b230e52f8701922df3cd37ece41940986->leave($__internal_cc1fee2d635f52737c65916e55ff646b230e52f8701922df3cd37ece41940986_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_92b56cf076d28ebdd27a1ea80f803725855463077fe16f4d02c6c981353e6dcd = $this->env->getExtension("native_profiler");
        $__internal_92b56cf076d28ebdd27a1ea80f803725855463077fe16f4d02c6c981353e6dcd->enter($__internal_92b56cf076d28ebdd27a1ea80f803725855463077fe16f4d02c6c981353e6dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <div class=\"container\">
  <h1>Rejoigner notre Pokeblog et partager toutes vos connaissances de cet univers fantastiques!</h1>
  <h2>Liste des Posts</h2>

</div>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdvert"]) ? $context["listAdvert"] : $this->getContext($context, "listAdvert")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 16
            echo "<div class=\"row\">
    <section class=\"col-lg-6 col-lg-offset-3\">
   <div class=\"transbox\">
     <div style=\"width:auto; text-align:center \">
        <div class=\"title\">
         ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</div>
        <div class=\"text\">par ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</div>

    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_article", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-swag\">
             Voir le Post
      </a>
    </div>
  </div>
</section>
</div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "      <li>Aucun article disponible pour le moment.</li>
    <li>Cliquez sur \"ajouter une nouvelle information\" pour alimenté notre BLOG !</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "     

";
        
        $__internal_92b56cf076d28ebdd27a1ea80f803725855463077fe16f4d02c6c981353e6dcd->leave($__internal_92b56cf076d28ebdd27a1ea80f803725855463077fe16f4d02c6c981353e6dcd_prof);

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
        return array (  110 => 36,  102 => 33,  89 => 25,  84 => 23,  80 => 22,  76 => 21,  69 => 16,  64 => 15,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/Blog/Resources/views/Article/index.html.twig #}*/
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="container">*/
/*   <h1>Rejoigner notre Pokeblog et partager toutes vos connaissances de cet univers fantastiques!</h1>*/
/*   <h2>Liste des Posts</h2>*/
/* */
/* </div>*/
/*     {% for advert in listAdvert %}*/
/* <div class="row">*/
/*     <section class="col-lg-6 col-lg-offset-3">*/
/*    <div class="transbox">*/
/*      <div style="width:auto; text-align:center ">*/
/*         <div class="title">*/
/*          {{advert.title}}</div>*/
/*         <div class="text">par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}</div>*/
/* */
/*     <a href="{{ path('esiea_blog_article', {'id': advert.id}) }}" class="btn btn-swag">*/
/*              Voir le Post*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* </div>*/
/*     {% else %}*/
/*       <li>Aucun article disponible pour le moment.</li>*/
/*     <li>Cliquez sur "ajouter une nouvelle information" pour alimenté notre BLOG !</li>*/
/*     {% endfor %}*/
/*      */
/* */
/* {% endblock %}*/
