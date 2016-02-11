<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 11/02/16
 * Time: 10:30
 */

namespace app\views;


class VueGenerale{
    public function __construct(){
    }


    public function header(){
        $html = <<<END
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Pochette surprise</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/dut_s4_ccd16_cglmlh/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/dut_s4_ccd16_cglmlh/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
END;
        echo $html;
    }

    public function footer($content = null){
        $html = <<<END
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like its our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


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
  <script src="/dut_s4_ccd16_cglmlh/js/materialize.js"></script>
  <script src="/dut_s4_ccd16_cglmlh/js/init.js"></script>

  </body>
</html>;
END;
        echo $html;

    }

    public function render($content){
        $html = <<<END
<body>
$content
END;
    }
}