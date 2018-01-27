<?php
class Subject{
    public static function getSubjects(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Subject");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$get[$i]["credit"] = $row["credit"];
			$get[$i]["time"] = $row["time"];
			$i++;
		}
		return $get;
    }
    
    public static function addSubject($title, $credit, $time){
        $db = DB::getConnection();
		$sql = "INSERT INTO Subject (title, credit, time) VALUES(:title, :credit, :time)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":credit",$credit,PDO::PARAM_STR);
		$result->bindParam(":time", $time,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function updateSubject($id,$title, $credit, $time){
        $db = DB::getConnection();
		$sql = "UPDATE Subject SET title = :title, credit = :credit, time = :time WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":credit",$credit,PDO::PARAM_STR);
		$result->bindParam(":time", $time,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function getSubjectByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Subject WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteSubject($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Subject WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>