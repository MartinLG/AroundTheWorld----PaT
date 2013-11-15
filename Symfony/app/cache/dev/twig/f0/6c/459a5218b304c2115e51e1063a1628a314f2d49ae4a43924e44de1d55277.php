<?php

/* PaTMaquetteBundle::layout.html.twig */
class __TwigTemplate_f06c459a5218b304c2115e51e1063a1628a314f2d49ae4a43924e44de1d55277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'PaT_body' => array($this, 'block_PaT_body'),
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
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 10
        echo "  <h1 class=\"Thewelcome\">Welcome in the world :)</h1>

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('PaT_body', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 15
    public function block_PaT_body($context, array $blocks = array())
    {
        // line 16
        echo "  ";
    }

    public function getTemplateName()
    {
        return "PaTMaquetteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  60 => 15,  52 => 15,  46 => 10,  79 => 29,  73 => 25,  70 => 24,  55 => 17,  51 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
