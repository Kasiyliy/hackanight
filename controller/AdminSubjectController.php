<?php
class AdminSubjectController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$subjects = array();
		$subjects = Subject::getSubjects();
		
        include_once(DIRNAME.'backend/Subject/SubjectList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$subject = Subject::getSubjectByID($id);
		
		
		
		$title = false;
		$credit = false;
		$time = false;
		
		if(isset($_POST["subject_update"])){
		    $title = $_POST["title"];
    		$credit = $_POST["credit"];
    		$time = $_POST["time"];
    		
    		Subject::updateSubject($subject["id"],$title, $credit, $time);
    		header("Location:/admin/subjects");
		}
		
		include_once(DIRNAME.'backend/Subject/SubjectView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$title = false;
		$credit = false;
		$time = false;
		
		if(isset($_POST["subject_add"])){
		    $title = $_POST["title"];
    		$credit = $_POST["credit"];
    		$time = $_POST["time"];
    		
    		Subject::addSubject($title, $credit, $time);
    		header("Location:/admin/subjects");
		}
		
		include_once(DIRNAME.'backend/Subject/SubjectAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Subject::deleteSubject($id);
		header("Location:/admin/subjects");		
        return true;
    }
}
?>