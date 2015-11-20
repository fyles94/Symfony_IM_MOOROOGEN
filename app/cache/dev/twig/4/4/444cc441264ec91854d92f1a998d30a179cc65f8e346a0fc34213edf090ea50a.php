<?php

/* EsieaBlogBundle:Default:contact.html.twig */
class __TwigTemplate_2836c0ede294b1a7540b73cbba8ff24c2284cb7b5e28e04d68a47c6118485cd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:contact.html.twig", 1);
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
        $__internal_53aa4eff053b095a20cbac5253b7e231dcb509a2421c281c13af587f1e0aa1c6 = $this->env->getExtension("native_profiler");
        $__internal_53aa4eff053b095a20cbac5253b7e231dcb509a2421c281c13af587f1e0aa1c6->enter($__internal_53aa4eff053b095a20cbac5253b7e231dcb509a2421c281c13af587f1e0aa1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53aa4eff053b095a20cbac5253b7e231dcb509a2421c281c13af587f1e0aa1c6->leave($__internal_53aa4eff053b095a20cbac5253b7e231dcb509a2421c281c13af587f1e0aa1c6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd172ef65e8a2391d6376a9a478b0947ade4eca98318d79d41c35776f98a180 = $this->env->getExtension("native_profiler");
        $__internal_1cd172ef65e8a2391d6376a9a478b0947ade4eca98318d79d41c35776f98a180->enter($__internal_1cd172ef65e8a2391d6376a9a478b0947ade4eca98318d79d41c35776f98a180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_1cd172ef65e8a2391d6376a9a478b0947ade4eca98318d79d41c35776f98a180->leave($__internal_1cd172ef65e8a2391d6376a9a478b0947ade4eca98318d79d41c35776f98a180_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_70d237e760e979b9233a21c85ca06601468ee8704c03b7b1e4df167820a18189 = $this->env->getExtension("native_profiler");
        $__internal_70d237e760e979b9233a21c85ca06601468ee8704c03b7b1e4df167820a18189->enter($__internal_70d237e760e979b9233a21c85ca06601468ee8704c03b7b1e4df167820a18189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        <FONT size=\"5pt\">
        <div style=\"text-align:center;\">
        Vous êtes sur que vous voulez supprimer un article?
      </div>
        </FONT>

<h3>Formulaire d'annonce</h3>


";
        // line 18
        echo "
<div class=\"well\">

  Ici se trouvera le formulaire.

</div>

";
        
        $__internal_70d237e760e979b9233a21c85ca06601468ee8704c03b7b1e4df167820a18189->leave($__internal_70d237e760e979b9233a21c85ca06601468ee8704c03b7b1e4df167820a18189_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Contact{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*         <FONT size="5pt">*/
/*         <div style="text-align:center;">*/
/*         Vous êtes sur que vous voulez supprimer un article?*/
/*       </div>*/
/*         </FONT>*/
/* */
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/* */
/*    lorsqu'on saura afficher un formulaire. #}*/
/* */
/* <div class="well">*/
/* */
/*   Ici se trouvera le formulaire.*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
