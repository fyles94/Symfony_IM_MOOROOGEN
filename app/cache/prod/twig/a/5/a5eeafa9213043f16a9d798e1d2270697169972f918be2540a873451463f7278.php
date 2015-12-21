<?php

/* EsieaBlogBundle:Default:modifier.html.twig */
class __TwigTemplate_67c75291ce3305a2e1784b67d7dfb70bfcaf038866d1328d62ef71e0cbaeb15e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:modifier.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb3c47fb23b93dba0967f1a1f82eb8b1b330c6854721ca458c3c53f83da2b758 = $this->env->getExtension("native_profiler");
        $__internal_eb3c47fb23b93dba0967f1a1f82eb8b1b330c6854721ca458c3c53f83da2b758->enter($__internal_eb3c47fb23b93dba0967f1a1f82eb8b1b330c6854721ca458c3c53f83da2b758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3c47fb23b93dba0967f1a1f82eb8b1b330c6854721ca458c3c53f83da2b758->leave($__internal_eb3c47fb23b93dba0967f1a1f82eb8b1b330c6854721ca458c3c53f83da2b758_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dff860b2fa7ba1084896d23f06b5b7c968ba699297d893973a887ec520e2583 = $this->env->getExtension("native_profiler");
        $__internal_8dff860b2fa7ba1084896d23f06b5b7c968ba699297d893973a887ec520e2583->enter($__internal_8dff860b2fa7ba1084896d23f06b5b7c968ba699297d893973a887ec520e2583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

  <div class=\"row\">
          <section class=\"col-lg-9 col-lg-offset-2\">
  <h1>Modifier un post</h1>


<div class=\"well\">
  ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 18
        echo "    <div class=\"form-group\">
      ";
        // line 20
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre du Post"));
        echo "

      ";
        // line 23
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 27
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

      </div>
    </div>

    ";
        // line 33
        echo "    <div class=\"form-group\">
      ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu du post"));
        echo "
      ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 42
        echo "    <div class=\"form-group\">
      ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur"));
        echo "
      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

   


    
  </br>

    <div class=\"form-group\">
 
      ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
       ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo " ";
        // line 61
        echo "      </div>
    </div>


  ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

</section>
</div>


";
        
        $__internal_8dff860b2fa7ba1084896d23f06b5b7c968ba699297d893973a887ec520e2583->leave($__internal_8dff860b2fa7ba1084896d23f06b5b7c968ba699297d893973a887ec520e2583_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 67,  145 => 65,  139 => 61,  136 => 60,  131 => 58,  116 => 46,  111 => 44,  107 => 43,  104 => 42,  97 => 37,  92 => 35,  88 => 34,  85 => 33,  76 => 27,  69 => 23,  63 => 20,  60 => 18,  55 => 15,  50 => 13,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* 	*/
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*   <div class="row">*/
/*           <section class="col-lg-9 col-lg-offset-2">*/
/*   <h1>Modifier un post</h1>*/
/* */
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {#Titre#}*/
/*     <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.title, "Titre du Post", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.title) }}*/
/* */
/*       <div class="col-sm-4">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/*     {# Contenu de l'article. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.content, "Contenu du post", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.title) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {# Auteur. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.author, "Auteur", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.author) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*    */
/* */
/* */
/*     */
/*   </br>*/
/* */
/*     <div class="form-group">*/
/*  */
/*       {{ form_errors(form.published) }}*/
/*       <div class="col-sm-4">*/
/*        {{ form_row(form.published) }} {# Affiche la case publier #}*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*   {{ form_rest(form) }}*/
/* */
/*   {{ form_end(form) }}*/
/* </div>*/
/* */
/* </section>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
