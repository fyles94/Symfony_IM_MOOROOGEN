<?php

/* EsieaBlogBundle:Default:menu.html.twig */
class __TwigTemplate_38292ba0c2e5c46cc5e28219ed2d344e485e04d8eb1c2ef66f0f081f524c417e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_769b2d54ede4e527ac9adfc782b8202b9a7d0d3f1e7d7b11b1b33c5bc3082e8e = $this->env->getExtension("native_profiler");
        $__internal_769b2d54ede4e527ac9adfc782b8202b9a7d0d3f1e7d7b11b1b33c5bc3082e8e->enter($__internal_769b2d54ede4e527ac9adfc782b8202b9a7d0d3f1e7d7b11b1b33c5bc3082e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_lister", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_769b2d54ede4e527ac9adfc782b8202b9a7d0d3f1e7d7b11b1b33c5bc3082e8e->leave($__internal_769b2d54ede4e527ac9adfc782b8202b9a7d0d3f1e7d7b11b1b33c5bc3082e8e_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  25 => 5,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}*/
/* */
/* {# Ce template n'hérite de personne,*/
/*    tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('esiea_blog_lister', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
