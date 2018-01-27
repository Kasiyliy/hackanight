<?php
class UserController{
	public function actionLogin(){
		/*if(isset($_SESSION["admin"])){
			header("Location:/admin");
		}
*/
		$email = false;
		$psas  = false;

		if(isset($_POST["login"])){
			$email = $_POST["username"];
			$pass = $_POST["password"];

			$errors = false;

			if(!Admin::checkEmail($email)){
				$errors[] = "Введите корректный Email";
			}
			if(!Admin::checkPassword($pass)){
				$errors[] = "Введите пароль больше 8 символов";
			}

			$userID = Admin::checkAdminData($email,$pass);

			if(!$userID){
				$errors[] = "Неправильный Email и (или) пароль";
			}
			else{
				if(!$errors){
					Admin::auth($userID);
					header("Location:/admin");
				}
			}
		}

		include_once(DIRNAME."view/login.php");
		return true;
	}
	public function actionLogout(){
		if(!isset($_SESSION["admin"])){
			header("Location:/admin");
		}
		unset($_SESSION["admin"]);
		header("Location:/");
		return true;
	}
}
?>