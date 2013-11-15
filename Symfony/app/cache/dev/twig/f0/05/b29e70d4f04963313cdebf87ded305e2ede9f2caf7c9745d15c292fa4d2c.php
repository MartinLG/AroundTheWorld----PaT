<?php

/* PaTMaquetteBundle:Maquette:index.html.twig */
class __TwigTemplate_f005b29e70d4f04963313cdebf87ded305e2ede9f2caf7c9745d15c292fa4d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PaTMaquetteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'PaT_body' => array($this, 'block_PaT_body'),
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
        echo "
  <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
      <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
      <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
      <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sanfrancisco.jpg"), "html", null, true);
        echo "\" alt=\"First Travel\">
        <div class=\"carousel-caption\">
          <h3>San Francisco - USA</h3>
          <p>Jordi Fernandez nous fait découvrire son voyage aux USA comme personne auparavant. Entrez dans le monde de l'homosexualité comme si vous y étiez.</p>
        </div>
      </div>
      <div class=\"item\">
        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/inde.jpg"), "html", null, true);
        echo "\" alt=\"Second Travel\">
        <div class=\"carousel-caption\">
          <h3>India</h3>
          <p>Adrien Marty partage son voyage en Inde, où il a redécouvert sa spiritualité. Voyagez dans votre subconscient, l'opium y est présent.</p>
        </div>
      </div>
      <div class=\"item\">
        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/japon.jpeg"), "html", null, true);
        echo "\" alt=\"Third Travel\">
        <div class=\"carousel-caption\">
          <h3>Japan</h3>
          <p>Julien Sigot nous emmène aux portes de la radioactivité. Fukushima tel que vous ne l'avez jamais vu. Il a aujourd'hui trois bras.</p>
        </div>
      </div>
      <div class=\"item\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pologne.jpg"), "html", null, true);
        echo "\" alt=\"Fourth Travel\">
        <div class=\"carousel-caption\">
          <h3>Poland</h3>
          <p>Martin Le Guillou vous invite dans son royaume de femmes et de fêtes. Découvrez la culture Polonaise, de l'interieur.</p>
        </div>
      </div>
      <div class=\"item\">
        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/berlin.jpg"), "html", null, true);
        echo "\" alt=\"Fifth Travel\">
        <div class=\"carousel-caption\">
          <h3>Berlin</h3>
          <p>Quand Aurélien Colombier mixe, Berlin s'endort. Mixer a 8h30 tous les matin dans une petite boite est une experience a ne pas rater.</p>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#Carousel\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\"></span>
    </a>
    <a class=\"right carousel-control\" href=\"#Carousel\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\"></span>
    </a>
  </div>

";
    }

    public function getTemplateName()
    {
        return "PaTMaquetteBundle:Maquette:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 50,  88 => 43,  78 => 36,  68 => 29,  58 => 22,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
