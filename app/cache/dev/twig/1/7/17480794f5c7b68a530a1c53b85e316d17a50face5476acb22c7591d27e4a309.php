<?php

/* ::base.html.twig */
class __TwigTemplate_f0f2c9067c8801596b70c696593b6eb89240e47e2162bfa222c615573eba6f5e extends Twig_Template
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
        $__internal_faa1af8fc53a19f6cfe4b5b5ecd0ee3e1e3eff8be6793a791c8f5e01f531f588 = $this->env->getExtension("native_profiler");
        $__internal_faa1af8fc53a19f6cfe4b5b5ecd0ee3e1e3eff8be6793a791c8f5e01f531f588->enter($__internal_faa1af8fc53a19f6cfe4b5b5ecd0ee3e1e3eff8be6793a791c8f5e01f531f588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "\"/>
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
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        </body>
    </html>

";
        
        $__internal_faa1af8fc53a19f6cfe4b5b5ecd0ee3e1e3eff8be6793a791c8f5e01f531f588->leave($__internal_faa1af8fc53a19f6cfe4b5b5ecd0ee3e1e3eff8be6793a791c8f5e01f531f588_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37d78ae4807bf96999e992c0a050bbd8acb0f3551f7e4255d1a2dbe36b7f7513 = $this->env->getExtension("native_profiler");
        $__internal_37d78ae4807bf96999e992c0a050bbd8acb0f3551f7e4255d1a2dbe36b7f7513->enter($__internal_37d78ae4807bf96999e992c0a050bbd8acb0f3551f7e4255d1a2dbe36b7f7513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_37d78ae4807bf96999e992c0a050bbd8acb0f3551f7e4255d1a2dbe36b7f7513->leave($__internal_37d78ae4807bf96999e992c0a050bbd8acb0f3551f7e4255d1a2dbe36b7f7513_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_016f0598fbbb7813d2acfc6e7eb2ba2e965a0fb10b4fd87d98275414fadd6181 = $this->env->getExtension("native_profiler");
        $__internal_016f0598fbbb7813d2acfc6e7eb2ba2e965a0fb10b4fd87d98275414fadd6181->enter($__internal_016f0598fbbb7813d2acfc6e7eb2ba2e965a0fb10b4fd87d98275414fadd6181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_016f0598fbbb7813d2acfc6e7eb2ba2e965a0fb10b4fd87d98275414fadd6181->leave($__internal_016f0598fbbb7813d2acfc6e7eb2ba2e965a0fb10b4fd87d98275414fadd6181_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_42d55e6d50ddfc1b5d7b9eef0a6b48f8472258690c9969097f9f9716b9a4c5a7 = $this->env->getExtension("native_profiler");
        $__internal_42d55e6d50ddfc1b5d7b9eef0a6b48f8472258690c9969097f9f9716b9a4c5a7->enter($__internal_42d55e6d50ddfc1b5d7b9eef0a6b48f8472258690c9969097f9f9716b9a4c5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 14)->display($context);
        
        $__internal_42d55e6d50ddfc1b5d7b9eef0a6b48f8472258690c9969097f9f9716b9a4c5a7->leave($__internal_42d55e6d50ddfc1b5d7b9eef0a6b48f8472258690c9969097f9f9716b9a4c5a7_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_54ed8806c6312d8a0672fd5e38bf40fef4120dfaeb0959ac8750bf3c53efd3f0 = $this->env->getExtension("native_profiler");
        $__internal_54ed8806c6312d8a0672fd5e38bf40fef4120dfaeb0959ac8750bf3c53efd3f0->enter($__internal_54ed8806c6312d8a0672fd5e38bf40fef4120dfaeb0959ac8750bf3c53efd3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_54ed8806c6312d8a0672fd5e38bf40fef4120dfaeb0959ac8750bf3c53efd3f0->leave($__internal_54ed8806c6312d8a0672fd5e38bf40fef4120dfaeb0959ac8750bf3c53efd3f0_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_231395e2a4890a6f46103d2fa850252cff9902b36542513869eba53c47564cdd = $this->env->getExtension("native_profiler");
        $__internal_231395e2a4890a6f46103d2fa850252cff9902b36542513869eba53c47564cdd->enter($__internal_231395e2a4890a6f46103d2fa850252cff9902b36542513869eba53c47564cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_231395e2a4890a6f46103d2fa850252cff9902b36542513869eba53c47564cdd->leave($__internal_231395e2a4890a6f46103d2fa850252cff9902b36542513869eba53c47564cdd_prof);

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
        return array (  124 => 16,  113 => 15,  101 => 14,  90 => 10,  79 => 5,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  56 => 14,  49 => 11,  47 => 10,  43 => 9,  38 => 7,  33 => 5,  27 => 1,);
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
/*             <link rel="stylesheet" href="{{ asset('css/add.css') }}"/>*/
/*             {% block stylesheets %}{% endblock %}*/
/*             <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*         </head>*/
/*         <body>*/
/*         {% block nav %}{%include('::nav.html.twig')%}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="//code.jquery.com/jquery.min.js"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         </body>*/
/*     </html>*/
/* */
/* */
