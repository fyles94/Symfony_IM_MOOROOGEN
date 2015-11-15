<?php

/* base.html.twig */
class __TwigTemplate_b607e1cb55011f05ea7c4b3abbe96c284fb69d67d93268caa568d69e9e531e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4774990ecd6bd694158b082ca59f88001b9ece61caf623a529ea122dfdb676a = $this->env->getExtension("native_profiler");
        $__internal_c4774990ecd6bd694158b082ca59f88001b9ece61caf623a529ea122dfdb676a->enter($__internal_c4774990ecd6bd694158b082ca59f88001b9ece61caf623a529ea122dfdb676a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c4774990ecd6bd694158b082ca59f88001b9ece61caf623a529ea122dfdb676a->leave($__internal_c4774990ecd6bd694158b082ca59f88001b9ece61caf623a529ea122dfdb676a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e423b6b3a18ee6983cefda15c4c3fd0f1e1470c3db4d31f49d3ce5c76278b51 = $this->env->getExtension("native_profiler");
        $__internal_9e423b6b3a18ee6983cefda15c4c3fd0f1e1470c3db4d31f49d3ce5c76278b51->enter($__internal_9e423b6b3a18ee6983cefda15c4c3fd0f1e1470c3db4d31f49d3ce5c76278b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e423b6b3a18ee6983cefda15c4c3fd0f1e1470c3db4d31f49d3ce5c76278b51->leave($__internal_9e423b6b3a18ee6983cefda15c4c3fd0f1e1470c3db4d31f49d3ce5c76278b51_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3547cc11329d3d8b5c65a7b9c27c2643b2454d1906d625a12dc160701dcc4aac = $this->env->getExtension("native_profiler");
        $__internal_3547cc11329d3d8b5c65a7b9c27c2643b2454d1906d625a12dc160701dcc4aac->enter($__internal_3547cc11329d3d8b5c65a7b9c27c2643b2454d1906d625a12dc160701dcc4aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3547cc11329d3d8b5c65a7b9c27c2643b2454d1906d625a12dc160701dcc4aac->leave($__internal_3547cc11329d3d8b5c65a7b9c27c2643b2454d1906d625a12dc160701dcc4aac_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed52b197d366ca2ba5841a46f1c02c7c5d871543337ef7ff477e5d5299263645 = $this->env->getExtension("native_profiler");
        $__internal_ed52b197d366ca2ba5841a46f1c02c7c5d871543337ef7ff477e5d5299263645->enter($__internal_ed52b197d366ca2ba5841a46f1c02c7c5d871543337ef7ff477e5d5299263645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed52b197d366ca2ba5841a46f1c02c7c5d871543337ef7ff477e5d5299263645->leave($__internal_ed52b197d366ca2ba5841a46f1c02c7c5d871543337ef7ff477e5d5299263645_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f0b6c42459570f5bbef19a5c6454c65f1e2ccef4c528bd02419f0274369146d = $this->env->getExtension("native_profiler");
        $__internal_7f0b6c42459570f5bbef19a5c6454c65f1e2ccef4c528bd02419f0274369146d->enter($__internal_7f0b6c42459570f5bbef19a5c6454c65f1e2ccef4c528bd02419f0274369146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f0b6c42459570f5bbef19a5c6454c65f1e2ccef4c528bd02419f0274369146d->leave($__internal_7f0b6c42459570f5bbef19a5c6454c65f1e2ccef4c528bd02419f0274369146d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
