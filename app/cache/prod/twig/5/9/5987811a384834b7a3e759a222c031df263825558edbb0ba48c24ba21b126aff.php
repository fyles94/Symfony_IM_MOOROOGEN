<?php

/* EsieaBlogBundle:Default:supprimer.html.twig */
class __TwigTemplate_ca72a5e169ad0190b111795a0ed1e61ba4c085abc9aa86929b151ac9988d00d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:supprimer.html.twig", 4);
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
        $__internal_9cc912df21906725f332b51e2c026d9f61420554b5af586a55e86b7807673f9b = $this->env->getExtension("native_profiler");
        $__internal_9cc912df21906725f332b51e2c026d9f61420554b5af586a55e86b7807673f9b->enter($__internal_9cc912df21906725f332b51e2c026d9f61420554b5af586a55e86b7807673f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc912df21906725f332b51e2c026d9f61420554b5af586a55e86b7807673f9b->leave($__internal_9cc912df21906725f332b51e2c026d9f61420554b5af586a55e86b7807673f9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1515c7cd5384457469b253c92a21d1b490806a1cd287e51e69f0722eba4bc48 = $this->env->getExtension("native_profiler");
        $__internal_a1515c7cd5384457469b253c92a21d1b490806a1cd287e51e69f0722eba4bc48->enter($__internal_a1515c7cd5384457469b253c92a21d1b490806a1cd287e51e69f0722eba4bc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "  Suppression d'annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a1515c7cd5384457469b253c92a21d1b490806a1cd287e51e69f0722eba4bc48->leave($__internal_a1515c7cd5384457469b253c92a21d1b490806a1cd287e51e69f0722eba4bc48_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fccc586f09444be9eadf899d1a2534d07f328c5c34390b05ce61816b1872b6dd = $this->env->getExtension("native_profiler");
        $__internal_fccc586f09444be9eadf899d1a2534d07f328c5c34390b05ce61816b1872b6dd->enter($__internal_fccc586f09444be9eadf899d1a2534d07f328c5c34390b05ce61816b1872b6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <div style=\"width:auto; text-align:center\">

  <h2>Suppression d'un article</h2>

  <p>
    Le message à bien été supprimer.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\" class=\"btn btn-default\">
      Retour
    </a>
  </p>
</div>
";
        
        $__internal_fccc586f09444be9eadf899d1a2534d07f328c5c34390b05ce61816b1872b6dd->leave($__internal_fccc586f09444be9eadf899d1a2534d07f328c5c34390b05ce61816b1872b6dd_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  57 => 12,  51 => 11,  41 => 8,  35 => 7,  11 => 4,);
    }
}
/* */
/* {# src/Blog/Bundle/Resources/views/Article/delete.html.twig #}*/
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Suppression d'annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div style="width:auto; text-align:center">*/
/* */
/*   <h2>Suppression d'un article</h2>*/
/* */
/*   <p>*/
/*     Le message à bien été supprimer.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('esiea_blog_homepage') }}" class="btn btn-default">*/
/*       Retour*/
/*     </a>*/
/*   </p>*/
/* </div>*/
/* {% endblock %}*/
