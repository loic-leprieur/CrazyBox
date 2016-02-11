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

    public function __construct(){
        parent::__construct();
    }

    public function render(){
    	$html .= <<<END
    	<div class="row">
    		<div class="col s12">
    			<p>
    				Votre pochette surprise a bien été créée.<br>
    				Vous pouvez y accéder en cliquant sur ce lien :
    			</p>
    			
    		</div>
    	
    	</div>
END;
    }







}