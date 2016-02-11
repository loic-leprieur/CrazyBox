<?php
/**
 * Created by PhpStorm.
 * User: froogy444
 * Date: 11/02/16
 * Time: 11:17
 */

namespace app\views;


use app\models\Prestation;
use app\views\VueAbstraite;

class VuePochetteCreee extends VueAbstraite
{

    public function __construct($params){
        parent::__construct($params);
    }

    public function render(){
    	$host = $_SERVER['HTTP_HOST'];
    	$url = $this->params['id_url'];
    	$html = <<<END
    	<div class="row">
    		<div class="col s12">
    			<p class="center-align pink-text text-darken-3">
    				Votre pochette surprise a bien été créée.<br>
    				Vous pouvez y accéder en cliquant sur ce lien :
    			</p>
    			<br>
    			<h4 class="center-align"><a href="$this->racine/cagnotte/$url" class="orange-text text-darken-4">$host$this->racine/cagnotte/$url</a></h4>
    			
    		</div>    	
    	</div>
END;
    	
    	return $html;
    }







}