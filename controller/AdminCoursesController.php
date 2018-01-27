<?php
class AdminCoursesController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$courses = array();
		$courses = Course::getCourses();
		
        include_once(DIRNAME.'backend/CoursesList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		include_once(DIRNAME.'backend/CoursesView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		include_once(DIRNAME.'backend/CoursesAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
        return true;
    }
}
?>