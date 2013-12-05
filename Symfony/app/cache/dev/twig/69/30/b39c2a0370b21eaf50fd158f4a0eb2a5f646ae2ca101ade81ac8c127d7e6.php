<?php

/* PaTMapBundle:Map:map.html.twig */
class __TwigTemplate_6930b39c2a0370b21eaf50fd158f4a0eb2a5f646ae2ca101ade81ac8c127d7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Map - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"map-canvas\" style=\"height: 100%;\"></div>
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "\t<script type=\"text/javascript\"
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAUvtr4Hx661hKRNB9nM4O6qZq2aAlr50k&sensor=false\">
    </script>
    <script type=\"text/javascript\">
      function CoordMapType(tileSize) {
        this.tileSize = tileSize;
      }

      CoordMapType.prototype.getTile = function(coord, zoom, ownerDocument) {
        var div = ownerDocument.createElement('div');
        div.innerHTML = coord;
        div.style.width = this.tileSize.width + 'px';
        div.style.height = this.tileSize.height + 'px';
        div.style.fontSize = '10';
        div.style.borderStyle = 'solid';
        div.style.borderWidth = '1px';
        div.style.borderColor = '#AAAAAA';
        div.style.zIndex = 99999999999999;
        if (coord == \"(261, 380)\") {
          div.style.background = \"url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/chicago.jpg"), "html", null, true);
        echo ")\";
          //div.setAttribute(\"onClick\",\"switchImg(coord);\";
        };
        if (coord == \"(263, 381)\") {
          div.style.background = \"url(";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/chicago2.jpeg"), "html", null, true);
        echo ")\";
          //div.setAttribute(\"onClick\",\"switchImg(coord);\";
        };
        if (coord == \"(266, 380)\") {
          div.style.background = \"url(";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/chicago3.jpeg"), "html", null, true);
        echo ")\";
          //div.setAttribute(\"onClick\",\"switchImg(coord);\";
        };
        return div;
      };

      function switchImg(coord){
        //var div = document.getElementById(coord);
        /*if (div.style.opacity == 1) {
          div.style.opacity = 0;
        }else{
          div.style.opacity = 1;
        };*/
        alert(\"coucou\");
      }

      function initialize() {

        var mapOptions = {
          center: new google.maps.LatLng(20, 2),
          zoom: 3,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
        };
        var map = new google.maps.Map(document.getElementById(\"map-canvas\"),
            mapOptions);
        map.overlayMapTypes.insertAt(0, new CoordMapType(new google.maps.Size(256, 256)));
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
";
    }

    public function getTemplateName()
    {
        return "PaTMapBundle:Map:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  79 => 35,  72 => 31,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
