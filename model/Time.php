<?php
class Time{
    public static function getTimes(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Time");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["time"] = $row["time"];
			$i++;
		}
		return $get;
    }
    
    public static function addTime($time){
        $db = DB::getConnection();
		$sql = "INSERT INTO Time (time) VALUES( :time )";
		$result=$db->prepare($sql);
		$result->bindParam(":time",$time,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function updateTime( $id,$time ){
        $db = DB::getConnection();
		$sql = "UPDATE Time SET time = :time WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":time",$time,PDO::PARAM_STR);
		return $result->execute();
    }
    public static function getTimeByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Time WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteTime($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Time WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>