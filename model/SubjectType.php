<?php
class SubjectType{
    public static function getSubjectTypes(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM SubjectType");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$get[$i]["subject_id"] = $row["subject_id"];
			$get[$i]["teacher_id"] = $row["teacher_id"];
		
			$i++;
		}
		return $get;
    }
    
    public static function addSubjectType($title , $subject_id,$teacher_id){
        $db = DB::getConnection();
		$sql = "INSERT INTO SubjectType (title, subject_id,teacher_id) VALUES(:title, :subject_id,:teacher_id)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":subject_id",$subject_id,PDO::PARAM_INT);
		$result->bindParam(":teacher_id",$teacher_id,PDO::PARAM_INT);
		
		return $result->execute();
    }
    public static function updateSubjectType($id,$title, $subject_id,$teacher_id){
        $db = DB::getConnection();
		$sql = "UPDATE SubjectType SET title = :title, subject_id = :subject_id,teacher_id= :teacher_id  WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":subject_id",$subject_id,PDO::PARAM_INT);
		$result->bindParam(":teacher_id",$teacher_id,PDO::PARAM_INT);
	
		return $result->execute();
    }
	    public static function getSubjectTypeByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM SubjectType WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteSubjectType($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM SubjectType WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
	
	public static function countSubjectByID($id){
		$db = DB::getConnection();
		$sql = "SELECT COUNT(DISTINCT id) FROM SubjectType WHERE subject_id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->execute();
		return $result->fetch();
	}
}
?>