<?php
class Teacher{
    public static function getTeachers(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Teachers");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["name"] = $row["name"];
			$get[$i]["surname"] = $row["surname"];
			$get[$i]["rank"] = $row["rank"];
			$i++;
		}
		return $get;
    }
    
    public static function addTeacher($name, $surname, $rank){
        $db = DB::getConnection();
		$sql = "INSERT INTO Teachers (name, surname, rank) VALUES( :name, :surname, :rank)";
		$result=$db->prepare($sql);
		$result->bindParam(":name",$name,PDO::PARAM_STR);
		$result->bindParam(":surname",$surname,PDO::PARAM_STR);
		$result->bindParam(":rank",$rank,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function updateTeacher($id,$name, $surname, $rank){
        $db = DB::getConnection();
		$sql = "UPDATE Teachers SET title = :title, name = :name, surname = :surname, rank = :rank WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":name",$name,PDO::PARAM_STR);
		$result->bindParam(":surname",$surname,PDO::PARAM_STR);
		$result->bindParam(":rank",$rank,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function getTeacherByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Teachers WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteTeacher($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Teachers WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>