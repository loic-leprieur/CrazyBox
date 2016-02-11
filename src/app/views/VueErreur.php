<?php

namespace app\views;

class VueErreur extends VueAbstraite {

    public function __construct($params = null){
		parent::__construct($params);
    }

    public function render(){
        $html = <<<END
    <br>
    <div class="center" ><img src="$this->racine/images/triste.png" width="15%" alt="Visage triste"></div>
    <h5 class="red-text text-accent-4 center-align">Le nombre de prestations sélectionnées est trop faible.</h5>
    <h5 class="red-text text-accent-4 center-align">3 prestations sont nécessaires pour créer une pochette surprise.</h5>
    <br>
    <h4 class="pink-text text-darken-3 center-align">Vous pouvez tenter à nouveau de créer une pochette surprise en cliquant <a href="$this->racine/index.php/pochette" class="orange-text text-darken-4">ICI</a>.</h4>
   	<br>
END;
        
        return $html;
    }
}