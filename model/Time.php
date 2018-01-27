<?php
class Time{
    public static function getTimes(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM time");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["start_time"] = $row["start_time"];
			$get[$i]["end_time"] = $row["end_time"];
			
			$i++;
		}
		return $get;
    }
    
    public static function addTime($start_time, $end_time){
        $db = DB::getConnection();
		$sql = "INSERT INTO Time (start_time,end_time) VALUES( :start_time,:end_time )";
		$result=$db->prepare($sql);
		$result->bindParam(":start_time",$start_time,PDO::PARAM_STR);
		$result->bindParam(":end_time",$end_time,PDO::PARAM_STR);
		
		return $result->execute();
    }
    public static function updateTime( $id,$start_time, $end_time ){
        $db = DB::getConnection();
		$sql = "UPDATE Time SET start_time = :start_time,end_time=;end_time  WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":start_time",$start_time,PDO::PARAM_STR);
		$result->bindParam(":end_time",$end_time,PDO::PARAM_STR);
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