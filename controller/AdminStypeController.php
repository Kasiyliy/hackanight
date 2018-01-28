<?php
class AdminStypeController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$stypes = array();
		$stypes = SubjectType::getSubjectTypes();
		
        include_once(DIRNAME.'backend/Stype/StypeList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$stype = SubjectType::getSubjectTypeByID($id);
		
		$subjects = array();
		$subjects = Subject::getSubjects();
		
		$teachers = array();
		$teachers = Teacher::getTeachers();
		
		$title = false;
		$subject_id = false;
		$teacher_id = false;
		
		if(isset($_POST["stype_update"])){
		    $title = $_POST["title"];
		    $subject_id = $_POST["subject_id"];
		    $teacher_id = $_POST["teacher_id"];
		    
    		SubjectType::updateSubjectType($stype["id"],$title, $subject_id,$teacher_id);
    		header("Location:/admin/stypes");
		}
		
		
		include_once(DIRNAME.'backend/Stype/StypeView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$subjects = array();
		$subjects = Subject::getSubjects();
		
		
		$teachers = array();
		$teachers = Teacher::getTeachers();
		
		$title = false;
		$subject_id = false;
		$teacher_id = false;
		
		if(isset($_POST["stype_add"])){
		    $title = $_POST["title"];
		    $subject_id = $_POST["subject_id"];
		    $teacher_id = $_POST["teacher_id"];
    		
    		SubjectType::addSubjectType($title , $subject_id,$teacher_id);
    		header("Location:/admin/stypes");
		}
		
		include_once(DIRNAME.'backend/Stype/StypeAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		SubjectType::deleteSubjectType($id);
    	header("Location:/admin/stypes");
        return true;
    }
}
?>