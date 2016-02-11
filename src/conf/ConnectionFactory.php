<?php

namespace conf;

use Illuminate\Database\Capsule\Manager as DB;

/**
 * Classe qui permet créer une connection à une base de données avec des paramètres
 */
class ConnectionFactory {

	/**
	 * Le tableau qui contiendra les paramètres
	 */
	private static $config = array();
	/**
	 * La connection
	 */
	private static $connection = null;

	/**
	 * Fonction qui permet de modifier les paramètres de la connection
	 */
	public static function setConfig($fichier) {
		// fichier de config pour la connection
		self::$config = parse_ini_file($fichier);
	}

	/**
	 * Fonction statique qui permet de récupérer une connection à une base de données
	 */
	public static function makeConnection() {
		if (self::$connection == null) {
			// creation de la connection avec eloquent
			self::$connection = new DB();
			self::$connection->addConnection(self::$config);
			self::$connection->setAsGlobal();
			self::$connection->bootEloquent();
		}
		return self::$connection;	
	}

}