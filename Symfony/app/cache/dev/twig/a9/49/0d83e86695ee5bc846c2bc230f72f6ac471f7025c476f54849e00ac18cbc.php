<?php

/* ::layout.html.twig */
class __TwigTemplate_a9490d83e86695ee5bc846c2bc230f72f6ac471f7025c476f54849e00ac18cbc extends Twig_Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"CV de Martin Le Guillou\">
    <meta name=\"author\" content=\"Martin Le Guillou\">

    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "  </head>

  <body>
    <div class=\"navbar navbar-fixed-top navbar-default\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">AroundTheWorld</a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#\">News</a></li>
            <li><a href=\"#\">Map</a></li>
            <li><a href=\"#\">Countries</a></li>
            <li><a href=\"#\">Best</a></li>
            <li><a href=\"#\">My Account</a></li>
            <li><a href=\"#\">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class=\"container main-page\">
      ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "    </div>


  ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
  </body>
</html>";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Around The World";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/PaT.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "      ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  131 => 57,  127 => 56,  124 => 55,  122 => 54,  119 => 53,  115 => 49,  112 => 48,  106 => 18,  101 => 17,  92 => 14,  86 => 60,  84 => 53,  79 => 50,  77 => 48,  47 => 20,  45 => 16,  40 => 14,  35 => 12,  23 => 2,  98 => 16,  88 => 43,  78 => 36,  68 => 29,  58 => 22,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
