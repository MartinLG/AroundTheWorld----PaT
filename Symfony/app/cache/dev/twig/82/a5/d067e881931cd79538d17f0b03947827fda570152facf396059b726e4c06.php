<?php

/* PaTMaquetteBundle:Maquette:contact.html.twig */
class __TwigTemplate_82a5d067e881931cd79538d17f0b03947827fda570152facf396059b726e4c06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PaTMaquetteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'PaT_body' => array($this, 'block_PaT_body'),
            'javascripts_page' => array($this, 'block_javascripts_page'),
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
        echo "  About - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_PaT_body($context, array $blocks = array())
    {
        // line 8
        echo "<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">



      <div class=\"row featurette\">
        <div class=\"col-md-7\">
          <h2 class=\"featurette-heading\">Qui sommes nous ? <span class=\"text-muted\">Just students =).</span></h2>
          <p class=\"lead\">Quatres étudiants d'Ingésup Bordeaux qui se lancent dans un projet simple et fou ! Un réseau social autour du voyage. Nous venons tous d'univers différents avec un point commun : la passion de l'informatique. <br>Martin Le Guillou, Adrien Marty, Aurélien Colombier et Julien Sigot sont heureux de partager avec vous l'experience Around The World.</p>
        </div>
        <div class=\"col-md-5\">
          <img class=\"featurette-image img-responsive\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/System/ingesup.png"), "html", null, true);
        echo "\" alt=\"Around the World\">
        </div>
      </div>

      <hr class=\"featurette-divider\">

      <div class=\"row featurette\">
        <div class=\"col-md-5\">
          <img class=\"featurette-image img-responsive\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/System/vacation-logo.jpg"), "html", null, true);
        echo "\" alt=\"Discover on web, travel in life =)\">
        </div>
        <div class=\"col-md-7\">
          <h2 class=\"featurette-heading\">Le projet ? <span class=\"text-muted\">Share yourself.</span></h2>
          <p class=\"lead\">Après certains voyages dans des pays improbables, nous nous sommes rendu compte que les informations ne sont pas centralisées sur internet. Effectivement, peu de sites diffusent de l'info sur toutes les destinations du monde, et ce qui le font sont contrôlés par le monde professionnel et les lobbies du tourisme. Ainsi naquis notre projet ! Un site de partage de voyage communautaire ! Par les routards, pour les routards.<br>Nous avons divers projets sur la table : meilleur intégration de Maps, portage sur smartphone...</p>
        </div>
      </div>

      <hr class=\"featurette-divider\">

      <div class=\"row featurette\">
        <div class=\"col-md-7\">
          <h2 class=\"featurette-heading\">Ecris nous ! <span class=\"text-muted\">We are cool =).</span></h2>
          <p class=\"lead\">Tu peux nous écrire pour partager ton experience, faire un retour sur le site, ou pour quelconque autre question, nous répondrons au plus vite !</p>
          <ul class=\"contact-fields\">
          \t<li>eMail : contact@aroundtheworld.com</li>
          \t<br>
          \t<li>Adress : <ul><li>154 Patata Street, </li><li>55632 PatataCity,</li><li>PatataLand</li></ul></li>
          </ul>
        </div>
        <div class=\"col-md-5\">
          <img class=\"featurette-image img-responsive\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/System/contact.jpg"), "html", null, true);
        echo "\" alt=\"Contact us !\">
        </div>
      </div>

      <hr class=\"featurette-divider\">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
        <p>&copy; 2013 Around the World, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
      </footer>

    </div><!-- /.container -->

";
    }

    // line 70
    public function block_javascripts_page($context, array $blocks = array())
    {
        // line 71
        echo "\t<!--<script type=\"text/javascript\">ChangeNavSel('navAbout');</script>-->
";
    }

    public function getTemplateName()
    {
        return "PaTMaquetteBundle:Maquette:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 71,  116 => 70,  94 => 51,  70 => 30,  59 => 22,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
