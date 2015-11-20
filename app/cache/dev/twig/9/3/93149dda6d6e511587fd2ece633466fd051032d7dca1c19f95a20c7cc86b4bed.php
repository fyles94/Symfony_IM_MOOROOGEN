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
        $__internal_f1b083c730aa9c3284224f8fef0a6df78c9393b45c544c9711b034b926debdd0 = $this->env->getExtension("native_profiler");
        $__internal_f1b083c730aa9c3284224f8fef0a6df78c9393b45c544c9711b034b926debdd0->enter($__internal_f1b083c730aa9c3284224f8fef0a6df78c9393b45c544c9711b034b926debdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b083c730aa9c3284224f8fef0a6df78c9393b45c544c9711b034b926debdd0->leave($__internal_f1b083c730aa9c3284224f8fef0a6df78c9393b45c544c9711b034b926debdd0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69c632754c7882eeb0c83f4d11ccef53db53eaf2d5e3206f5c25198b10f0c026 = $this->env->getExtension("native_profiler");
        $__internal_69c632754c7882eeb0c83f4d11ccef53db53eaf2d5e3206f5c25198b10f0c026->enter($__internal_69c632754c7882eeb0c83f4d11ccef53db53eaf2d5e3206f5c25198b10f0c026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "  Suppression d'annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_69c632754c7882eeb0c83f4d11ccef53db53eaf2d5e3206f5c25198b10f0c026->leave($__internal_69c632754c7882eeb0c83f4d11ccef53db53eaf2d5e3206f5c25198b10f0c026_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_046cffa096d3234296e15ee144d003f90d782c85d0813caa1687f2c8dc5f8800 = $this->env->getExtension("native_profiler");
        $__internal_046cffa096d3234296e15ee144d003f90d782c85d0813caa1687f2c8dc5f8800->enter($__internal_046cffa096d3234296e15ee144d003f90d782c85d0813caa1687f2c8dc5f8800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" class=\"bouton boutonRetour\">
      Retour
    </a>
  </p>
</div>
";
        
        $__internal_046cffa096d3234296e15ee144d003f90d782c85d0813caa1687f2c8dc5f8800->leave($__internal_046cffa096d3234296e15ee144d003f90d782c85d0813caa1687f2c8dc5f8800_prof);

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
/*     <a href="{{ path('esiea_blog_homepage') }}" class="bouton boutonRetour">*/
/*       Retour*/
/*     </a>*/
/*   </p>*/
/* </div>*/
/* {% endblock %}*/
