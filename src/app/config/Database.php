<?php

namespace app\config;

use PDO;

class Database {

	private $host = "localhost";
	private $db = "mdata";
	private $user = "root";
	private $pass = "";
	private static $instance;

	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			try {
				self::$instance = new PDO(
					'mysql:dbname=self::$db;host=self::$host', self::$user, self::$pass
				);

				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			} catch (\PDOException $e) {
				$e->getMessage();
			}
		}
		return self::$instance;
	}

	public static function prepare($sql) 
	{
		return self::getInstance()->prepare($sql);
	}

	public function query($sql) 
	{
        return self::getInstance()->query($sql);
    }

}