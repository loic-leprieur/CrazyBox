<?php
/**
 * Created by PhpStorm.
 * User: froogy444
 * Date: 11/02/16
 * Time: 11:17
 */

namespace src\app\views;


use app\views\VueGenerale;

class VuePochette extends VueGenerale
{



    function render(){


        $html = ' <div class="row">
                        <div class="col s12">Création d\'une pochette</div>
                        <div class="col s6">Nom du destinataire : </div>
                        <div class="col s6"><input type="text" name="nomdest"/></div>
                        <div class="col s6">Dites lui quelques mots... : </div>
                        <div class="col s6"><input type="text" id="champMess" name="messagedest"/></div>
                        <div class="col s6">Dites lui quelques mots... : </div>
                        <div class="col s6"><input type="text" name="messagedest"/></div>















        ';




    }



}