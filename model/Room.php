<?php
class Room{
    public static function getRooms(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Rooms");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$get[$i]["type"] = $row["type"];
			$i++;
		}
		return $get;
    }
    public static function addRoom($title,$type){
        $db = DB::getConnection();
		$sql = "INSERT INTO Rooms (title,type) VALUES(:title,:type)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":type",$type,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function updateRoom($id,$title,$type){
        $db = DB::getConnection();
		$sql = "UPDATE Rooms SET title = :title,type=:type WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":type",$type,PDO::PARAM_STR);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function getRoomByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Rooms WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteRoom($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Rooms WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>