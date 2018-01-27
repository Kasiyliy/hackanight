<?php
class Stream{
    public static function getStreams(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Streams");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$get[$i]["course_id"] = $row["course_id"];
		
			$i++;
		}
		return $get;
    }
    
    public static function addStream($title , $course_id){
        $db = DB::getConnection();
		$sql = "INSERT INTO Streams (title, course_id) VALUES(:title, :course_id)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":course_id",$course_id,PDO::PARAM_INT);
		
		return $result->execute();
    }
    public static function updateStream($id,$title, $course_id){
        $db = DB::getConnection();
		$sql = "UPDATE Streams SET title = :title, course_id = :course_id  WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":course_id",$course_id,PDO::PARAM_INT);
	
		return $result->execute();
    }
    public static function getStreamByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Streams WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteStream($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Streams WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>