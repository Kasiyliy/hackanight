<?php
class Course{
    public static function getCourses(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Courses");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$get[$i]["specialty_id"] = $row["specialty_id"];
			
			$i++;
		}
		return $get;
    }
    public static function addCourse($title, $specialty_id){
        $db = DB::getConnection();
		$sql = "INSERT INTO Courses (title, specialty_id) VALUES(:title, :specialty_id)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":specialty_id",$specialty_id,PDO::PARAM_INT);
		
		return $result->execute();
    }
    public static function updateCourse($id,$title, $specialty_id){
        $db = DB::getConnection();
		$sql = "UPDATE Courses SET title = :title, specialty_id = :specialty_id WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":specialty_id",$specialty_id,PDO::PARAM_INT);
		
		return $result->execute();
    }
    public static function getCourseByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Courses WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteCourse($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Courses WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>