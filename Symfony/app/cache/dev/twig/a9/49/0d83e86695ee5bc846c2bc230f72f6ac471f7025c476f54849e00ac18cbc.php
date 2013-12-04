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

    <style type=\"text/css\">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>

    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
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
          <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">AroundTheWorld</a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Home</a></li>
            <li><a href=\"#\">News</a></li>
            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("Map");
        echo "\">Map</a></li>
            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("Earth");
        echo "\">Earth</a></li>
            <li><a href=\"#\">Countries</a></li>
            <li><a href=\"#\">Best</a></li>
            <li><a href=\"#\">My Account</a></li>
            <li><a href=\"#\">Contact</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><button type=\"button\" class=\"btn btn-success btn-connect\">Connect</button></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->


      ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "


  ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
  </body>
</html>";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo "Around The World";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/PaT.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "      ";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        // line 65
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
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
        return array (  157 => 68,  153 => 67,  149 => 66,  146 => 65,  144 => 64,  141 => 63,  137 => 59,  134 => 58,  128 => 24,  123 => 23,  120 => 22,  114 => 20,  108 => 70,  106 => 63,  101 => 60,  99 => 58,  82 => 44,  78 => 43,  73 => 41,  66 => 37,  53 => 26,  51 => 22,  46 => 20,  41 => 18,  23 => 2,);
    }
}
