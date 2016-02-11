<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PochetteModel qui représente le modèle de la table "pochette" de la base de données
 * @package app\models
 */
class Pochette extends Model {

    /**
     * Table pochette de la base de données
     * @var string Nom de la table pochette
     */
    protected $table = 'pochette';

    /**
     * Clé primaire dans la table pochette
     * @var string Clé primaire de la table pochette
     */
    protected $primaryKey = 'id';

    public $timestamps = false;
}
