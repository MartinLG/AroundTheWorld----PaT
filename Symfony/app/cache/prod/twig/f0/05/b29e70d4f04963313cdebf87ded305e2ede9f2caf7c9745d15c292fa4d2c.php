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
        echo "
  <div> 
    <img id=\"chevgauche\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/prev.png"), "html", null, true);
        echo "\" onclick=\"PrevImg();\">
    <img id=\"imgHTML\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\" alt=\"HTML 5\" class=\"contentImg\"/>
    <img id=\"chevdroit\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/next.png"), "html", null, true);
        echo "\" onclick=\"NextImg();\">
  </div>
  <ul class=\"ulNumber\">
    <li id=\"li1\" onclick=\"ChangeImg(1)\" class=\"liselect\">1</li>
    <li id=\"li2\" onclick=\"ChangeImg(2)\" class=\"noselec\">2</li>
    <li id=\"li3\" onclick=\"ChangeImg(3)\" class=\"noselec\">3</li>
    <li id=\"li4\" onclick=\"ChangeImg(4)\" class=\"noselec\">4</li>
    <li id=\"li5\" onclick=\"ChangeImg(5)\" class=\"noselec\">5</li>                   
  </ul>

";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "  <script>
      var prevval = 1;

      var ChangeImg = function (num){
          var img = document.getElementById('imgHTML').setAttribute(\"src\", \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/\" + num + \".jpg"), "html", null, true);
        echo "\");
          var li = document.getElementById('li'+num).setAttribute(\"class\", \"liselect\");
          var prevli = document.getElementById('li'+prevval).setAttribute(\"class\", \"noselec\");
          prevval = num;
      };

      var interval = setInterval(function(){
          if(prevval==5){
              ChangeImg(1);
          }else{
              ChangeImg(prevval+1);
          }
      },3000);

      var PrevImg = function (){
          if(prevval==1){
              ChangeImg(5);
          }else{
              ChangeImg(prevval-1);
          }
      }

      var NextImg = function (){
          if(prevval==5){
              ChangeImg(1);
          }else{
              ChangeImg(prevval+1);
          }
      }

  </script>  
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
        return array (  70 => 24,  127 => 56,  124 => 55,  84 => 53,  77 => 48,  23 => 2,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 53,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 16,  59 => 14,  47 => 10,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 29,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 12,  21 => 2,  26 => 6,  98 => 16,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  40 => 7,  44 => 12,  35 => 12,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 49,  105 => 40,  101 => 17,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 54,  116 => 41,  112 => 48,  109 => 34,  106 => 18,  103 => 32,  99 => 31,  95 => 28,  92 => 14,  86 => 58,  82 => 22,  80 => 19,  73 => 25,  64 => 17,  60 => 15,  57 => 11,  54 => 10,  51 => 11,  48 => 13,  45 => 16,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
