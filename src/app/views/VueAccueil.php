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
	/* Facilite d'utilisation, financement collaboratif, variete du choix, faire plaisir à vos amis, */
    public function render($content = null){
        $html = <<<END
		<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center red-text text-darken-4 ">Crazy Box</h1>
		
        <div class="row center">
          <h4 class="header col s12 pink-text text-lighten-1">Concevez, financez et partagez une expérience originale</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="$this->racine/images/roseEspoir.jpg"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text text-darken-1"><i class="material-icons">redeem</i></h2>
            <h5 class="center">Concevez une pochette surprise</h5>

            <p class="light">Vous avez envie de faire une surprise originale à vos proches ? Vous manquez d'idée ou de temps ? Laissez-vous tenter par notre CrazyBox et offrez un cadeau peu banal.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text text-darken-1"><i class="material-icons">shopping_basket</i></h2>
            <h5 class="center">Choisissez vos prestations</h5>

            <p class="light">Naviguez dans notre catalogue, et confectionnez votre pochette surprise avec plusieurs prestations. Réunissez ses activités préférés en un seul cadeau avec ce qui lui correspondra le mieux. Il y en a pour tous les goûts: Culturel, Cinéphile, Gastronôme.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center orange-text text-darken-1"><i class="material-icons">credit_card</i></h2>
            <h5 class="center">Partagez les coûts</h5><br>

            <p class="light ">Une fois votre projet crée, financez le facilement sur notre plateforme. Avec un simple lien, vos amis pourront remplir la cagnotte. Nous nous occupons du reste afin de vous planifier le déroulement des activités.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 orange-text">Imaginez le meilleur // Partagez un moment convivial</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="$this->racine/images/banniereResto.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s6 offset-s3 center">
          <h3><i class="material-icons medium orange-text text-darken-1 ">stay_current_portrait</i></h3>
          <h4>La CrazyBox vous suit partout</h4>
          <p class="center-align light">Suivez le déroulement des prestations sur votre mobile. A chaque fois que vous finissez une activités
		  consultez votre pochette pour découvrir la suite de votre cadeau.</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light light-green lighten-1">Creez votre CrazyBox</a>
        </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="$this->racine/images/asupr2.jpg" alt="Unsplashed background img 3"></div>
  </div>
  
  
END;
        echo $html;
    }
}