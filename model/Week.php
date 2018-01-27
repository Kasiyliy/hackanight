<?php
class Week{
    public static function getWeeks(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM weeks");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$i++;
		}
		return $get;
    }
    public static function addWeeks($title){
        $db = DB::getConnection();
		$sql = "INSERT INTO weeks (title) VALUES(:title)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function updateWeek($id,$title){
        $db = DB::getConnection();
		$sql = "UPDATE weeks SET title = :title WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function getWeekByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM weeks WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteWeek($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM weeks WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>