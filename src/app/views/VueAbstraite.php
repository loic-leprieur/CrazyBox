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
        $this->racine = $res."/";
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
  <title>Crazy Box</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="$this->racine/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="$this->racine/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Crazy Box</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="pochette">Créer une pochette</a></li>
        <li><a href="catalogue">Catalogue</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="pochette">Créer une pochette</a></li>
        <li><a href="catalogue">Catalogue</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
END;
        return $html;

    }
    public function footer(){
        $html = <<<END
<footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="$this->racine/js/materialize.js"></script>
  <script src="$this->racine/js/init.js"></script>

  </body>
</html>
END;
        return $html;

    }
}