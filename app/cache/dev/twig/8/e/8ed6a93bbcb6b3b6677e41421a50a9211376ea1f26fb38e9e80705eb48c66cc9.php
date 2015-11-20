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
        $__internal_7c975f8e73e65d7a07e8f8dd7f1abae0e35238a74fe47d905222f9a605e6a58c = $this->env->getExtension("native_profiler");
        $__internal_7c975f8e73e65d7a07e8f8dd7f1abae0e35238a74fe47d905222f9a605e6a58c->enter($__internal_7c975f8e73e65d7a07e8f8dd7f1abae0e35238a74fe47d905222f9a605e6a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c975f8e73e65d7a07e8f8dd7f1abae0e35238a74fe47d905222f9a605e6a58c->leave($__internal_7c975f8e73e65d7a07e8f8dd7f1abae0e35238a74fe47d905222f9a605e6a58c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_519735c11746db206b7ccf518699282eddd6d85800c1b5fac9b5596dcfd1209e = $this->env->getExtension("native_profiler");
        $__internal_519735c11746db206b7ccf518699282eddd6d85800c1b5fac9b5596dcfd1209e->enter($__internal_519735c11746db206b7ccf518699282eddd6d85800c1b5fac9b5596dcfd1209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_519735c11746db206b7ccf518699282eddd6d85800c1b5fac9b5596dcfd1209e->leave($__internal_519735c11746db206b7ccf518699282eddd6d85800c1b5fac9b5596dcfd1209e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f1330769f9c326c70453f32a2cda684d7b5a14c263439f9ca3b0c3b1c475fc1 = $this->env->getExtension("native_profiler");
        $__internal_7f1330769f9c326c70453f32a2cda684d7b5a14c263439f9ca3b0c3b1c475fc1->enter($__internal_7f1330769f9c326c70453f32a2cda684d7b5a14c263439f9ca3b0c3b1c475fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_modifier", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">> 
             Modifier l'information
    </a>
          <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_supprimer", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      Supprimer l'information
    </a>
</div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "      <li>Aucun article disponible pour le moment.</li>
    <li>Cliquez sur \"ajouter une nouvelle information\" pour alimenté notre BLOG !</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "     

";
        
        $__internal_7f1330769f9c326c70453f32a2cda684d7b5a14c263439f9ca3b0c3b1c475fc1->leave($__internal_7f1330769f9c326c70453f32a2cda684d7b5a14c263439f9ca3b0c3b1c475fc1_prof);

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
        return array (  110 => 30,  102 => 27,  92 => 22,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 13,  61 => 12,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/*           <a href="{{ path('esiea_blog_modifier', {'id': advert.id}) }}" class="btn btn-default">> */
/*              Modifier l'information*/
/*     </a>*/
/*           <a href="{{ path('esiea_blog_supprimer', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       Supprimer l'information*/
/*     </a>*/
/* </div>*/
/*     {% else %}*/
/*       <li>Aucun article disponible pour le moment.</li>*/
/*     <li>Cliquez sur "ajouter une nouvelle information" pour alimenté notre BLOG !</li>*/
/*     {% endfor %}*/
/*      */
/* */
/* {% endblock %}*/
