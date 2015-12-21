<?php

/* EsieaBlogBundle:Default:index.html.twig */
class __TwigTemplate_480402d9e1b44708d851e64b84cdc9c0047ea63323f8a88b3135c500f5adca9d extends Twig_Template
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
        $__internal_827b8f3bc6bd6178ed9128f0abe92fedf8c4ceb10044b07f06f37f4754a98054 = $this->env->getExtension("native_profiler");
        $__internal_827b8f3bc6bd6178ed9128f0abe92fedf8c4ceb10044b07f06f37f4754a98054->enter($__internal_827b8f3bc6bd6178ed9128f0abe92fedf8c4ceb10044b07f06f37f4754a98054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_827b8f3bc6bd6178ed9128f0abe92fedf8c4ceb10044b07f06f37f4754a98054->leave($__internal_827b8f3bc6bd6178ed9128f0abe92fedf8c4ceb10044b07f06f37f4754a98054_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_786804953b41490794d6139e7ee2ead2627f1e65144c6c4f6e128d4896a13a66 = $this->env->getExtension("native_profiler");
        $__internal_786804953b41490794d6139e7ee2ead2627f1e65144c6c4f6e128d4896a13a66->enter($__internal_786804953b41490794d6139e7ee2ead2627f1e65144c6c4f6e128d4896a13a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_786804953b41490794d6139e7ee2ead2627f1e65144c6c4f6e128d4896a13a66->leave($__internal_786804953b41490794d6139e7ee2ead2627f1e65144c6c4f6e128d4896a13a66_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_742b4b7821a6bbacfeff56444f56304e97279f4f00cb5b4bb09e1d19dd54227e = $this->env->getExtension("native_profiler");
        $__internal_742b4b7821a6bbacfeff56444f56304e97279f4f00cb5b4bb09e1d19dd54227e->enter($__internal_742b4b7821a6bbacfeff56444f56304e97279f4f00cb5b4bb09e1d19dd54227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_742b4b7821a6bbacfeff56444f56304e97279f4f00cb5b4bb09e1d19dd54227e->leave($__internal_742b4b7821a6bbacfeff56444f56304e97279f4f00cb5b4bb09e1d19dd54227e_prof);

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
