<?php

/* _header.twig */
class __TwigTemplate_86e42ef2759d91bcd8f7dfb78bdf466d3f68dce1992c10cac58f64801829a992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
<title>LuckyLookers | AntiquesUK</title>
<meta charset=\"utf-8\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/styles.css\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/overwrite.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/extstyles.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mediaQueries.css\">
<link rel=\"stylesheet\" href=\"../css/font-awesome.min.css\">
<script type=\"text/javascript\" src=\"../js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"../js/urls.js\"></script>
<script type=\"text/javascript\" src=\"../js/registration.js\"></script>
<script type=\"text/javascript\" src=\"../js/customJS.js\"></script>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" type=\"image/png\" href=\"../assets/ico.ico\">
</head>
<body>
<!-- HEADER WRAPPER -->
<div class=\"eighty\"><!-- GIVES A WIDTH OF 80% -->
   <div id=\"theLogo\"><!-- THE LOGO -->
      <div id=\"left\"><!-- LEFT SIDE OF LOGO -->
         <div></div>
      </div>
      <div id=\"right\"><!-- RIGHT SIDE OF LOGO-->
        <!-- <div>
            <form>
               <input id=\"searchBar\" type=\"text\" name=\"searchIt\">
               <input id=\"submitIt\" type=\"submit\" value=\"Search\">
            </form>
         </div>
         -->
      </div>
   </div>
</div>
<!-- NAVIGATION LINKS -->
<div id=\"navOuterWrap\">
   <div id=\"navWrapper\">
      <span class=\"handle\"><i class=\"fa fa-list fa-2x\"></i></span><!-- MOBILE NAVIGATION BUTTON -->
      <nav id=\"theNav\">
         <ul id=\"mainNav\">

           <li><a href=\"/index.php\">Home</a></li>
          <li><a href=\"/registration.php\">Register</a></li>
          <li><a href=\"/about.php\">How It Works</a></li>
          <li><a href=\"/magazine/\">Magazine</a></li>

         </ul>
      </nav>
   </div>
</div>
<br class=\"clearIt\">
<div id=\"emptySpaceOutside\"></div>
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
