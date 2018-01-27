<?php
class DB{
	public static function getConnection(){
		$parameters = include(DIRNAME.'config/db_pamaters.php');

		$fp = "mysql:host={$parameters['host']};dbname={$parameters['dbname']}";
		$db = new PDO($fp,$parameters["user"],$parameters["pass"]);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		return $db;
	}
}
?>