<?php

/* EsieaBlogBundle:Default:chat.html.twig */
class __TwigTemplate_09264a82e9c402f4b71ca4285c94a7bae7ef223c658a0ce3509714d73c7dfbc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:chat.html.twig", 1);
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
        $__internal_6810a7b6820bb85a94903a14a2466538c2a3c59bdc313a1c0ef268c1ecd343d0 = $this->env->getExtension("native_profiler");
        $__internal_6810a7b6820bb85a94903a14a2466538c2a3c59bdc313a1c0ef268c1ecd343d0->enter($__internal_6810a7b6820bb85a94903a14a2466538c2a3c59bdc313a1c0ef268c1ecd343d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:chat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6810a7b6820bb85a94903a14a2466538c2a3c59bdc313a1c0ef268c1ecd343d0->leave($__internal_6810a7b6820bb85a94903a14a2466538c2a3c59bdc313a1c0ef268c1ecd343d0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_00e5c8dd261d0aa33fff445e0c183cc17c38dbf277cf6973927f51067d8de8d5 = $this->env->getExtension("native_profiler");
        $__internal_00e5c8dd261d0aa33fff445e0c183cc17c38dbf277cf6973927f51067d8de8d5->enter($__internal_00e5c8dd261d0aa33fff445e0c183cc17c38dbf277cf6973927f51067d8de8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Chat";
        
        $__internal_00e5c8dd261d0aa33fff445e0c183cc17c38dbf277cf6973927f51067d8de8d5->leave($__internal_00e5c8dd261d0aa33fff445e0c183cc17c38dbf277cf6973927f51067d8de8d5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_282c5651a46b425ede54b3aa60edf359c879f2c6b80178b490d4e59cf9b53b49 = $this->env->getExtension("native_profiler");
        $__internal_282c5651a46b425ede54b3aa60edf359c879f2c6b80178b490d4e59cf9b53b49->enter($__internal_282c5651a46b425ede54b3aa60edf359c879f2c6b80178b490d4e59cf9b53b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        
        $__internal_282c5651a46b425ede54b3aa60edf359c879f2c6b80178b490d4e59cf9b53b49->leave($__internal_282c5651a46b425ede54b3aa60edf359c879f2c6b80178b490d4e59cf9b53b49_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}Chat{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
