<?php
class MainController{
	public function actionIndex(){
		include_once(DIRNAME.'view/main.php');
		return true;
	}

}
?>