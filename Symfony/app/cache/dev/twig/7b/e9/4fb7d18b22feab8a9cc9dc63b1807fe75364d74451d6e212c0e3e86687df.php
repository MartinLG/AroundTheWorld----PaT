<?php

/* PaTMaquetteBundle:Maquette:map.html.twig */
class __TwigTemplate_7be94fb7d18b22feab8a9cc9dc63b1807fe75364d74451d6e212c0e3e86687df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PaTMaquetteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'PaT_body' => array($this, 'block_PaT_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PaTMaquetteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_PaT_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div id=\"map-canvas\"></div>
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
";
    }

    public function getTemplateName()
    {
        return "PaTMaquetteBundle:Maquette:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
