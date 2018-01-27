<?php
class Specialty{
    public static function getSpecialties(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM specialty");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$i++;
		}
		return $get;
    }
    
    public static function addSpecialty($title){
        $db = DB::getConnection();
		$sql = "INSERT INTO specialty (title) VALUES(:title)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function updateSpecialty($id,$title){
        $db = DB::getConnection();
		$sql = "UPDATE specialty SET title = :title WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function getSpecialtyByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM specialty WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteSpecialty($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM specialty WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>