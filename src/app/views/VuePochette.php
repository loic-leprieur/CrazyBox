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
use app\views\VueCatalogue;

class VuePochette extends VueAbstraite
{

    public function __construct(){
        parent::__construct();
    }

    public function render(){


        echo '      <br><br>
                    <h3 class="orange-text text-darken-4 center-align">Informations</h3>
                    <div class="row">
                        <form class="col s12" method="POST" action="pochette">
                            <div class="row">
                                <div class="input-field col s6 offset-s3">
                                    <i class="material-icons prefix">Nom du destinataire</i>
                                    <input id="icon_prefix" name="nomdest" type="text" class="validate">
                                    <label for="icon_prefix">Nom du destinataire</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6 offset-s3">
                                    <i class="material-icons prefix">Message</i>
                                    <textarea id="icon_prefix2" name="messagedest" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Message</label>
                                </div>
                            </div>';


        $catalogue = new VueCatalogue(Prestation::all()->toArray());
        echo $catalogue->render();

        echo '    <br><br><br>
                  <div class="row center-align">
                    <div class="input-field">
                        <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" style="padding: 0;"/>
                        <label for="filled-in-box">Pochette Secrète</label>
                    </div>
                    <br>
                    <div class="input-field">
                        <button class="btn waves-effect waves-light" type="submit" name="valider">Valider
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                  </div>
                </div>';

    }







}