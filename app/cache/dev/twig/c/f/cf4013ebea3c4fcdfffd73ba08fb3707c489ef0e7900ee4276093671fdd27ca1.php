<?php

/* EsieaBlogBundle:Default:login.html.twig */
class __TwigTemplate_4b9b79c375acc06212c7f0fb2ed8e2881f7622dcd0a659bbbf00a0e67fdb14e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsieaBlogBundle:Default:login.html.twig", 1);
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
        $__internal_380036890d9615a55eb0d33be87a89ee27e805841593c50bdb4e603ce79b9e71 = $this->env->getExtension("native_profiler");
        $__internal_380036890d9615a55eb0d33be87a89ee27e805841593c50bdb4e603ce79b9e71->enter($__internal_380036890d9615a55eb0d33be87a89ee27e805841593c50bdb4e603ce79b9e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_380036890d9615a55eb0d33be87a89ee27e805841593c50bdb4e603ce79b9e71->leave($__internal_380036890d9615a55eb0d33be87a89ee27e805841593c50bdb4e603ce79b9e71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0da3911cd80ebe56453484b3ddd23de980bfba9e2874627eb2c8ad3490521ef5 = $this->env->getExtension("native_profiler");
        $__internal_0da3911cd80ebe56453484b3ddd23de980bfba9e2874627eb2c8ad3490521ef5->enter($__internal_0da3911cd80ebe56453484b3ddd23de980bfba9e2874627eb2c8ad3490521ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Authentification ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0da3911cd80ebe56453484b3ddd23de980bfba9e2874627eb2c8ad3490521ef5->leave($__internal_0da3911cd80ebe56453484b3ddd23de980bfba9e2874627eb2c8ad3490521ef5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea59e7727b7624ac3d504f2876c20040c83ba354d4de3eb09839bf7bbcf6781b = $this->env->getExtension("native_profiler");
        $__internal_ea59e7727b7624ac3d504f2876c20040c83ba354d4de3eb09839bf7bbcf6781b->enter($__internal_ea59e7727b7624ac3d504f2876c20040c83ba354d4de3eb09839bf7bbcf6781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <body class=\"align\">
        <div class=\"container\">
          <div class=\"row\">
             <article class=\"col-md-6 col-md-offset-6\">
      <form action=\"\" method=\"post\" class=\"form form--login\">

        <div class=\"form__field\">
          <label class=\"fontawesome-user\" for=\"login__username\"><span class=\"hidden\">Username</span></label>
          <input id=\"login__username\" type=\"text\" class=\"form__input\" placeholder=\"Username\" required>
        </div>

        <div class=\"form__field\">
          <label class=\"fontawesome-lock\" for=\"login__password\"><span class=\"hidden\">Password</span></label>
          <input id=\"login__password\" type=\"password\" class=\"form__input\" placeholder=\"Password\" required>
        </div>

        <div class=\"form__field\">
          <input type=\"submit\" value=\"Sign In\">
        </div>

      </form>

      <p class=\"text--center\">Username:user,mdp:user123</a></p>
        </article>
    </div>
  </div>
</body>

   ";
        
        $__internal_ea59e7727b7624ac3d504f2876c20040c83ba354d4de3eb09839bf7bbcf6781b->leave($__internal_ea59e7727b7624ac3d504f2876c20040c83ba354d4de3eb09839bf7bbcf6781b_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Authentification {{ parent() }}*/
/* {% endblock %}*/
/* */
/*   {% block body %}*/
/* */
/*     <body class="align">*/
/*         <div class="container">*/
/*           <div class="row">*/
/*              <article class="col-md-6 col-md-offset-6">*/
/*       <form action="" method="post" class="form form--login">*/
/* */
/*         <div class="form__field">*/
/*           <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>*/
/*           <input id="login__username" type="text" class="form__input" placeholder="Username" required>*/
/*         </div>*/
/* */
/*         <div class="form__field">*/
/*           <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>*/
/*           <input id="login__password" type="password" class="form__input" placeholder="Password" required>*/
/*         </div>*/
/* */
/*         <div class="form__field">*/
/*           <input type="submit" value="Sign In">*/
/*         </div>*/
/* */
/*       </form>*/
/* */
/*       <p class="text--center">Username:user,mdp:user123</a></p>*/
/*         </article>*/
/*     </div>*/
/*   </div>*/
/* </body>*/
/* */
/*    {% endblock %}*/
/* */
/* */
