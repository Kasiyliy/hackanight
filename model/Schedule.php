<?php
class Schedule{
    public static function getSchedules(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Schedule");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["week"] = $row["week"];
			$get[$i]["start_time"] = $row["start_time"];
			$get[$i]["end_time"] = $row["end_time"];
			$get[$i]["group"] = $row["group"];
			$get[$i]["teacher_id"] = $row["teacher_id"];
			
			$get[$i]["subject"] = $row["subject"];
			$get[$i]["room"] = $row["room"];
			$get[$i]["type"] = $row["type"];
			$get[$i]["teacher_id"] = $row["teacher_id"];
			$i++;
		}
		return $get;
    }
   
    public static function addSchedule( $week, $start_time, $end_time, $group, $teacher_id, $subject, $room, $type ){
      	$db = DB::getConnection();
		$sql = "INSERT INTO schedule ( week ,  start_time ,  end_time ,  group_id, teacher_id ,  subject ,  room ,  type ) VALUES (  :week, :start_time, :end_time, :group_id,:teacher_id, :subject, :room, :type)";
		$result=$db->prepare($sql);
		$result->bindParam(":week", $week,PDO::PARAM_STR);
		$result->bindParam(":start_time", $start_time,PDO::PARAM_STR);
		$result->bindParam(":end_time", $end_time,PDO::PARAM_STR);
		$result->bindParam(":group_id", $group,PDO::PARAM_STR);
		$result->bindParam(":teacher_id", $group,PDO::PARAM_STR);
		
		$result->bindParam(":subject", $subject,PDO::PARAM_STR);
		$result->bindParam(":room", $room,PDO::PARAM_STR);
		$result->bindParam(":type", $type,PDO::PARAM_STR);
		
		return $result->execute();
    }
    
    public static function updateSchedule( $id, $week, $start_time, $end_time, $group, $teacher_id, $subject, $room, $type ){
        $db = DB::getConnection();
		$sql = "UPDATE schedule SET week=:week , start_time =:start_time ,
		end_time=:end_time , group_id =:group , teacher_id =:teacher_id, subject =:subject , room =:room , type =:type  WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":week",$week,PDO::PARAM_INT);
		$result->bindParam(":start_time",$start_time,PDO::PARAM_INT);
		$result->bindParam(":end_time",$end_time,PDO::PARAM_INT);
		$result->bindParam(":group",$group,PDO::PARAM_INT);
		$result->bindParam(":teacher_id",$teacher_id,PDO::PARAM_INT);
		
		$result->bindParam(":subject",$subject,PDO::PARAM_INT);
		$result->bindParam(":room",$room,PDO::PARAM_INT);
		$result->bindParam(":type",$type,PDO::PARAM_INT);
		return $result->execute();
    }
    
    public static function getScheduleByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Schedule WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteSchedule($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Schedule WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>