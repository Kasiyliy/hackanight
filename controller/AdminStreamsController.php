<?php
class AdminStreamsController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$streams = array();
		$streams = Stream::getStreams();
		
        include_once(DIRNAME.'backend/Stream/StreamsList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$stream = Stream::getStreamByID($id);
		
		$courses = array();
		$courses = Course::getCourses();
		
		
		$title = false;
		$course_id = false;
		
		if(isset($_POST["stream_update"])){
		    $title = $_POST["title"];
    		$course_id = $_POST["course_id"];
    		
    		Stream::updateStream($stream["id"],$title, $course_id );
    		header("Location:/admin/streams");
		}
		
		include_once(DIRNAME.'backend/Stream/StreamsView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$courses = array();
		$courses = Course::getCourses();
		
		$title = false;
		$course_id = false;
		
		if(isset($_POST["stream_add"])){
		    $title = $_POST["title"];
    		$course_id = $_POST["course_id"];
    		
    		Stream::addStream($title,$course_id );
    		header("Location:/admin/streams");
		}
		
		
		include_once(DIRNAME.'backend/Stream/StreamsAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Stream::deleteStream($id);
		header("Location:/admin/streams");		
        return true;
    }
}
?>