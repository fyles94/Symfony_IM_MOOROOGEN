<?php

/* ::nav.html.twig */
class __TwigTemplate_76626e77a924fd252cc4f7dfac3b2669716d9708bcda5e30eac05f1b36a83625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18d0338107a9c4a28a40dad70aef9f7fb4c4c96db85ab78e6ff7413ba022f1fc = $this->env->getExtension("native_profiler");
        $__internal_18d0338107a9c4a28a40dad70aef9f7fb4c4c96db85ab78e6ff7413ba022f1fc->enter($__internal_18d0338107a9c4a28a40dad70aef9f7fb4c4c96db85ab78e6ff7413ba022f1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        // line 1
        echo "<html>
  
    <head>
      <title>Salut</title>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
      <script type=\"text/javascript\" src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3./js/bootstrap.min.js\"></script>
      <link href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css\"
      rel=\"stylesheet\" type=\"text/css\">
      <link href=\"https://bootswatch.com/yeti/bootstrap.min.css\" rel=\"stylesheet\"
      type=\"text/css\">
    </head>
  
  <body>
    <div class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-ex-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\"><span>PokeBlog</span></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-ex-collapse\">
          <ul class=\"nav navbar-nav navbar-left\">
            <li class=\"active\">
              <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\"><i class=\"fa fa-fw fa-home text-primary\"></i> Home&nbsp;</a>
            </li>
            <li>
              <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("esiea_blog_ajouter");
        echo "\"><i class=\"fa fa-comments fa-fw text-primary\"></i> Ajouter un article &nbsp;<br></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>

</html>";
        
        $__internal_18d0338107a9c4a28a40dad70aef9f7fb4c4c96db85ab78e6ff7413ba022f1fc->leave($__internal_18d0338107a9c4a28a40dad70aef9f7fb4c4c96db85ab78e6ff7413ba022f1fc_prof);

    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 33,  56 => 30,  48 => 25,  22 => 1,);
    }
}
/* <html>*/
/*   */
/*     <head>*/
/*       <title>Salut</title>*/
/*       <meta charset="utf-8">*/
/*       <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*       <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/*       <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3./js/bootstrap.min.js"></script>*/
/*       <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"*/
/*       rel="stylesheet" type="text/css">*/
/*       <link href="https://bootswatch.com/yeti/bootstrap.min.css" rel="stylesheet"*/
/*       type="text/css">*/
/*     </head>*/
/*   */
/*   <body>*/
/*     <div class="navbar navbar-default navbar-fixed-top">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="{{path('esiea_blog_homepage')}}"><span>PokeBlog</span></a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse" id="navbar-ex-collapse">*/
/*           <ul class="nav navbar-nav navbar-left">*/
/*             <li class="active">*/
/*               <a href="{{path('esiea_blog_homepage')}}"><i class="fa fa-fw fa-home text-primary"></i> Home&nbsp;</a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{path('esiea_blog_ajouter')}}"><i class="fa fa-comments fa-fw text-primary"></i> Ajouter un article &nbsp;<br></a>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </body>*/
/* */
/* </html>*/
