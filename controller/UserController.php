<?php
class UserController{
	public function actionLogin(){

		$login = false;
		$password = false;

		if(isset($_POST["login"])){
			$login = $_POST["login"];
			$password = $_POST["password"];

			

		}

		include_once(DIRNAME."view/login.php");
		return true;
	}
}
?>