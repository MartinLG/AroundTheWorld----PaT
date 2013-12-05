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
            'javascripts_page' => array($this, 'block_javascripts_page'),
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
            <li id=\"navHome\" class=\"active\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Home</a></li>
            <li id=\"navNews\"><a href=\"#\">News</a></li>
            <li id=\"navMap\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("Map");
        echo "\">Map</a></li>
            <li id=\"navEarth\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("Earth");
        echo "\">Earth</a></li>
            <li id=\"navCountries\"><a href=\"#\">Countries</a></li>
            <li id=\"navBest\"><a href=\"#\">Best</a></li>
            <li id=\"navAccount\"><a href=\"#\">My Account</a></li>
            <li id=\"navAbout\"><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("Contact");
        echo "\">About</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><button type=\"button\" class=\"btn btn-success btn-connect\" data-toggle=\"modal\" data-target=\"#ModalConnect\">Log In</button></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

      <!-- Modal -->
    <div class=\"modal fade\" id=\"ModalConnect\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalConnectLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div>
            <ul class=\"nav nav-tabs\" id=\"myTab\">
              <li class=\"active tab-login\"><a href=\"#connection\" data-toggle=\"tab\">Log In</a></li>
              <li class=\"tab-signin\"><a href=\"#registration\" data-toggle=\"tab\">Sign Up</a></li>
            </ul>
          </div>
          <div class=\"modal-body\">
            <div class=\"tab-content\">
              <div class=\"tab-pane fade in active\" id=\"connection\">
                <div class=\"form-group\">
                  <label for=\"exampleInputEmail1\">Email address</label>
                  <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                </div>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword1\">Password</label>
                  <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                </div>
              </div>
              <div class=\"tab-pane fade\" id=\"registration\">
                <div class=\"form-group\">
                  <label for=\"exampleInputPseudo1\">Pseudo</label>
                  <input type=\"text\" class=\"form-control\" id=\"exampleInputPseudo1\" placeholder=\"Enter Pseudo\">
                </div>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword2\">Password</label>
                  <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
                </div>
                <div class=\"form-group\">
                  <label for=\"exampleInputPassword3\">Password again</label>
                  <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword3\" placeholder=\"Password\">
                </div>
                <div class=\"form-group\">
                  <label for=\"exampleInputEmail2\">Email address</label>
                  <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
                </div>
                <div class=\"form-group\">
                  <label for=\"exampleInputCountry1\">Country</label>
                  <input type=\"text\" class=\"form-control\" id=\"exampleInputCountry1\" placeholder=\"Your Country\">
                </div>
              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-danger btn-close-connection\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-success\">Sign In</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


      ";
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "


  ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
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

    // line 112
    public function block_body($context, array $blocks = array())
    {
        // line 113
        echo "      ";
    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        // line 118
        echo "    ";
        // line 119
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/PaT.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    ";
        // line 124
        $this->displayBlock('javascripts_page', $context, $blocks);
        // line 126
        echo "  ";
    }

    // line 124
    public function block_javascripts_page($context, array $blocks = array())
    {
        // line 125
        echo "    ";
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
        return array (  232 => 125,  229 => 124,  225 => 126,  223 => 124,  219 => 123,  215 => 122,  211 => 121,  207 => 120,  204 => 119,  202 => 118,  199 => 117,  195 => 113,  192 => 112,  186 => 24,  181 => 23,  178 => 22,  172 => 20,  166 => 127,  164 => 117,  159 => 114,  157 => 112,  90 => 48,  83 => 44,  79 => 43,  74 => 41,  67 => 37,  54 => 26,  52 => 22,  47 => 20,  42 => 18,  24 => 2,);
    }
}
