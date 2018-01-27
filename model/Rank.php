<?php
class Rank{
    public static function getRanks(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Rank");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$i++;
		}
		return $get;
    }
    public static function addRank($title,$max_student){
        $db = DB::getConnection();
		$sql = "INSERT INTO Rank (title,max_student) VALUES(:title,:max_student)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":max_student",$max_student,PDO::PARAM_INT);
		return $result->execute();
    }
    public static function updateRank($id,$title){
        $db = DB::getConnection();
		$sql = "UPDATE Rank SET title = :title,max_student=:max_student WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":max_student",$max_student,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function getRankByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Rank WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteRank($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Rank WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>