<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CagnotteModel qui représente le modèle de la table "cagnotte" de la base de données
 * @package app\models
 */
class Cagnotte extends Model {

    /**
     * Table cagnotte de la base de données
     * @var string Nom de la table cagnotte
     */
    protected $table = 'cagnotte';

    /**
     * Clé primaire dans la table cagnotte
     * @var string Clé primaire de la table cagnotte
     */
    protected $primaryKey = 'idPochette';

    public $timestamps = false;
}
