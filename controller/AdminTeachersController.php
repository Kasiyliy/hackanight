<?php
class AdminTeachersController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$teachers = array();
		$teachers = Teacher::getTeachers();
		
        include_once(DIRNAME.'backend/Teacher/TeachersList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$teacher = Teacher::getTeacherByID($id);
		
		$ranks = array();
		$ranks = Rank::getRanks();
		
		
		$name = false;
		$surname = false;
		$rank_id = false;
		
		if(isset($_POST["teacher_update"])){
		    $name = $_POST["name"];
    		$surname = $_POST["surname"];
    		$rank_id = $_POST["rank_id"];
    		
    		Teacher::updateTeacher($teacher["id"],$name, $surname, $rank_id );
    		header("Location:/admin/teachers");
		}
		
		include_once(DIRNAME.'backend/Teacher/TeachersView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$ranks = array();
		$ranks = Rank::getRanks();
		
		$name = false;
		$surname = false;
		$rank_id = false;
		
		if(isset($_POST["teacher_add"])){
		    $name = $_POST["name"];
    		$surname = $_POST["surname"];
    		$rank_id = $_POST["rank_id"];
    		
    		Teacher::addTeacher($name, $surname, $rank_id );
    		header("Location:/admin/teachers");
		}
		
		
		include_once(DIRNAME.'backend/Teacher/TeachersAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Teacher::deleteTeacher($id);
		header("Location:/admin/teachers");		
        return true;
    }
}
?>