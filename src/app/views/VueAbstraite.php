<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 10/02/16
 * Time: 21:58
 */

namespace app\views;
use app\views\VueAccueil;
use app\views\VueGenerale;

/**
 * Class VueAbstraite qui donne la structure
 * des vues gérant le html
 * @package app\views
 */
abstract class VueAbstraite{

    protected $params;
    protected $racine;

    public function __construct($p = null){
        $this->params = $p;
		$tab = explode("/",$_SERVER['SCRIPT_NAME']);
		$tab[count($tab)-1] = null;
		$res = "";
		foreach($tab as $v) {
			if($v != null)
			$res .= "/".$v;
		}
        $this->racine = $res;
    }

    public function renderBody(){
        echo $this->header();
        echo $this->render();
        echo $this->footer();
    }

    public abstract function render();

    public function header(){
        $html = <<<END
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <link rel="shortcut icon" href="$this->racine/images/favicon.ico" type="images/x-icon">
  <title>CrazyBox</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="$this->racine/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="$this->racine/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="$this->racine/" class="brand-logo">CrazyBox</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="$this->racine/">Accueil</a></li>
        <li><a href="$this->racine/index.php/pochette">Créer une pochette</a></li>
        <li><a href="$this->racine/index.php/catalogue">Catalogue</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="$this->racine/index.php/pochette">Créer une pochette</a></li>
        <li><a href="$this->racine/index.php/catalogue">Catalogue</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center red-text text-darken-4 ">CrazyBox</h1>

        <div class="row center">
          <h4 class="header col s12 pink-text text-lighten-1">Concevez, financez et partagez une expérience originale</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="$this->racine/images/roseEspoir.jpg"></div>
  </div>
END;
        return $html;

    }
    public function footer(){
        $html = <<<END
<footer class="page-footer display=flex pink darken-2">
    <div class="container">
      <div class="row ">
        <div class="col l6 s12">
          <h5 class="white-text">Qui sommes nous ?</h5>
          <p class="grey-text text-lighten-4">Créée le 11/02/2016, CrazyBox est une start-up de développeurs passionnés qui souhaitent
          apporter une solution pratique de cadeaux pour organiser des évènements réussis.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Navigation</h5>
          <ul>
            <li><a class="white-text" href="$this->racine/">Accueil</a></li>
            <li><a class="white-text" href="$this->racine/index.php/pochette">Créer une pochette</a></li>
            <li><a class="white-text" href="$this->racine/index.php/catalogue">Catalogue</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contact</h5>
          <ul>
            <li><p class="white-text">Téléphone : 03-83-40-31-68</p></li>
            <li><p class="white-text">Adresse : CrazyBox S.A.S.<br>241 Avenue Foch<br>54000 NANCY</p></li>
          </ul>
        </div>
      </div>
      <div class="col l3 s6 pink darken-3 center">
         <p class="white-text">© Copyright - CrazyBox SAS 2016</p>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="$this->racine/js/materialize.js"></script>
  <script src="$this->racine/js/init.js"></script>
  <script src="$this->racine/js/catalogue.js"></script>
  <script type="text/javascript" src="$this->racine/js/cagnotte.js">
  </body>
</html>
END;
        return $html;

    }
}