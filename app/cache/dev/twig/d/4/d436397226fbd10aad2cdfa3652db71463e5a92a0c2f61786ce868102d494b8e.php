<?php

/* EsieaBlogBundle:Default:ajouter.html.twig */
class __TwigTemplate_5c7f86ee4c80a16b7b985ff2c2a9520eb5df9a4062daf1213466ce1ffb22bf03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:ajouter.html.twig", 2);
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
        $__internal_8d375b2c71d6aa1e6fc10767ae343159dcba4dc5bfea6554d45421a651688fdb = $this->env->getExtension("native_profiler");
        $__internal_8d375b2c71d6aa1e6fc10767ae343159dcba4dc5bfea6554d45421a651688fdb->enter($__internal_8d375b2c71d6aa1e6fc10767ae343159dcba4dc5bfea6554d45421a651688fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d375b2c71d6aa1e6fc10767ae343159dcba4dc5bfea6554d45421a651688fdb->leave($__internal_8d375b2c71d6aa1e6fc10767ae343159dcba4dc5bfea6554d45421a651688fdb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_231f146b054bc7f8b546876e4cb9af7a02ede4ef814e82e0678557bf57cea710 = $this->env->getExtension("native_profiler");
        $__internal_231f146b054bc7f8b546876e4cb9af7a02ede4ef814e82e0678557bf57cea710->enter($__internal_231f146b054bc7f8b546876e4cb9af7a02ede4ef814e82e0678557bf57cea710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_231f146b054bc7f8b546876e4cb9af7a02ede4ef814e82e0678557bf57cea710->leave($__internal_231f146b054bc7f8b546876e4cb9af7a02ede4ef814e82e0678557bf57cea710_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfadbf3906f992172463b3acde110b24d8bbf5c8726323356c8e206e6165039c = $this->env->getExtension("native_profiler");
        $__internal_dfadbf3906f992172463b3acde110b24d8bbf5c8726323356c8e206e6165039c->enter($__internal_dfadbf3906f992172463b3acde110b24d8bbf5c8726323356c8e206e6165039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <div class=\"row\">
          <section class=\"col-lg-9 col-lg-offset-2\">
  <h1>Ajouter un post</h1>


<div class=\"well\">
  ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 21
        echo "    <div class=\"form-group\">
      ";
        // line 23
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre du Post"));
        echo "

      ";
        // line 26
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 30
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

      </div>
    </div>

    ";
        // line 36
        echo "    <div class=\"form-group\">
      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu du post"));
        echo "
      ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 45
        echo "    <div class=\"form-group\">
      ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Auteur"));
        echo "
      ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

   


    
  </br>

    <div class=\"form-group\">
 
      ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
       ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo " ";
        // line 64
        echo "      </div>
    </div>


  ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

</section>
</div>
";
        
        $__internal_dfadbf3906f992172463b3acde110b24d8bbf5c8726323356c8e206e6165039c->leave($__internal_dfadbf3906f992172463b3acde110b24d8bbf5c8726323356c8e206e6165039c_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 70,  161 => 68,  155 => 64,  152 => 63,  147 => 61,  132 => 49,  127 => 47,  123 => 46,  120 => 45,  113 => 40,  108 => 38,  104 => 37,  101 => 36,  92 => 30,  85 => 26,  79 => 23,  76 => 21,  71 => 18,  66 => 16,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <div class="row">*/
/*           <section class="col-lg-9 col-lg-offset-2">*/
/*   <h1>Ajouter un post</h1>*/
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
/* {% endblock %}*/
