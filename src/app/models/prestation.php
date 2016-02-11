<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class prestation qui représente le modèle de la table prestation de la base de données
 * @package app\models
 */
class prestation extends Model {

    /**
     * Table prestation de la base de données
     * @var string Nom de la table prestation
     */
    protected $table = 'prestation';

    /**
     * Clé primaire dans la table prestation
     * @var string Clé primaire de la table prestation
     */
    protected $primaryKey = 'id';

    public $timestamps = false;
}
