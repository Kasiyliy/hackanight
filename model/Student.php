<?php
class Student{
    public static function getStudentByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Students WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
}
?>