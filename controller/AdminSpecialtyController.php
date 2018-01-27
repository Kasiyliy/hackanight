<?php
class AdminSpecialtyController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$specialties = array();
		$specialties = Specialty::getSpecialties();
		
        include_once(DIRNAME.'backend/Specialty/SpecialtyList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$specialty = Specialty::getSpecialtyByID($id);
		
		
		
		$title = false;
		
		if(isset($_POST["specialty_update"])){
		    $title = $_POST["title"];
		    
    		Specialty::updateSpecialty($specialty["id"],$title);
    		header("Location:/admin/specialties");
		}
		
		
		include_once(DIRNAME.'backend/Specialty/SpecialtyView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$title = false;
		
		if(isset($_POST["specialty_add"])){
		    $title = $_POST["title"];
    		
    		Specialty::addSpecialty($title);
    		header("Location:/admin/specialties");
		}
		
		include_once(DIRNAME.'backend/Specialty/SpecialtyAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Specialty::deleteSpecialty($id);
    	header("Location:/admin/specialties");
        return true;
    }
}
?>