<?php
/**
 * Created by PhpStorm.
 * User: Bertrand
 * Date: 11/02/2016
 * Time: 18:11
 */

namespace app\views;


use app\models\Pochette;

class VueCagnotte extends VueAbstraite
{

    public function __construct($params){
        parent::__construct($params);
    }

    public function render(){

        $nomdest = Pochette::find($this->params[0]['idPochette'])['nom'];


        $vue = new VueCatalogue();
        //$vue =

        $html = <<<END
    	<br><br><br>
        <div class="row">
    		<div class="col s12">
    		    <h2 class="center-align pink-text text-darken-3">
    				Bienvenue !
    			</h2>
    			<br>
    			<div class="card-panel lighten-2 center-align">
    			    <h5 class="orange-text text-darken-4">Vous souhaitez participer à cette cagnotte pour $nomdest ?</h5>

    			    <div class="row">

    			    </div>
    			</div>
    		</div>
    	</div>

    	<br><br><br>
END;

        return $html;

    }

}