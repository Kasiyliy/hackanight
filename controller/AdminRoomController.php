<?php
class AdminRoomController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$rooms = array();
		$rooms = Room::getRooms();
		
        include_once(DIRNAME.'backend/Room/RoomList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$room = Room::getRoomByID($id);
		
		$title = false;
		$type = false;
		
		if(isset($_POST["room_update"])){
		    $title = $_POST["title"];
		    $type = $_POST["type"];
		    
    		Room::updateRoom($room["id"],$title,$type);
    		header("Location:/admin/rooms");
		}
		
		
		include_once(DIRNAME.'backend/Room/RoomView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$title = false;
		$type = false;
		
		if(isset($_POST["room_add"])){
		    $title = $_POST["title"];
		    $type = $_POST["type"];
    		
    		Room::addRoom($title,$type);
    		header("Location:/admin/rooms");
		}
		
		include_once(DIRNAME.'backend/Room/RoomAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Room::deleteRoom($id);
    	header("Location:/admin/rooms");
        return true;
    }
}
?>