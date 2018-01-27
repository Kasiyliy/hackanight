<?php
class AdminCoursesController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$courses = array();
		$courses = Course::getCourses();
		
        include_once(DIRNAME.'backend/Course/CoursesList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$course = Course::getCourseByID($id);
	
		$specialties = array();
		$specialties = Specialty::getSpecialties();
		
		
		$title = false;
		$specialty_id = false;
		
		if(isset($_POST["course_update"])){
		    $title = $_POST["title"];
    		$specialty_id = $_POST["specialty_id"];
    		
    		Course::updateCourse($course["id"],$title, $specialty_id );
    		header("Location:/admin/courses");
		}
		
		include_once(DIRNAME.'backend/Course/CoursesView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$specialty = array();
		$specialty = Specialty::getSpecialties();
		
		$title = false;
		$specialty_id = false;
		
		if(isset($_POST["course_add"])){
		    $title = $_POST["title"];
    		$specialty_id = $_POST["specialty_id"];
    		
    		Course::addCourse($title,$specialty_id );
    		header("Location:/admin/courses");
		}
		
		
		include_once(DIRNAME.'backend/Course/CoursesAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Course::deleteCourse($id);
		header("Location:/admin/courses");		
        return true;
    }
}
?>