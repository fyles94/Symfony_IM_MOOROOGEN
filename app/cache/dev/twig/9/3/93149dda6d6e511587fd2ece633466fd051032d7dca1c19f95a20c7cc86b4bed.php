<?php

/* EsieaBlogBundle:Default:supprimer.html.twig */
class __TwigTemplate_9a8bb03dd98094ad271a28cd9cb6377a5324983e21c121f775ad301c65ddc821 extends Twig_Template
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
        $__internal_cd2e7013a0ac521a2f5c9a691fbe049327e11639de493466b37011ebc3d6445a = $this->env->getExtension("native_profiler");
        $__internal_cd2e7013a0ac521a2f5c9a691fbe049327e11639de493466b37011ebc3d6445a->enter($__internal_cd2e7013a0ac521a2f5c9a691fbe049327e11639de493466b37011ebc3d6445a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2e7013a0ac521a2f5c9a691fbe049327e11639de493466b37011ebc3d6445a->leave($__internal_cd2e7013a0ac521a2f5c9a691fbe049327e11639de493466b37011ebc3d6445a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e99c9577abe27f3cba6bea03753b084edaab78953410d447770c11997e6f2bc8 = $this->env->getExtension("native_profiler");
        $__internal_e99c9577abe27f3cba6bea03753b084edaab78953410d447770c11997e6f2bc8->enter($__internal_e99c9577abe27f3cba6bea03753b084edaab78953410d447770c11997e6f2bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "  Suppression d'annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e99c9577abe27f3cba6bea03753b084edaab78953410d447770c11997e6f2bc8->leave($__internal_e99c9577abe27f3cba6bea03753b084edaab78953410d447770c11997e6f2bc8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9145b2332c4939ade1ce0f6d4c27adba653f3b85b3549ac3c693f8ad599cb04 = $this->env->getExtension("native_profiler");
        $__internal_b9145b2332c4939ade1ce0f6d4c27adba653f3b85b3549ac3c693f8ad599cb04->enter($__internal_b9145b2332c4939ade1ce0f6d4c27adba653f3b85b3549ac3c693f8ad599cb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b9145b2332c4939ade1ce0f6d4c27adba653f3b85b3549ac3c693f8ad599cb04->leave($__internal_b9145b2332c4939ade1ce0f6d4c27adba653f3b85b3549ac3c693f8ad599cb04_prof);

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
