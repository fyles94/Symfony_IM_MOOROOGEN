<?php

/* ::base.html.twig */
class __TwigTemplate_c7f15b2b72deb7eda4aeb511301c6db5a79f19af96747cf4e128a125aec2e010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_829faa9785b113bed9df8c71ff383a1a0bca22bf81e7ecd4f513347c02189170 = $this->env->getExtension("native_profiler");
        $__internal_829faa9785b113bed9df8c71ff383a1a0bca22bf81e7ecd4f513347c02189170->enter($__internal_829faa9785b113bed9df8c71ff383a1a0bca22bf81e7ecd4f513347c02189170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"UTF-8\"/>
            <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " -Mon Blog</title>
            <meta name=\"viewport\" content=\"width-device-width, initial-scale=1.0\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
            ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        </head>
        <body>

          ";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        // line 18
        echo "

        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
      </div>

    </div>
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        </body>
    </html>

";
        
        $__internal_829faa9785b113bed9df8c71ff383a1a0bca22bf81e7ecd4f513347c02189170->leave($__internal_829faa9785b113bed9df8c71ff383a1a0bca22bf81e7ecd4f513347c02189170_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_730218e2df754ef620345c3192487a76b8564e3fc073754ad95dfd2d0461065d = $this->env->getExtension("native_profiler");
        $__internal_730218e2df754ef620345c3192487a76b8564e3fc073754ad95dfd2d0461065d->enter($__internal_730218e2df754ef620345c3192487a76b8564e3fc073754ad95dfd2d0461065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_730218e2df754ef620345c3192487a76b8564e3fc073754ad95dfd2d0461065d->leave($__internal_730218e2df754ef620345c3192487a76b8564e3fc073754ad95dfd2d0461065d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e9e131ead6f2cc752f0c7c878393561c1f577996c3b1d18b6c91498415a0683 = $this->env->getExtension("native_profiler");
        $__internal_8e9e131ead6f2cc752f0c7c878393561c1f577996c3b1d18b6c91498415a0683->enter($__internal_8e9e131ead6f2cc752f0c7c878393561c1f577996c3b1d18b6c91498415a0683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8e9e131ead6f2cc752f0c7c878393561c1f577996c3b1d18b6c91498415a0683->leave($__internal_8e9e131ead6f2cc752f0c7c878393561c1f577996c3b1d18b6c91498415a0683_prof);

    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3bd7ee5885a44c36e7bf3463afea9479d7602588933a86d7d551379111d577ac = $this->env->getExtension("native_profiler");
        $__internal_3bd7ee5885a44c36e7bf3463afea9479d7602588933a86d7d551379111d577ac->enter($__internal_3bd7ee5885a44c36e7bf3463afea9479d7602588933a86d7d551379111d577ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 16
        echo "          ";
        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 16)->display($context);
        // line 17
        echo "          ";
        
        $__internal_3bd7ee5885a44c36e7bf3463afea9479d7602588933a86d7d551379111d577ac->leave($__internal_3bd7ee5885a44c36e7bf3463afea9479d7602588933a86d7d551379111d577ac_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_06ec831d22cd757d5866c4ebcfc5fc0e1632fa65a3b3adb2a1e80612fbadcb8f = $this->env->getExtension("native_profiler");
        $__internal_06ec831d22cd757d5866c4ebcfc5fc0e1632fa65a3b3adb2a1e80612fbadcb8f->enter($__internal_06ec831d22cd757d5866c4ebcfc5fc0e1632fa65a3b3adb2a1e80612fbadcb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        ";
        
        $__internal_06ec831d22cd757d5866c4ebcfc5fc0e1632fa65a3b3adb2a1e80612fbadcb8f->leave($__internal_06ec831d22cd757d5866c4ebcfc5fc0e1632fa65a3b3adb2a1e80612fbadcb8f_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5aec728c9178ebdee5e6255a652854741461a964c1d5c1ee90e2686093f7256a = $this->env->getExtension("native_profiler");
        $__internal_5aec728c9178ebdee5e6255a652854741461a964c1d5c1ee90e2686093f7256a->enter($__internal_5aec728c9178ebdee5e6255a652854741461a964c1d5c1ee90e2686093f7256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5aec728c9178ebdee5e6255a652854741461a964c1d5c1ee90e2686093f7256a->leave($__internal_5aec728c9178ebdee5e6255a652854741461a964c1d5c1ee90e2686093f7256a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 26,  132 => 21,  126 => 20,  119 => 17,  116 => 16,  110 => 15,  99 => 10,  88 => 5,  76 => 28,  73 => 27,  71 => 26,  65 => 22,  63 => 20,  59 => 18,  57 => 15,  49 => 11,  47 => 10,  43 => 9,  38 => 7,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/*     <html>*/
/*         <head>*/
/*             <meta charset="UTF-8"/>*/
/*             <title>{% block title %}{% endblock %} -Mon Blog</title>*/
/*             <meta name="viewport" content="width-device-width, initial-scale=1.0"/>*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>*/
/*             <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*             <link rel="stylesheet" href="{{ asset('css/add.css') }}" type="text/css"/>*/
/*             {% block stylesheets %}{% endblock %}*/
/*             <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*         </head>*/
/*         <body>*/
/* */
/*           {% block nav %}*/
/*           {% include '::nav.html.twig' %}*/
/*           {% endblock %}*/
/* */
/* */
/*         {% block body %}*/
/*         {% endblock %}*/
/* */
/*       </div>*/
/* */
/*     </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         </body>*/
/*     </html>*/
/* */
/* */
