<?php

/* PaTEarthBundle:Earth:earth.html.twig */
class __TwigTemplate_3bb44a0e67b5f1a594144814331ad5bd4b5da9f26aba6ffc42757e5333c258a5 extends Twig_Template
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
        echo "  Earth - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div id=\"map3d\" style=\"height: 100%; margin=0px; padding=0px;\"></div>
";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "
\t<script type=\"text/javascript\">ChangeNavSel('navEarth');</script>

\t<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script>
var ge;

google.load(\"earth\", \"1\", {\"other_params\":\"sensor=false\"});4

function init() {
  google.earth.createInstance('map3d', initCB, failureCB);
}

function initCB(instance) {
   ge = instance;
   ge.getWindow().setVisibility(true);
}

function failureCB(errorCode) {
}

google.setOnLoadCallback(init);
    </script>

";
    }

    public function getTemplateName()
    {
        return "PaTEarthBundle:Earth:earth.html.twig";
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
