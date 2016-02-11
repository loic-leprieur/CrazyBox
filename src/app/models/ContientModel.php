<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContientModel qui représente le modèle de la table "contient" de la base de données
 * @package app\models
 */
class ContientModel extends Model {

    /**
     * Table contient de la base de données
     * @var string Nom de la table contient
     */
    protected $table = 'contient';

    /**
     * Clé primaire dans la table contient
     * @var string Clé primaire de la table contient
     */
    protected $primaryKey = array('idPochette', 'idPrestation');

    public $timestamps = false;
}
