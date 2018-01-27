<?php
class Group{
    public static function getGroups(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Groups");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$get[$i]["stream_id"] = $row["stream_id"];
			$i++;
		}
		return $get;
    }
    public static function addGroup($title,$stream_id){
        $db = DB::getConnection();
		$sql = "INSERT INTO Groups (title,stream_id) VALUES(:title,:stream_id)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":stream_id",$stream_id,PDO::PARAM_INT);
		return $result->execute();
    }
    public static function updateGroup($id,$title,$stream_id){
        $db = DB::getConnection();
		$sql = "UPDATE Groups SET title = :title,stream_id = :stream_id WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":stream_id",$stream_id,PDO::PARAM_INT);
		return $result->execute();
    }
    public static function getGroupByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Groups WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteGroup($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Groups WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>