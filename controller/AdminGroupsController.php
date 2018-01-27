<?php
class AdminGroupsController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
	    $groups = array();
		$groups = Group::getGroups();
		
        include_once(DIRNAME.'backend/Group/GroupsList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$group = Group::getGroupByID($id);
		
		$streams = array();
		$streams = Stream::getStreams();
		
		$title = false;
		$stream_id = false;
		
		if(isset($_POST["group_update"])){
		    $title = $_POST["title"];
		    $stream_id = $_POST["stream_id"];
		    
    		Group::updateGroup($group["id"],$title,$stream_id);
    		header("Location:/admin/groups");
		}
		
		
		include_once(DIRNAME.'backend/Group/GroupsView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		
		$streams = array();
		$streams = Stream::getStreams();
		
		$title = false;
		$stream_id = false;
		
		if(isset($_POST["group_add"])){
		    $title = $_POST["title"];
		    $stream_id = $_POST["stream_id"];
    		
    		Group::addGroup($title,$stream_id);
    		header("Location:/admin/groups");
		}
		
		include_once(DIRNAME.'backend/Group/GroupsAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Group::deleteGroup($id);
    	header("Location:/admin/groups");
        return true;
    }
}
?>