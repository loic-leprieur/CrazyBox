<?php
/**
 * Created by PhpStorm.
 * User: Loic
 * Date: 18/01/2016
 * Time: 22:44
 */

namespace app\views;


class VueAccueil extends VueAbstraite{

    public function __construct(){
		parent::__construct();
    }

	//stay_current_portrait telephone portable
	// redeem cadeau
	// list choix varie
	// thumb_up pouce vert  credit_card
	/* Facilite d'utilisation, financement collaboratif, variete du choix, faire plaisir Ã  vos amis, */
    public function render($content = null){
        $html = <<<END
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text text-darken-1"><i class="material-icons">redeem</i></h2>
            <h5 class="center">Concevez une pochette surprise</h5>

            <p class="light">Vous avez envie de faire une surprise originale Ã  vos proches ? Vous manquez d'idÃ©es ou de temps ? Laissez-vous tenter par notre CrazyBox et offrez un cadeau peu banal.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text text-darken-1"><i class="material-icons">shopping_basket</i></h2>
            <h5 class="center">Choisissez vos prestations</h5>

            <p class="light">Naviguez dans notre catalogue et confectionnez votre pochette surprise avec de nombreuses prestations. RÃ©unissez ses activitÃ©s prÃ©fÃ©rÃ©es en un seul cadeau unique. Il y en a pour tous les goÃ»ts !</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text text-darken-1"><i class="material-icons">credit_card</i></h2>
            <h5 class="center">Partagez les coÃ»ts</h5><br>

            <p class="light ">Une fois votre pochette crÃ©Ã©e, financez-la facilement sur notre plateforme. Avec un simple lien, vos amis pourront remplir la cagnotte. Nous nous occupons du reste afin de vous planifier le dÃ©roulement des activitÃ©s.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 orange-text">Partagez un moment convivial</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="$this->racine/images/restaurant.jpg" width=1000 alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s6 offset-s3 center">
          <h3><i class="material-icons medium orange-text text-darken-1 ">stay_current_portrait</i></h3>
          <h4>La CrazyBox vous suit partout</h4>
          <p class="center-align light">Suivez le dÃ©roulement des prestations sur votre mobile. A chaque fois que vous finissez une activitÃ©,
		  consultez votre pochette pour dÃ©couvrir la suite de votre cadeau.</p>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">

    <div class="section no-pad-bot">

      <div class="container">
        <div class="row center">

             <a href="$this->racine/index.php/pochette" id="download-button" class="btn-large waves-effect waves-light orange text-darken-1">CrÃ©ez votre CrazyBox</a>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="$this->racine/images/asupr2.jpg" alt="Unsplashed background img 3"></div>
  </div>
END;
        echo $html;
    }
}