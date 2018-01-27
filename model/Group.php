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
			$i++;
		}
		return $get;
    }
    public static function addGroup($title){
        $db = DB::getConnection();
		$sql = "INSERT INTO Groups (title) VALUES(:title)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function updateGroup($id,$title){
        $db = DB::getConnection();
		$sql = "UPDATE Groups SET title = :title WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
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