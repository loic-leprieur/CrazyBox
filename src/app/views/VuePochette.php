<?php
/**
 * Created by PhpStorm.
 * User: froogy444
 * Date: 11/02/16
 * Time: 11:17
 */

namespace app\views;


use app\views\VueAbstraite;
use app\vue\VueCatalogue;

class VuePochette extends VueAbstraite
{

    public function __construct(){
        parent::__construct();
    }

    public function render(){


        echo ' <div class="row">
                        <form class="col s12" method="POST" action="index.php">
                            <div class="row">

                                <div class="input-field col s6">
                                    <i class="material-icons prefix">Nom du destinataire</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Nom du destinataire</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="material-icons prefix">Message</i>
                                    <input id="icon_telephone" type="tel" class="validate">
                                    <label for="icon_prefix2">Message</label>
                                </div>
                            </div>';


        //$catalogue = new VueCatalogue();
        //echo $catalogue->render();

        echo '    <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                  <label for="filled-in-box">Pochette secrète</label>

                  <div class="file-field input-field">
                    <div class="btn">
                        <button name="validerPochette" value="valPoch">Valider</button>
                    </div>
                  </div>';

    }







}