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
			$i++;
		}
		return $get;
    }
    public static function addCourse($title){
        $db = DB::getConnection();
		$sql = "INSERT INTO Courses (title) VALUES(:title)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function updateCourse($id,$title){
        $db = DB::getConnection();
		$sql = "UPDATE Courses SET Courses = :title WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
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